<html>
    <head>
        <title>CUI Wah- @yield('title')</title>
    </head>
    <body>
        @section('header')
             <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"style="background-color:purple">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/COMSATS_new_logo.jpg"height=100% width=50%>
            </div>  
            <div class="col-sm-10" style="background-color:purple">
            <h1 style="color:white"><b>COMSATS</b> UNIVERSITY ISLAMABAD, WAH CAMPUS</h1>
        </div>
        </div>
        @show
        @section('navbar')
         <div class="container-fluid"style="background-color:#AF85C5">
        <div class="row">
                <div class="col-sm-3">
                <a href="{{ url('/home') }}"><h1>Home</h1></a>
                </div>
                <div class="col-sm-3">
                <a href="{{ url('/contact') }}"><h1>Contact</h1></a>      
                </div>
                <div class="col-sm-3">
                <a href="{{ url('/about') }}"><h1>About</h1></a>      
                </div>
                <div class="col-sm-3">
                <a href="{{ url('/feedback') }}"><h1>Feedback</h1></a>      
                </div>
        </div>  
</div>

@show
    </body>
</html>