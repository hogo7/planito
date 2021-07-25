@extends('layouts.app')
<!-- nav -->

<!-- main div -->
@section('content')


<!-- section div -->

<div class="row align-items-center">
<div class="col-md-2  col-1 d-inline-block vh-100 d-none">
</div>
<div class="col-md-8 col-10">
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-12 ">
      
        @switch($info['lastClass'])
    
    @case('mbti')
    <div class="card shadow rounded-lg p-3 border-0 " id="card_4">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"> تبریک  </h3>
                <div class="card-body text-justify text-center border-0">
                  <p> مثل اینکه معلوم شد <a href="https://mycdp.ir/{{$info['mbti']}}/" target="_blank">{{$info['mbti']}}</a> هستی میتونی ازمون رو ادامه بدی یا بری ببینی خصوصیاتت چیاست</p>
                  <a class="btn_1 mt-2 nextC">بعدی</a>
                </div>
            </div>
        @break
    @case('tasks')
    <div class="card shadow rounded-lg p-3 border-0 " id="card_6">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"> خدا قوت D: </h3>
                <div class="card-body text-justify text-center border-0">
                  <p> خوب اینم جایزه ات یک عالمه نمودار باحال روش تفسیر رو میتونی تو
                  <a href="http://ferdowsiacademy.ir/fasl2/"> بلاگ مون بخونی </a>
                     یا وقت 
                  <a href="http://ferdowsiacademy.ir/advice/"> مشاوره بگیری </p>
                  
                  <ul>
                    <li></li>
                  </ul>
                <a class="btn_1 mt-2 nextC" href="{{route('chart')}}" >chart</a>
                </div>
            </div>
            @break

    @default
    <div class="card shadow rounded-lg p-3 border-0 " id="card_1">
            <h3 class="card-title justify-content-center text-justify font-weight-lighter text-center"> سلام  {{ Auth::user()->name }} 
             خوش اومدی </h3>
              <div class="card-body text-justify text-center border-0">
                <p> این یک برنامه روانشناسی که به مراجعه گر کمک میکنه بهتر تست بده و معلاجه گر کمک میکنه بهتر بشناست  همین </p>
                <a class="btn_1 mt-2 nextC"  >بعدی</a>
              </div>
          </div>
@endswitch            
            
                        
            <!-- card2 -->
            <div class="card shadow rounded-lg p-3 border-0 " id="card_2" style="display:none">
                <h3 class="card-title justify-content-center text-justify font-weight-lighter text-center"> آزمون ها </h3>
                <div class="card-body text-justify text-center border-0">
                  <p>خب چنتا آزمون باید بدی  پس یک لیوان اب کنارت دستت باشه که خسته شدی بخوریش  استراحت کن  و وقت بزار  </p>
                  <a class="btn_1 mt-2 nextC">>></a>
                </div>
            </div>
            <!-- card3 -->
            <div class="card shadow rounded-lg p-3 border-0 " id="card_3" style="display:none">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"> ازمون اول MBTI </h3>
                <div class="card-body text-justify text-center border-0">
                  <p> این ازمون در 4 تقابل برسی میشه  </p>
                  <ul>
                  <li>درونگرایی/برونگرایی</li>
                  <li>شهودی/حسی</li>
                  <li>احساسی/منطقی</li>
                  <li>ادراکی / قضاوتی </li>
                  </ul>
                  اگر خودت رو نمیشناسی نتیجه ازمون رو حتما ببین جالبه 
                  <a class="btn_1 mt-2 nextC" href="mbti/index" >>></a>
                </div>
            </div>
            <!-- card4 -->
            <div class="card shadow rounded-lg p-3 border-0 " id="card_5" style="display:none">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"> I S U ازمون </h3>
                <div class="card-body text-justify text-center border-0">
                  <p>  یک ازمون 40 سوالی مشخص میکنه که 
                    علاقه تون چیه و چقدر مهارت دارین و چه کار های براتون اولویت داره 
                   </p>
                    
                  <ul>
                    <li></li>
                  </ul>
                  <a class="btn_1 mt-2"  href="tasks/index">بعدی</a>
                </div>
            </div>


        <!-- card5 -->



        <div class="card shadow rounded-lg p-3 border-0 " id="" style="display:none">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"> آزمون mbti </h3>
                <div class="card-body text-justify text-center border-0">
                  <p>  خب خب خب بیا ببینیم چجوری هستی ویژگی های شخصیتیت چیه </p>
                    
                  <ul>
                    <li></li>
                  </ul>
                  <a class="btn_1 mt-2 nextC"  >بعدی</a>
                </div>
            </div>


            <div class="card shadow rounded-lg p-3 border-0 " id="card_7" style="display:none">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"></h3>
                <div class="card-body text-justify text-center border-0">
                  <p>  خب خب خب بیا ببینیم چجوری هستی ویژگی های شخصیتیت چیه </p>
                    
                  <ul>
                    <li></li>
                  </ul>
                  <a class="btn_1 mt-2 nextC"  >بعدی</a>
                </div>
            </div>



            <div class="card shadow rounded-lg p-3 border-0 " id="card_8" style="display:none">
                <h1 class="card-title justify-content-center text-justify font-weight-lighter text-center"> آزمون mbti </h3>
                <div class="card-body text-justify text-center border-0">
                  <p>  خب خب خب بیا ببینیم چجوری هستی ویژگی های شخصیتیت چیه </p>
                    
                  <ul>
                    <li></li>
                  </ul>
                  <a class="btn_1 mt-2 nextC"  >بعدی</a>
                </div>
            </div>
        
        </div>
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
