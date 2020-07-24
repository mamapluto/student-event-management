@extends('layouts.adminlayout')

@section('admin')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th><strong> Community Name </strong></th>
                    <th align="right"><strong> Member Count </strong></th>
                    <th><strong></strong></th>
                </tr>
                @foreach ($communitylist as $community)
                    <tr>
                        <form method="post" action="">
						@csrf
                        <td>{{ $community->community_name }}</td>
                        <td align="right">{{ $memberNo[$community->id] }}</td>
                        <td>
                        <input type="hidden" name="community_id" value={{ $community->id }} >
                        <input type="submit" class="btn btn-primary" value="Delete" /> 
                        </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection