@extends('layouts.adminlayout')

@section('admin')
    <div class="container">
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
                    <th><strong> Status </strong></th>
                    <th><strong>  </strong></th>
                </tr>
                @foreach ($eventlist as $event)
                    <tr>
                        <form method="post" action="">
						@csrf
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
                        <td>
                        <select name="new_status">
                        @php
                          $status = array(
                            "Pending Approval",
                            "Available",
                            "Closed",
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
                        </td>
                        <td> 
                        <input type="hidden" name="event_id" value={{ $event->id }} >
                        <input type="submit" class="btn btn-primary" value="Update" /> 
                        </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection