@extends('layouts.app')

@section('content')
<div class="row align-items-center mt-5">
  <div class="col-lg-2 col-xl-2 d-inline-block vh-100">
    .</div>
  <div class="col-lg-8 col-xl-8">
  <main  class="container">
<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-light display-4 ">نتایج</h4>
      </div>
      <div class="card-body">


@isset($info['mbti'])
    


<table class="table text-center col-lg-8 container p-3">
<thead class="text-center">
  <h2 class="card-title ">  نتیجه mbti</h2>
</thead>
<tbody>
  
  <tr>
    <th scope="row">شاخص ها </th>
    <td>J</td>
    <td>P</td>
    <td> </td>
    <td>T</td>
    <td>F</td>
    <td> </td>
    <td>N</td>
    <td>S</td>
    <td> </td>
    <td>I</td>
    <td>E</td>
  </tr>
  <tr>
    <th scope="row">امتیاز ها</th>
    <td class="<?php echo ($info['mbti']['J'] >= $info['mbti']['P'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">
      {{$info['mbti']['J']}}</td>
    <td class="<?php echo ($info['mbti']['P'] >= $info['mbti']['J'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">
      {{$info['mbti']['P']}}</td>
    <td> </td>

    <td class="<?php echo ($info['mbti']['T']>=$info['mbti']['F'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{
    $info['mbti']['T']}} </td>
    <td class="<?php echo ($info['mbti']['F']>=$info['mbti']['T'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{
    $info['mbti']['F']}}</td>
    <td> </td>

    <td class="<?php echo ($info['mbti']['N']>=$info['mbti']['S'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{
    $info['mbti']['N']}}</td>
    <td class="<?php echo ($info['mbti']['S']>=$info['mbti']['N'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{
    $info['mbti']['S']}}</td>
    <td> </td>

    <td class="<?php echo ($info['mbti']['I']>=$info['mbti']['E'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{
    $info['mbti']['I']}}</td>
    <td class="<?php echo ($info['mbti']['E']>=$info['mbti']['I'])?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{
    $info['mbti']['E']}}</td>
  </tr>

  <tr>
    <th>نتیجه </th>
  <td colspan="8">
  {{ $info['mbti']['result']}}
  </td>
  </tr>
  <tr>
    
  <td colspan="8">
      <a href="https://mycdp.ir/{{ $info['mbti']['result']}} " target="_blank">
       درباره شخصیتتون بیشتر بدانید 
      </a> 
        </td>
  </tr>
</tbody>
</table>






<canvas id="mbtiChart" class='container col-md-8'  style=""></canvas>

<br>
<br>
<br>
<br>
@endisset


@isset($info['isu'])








  <table class="table table-light text-center bg-scondary  col-lg-8 container " id="taskTable" height='1vh'>
    <thead class="text-primary ">
      <tr>
        <th scope="col">کار</th>
        <th scope="col">علاقه</th>
        <th scope="col">مهارت</th>
        <th scope="col">ضرورت</th>
      </tr>
    </thead>
    <tbody class="text-dark" >

      @foreach($info['isu'] as $task)
    
      <tr class="border ">
        <th scope="row">{{$task['taskName']}}</th>
        <td class="<?php echo ($task['i']>=7)?'text-success font-weight-bold border border-success rounded m-1':'text-secondary'?>">{{$task['i']}}</td>
        <td class="<?php echo ($task['s']>=7)?'text-primary font-weight-bold border border-primary rounded m-1':'text-secondary'?>">{{$task['s']}}</td>
        <td class="<?php echo ($task['e']>=7)?'text-warning font-weight-bold border border-warning rounded m-1':'text-secondary'?>">{{$task['e']}}</td>
      </tr>
        @endforeach
  </table>






  <canvas id="taskChart" class='container col-lg-8' style=""  > <br> </canvas>

  <br>
  <br>
  <br>
  <br>

  <br>
  <br>
  <br>
  <br>

  <br>
  <br>
  <br>
  <br>



      <div class="caerd-title">
        <h1> علاقه مهارت</h1>
      </div>
  <canvas id="ChartIS" class='container col-lg-8' style=" "></canvas>


    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>


    <div class="caerd-title">
      <h1> علاقه ضرورت</h1>
    </div>
    <canvas id="ChartIE" class='container col-lg-8' style=" "></canvas>






    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>


    <div class="caerd-title">
      <h1> ضرورت مهارت</h1>
    </div>
    <canvas id="ChartSE" class='container col-lg-8' style=" "></canvas>

    @endisset



</div>


<script type="text/javascript">

  let data = {!! json_encode($info) !!};

    console.log(data.task);

</script>
    

  





<br>
  </div>
</main>
</div>
</div>

@endsection


@section('js')
<script type="text/javascript" src="{{asset('./js/randomColor.js')}}"></script>
<script type="text/javascript" src="{{asset('./js/mbtiChart.js')}}"></script>
@endsection
