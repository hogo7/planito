@extends('layouts.app')


@section('content')

<main class="container">
<div class="card mb-4 shadow-lg">
      <div class="card-header">
        <h4 class="my-0 font-weight-light display-4 text-center">آزمون
          mbti</h4>
      </div>

      <div class="card-body text-left " id="q1">
        <p class="lead ">وقتی شما با گروهی از ادم ها هستید معمولا ترجیح میدهید</p>
        <button type="button" class="btn btn-block  btn-primary  E" >الف ) به مبحث مورد بحث در <br> گروه ملحق میشوید</button>
       <br> <br>
        <button type="button" class="btn btn-block  btn-primary  I" >ب ) به تنهایی با یکی از افرادی که<br> به خوبی میشناسید  صحبت میکنید</button>

        <p class="text-mute text-center">1/20</p>
      </div>

      <div class="card-body text-left "  style="display:none;" id="q2" >
        <p class="lead ">شما  با کدام افراد بهتر کنار میایید</p>
        <button type="button" class="btn btn-block  btn-primary  S" >الف ) افراد واقع‌بین </button>
       <br><br>
        <button type="button" class="btn btn-block  btn-primary  N" >ب   )افراد خیال پرداز</button>

        <p class="text-mute text-center">2/20</p>
      </div>


      <div class="card-body text-left " style="display:none; " id="q3" >
        <p class="lead ">کدام صفت بیشتر با شما جور در میاید </p>
        <button type="button" class="btn btn-block  btn-primary T " >الف) تجزیه و تحلیل  </button>
       <br><br>
        <button type="button" class="btn btn-block  btn-primary  F" >ب  ) همدردی</button>

        <p class="text-mute text-center">3/20</p>
      </div>


      <div class="card-body text-left " style="display:none;" id="q4">
        <p class="lead "> دنبال کردن یک برنامه مشخص </p>
        <button type="button" class="btn btn-block  btn-primary  J" >ٰالف ) با شما همخوانی دارد</button>
       <br><br>
        <button type="button" class="btn btn-block  btn-primary  P" >ب   ) شما تحت فشار میگذارد </button>

        <p class="text-mute text-center">4/20</p>
      </div>

      <div class="card-body text-left " style="display:none; "  id="q5">
        <p class="lead ">ملاقات با یک غریبه برای شما </p>
        <button type="button" class="btn btn-block  btn-primary  E" >الف ) رضایت بخش یا خیلی ساده است </button>
       <br> <br>
        <button type="button" class="btn btn-block  btn-primary  I" > ب   ) چیزی که نیاز به تلاش بسیاری دارد</button>

        <p class="text-mute text-center">5/20</p>
      </div>


      <div class="card-body text-left   " style="display:none;" id="q6">
        <p class="lead "> اگر یک معلم بودین ترجیح میدادید که </p>
        <button type="button" class="btn btn-block  btn-primary  S" >الف )    درس هایی که دارای حقایق هستند</button><br><br>
        <button type="button" class="btn btn-block  btn-primary  N" >ب  )درس هایی که شامل تئوری ها نیز هست </button>

        <p class="text-mute text-center">6/20</p>
      </div>




      <div class="card-body text-left   " style="display:none;  " id="q7">
        <p class="lead "> کدام صفت بیشتر با شما جور در میاید</p>
        <button type="button" class="btn btn-block  btn-primary  T" > الف) آینده نگری </button><br><br>
        <button type="button" class="btn btn-block  btn-primary  F" > ب  ) رحم و شفقت - دلسوزی</button>

        <p class="text-mute text-center">7/20</p>
      </div>




      <div class="card-body text-left   " style="display:none;  " id="q8">
        <p class="lead "> شما ترجیح میدهید</p>
        <button type="button" class="btn btn-block  btn-primary  J" >الف ) قرار ملاقات ، مهمونی و . . .   را به  حرفه ای ترین شیوه <br> ممکن برگزار شود یا </button><br><br>
        <button type="button" class="btn btn-block  btn-primary  P" >ب   )ازاد باشید ،هر کار جالبه<br> انجام بدید، هر وقت حسش بود </button>

        <p class="text-mute text-center">8/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;  " id="q9">
        <p class="lead ">شناخت شما</p>
        <button type="button" class="btn btn-block  btn-primary  E" >الف ) راحت است </button>
       <br> <br>
        <button type="button" class="btn btn-block  btn-primary  I" >ب   ) خیلی سخت است</button>

        <p class="text-mute text-center">9/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;  " id="q10">
        <p class="lead ">شما کسی را می ستایید که </p>
        <button type="button" class="btn btn-block  btn-primary  S" >الف) قضاوت صحیح داشته باشد</button><br><br>
        <button type="button" class="btn btn-block  btn-primary  N" >ب)  تصور قوی داشته باشد </button>

        <p class="text-mute text-center">10/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;   " id="q11">
        <p class="lead "> کدام کلمه بیشتر با شما جور در میاید</p>
        <button type="button" class="btn btn-block  btn-primary  T" >الف) استواری - استحکام</button><br><br>
        <button type="button" class="btn btn-block  btn-primary  F" >ب  ) ملایمت </button>

        <p class="text-mute text-center  ">11/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;   " id="q12">
        <p class="lead "> ایده درست کردن لیست  برای کارهای اخر هفته  </p>
        <button type="button" class="btn btn-block  btn-primary  J" >الف) با شما همخوانی دارد</button><br><br>
        <button type="button" class="btn btn-block  btn-primary  P" >ب  )  با شما همخوانی ندارد </button>
        <p class="text-mute text-center">12/20</p>
      </div>


      <div class="card-body text-left   " style="display:none;   " id="q13">
        <p class="lead ">شما ترجیح میدهید</p>
        <button type="button" class="btn btn-block  btn-primary  E" >  الف) دوستی سطحی با ادم های متفاوت و بسیار زیاد  </button>
        <br> <br>
        <button type="button" class="btn btn-block  btn-primary  I" > ب )  دوستی عمیق با ادم های بسیار اندک</button>

        <p class="text-mute text-center">13/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;   " id="q14">
        <p class="lead "> شما ترجیح میدهید که دوست شما کسی باشد که </p>
        <button type="button" class="btn btn-block  btn-primary  S" >الف) بسیار واقع گرا است </button><br><br>
        <button type="button" class="btn btn-block  btn-primary  N" >ب  ) همیشه ایده ای در سر دارد</button>

        <p class="text-mute text-center">14/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;   " id="q15">
        <p class="lead "> کدام مورد بیشتر با شما جور در می اید</p>
        <button type="button" class="btn btn-block  btn-primary  T" > الف) فکر کردن </button><br><br>
        <button type="button" class="btn btn-block  btn-primary  F" >ب  )  حس کردن </button>
        <p class="text-mute text-center">15/20</p>
      </div>

    <div class="card-body text-left   " style="display:none;   " id="q16">
        <p class="lead "> وقتی همه چی برنامه ریزی شده  جوری که در زمان مشخص کار مشخصی رو انجام میدهید این برای شما </p>
        <button type="button" class="btn btn-block  btn-primary  J" >الف) خوبه که میتوان بر این اساس  <br> برنامه ریزی کرد </button><br><br>
        <button type="button" class="btn btn-block  btn-primary  P" >ب  )  این کار برایم کمی نا خوشایند است </button>

        <p class="text-mute text-center ">16/20</p>
      </div>


      <div class="card-body text-left   " style="display:none;   " id="q17">
        <p class="lead ">در مهمونی شما</p>
        <button type="button" class="btn btn-block  btn-primary  E" >الف) همیشه خوش میگذرانید</button>
       <br> <br>
        <button type="button" class="btn btn-block  btn-primary  I" >ب  ) بعضی اوقات حوصله تون سر میره </button>

        <p class="text-mute text-center ">17/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;  " id="q18">
        <p class="lead ">  شما ترجیح میدهید که  </p>
        <button type="button" class="btn btn-block  btn-primary  S" >الف) یک شخص عملگرا شناخته بشید</button><br><br>
        <button type="button" class="btn btn-block  btn-primary  N" >ب  ) یک شخص  باهوش</button>

        <p class="text-mute text-center">18/20</p>
      </div>

      <div class="card-body text-left   " style="display:none;   " id="q19">
        <p class="lead "> کدام تعریف بهتری هست </p>
        <button type="button" class="btn btn-block  btn-primary  T" >الف) یک فرد دایما منطقی </button><br><br>
        <button type="button" class="btn btn-block  btn-primary  F" >ب  ) یک فرد با احساس </button>

        <p class="text-mute text-center">19/20</p>
      </div>


      <div class="card-body text-left   " style="display:none;" id="q20">
        <p class="lead "> کدام برای شما سخت تر است</p>
        <button type="button" class="btn btn-block  btn-primary  J" >الف)  دائما در  تقییر باشید</button><br><br>
        <button type="button" class="btn btn-block  btn-primary  P" >ب  )  در روزمرگی و وضعیت ثابت باشید </button>

        <p class="text-mute text-center">20/20</p>
      </div>




      <div class="card-body container" style="display:none;  " id="q21">
        <h3>شما یک </h3>
       <br><br>
       <p class="lead result text-center font-weight-bold"></p>
       <p class="text-right">هستید</p>

      <form action="{{route('mbtipost')}}" method="post">

      <input type="text" name="Eres" class="Eres" style="display:none;" value='null'>
      <input type="text" name="Ires" class="Ires" style="display:none;" value='null'>
      <input type="text" name="Nres" class="Nres" style="display:none;" value='null'>
      <input type="text" name="Pres" class="Pres" style="display:none;" value='null'>
      <input type="text" name="Sres" class="Sres" style="display:none;" value='null'>
      <input type="text" name="Fres" class="Fres" style="display:none;" value='null'>
      <input type="text" name="Tres" class="Tres" style="display:none;" value='null'>
      <input type="text" name="Jres" class="Jres" style="display:none;" value='null'>
      <input type="text" name="result" class="mbtiResult" style="display:none;" value='null'>
      <input type="submit" class="btn-block btn-success" value="ارسال">
      @csrf
    </form>





      </div>


    </div>






  </main>


@endsection



@section('js')
<script type="text/javascript" src="{{asset('./js/mbti.js')}}"></script>
@endsection
 <!--
        <button type="button" class="btn btn-block btn-primary  E" ></button>
        <button type="button" class="btn btn-block btn-primary  I" ></button>

        <button type="button" class="btn btn-block btn-primary  S" ></button>
        <button type="button" class="btn btn-block btn-primary  N" ></button>

        <button type="button" class="btn btn-block btn-primary  T" ></button>
        <button type="button" class="btn btn-block btn-primary  F" ></button>

        <button type="button" class="btn btn-block btn-primary  P" ></button>
        <button type="button" class="btn btn-block btn-primary  J" ></button>

-->
