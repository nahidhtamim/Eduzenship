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
                <h6 class="m-0 font-weight-bold text-primary">Edit Event</h6>
            </div>
            <div class="card-body">
                <form action="{{url('/update-event/'.$event->event_slug)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="event_title">Title</label>
                        <input type="text" name="event_title" class="form-control" value="{{$event->event_title}}">
                    </div>
                    <div class="form-group">
                        <label for="event_description"Description</label>
                        <textarea name="event_description" class="form-control" id="description" cols="30" rows="5">{{$event->event_description}}</textarea>

                    </div>
                    <div class="form-group">
                        <label for="event_schedule">Schedule</label>
                        <input type="datetime-local" name="event_schedule" class="form-control" value="{{$event->event_schedule}}" required>
                    </div>
                    <div class="form-group">
                        <label for="event_slug">Slug</label>
                        <input type="text" name="event_slug" class="form-control" value="{{$event->event_slug}}">
                    </div>
                    <div class="form-group">
                        <label for="event_image">Images <small>[Size: To maintain the design, please use image of size 1280*853 ]</small></label>
                        <input type="file" name="event_image" class="form-control">
                        <br>
                        <img src="{{asset('images/events/'.$event->event_image)}}" alt="" height="150px" width="220px">
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
