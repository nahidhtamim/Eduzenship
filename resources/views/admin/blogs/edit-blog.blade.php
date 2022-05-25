@extends('layouts.admin')

@section('contents')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
</div>
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<!-- Content Row -->
<div class="row">
    <div class="col-md-8">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Blog</h6>
            </div>
            <div class="card-body">
                <form action="{{url('/update-blog/'.$blog->blog_slug)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="blog_title">Title</label>
                        <input type="text" name="blog_title" class="form-control" value="{{$blog->blog_title}}">
                    </div>
                    <div class="form-group">
                        <label for="blog_description"Description</label>
                        <textarea name="blog_description" class="form-control" id="description" cols="30" rows="5">{{$blog->blog_description}}</textarea>

                    </div>
                    <div class="form-group">
                        <label for="blog_slug">Slug</label>
                        <input type="text" name="blog_slug" class="form-control" value="{{$blog->blog_slug}}">
                    </div>
                    <div class="form-group">
                        <label for="blog_image">Images <small>[Size: To maintain the design, please use image of size 1280*853 ]</small></label>
                        <input type="file" name="blog_image" class="form-control">
                        <br>
                        <img src="{{asset('images/blogs/'.$blog->blog_image)}}" alt="" height="150px" width="220px">
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
