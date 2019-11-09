<!DOCTYPEhtml>
<html>
@extends('layout')

@section('title', 'Home')

@section('header')
    @parent

@endsection

<head>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"style="background-color:#AF85C5">
        <div class="row">
            <div class="col-sm-12">
                <h1><b>Feedback</b></h1>
                Your Name<br>
                <input type="text"placeholder="Your Name"size=100><br>
                Phone No <br>
                <input type="text"placeholder="Phone No"size=100><br>
                Email <br>
                <input type="email"placeholder="Email"size=100><br>
                Subject <br>
                <input type="text"placeholder="Subject"size=100><br>
                Feedback <br>
                <input type="text"placeholder="Feedback"size=100><br>

            </div>
        <div class="row">
            <div class="col-sm-6">
            <button style="align:center">Submit</button>
            </div>
        </div>
        </div>
    
    </div>
</body>
</html>