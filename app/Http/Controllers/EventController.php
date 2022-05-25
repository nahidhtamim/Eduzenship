<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function saveEvent(Request $request)
    {
        $event = new Event;
        $event->event_title = $request->input('event_title');
        $event->event_description = $request->input('event_description');
        $event->event_schedule = $request->input('event_schedule');
        $event->event_slug = $request->input('event_slug');
        $event->event_status = $request->input('event_status')==true ? '1':'0';
        if($request->hasfile('event_image'))
        {
            $file = $request->file('event_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/events/', $fileName);
            $event->event_image = $fileName; 
        }
        $event->save();
        return redirect()->back()->with('status', 'Your Event Has Been Saved');
    }

    public function editEvent($slug){
        $event = Event::Where('event_slug', $slug)->first();
        return view('admin.events.edit-event', compact('event'));
    }

    public function updateEvent(Request $request, $slug)
    {
        $event = Event::Where('event_slug', $slug)->first();
        $event->event_title = $request->input('event_title');
        $event->event_description = $request->input('event_description');
        $event->event_schedule = $request->input('event_schedule');
        $event->event_slug = $request->input('event_slug');
        if($request->hasfile('event_image'))
        {
            $file = $request->file('event_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/events/', $fileName);
            $event->event_image = $fileName; 
        }
        $event->update();
        return redirect('/view-events')->with('status', 'Your Event Has Been Updated');
    }

    public function activeEvent($slug){
        $event = Event::Where('event_slug', $slug)->first();
        $event->event_status = '1';
        $event->update();
        return redirect()->back()->with('status', 'Your Event Status Has Been Updated');
    }

    public function deactiveEvent($slug){
        $event = Event::Where('event_slug', $slug)->first();
        $event->event_status = '0';
        $event->update();
        return redirect()->back()->with('status', 'Your Event Status Has Been Updated');
    }

    public function deleteEvent($slug){
        $event = Event::Where('event_slug', $slug)->first();
        $event->delete();
        return redirect()->back()->with('status', 'Your Event Status Has Been Deleted');
    }
}
