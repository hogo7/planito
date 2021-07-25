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
                        <th>نام</th>
                        <th>نام کاربری</th>
                        <th>سطح دسترسی</th>
                        <th>ایمیل</th>    
                        <th>کنترل ها</th>
                    </tr>

                    @foreach ($users as $user)
            <tr>
                    <td>{{$user->name}}</td>
                    <td> {{$user->userName}} </td>
                    <td> {{$user->accessLevel}}</td>
                    <td> {{$user->email}}</td>
                    <td>
                   @if ($user->accessLevel=='root')
                   <a href="/admin10101/admin/update" class="btn btn-primary">ویرایش</a>
                   @else
                   <a href="/admin10101/admin/update" class="btn btn-primary">ویرایش</a>
                   <a href="/admin10101/admin/delete" class="btn btn-danger">حذف</a> </td>
                   @endif
            @endforeach            
                    
        </tr>
        <td><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green">+</button></td>
            </table>
            <div class="w3-bar w3-center mb-5">
                    @for ($i = 0; $i < $pages; $i++)
                    <a href="/admin10101/userlist/{{$i}} " class="w3-button w3-hover-orange {{($i==$curentPage)?"w3-yellow":" "}} "> {{$i}} </a>
                    @endfor
                  </div> 

            </div> 
            {{-- modal --}}
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            
                  <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                  </div>
            
                  <form class="w3-container" action="/action_page.php">
                    <div class="w3-section">
                      <label><b>Username</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
                      <label><b>Password</b></label>
                      <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
                      <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
                    </div>
                  </form>
        </div>


@endsection