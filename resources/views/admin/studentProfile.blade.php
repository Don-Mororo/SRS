<!DOCTYPE HTML>
<html>
<head>
    <title> Student Profile</title>
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
    <div class="class-middle">
        <div class="container-fluid">
<div class="row">
    <div class="navbar-nav  bg-blue">
        Particulars<br>
        Particulars<br>
        Particulars<br>
    </div>
</div>
            <div class="register-box">
                <!div class="register-box-body">
    <form id="gradeAssigner" class="form-horizontal" action="{{url('')}}" method="post">
        {{ csrf_field() }}

        <div class="row form-group">

            <div class="col-md-6">
                 <label for="gradeSelector">Grade:</label>
                <select class="form-control" id="gradeSelector">
                    @if(count($grades)>0)
                        @foreach($grades->all() as $grades )
                            <option>{{$grades->grade}}</option>
                        @endforeach
                    @endif
<option></option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="streamSelector">Stream:</label>
                <select class="form-control" id="streamSelector">
                        <option>{{$grades->stream}}</option>
                </select>
            </div>

        </div>

        <div class="row form-group">
            <div class="col offset-10" >
                <button class="form-control btn-info btn-block btn-sm" value="Save">Send</button>
            </div>
        </div>
    </form>
                </div>
            </div>
</div>
            <div class="register-box">
                <div class="register-box-body">
                    <form id="chatBox" class="form-horizontal" action="{{url('/Student Profile')}}" method="post">
                        {{ csrf_field() }}
                        <fieldset>
                            <p class="register-box-msg">Chat Room</p>
                            <div class="row ">
                                    <textarea type="textarea" id="message" placeholder="type remark" class="form-control"></textarea>
                          </div>
                            <div class="row form-group">
                                <div CLASS="col offset-10" >
                                    <button class="form-control btn-info btn-block btn-sm" value="Save">Send</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>