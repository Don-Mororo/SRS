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
            hello world
        </ul>

    <!-- table of available classes-->
    <div class="class-middle">
        <div class="container-fluid" style=" height: fit-content;" aria-expanded="true" aria-controls="collapseUtilities">
            <div class="row">
                <table class="table table-striped table-hover table-sm">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Stream</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                  @if(count($grades)>0)
                        @foreach($grades->all() as $grades)
                            <tr class="table-active">
                                <th scope="row">{{$grades->id}}</th>
                                <td>{{$grades->grade}}</td>
                                <td>{{$grades->stream}}</td>
                                <td>
                                    <a href='{{url("classes/{$grades->id}/view")}}' class="btn btn-sm btn-primary">View </a>|
                                    <a href='{{url("/update/{$grades->id}")}}' class="btn btn-sm  btn-success">Update </a>|
                                    <a href='{{url("/delete/{$grades->id}")}}' class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Register the classes-->
<div class="container-fluid " style=" height: fit-content; margin-top: 10px" aria-expanded="true" aria-controls="collapseUtilities">
    <form method="post" action="{{url('/addClass')}}">
        {{ csrf_field() }}
        <div class="row form-group form-horizontal">
            <div class="col  ">
                <label class="label">ID: </label>
                <input type="text" placeholder="ID" class="form-control" name="id">
            </div>
            <div class="col ">
                <label class="label">class: </label>
                <input type="text" placeholder="grade" class="form-control" name="grade" >
            </div>
            <div class="col ">
                <label class="label">Stream: </label>
                <input type="text" placeholder="stream" class="form-control" name="stream">
            </div>
        </div>
        <div class="row ">
            <div class="col offset-10">
                <input type="submit" class="btn btn-sm btn-info" value="Register Class">
            </div>
        </div>
    </form>
</div>

    </div>

</div>

</body>
</html>