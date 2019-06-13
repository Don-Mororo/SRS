@include('admin.header')
<!DOCTYPE html>
<html>
<head>
    <title>Parents Management</title>
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
    <div class="class-middle">
        <div class="container-fluid">
            <!-- Start of guardians info-->
                    <div class="register-box">
                        <div class="register-box-body">
                            <form id="student_SelfInfo" class="form-horizontal" action="{{url('/studentsProfile')}}" method="post">
                                {{ csrf_field() }}
                                <fieldset>
                                    <p class="register-box-msg">Parent/Guardian's Personal Information</p>
                                    <div class="row ">
                                        <div class="col-md-2 form-group">
                                            <label>Title: </label>
                                            <!--input type="text" placeholder="firstname" class="form-control-sm" id="student_Fname"-->
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <select name="Title" class="form-control custom-select-sm">
                                                <option value="MR.">MR.</option>
                                                <option value="MISS">MISS</option>
                                                <option value="MRS.">MRS.</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label class="label">Surname: </label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input type="text" placeholder="surname" class="form-control input-sm" name="parent_surname">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label class="label">First Name: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="firstname" class="form-control input-sm" name="parent_Fname">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label">Other Names: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="lastname" class="form-control input-sm" name="parent_Mname">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label class="label" >Relation: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control input-sm" placeholder="Brother" name="parent_Relation">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label">Date of Birth: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control input-sm" name="parent_DOB">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label class="label">Email: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" placeholder="xyz@abc.dce" class="form-control input-sm" name="parent_Email">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label">Permanent Address: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="SINZA, DSM" class="form-control input-sm" name="parent_Address">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label class="label">Phone Number: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="0-XXX-XXX-XXX" class="form-control input-sm" name="parent_Phone1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label">Alternative Number: </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="0-XXX-XXX-XXX" class="form-control input-sm" name="parent_Phone2">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div CLASS="col offset-10" >
                                            <button class="form-control btn-info btn-block" value="Save">Save</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!--End of guardian's info-->
        </div>
    </div>
</div>
</body>
</html>