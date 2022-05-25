@extends('layouts.admin')

@section('contents')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
</div>
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Upload Images</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-image/'.$slider->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control" value="{{$slider->heading}}">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" class="form-control" id="" cols="30" rows="5">{{$slider->description}}</textarea>
    
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{$slider->link}}">
                    </div>
                    <div class="form-group">
                        <label for="link_name">Link Name</label>
                        <input type="text" name="link_name" id="link_name" class="form-control" value="{{$slider->link_name}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Images <small>[Size: To maintain the design, please use image of size 1280*853 ]</small></label>
                        <input type="file" name="image" id="image" class="form-control">
                        <br>
                        <img src="{{asset('images/sliders/'.$slider->image)}}" alt="" height="150px" width="220px">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status" class="form-control" {{$slider->status == '1' ? 'checked':''}}>
                    </div>     
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                        <a href="{{url('/view-images')}}" class="btn btn-warning">Go Back</a>
                    </div> 
                </form>       
            </div>
        
            </div>
        </div>
    </div>



@endsection
