@extends('layouts.app')
<!-- nav -->

<!-- main div -->
@section('content')


<!-- section div -->

<div class="row align-items-center">
<div class="col-md-2  col-1 d-inline-block vh-100 d-none">
</div>
<div class="col-8">
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-12 m-5">
            <div class="card-columns">
                <div class="card  w3-animate-zoom   w3-yellow w3-center">
                  <div class="card-body">
                    <h2 class="card-title">16
                        <span class="w3-xlarge">
                            ویژگی 
                        </span>
                        شخصیتی
                        </h2>
                  </div>
                </div>
                <div class="card  w3-animate-zoom   p-3 w3-lime">
                  <blockquote class="blockquote mb-0 card-body">
                        <h3 class="text-dark">یکی از
   <br>
                            <span class="w3-xxlarge"> 
                            معتبر ترین
                        </span>
                             تست های روانشناسی</h3>
                    
                  </blockquote>
                </div>
                <div class="card  w3-animate-zoom    w3-red">
                  <div class="card-body w3-center text-dark">
                    <h5 class="text-white">بهترین
                            <span class="w3-xxlarge">
                                    محل کار 
                            </span>
                         شما کجاست؟</h5>
                  </div>
                </div>
                <div class="card  w3-animate-zoom   bg-info text-center p-3 ">
                  <blockquote class="blockquote mb-0 text-white">
                    <h3 class="text-white ">آزمون
                    
                        <span class="w3-xxxlarge">
                        mbti
                    </span>
                    </h3>
                    <footer class="blockquote-footer text-white">
                        <a href="/mbti/index" class="btn btn-danger w3-animate-fading">شروع تست</a>
                      <small>
                        
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card  w3-animate-zoom   text-center">
                  <div class="card-body">
                    <h3 class="card-title">

                      <span class="w3-xlarge">
                      نقاط ضعف
                    </span>
                      شخصیتی شما چیست</h3>
                  </div>
                </div>
             
                <div class="card  w3-animate-zoom   p-3 w3-center w3-deep-purple ">
                  <blockquote class="blockquote mb-0">
                        <h5 class="card-title text-white ">
                                
                           <span class="w3-xlarge"> 
                            بهترین 
                        </span>
                        <span class="w3-xxlarge">
                            شغل
                        </span>
                        <br>
                            برای تو چیست؟

                        </h5>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card  w3-animate-zoom   w3-light-blue ">
                  <div class="card-body">
                    <h5 class="card-title">
                        <span class="w3-xxlarge m-2 p-2">
                        روابط
                    </span>
                        شما با سایر تیپ ها چگونه است </h5>
                  </div>
                </div>
               
</div> 
       </div>
<!-- side div  -->

<!-- footer -->
@endsection


@section('js')
<script type="text/javascript" src="{{asset('./js/home.js')}}"></script>
@endsection
