<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Category;
use App\Post;
use App\Page;
use App\Product;
use Clystnet\Vtiger\Vtiger;
use Clystnet\Vtiger\VtigerError;

class MainController extends Controller
{
    public function welcome()
    {
        $pages = Page::all();
        $posts = Post::where('category_id', 2)->where('status', 'PUBLISHED')->where('featured', 1)->get();
        $latest = Post::where('category_id', 1)->where('status', 'PUBLISHED')->latest()->take(4)->get();
        $products = Product::where('status', 1)->take(4)->get();
        $testimonials = Post::where('category_id', 3)->where('status', 'PUBLISHED')->get();
        return view('welcome', compact('posts'))->with('pages', $pages)->with('products', $products)->with('testimonials', $testimonials)->with('latests', $latest);
    }

    public function showPost(Post $post)
    {
        $pages = Page::all();
        $feature = Post::where('category_id', 1)->where('status', 'PUBLISHED')->where('featured', 1)->first();
        return view('single-blog-post', compact('post'))->with('feature', $feature)->with('pages', $pages);
    }

    public function showPage(Page $page)
    {
        $pages = Page::all();
        $feature = Post::where('category_id', 1)->where('status', 'PUBLISHED')->where('featured', 1)->first();
        return view('single-page-post', compact('page'))->with('feature', $feature)->with('pages', $pages);
    }

    public function blogIndex()
    {
        $pages = Page::all();
        $posts = Post::where('category_id', 1)->where('status', 'PUBLISHED')->latest()->paginate(4);
        return view('blog', compact('posts'))->with('pages', $pages);
    }

    public function aboutUs()
    {
        $pages = Page::all();
        $timelines = Post::where('category_id', 4)->where('status', 'PUBLISHED')->get();
        return view('about-us', compact('pages'))->with('timelines', $timelines);
    }

    public function contacts()
    {
        $pages = Page::all();
        $curParge = Page::whereId(11)->first();
        return view('contacts', compact('pages'))->with('current', $curParge);
    }

    public function showProducts()
    {
        $pages = Page::all();
        $products = Product::where('status', 1)->get();
        $curParge = Page::whereId(10)->first();
        return view('water', compact('products'))->with('pages', $pages)->with('current', $curParge);
    }

    public function career()
    {
        $pages = Page::all();
        $post = Post::whereId(17)->first();
        $curParge = Page::whereId(12)->first();
        return view('careers', compact('pages'))->with('post', $post)->with('current', $curParge);
    }

    public function privacy()
    {
        $pages = Page::all();
        $current = Page::whereId(13)->first();
        return view('privacy-policy', compact('pages'))->with('current', $current);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:255',
            'email' => 'sometimes|required|email',
            'phone' => 'digits_between:5,15',
            'leadsource' => 'required|min:5',
            'assigned_user_id' => 'required|min:3',
            'firstname' => 'sometimes|max:200',
            'description' => 'sometimes|min:10'
//            'g-recaptcha-response' => 'required|captcha',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = array(
            'assigned_user_id' => $request->assigned_user_id,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'firstname' => $request->firstname,
            'description' => $request->description,
            'leadsource' => $request->leadsource
        );
        $vtigerModel = new Vtiger();
        try {
            $vtigerModel->create('Accounts', json_encode($data));
        } catch (VtigerError $ex) {
            echo $ex->getMessage();
        }
        return redirect()->back()->with('success', 'Thanks for contacting with us');
    }
}
