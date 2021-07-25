@extends('layouts.app')

@section('content')


<div class="row align-items-center">
<div class="col-lg-2 col-xl-2 d-inline-block vh-100">.</div>
<div class="col-lg-8 col-xl-8">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @isset($messages)
            <?php dd($messages) ?>

            @endisset


            
        @if (count($errors) > 0)
      <div class="alert alert-danger">
        <?php dd($error) ?>

          <ul>
              @foreach ($errors->all() as $error)
              
              <li>{{ $error }}</li>

              @endforeach

          </ul>

      </div>

      @endif
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">نام</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row d-inline">
                            <label for="brith" class="col-md-4 col-form-label text-md-right">تاریخ تولد</label>

                            <div class="col-md-12 d-inline">
                            <div class="col-md-12 d-inline">
                               <input  type="text" class="form-control @error('brith') is-invalid @enderror"placeholder="روز1-31 مثلا: 25" name="birthD" required >
                            </div>
                            <div class="col-md-12 d-inline">
                               <input  type="text" class="form-control @error('brith') is-invalid @enderror"placeholder="سال مثلا : 1375 " name="birthY" required >
                            </div>
                            <div class="col-md-12 d-inline">
                            <input  type="text" class="form-control @error('brith') is-invalid @enderror"placeholder="ماه مثلا :11 " name="birthM" required >
                            </div>

                                @error('birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">جنسیت</label>
                            <div class="col-md-6">
                            <input type="radio" name="gender" class="m-3" value="male">مرد
                            <input type="radio" name="gender"class="m-3" value="female">زن

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">موبایل</label>

                            <div class="col-md-6">
                                <input id="Phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="Phone" required >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">پسورد</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __(' تایید پسورد') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                        

                        <div class="form-group row mb-0 m-3" >

                                <div class="col-md-6 m-3">
                                <a  class="text-info" href="{{route('login')}}">
                                        :) اکانت دارید ؟ بفرمایید تو             
                                </a>
                                    </div>

                            <div class="col-md-3 offset-md-2">
                                <button type="submit" class="btn btn_1">
                                            register
                                </button>
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
