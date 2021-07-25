@extends('./layouts/adminLayout')

@section('content')

<div class="row mt-5">
    <nav class="col-md-4 h-100 d-inline-block">
        .
        <br>
        .
    </nav>
    </div>
    <div class="row mt-5">
        <nav class="col-md-4 h-100 d-inline-block">
            .
            <br>
            .
        </nav>
        </div>
        <div class="continer center">
            <div class="w3-responsive">

            <table class="w3-table-all m-5 ">
                    <tr>
                        <th> نام         </th>
                        <th>شماره تماس  </th>
                        <th>ایمیل       </th>
                        <th>تولد        </th>
                        <th>جنسیت       </th>
                        <th>تست mbti    </th>
                        <th>تست ع م ض   </th>
                        <th>چارت        </th>
                        </tr>

            @foreach ($users as $user)
            <tr>
                    <td>    {{$user->name}}         </td>
                    <td>    {{$user->PhoneNumber}}  </td>
                    <td>    {{$user->email}}        </td>
                    <td>    {{$user->birthDate}}    </td>
                    <td>    {{$user->gender}}       </td>
                    @isset($status)
                    <td> <p><span class="w3-tag"> {{($status[$user->id-1]->mbtiStatus==1)? 'زده' :'نزده'}} </span></p></td>
                    <td> <p><span class="w3-tag"> {{($status[$user->id-1]->taskStatus==1)? 'زده' :'نزده'}} </span></p></td>
                    @endisset
                    @isset($notSys)
                    <td> <p><span class="w3-tag"> نزده</span></p></td>
                    <td> <p><span class="w3-tag"> نزده</span></p></td>
                    @endisset
            <td><a href="/admin10101/chart/{{$user->id}}" class="btn btn-primary ">چارت</a> </td>                        
                    </td>
                </tr>
            @endforeach            
            </table>
            <div class="w3-bar w3-center mb-5">
                    @for ($i = 0; $i < $pages; $i++)
                    <a href="/admin10101/userlist/{{$i}} " class="w3-button w3-hover-orange {{($i==$curentPage)?"w3-yellow":" "}} "> {{$i}} </a>
                    @endfor
                  </div> 

            </div> 
        </div>


@endsection