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
                        <th scope="col">Title</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Name</th>
                        <th scope="col">Other names</th>
                        <th scope="col">address</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($teachers)>0)
                        @foreach($teachers->all() as $teachers)

                            <tr class="table-active">
                                <th scope="row">{{$teachers->id}}</th>
                                <td>{{$teachers->gender}}</td>
                                <td>{{$teachers->last_name}}</td>
                                <td>{{$teachers->first_name}}</td>
                                <td>{{$teachers->other_name}}</td>
                                <td>{{$teachers->address}}</td>
                                <td>{{$teachers->phone1}}</td>
                                <td>{{$teachers->email}}</td>
                                <td>
                                    <a href='{{url("/staff/{$teachers->id}/view")}}' class="btn btn-sm btn-primary">View </a>|
                                    <a href='{{url("/update/{$teachers->id}")}}' class="btn btn-sm  btn-success">Update </a>|
                                    <a href='{{url("/delete/{$teachers->id}")}}' class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>