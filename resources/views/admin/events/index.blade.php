@extends('layouts.admin')

@section('contents')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Events</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Events List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr> 
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Schedule</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$event->event_title}}</td>
                                <?php 
                
                                    $desc = strip_tags($event->event_description);
                                    $desc = substr($desc, 0, 200);

                                ?>
                                <td>{{$desc}}</td>
                                <td>{{$event->event_schedule}}</td>
                                <td>{{$event->event_slug}}</td>
                                <td><img src="{{asset('images/events/'.$event->event_image)}}" alt="" height="150px" width="220px"> </td>
                                <td>
                                    @if ($event->event_status == 0)
                                        <span class="text-danger"> <b>De-activate</b> </span> <a href="{{url('/active-event/'.$event->event_slug)}}" class="btn btn-sm btn-success">Active</a>
                                    @else
                                        <span class="text-success"> <b>Activate</b> </span> <a href="{{url('/deactive-event/'.$event->event_slug)}}" class="btn btn-sm btn-warning">Deactive</a>
                                    @endif
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-primary edit-btn">
                                        <a class="text-white" href="{{'/edit-event/'.$event->event_slug}}">Edit</a>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger delete-btn">
                                        <a class="text-white" href="{{'/delete-event/'.$event->event_slug}}">Delete</a>
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
                <h6 class="m-0 font-weight-bold text-primary">Add Event</h6>
            </div>
            <div class="card-body">
                <form action="{{url('save-event')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="event_title">Title</label>
                        <input type="text" name="event_title" class="form-control" placeholder="Event Title" required>
                    </div>
                    <div class="form-group">
                        <label for="event_description"Description</label>
                        <textarea name="event_description" class="form-control" id="description" cols="30" rows="5" required>Write Event description</textarea>

                    </div>
                    <div class="form-group">
                        <label for="event_schedule">Schedule</label>
                        <input type="datetime-local" name="event_schedule" class="form-control" placeholder="Event Schedule" required>
                    </div>
                    <div class="form-group">
                        <label for="event_slug">Slug</label>
                        <input type="text" name="event_slug" class="form-control" placeholder="Event Slug" required>
                    </div>
                    <div class="form-group">
                        <label for="event_image">Images <small>[Size: To maintain the design, please use image of size 1280*853 ]</small></label>
                        <input type="file" name="event_image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="event_status">Status</label>
                        <input type="checkbox" name="event_status" class="form-control" required>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

 

@endsection
