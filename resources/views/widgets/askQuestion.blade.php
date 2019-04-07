<div class="section-sm section-bottom-0">
    <h3>@lang('app.ask-question')</h3>
    <!-- RD Mailform-->
    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('store')}}">
        @csrf
        <input type="hidden" name="leadsource" value="Форма обратной связи">
        <input type="hidden" name="assigned_user_id" value="4x1">
        <div class="row row-10">
            <div class="col-md-6">
                <div class="form-wrap {{$errors->has('firstname') ? 'has-error' : ''}}">
                    <label class="form-label-outside" for="comment-first-name">@lang('app.first-name')</label>
                    <input class="form-input" id="comment-first-name" type="text" name="firstname" data-constraints="@Required">
                    @if($errors->has('firstname'))
                        <div>
                            <span class="form-validation">{{$errors->first('firstname')}}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap {{$errors->has('lastname') ? 'has-error' : ''}}">
                    <label class="form-label-outside" for="comment-last-name">@lang('app.last-name')</label>
                    <input class="form-input" id="comment-last-name" type="text" name="lastname" data-constraints="@Required">
                    @if($errors->has('lastname'))
                        <div>
                            <span class="form-validation">{{$errors->first('lastname')}}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap {{$errors->has('email') ? 'has-error' : ''}}">
                    <label class="form-label-outside" for="comment-email">E-mail</label>
                    <input class="form-input" id="comment-email" type="email" name="email" data-constraints="@Email @Required">
                    @if($errors->has('email'))
                        <div>
                            <span class="form-validation">{{$errors->first('email')}}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap {{$errors->has('phone') ? 'has-error' : ''}}">
                    <label class="form-label-outside" for="comment-phone">@lang('app.phone')</label>
                    <input class="form-input" id="comment-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                    @if($errors->has('phone'))
                        <div>
                            <span class="form-validation">{{$errors->first('phone')}}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <div class="form-wrap {{$errors->has('description') ? 'has-error' : ''}}">
                    <label class="form-label-outside" for="comment-message">@lang('app.your-message')</label>
                    <textarea class="form-input" id="comment-message" name="description" data-constraints="@Required"></textarea>
                    @if($errors->has('description'))
                        <div>
                            <span class="form-validation">{{$errors->first('description')}}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <button class="button button-primary button-winona" type="submit">@lang('app.send-message')</button>
    </form>
</div>