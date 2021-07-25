
@extends('layouts.app')

@section('content')


<div class="row align-items-center">
<div class="col-lg-2 col-xl-2  d-md-inline-block  ">.</div>
<div class="col-lg-8 col-xl-8">
<div class="container">
    <div class="row justify-content-center w3-center">
        <div class="col-md-12">




            
        @if (count($errors->all()) > 0)
      <div class="alert alert-danger toast fade show "  role="alert" aria-live="assertive" aria-atomic="true">
          <ul>
              @foreach ($errors->all() as $error)
              
              <li>{{ $error }}</li>

              @endforeach

          </ul>

      </div>

      @endif
            <div class="card m-5">
                <div class="card-header">ثبت نام</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">نام</label>

                            <div class="col-md-6 ">
                                <input id="name" type="text" class=" single-input form-control inputClick @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  >

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
                                <input id="email" type="email" class="single-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row ">
                            <label for="brith" class="col-md-4 col-form-label text-md-right">تاریخ تولد</label>

                            <div class="col-md-6 d-inline">
                            <div class="col-md-6 d-inline">
                               <input  type="text" class="form-control single-input @error('brith') is-invalid @enderror"placeholder="روز1-31 مثلا: 25" name="birthD" required >
                            </div>
                            <div class="col-md-6 d-inline">
                               <input  type="text" class="form-control  single-input @error('birthY') is-invalid @enderror"placeholder="سال مثلا : 1375 " name="birthY" required >
                            </div>
                            <div class="col-md-6 d-inline">
                            <input  type="text" class="form-control single-input @error('brith') is-invalid @enderror"placeholder="ماه مثلا :11 " name="birthM" required >
                            </div>

                                @error('birthY')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">جنسیت</label>
                            <div class="col-md-6">
                            <input type="radio" name="gender" class="m-3  " value="male">مرد
                            <input type="radio" name="gender"class="m-3  " value="female">زن

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
                                <input id="Phone" type="text" placeholder="شماره موبایل با صفر  وارد کن س" class="form-control single-input @error('Phone') is-invalid @enderror" name="Phone" required >

                                @error('Phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">پسورد</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="یک پسورد هشت رقمی " class="form-control single-input @error('password') is-invalid @enderror" name="password" required >

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
                                <input id="password-confirm" type="password" class="form-control single-input" placeholder="دوباره پسورد رو بزن" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                        

                        <div class="form-group row mb-0 m-3" >

                                <div class="col-md-6 m-3">
                                <a  class="text-info" href="{{route('login')}}">
                                        :) اکانت دارید ؟ بفرمایید تو             
                                </a>
                                    </div>

                            <div class="col-md-3 offset-md-2">
                                <button type="submit" class=" btn_1">
                                            ارسال
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

<script>
$(document).ready(function () {
    $('.inputClick').focus(function () { 
        $(this).removeClass('col-md-6');
        $(this).addClass('col-md-12');
        
    });
});

</script>
@endsection
