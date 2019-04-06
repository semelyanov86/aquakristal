@if(session('success'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{--                    <div class="card-body">--}}
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{--                </div>--}}

                </div>
            </div>

        </div>

    </div>
@endif
@if($errors->has('phone') or $errors->has('email'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{--                    <div class="card-body">--}}
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>
                        @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                        @if($errors->has('phone'))
                            {{$errors->first('phone')}}
                        @endif
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{--                </div>--}}

                </div>
            </div>

        </div>

    </div>
@endif