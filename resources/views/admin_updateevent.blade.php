@extends('layouts.adminlayout')

@section('admin')
         <div class="container box" style="background-color:ghostwhite">
          <br>
		  <h3 align="center">Edit Event</h3><br />

		  <form method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Event Name</label>
			 <input type="text" name="name" class="form-control" value="{{ $event->event_name }}" />
			</div>
			<div class="form-group">
			 <label>Event Description</label>
			 <textarea name="desc" class="form-control">{{ $event->event_desc }}</textarea>
			</div>
			<div class="form-group">
			 <label>Event Type</label>
			 <input type="text" name="type" class="form-control" value="{{ $event->event_type }}" />
			</div>
			<div class="form-group">
			 <label>Event Location</label>
			 <input type="text" name="location" class="form-control" value="{{ $event->event_location }}" />
			</div>
			<div class="form-group">
			 <label>Event Date</label>
			 <input type="date" name="date" class="form-control" value="{{ $event->event_date }}" />
			</div>
			<div class="form-group">
			 <label>Event Start Time</label>
			 <input type="time" name="start_time" class="form-control" value="{{ $event->event_startTime }}" />
			</div>
			<div class="form-group">
			 <label>Event End Time</label>
			 <input type="time" name="end_time" class="form-control" value="{{ $event->event_endTime }}" />
			</div>
			<div class="form-group">
			 <label>No. of Participants for Event</label>
			 <input type="number" name="participant_no" class="form-control" value="{{ $event->event_participantNo }}" />
			</div>
			<div class="form-group">
			 <label>Participation Fee (RM)</label>
			 <input type="number" step="0.01" name="fee" class="form-control" value="{{ $event->event_fee }}" />
			</div>
            <div class="form-group">
			 <label>Event Status</label><br>
			 <select name="status">
             @php
             $status = array(
               "Pending Approval",
               "Available",
               "Closed",
               "Rejected",
             )
             @endphp
             @for ($i = 0; $i < count($status); $i++)
               @php
               $selected = "";
               @endphp
               @if ($event->event_status == $i)
               @php
               $selected = "selected";
               @endphp
               @endif
               <option value={{ $i }} {{ $selected }}>{{ $status[$i] }}</option>
             @endfor
            </select>
			</div>
			<div class="form-group">
			 <input type="submit" name="create" class="btn btn-primary" value="Update Event" />
			</div>
		  </form>
		 </div>
@endsection