@include('admin.header')

        <!DOCTYPE HTML>
<html>
<head>
    <title>Classes Management</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/sb-admin-2.css')}}">
    <style type="text/javascript" src="{{url('js\jquery-3.1.0.js')}}"></style>
    <style type="text/javascript" src="{{url('js\bootstrap.js')}}"></style>
    <style type="text/javascript" src="{{url('')}}"></style>
</head>
<body>
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
       Staff profile
    </ul>

    <!-- table of available classes-->
    <div class="class-middle">
        <div class="container-fluid" style=" height: fit-content;" aria-expanded="true" aria-controls="collapseUtilities">
            <div class="row">
                <p>{{$teacher->first_name}}</p>
                <p>{{$teacher->last_name}}</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>