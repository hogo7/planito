@extends('layouts.app')


                
@section('content')


<div class="row align-items-center m-5">
    <div class="col-lg-2 col-xl-2  d-md-inline-block  ">.</div>
    <div class="col-lg-8 col-xl-8">

<div class="container">
<div class="row justify-content-center m-md-5">
        <div class="col-12 ">
            <div class="card  border-0  bg-white rounded">
                <div class="card-header bg-white display-4 ">ورود</div>
                <div class="card-body  border-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label  text-md-right">ایمیل</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control single-input  @error('email')  is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control single-input  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input float-right " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="" for="remember">
                                  &nbsp; &nbsp;   مرا به یاد داشته باش 
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn_1">
                                    ورود
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        رمز رو فراموش کردید؟!!
                                    </a>
                                @endif
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@section('js')
<script type="text/javascript" src="{{asset('./js/auth.js')}}"></script>
@endsection