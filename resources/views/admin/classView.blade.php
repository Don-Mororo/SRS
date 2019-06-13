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
    <style type="text/css">
        #subjects{
            display: none;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div class="class-middle">
        <div class="container-fluid" style=" height: fit-content;" aria-expanded="true" aria-controls="collapseUtilities">

            <div class="class-view-head">
                <h5>Welcome to the grade() administration panel<br>
                We are feel great to have you!</h5>
            </div>
            <div class="left-side">
                <div class="card bg-warning">
                    <div class="card-body">
                        <div class="card-text">
                            <div class="row">
                                {{--@if(count((array)$subjects)>0)--}}
                                    {{--@foreach($subjects ->all() as $subjects)--}}
                                {{--<div class="col-md-7">--}}
                                 {{--<b>Grade</b>: <h7 class="lead">{{$subjects->class_id}}</h7>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5">--}}
                                   {{--<b>Stream</b>:  <h7 class="lead">PP</h7>--}}
                                {{--</div>--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                                {{--@if(count((array)$grades)>0)--}}
                                    {{--@foreach($grades->where('id','=','id')->get() as $grades);--}}
                                        {{--@foreach($subjects ->where('class_id','=','1')->get() as $subjects)--}}
                                        {{--<div class="col-md-7">--}}
                                        {{--<b>Grade</b>: <h7 class="lead">{{$subjects->class_id}}</h7>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-5">--}}
                                        {{--<b>Stream</b>:  <h7 class="lead">PP</h7>--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                            </div>
                            followed by class master
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-gradient-warning">
                        <div class="card-text">
                            <p>Subject 1</p>
                            <p>Subject 2</p>
                            <p>Subject 3</p>
                            <p>Subject 4</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle part-->
            <div class="class-notifier">
                <div class="container-fluid" style=" height: fit-content;" aria-expanded="true" aria-controls="collapseUtilities">
                 <div>
                    <div class="row ">
                        <textarea type="textarea" id="message" placeholder="type remark" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row" >
                    <table class="table table-striped table-hover table-sm">
                        <thead>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Master</th>
                        <th scope="col">Results</th>
                        </thead>
                        <tbody>

                        @if(count((array)$subjects)>0)
                            @foreach($subjects ->where('class_id',$grade->id)->all() as $subjects);

                            {{--@foreach($subjects->all() as $subjects)--}}
                            <tr class="table-active">
                                <th scope="row">{{$subjects->code}}</th>
                                <td>{{$subjects->name}}</td>
                                <td>{{$subjects->teacher_id}}</td>
                                <td>
                                    <a href='{{url("/view/{$subjects->Code}")}}' class="btn btn-sm btn-primary">View</a>
                                    <a href='{{url("/Update/{$subjects->Code}")}}' class="btn btn-sm btn-success">Update</a>
                                    <a href='{{url("/Remove/{$subjects->Code}")}}' class="btn btn-sm btn-danger">Remove</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                    <form id="subjectForm" method="post" action="{{url('/class/subject')}}">
                        {{ csrf_field() }}
                        <div class="row form-group">
                        <div class="col offset-8">
                            <a href="#" class="btn btn-info" id="subjectReg">Register Subject</a>
                        </div>
                    </div>
                    <div id="subjects">
                        <fieldset>
                            <h5>Subjects Registration</h5><br>
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label>Code</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Code" class="form-control input-sm" name="code">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="subject" class="form-control input-sm" name="subjectName">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label>Master</label>
                                </div>
                                <div class="col-md-4">
                                    {{--<input type="text" placeholder="teacher" class="form-control input-sm" name="teacher">--}}
                                   <!-- <div class="form-group input-sm">

                                    </div>-->
                                    <div class="form-group-sm">
                                        <select class="form-control" id="sel1" name="teacher">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col offset-2 col-md-4">
                                    <button class="form-control btn-info btn-block" value="Save">Save</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    </form>
                </div>
            </div>
            <!-- right side-->
            <div class="right-side">
                <!--view number of students-->
                <div class="class-view-students">
                    <b>Registered Students</b><hr>
                    <p>Boys: no...</p>
                    <p>Girls: no....</p>
                    <p><b>Total: So....</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#subjectReg").click(function () {
            $("#subjects").show();
        })
    })
</script>
</body>
</html>