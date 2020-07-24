@extends('layouts.userlayout')

@section('user')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th><strong> Community Name </strong></th>
                    <th style="text-align:right"><strong> Member Count </strong></th>
                    <th style="text-align:right"><strong></strong></th>
                </tr>
                @foreach ($communitylist as $community)
                    <tr>
                        <form method="post" action="">
						@csrf
                        <td>{{ $community->community_name }}</td>
                        <td align="right">{{ $memberNo[$community->id] }}</td>
                        @php
                        $text = "Join";
                        $joined = 0;
						$member_id = 0;
                        @endphp
                        @if (Session::has('user_id'))
						  @foreach ($memberlist as $member)
							@if ($community->id == $member->community_id)
							  @php
							  $text = "Unjoin";
							  $joined = 1;
						      $member_id = $member->id;
							  @endphp
							  @break
							@endif
						  @endforeach
						@endif
                        <td style="text-align:right">
                        <input type="hidden" name="community_id" value={{ $community->id }} >
						<input type="hidden" name="joined" value={{ $joined }}>
						<input type="hidden" name="member_id" value={{ $member_id }}>
                        <input type="submit" class="btn btn-primary" value={{ $text }} /> 
                        </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection