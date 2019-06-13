@include('admin.header')
        <!DOCTYPE html>
<html>
<head>
    <title>Our System</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <style>
        a{
            color: #ffffff;
            text-align: center;
        }
        .container-fluid1{
            width: auto;
            height: 150px;
            border: solid aquamarine 0px;
            padding: 0px;
            margin: 0px;
        }
        .container-fluid2{
            width: auto;
            height: auto;
            border: solid aquamarine 0px;
            padding: 0px;
            margin: 0px;
        }
        .container-fluid3{
            width: auto;
            height: 600px;
            border: solid aquamarine 0px;
            padding: 0px;
            margin: 0px;
        }
        .container-fluid4{
            width: auto;
            height: 600px;
            border: solid aquamarine 0px;
            padding: 0px;
            margin: 0px;
        }
    </style>
    <style type="text/javascript" src="{{url('js\jquery-3.1.0.js')}}"></style>
    <style type="text/javascript" src="{{url('js\bootstrap.js')}}"></style>
    <style type="text/javascript" src="{{url('')}}"></style>
</head>
<body>
<div class="container-fluid">
    <div class="row text-center">
        <div class="col col-md-2 ">
            <div class="container-fluid2 bg-primary">
                <div class="row">
                    <a class="nav-link " href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <hr>
                </div>
                <div class="row text-center btn btn-block ">
                    <a href="{{url('')}}">staff</a>
                    <hr>
                </div>
                <div class="row btn-block ">
                    <a href="{{url('')}}">student</a>
                    <hr>
                </div>
                <div class="row text-center btn-block">
                    <a href="{{url('')}}">settings</a>
                    <hr>
                </div>
                <div class="row text-center btn-block">
                    <a href="{{url('')}}">school</a>
                    <hr>
                </div>
                <div class="row text-center btn-block">
                    <a href="{{url('')}}">parents</a>
                    <hr>
                </div>
            </div>
        <!--<ul>
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr>
    <li>
        <a href="{{url('')}}">staff</a>
    </li>
    <hr>
    <li>
        <a href="{{url('')}}">student</a>
    </li>
    <hr>
    <li>
        <a href="{{url('')}}">settings</a>
    </li>
    <hr>
</ul>-->
        </div>
        <div class="col col-md-10 bg-light">
            <div class="container-fluid1 bg-danger">
                <p>welcome back here</p>
            </div>
            <!--<div class="row bg-dark ">
                <p>welcome back here</p>
            </div>-->
            <div class="row">
                <div class="col-md-9 " >
                    <div class="container-fluid3 bg-success">
                        <p>thanks</p>
                    </div>
                </div>
                <div class="col-md-3 bg-info" >
                    <div class="container-fluid4 bg-gray-500">
                        <p>thanks fam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
