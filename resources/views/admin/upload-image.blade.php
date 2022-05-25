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
    <div class="col-md-8">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Uploaded Images</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr> 
                                <th>#</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Link Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$slider->heading}}</td>
                                <td>{{$slider->description}}</td>
                                <td>{{$slider->link}}</td>
                                <td>{{$slider->link_name}}</td>
                                <td><img src="{{asset('images/sliders/'.$slider->image)}}" alt="" height="150px" width="220px"> </td>
                                <td>
                                    @if ($slider->status == 0)
                                        de-activated
                                    @else
                                        Activated
                                    @endif
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary edit-btn">
                                        <a class="text-white" href="{{'edit-image/'.$slider->id}}">Edit</a>
                                    </button>
                                    {{-- <a href="{{url('edit-image')}}" class="btn btn-info"></a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Upload Images</h6>
            </div>
            <div class="card-body">
                <form action="{{url('upload-image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" class="form-control" placeholder="Enter a heading for the image">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="5">Write a description</textarea>

                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" placeholder="Enter a url here">
                    </div>
                    <div class="form-group">
                        <label for="link_name">Link Name</label>
                        <input type="text" name="link_name" class="form-control" placeholder="Enter a link name">
                    </div>
                    <div class="form-group">
                        <label for="image">Images <small>[Size: To maintain the design, please use image of size 1280*853 ]</small></label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" class="form-control">
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('update-image')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="heading">Heading</label>
                    <input type="text" name="heading" id="heading" class="form-control" placeholder="Enter a heading for the image">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea name="description" id="description" class="form-control" id="" cols="30" rows="5">Write a description</textarea>

                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control" placeholder="Enter a url here">
                </div>
                <div class="form-group">
                    <label for="link_name">Link Name</label>
                    <input type="text" name="link_name" id="link_name" class="form-control" placeholder="Enter a link name">
                </div>
                <div class="form-group">
                    <label for="image">Images <small>[Size: To maintain the design, please use image of size 1280*853 ]</small></label>
                    <input type="file" name="image" id="image" class="form-control">
                    <img src="" id="#img" alt="">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="checkbox" name="status" id="status" class="form-control">
                </div>            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>
      </div>
    </div>
  </div>


{{-- <script>
 $(document).ready(function(){
    $(document).on('click', '.edit-btn', function(){
        var image_id = $(this).val();
        // alert(image_id);
        $.ajax({
            type: "GET",
            url: "/edit-image/"+image_id,
            success: function(response){
                // console.log(response);
                $('#heading').val(response.slider.heading);
                $('#description').val(response.slider.description);
                $('#link').val(response.slider.link);
                $('#link_name').val(response.slider.link_name);
                $('#img').val('<img src="response.slider.image)" id="#img" alt="">';
                $('#status').val(response.slider.status);
            }
        })
    });
 });
</script> --}}
 

@endsection
