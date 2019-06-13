@include('admin.header')

<!DOCTYPE HTML>
<html>
<head>
    <title>Students Management</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/sb-admin-2.css')}}">
    <style type="text/javascript" src="{{url('js\jquery-3.1.0.js')}}"></style>
    <style type="text/javascript" src="{{url('js\bootstrap.js')}}"></style>
    <style type="text/javascript" src="{{url('')}}"></style>
    <style type="text/css">
       #second,#summary{
           display: none;
       }
    </style>
</head>
<body>
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        hello world
    </ul>
    <div class="class-middle">
<div class="container-fluid">
        <!-- Start of Students info-->
    <div class="register-box">
        <div class="register-box-body">
            <div class="progress mt-1 mb-3" style="height: 30px">
                <div class="progress-bar bg-blue" role="progressbar" style="width: 20%;" id="progressBar">
                    <div class="lead" id="progressText">Step -1</div>
                </div>
            </div>
            <form id="student_Info" class="form-horizontal" method="get" action="registerer">
                {{ csrf_field() }}
                <div id="first">
                 <fieldset>
                        <p class="register-box-msg">Student's Personal Information</p>
                    <div class="row ">
                        <div class="col-md-2 form-group">
                            <label>Sex: </label>
                            <!--input type="text" placeholder="firstname" class="form-control-sm" id="student_Fname"-->
                        </div>
                        <div class="col-md-4 form-group">
                            <!--input type="text" placeholder="FEMALE" class="form-control input-sm" name="student_gender"-->
                            <select name="student_gender" class="form-control custom-select-sm" id="sex">
                                <option value="FEMALE">FEMALE</option>
                                <option value="MALE">MALE</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label class="label">Surname: </label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" placeholder="surname" class="form-control input-sm" name="student_surname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label class="label">First Name: </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="firstname" class="form-control input-sm" name="student_Fname">
                        </div>
                        <div class="col-md-2">
                            <label class="label">Other Names: </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="lastname" class="form-control input-sm" name="student_Mname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label class="label">Date of Birth: </label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control input-sm" name="student_DOB">
                        </div>
                        <div class="col-md-2">
                            <label class="label">Age: </label>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="10" class="form-control input-sm" name="student_Age">
                        </div><span>YRS</span>
                    </div>
                    <div class="row form-group">
                        <div class="col offset-10" >
                            <a href="#" class="btn btn-danger" id="Next-1">Next</a>
                        </div>
                    </div>
                 </fieldset>
                </div>
                <div id="second">
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
                        <div class="row form-group ">
                            <a href="#" class="btn btn-danger m-1" id="Prev-2">Previous</a>
                            <a href="#" class="btn btn-success m-1" id="submit">Submit</a>
                        </div>
                    </fieldset>
                </div>
                <div class="row form-group">
                    <h5 id="summary">summary</h5>
                </div>
            </form>
        </div>
    </div>
        <!--End of student's info form-->
    <!--Start of guardians' info form-->
        <div class="form-group">
        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
$("#Next-1").click(function (e) {
    e.preventDefault();
    $("#second").show();
    $("#first").hide();
    $("#progressBar").css("width","60%");
    $("#progressText").html("Step - 2");
});
$("#submit").click(function () {
    $.ajax({
        url:'summ.blade.php',
        method: 'post',
        data:$("#student_Info").serialize(),
        success:function (response) {
            $("#summary").show();
            $("#summary").html(response);
        }
    });
});
$("#Prev-2").click(function () {
    $("#first").show();
    $("#second").hide();
    $("#progressBar").css("width","20%");
    $("#progressText").html("Step - 1");
});
    });
</script>
</body>
</html>