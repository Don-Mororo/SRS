@include('admin.header')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="" method="post" action="{{url('/insert')}}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Add Image</legend>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img" id="img" placeholder="upload Image">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" id="link" placeholder="link">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="radio" name="status" id="status">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-sm btn-info">
                        <a  href="{{url('/')}}" type="submit" class="btn btn-sm btn-primary">Back</a>

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>