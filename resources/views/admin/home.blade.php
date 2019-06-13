@include('admin.header')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <legend>Images Slider</legend>
            @if(session('info'))
                <div class="alert alert-success">
                    {{session('info')}}
                </div>
@endif
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <!--@if(count($banner)>0)
                    @foreach($banner->all() as $banner)

                        <tr class="table-active">
                            <th scope="row">{{$banner->id}}</th>
                            <td>{{$banner->img}}</td>
                            <td>{{$banner->title}}</td>
                            <td>{{$banner->link}}</td>
                            <td>{{$banner->status}}</td>

                            <td>
                                <a href='{{url("/read/{$banner->id}")}}' class="btn btn-sm btn-primary">Read </a>|
                                <a href='{{url("/update/{$banner->id}")}}' class="btn btn-sm  btn-success">Update </a>|
                                <a href='{{url("/delete/{$banner->id}")}}' class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                        -->
                </tbody>
            </table>
        </div>
    </div>
</div>

