@extends('layouts.userlayout')

@section('user')
		<div class="container">
	   		<h3 align="center">Event List</h3>
			   <br>
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th><strong> Event Name </strong></th>
						<th><strong> Event Date </strong></th>
						<th><strong> Time </strong></th>
						<th><strong> Location </strong></th>
						<th><strong> Event Type </strong></th>
						<th><strong> Event Description </strong></th>
						<th style="text-align:right"><strong> Participation Fee (RM) </strong></th>
						<th style="text-align:right"><strong> Participants remaining </strong></th>
						<th><strong>  </strong></th>
					</tr>
					@foreach ($eventlist as $event)
						<tr>
							<td>{{ $event->event_name }}</td>
							<td>{{ date_format(date_create($event->event_date), "D j"."S F Y") }}</td>
							<td>{{ $event->event_startTime."-".$event->event_endTime }}</td>
							<td>{{ $event->event_location }}</td>
							<td>{{ $event->event_type }}</td>
							<td>{{ $event->event_desc }}</td>
							<td style="text-align:right">
							@if ($event->event_fee == 0)
							  Free
							@else
							  {{ number_format($event->event_fee,2) }}
							@endif
							</td>
							<td style="text-align:right">{{ $participantRemain[$event->id] }}</td>
							@php
							  $text = "Join";
							  $joined = 0;
							  $participant_id = 0;
							  $disabled = "";
							@endphp
							@switch($event->event_status)
							  @case (0) 
								@php
								  $disabled = "disabled";
								@endphp
							  @break
							  @case (1) 
								@if (Session::has('user_id'))
								  @foreach ($participantlist as $participant)
									@if ($event->id == $participant->event_id)
									  @php
									  $text = "Unjoin";
									  $joined = 1;
									  $participant_id = $participant->id;
									  @endphp
									  @break
									@endif
								  @endforeach
								@endif
							  @break
							  @case (2) 
								@php
								  $disabled = "disabled";
								@endphp
							  @break
							  @case (3) 
								@php
								  $disabled = "disabled";
								@endphp
							  @break
							@endswitch
							<td> 
							<form method="post" action="/">
								@csrf
								<input type="hidden" name="event_id" value={{ $event->id }} >
								<input type="hidden" name="joined" value={{ $joined }}>
								<input type="hidden" name="participant_id" value={{ $participant_id }}>
								<input type="submit" class="btn btn-primary" value={{ $text }} {{ $disabled }} /> 
							</form>
							</td>
						</tr>
					@endforeach
				</table>
				<!--<div >
				<p>There are currently no events are posted. Please wait for the admins to update the system.</p>
				</div>-->
			</div>
		</div>
@endsection
	<!--</body>
</html>-->
