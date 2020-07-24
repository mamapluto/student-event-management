@extends('layouts.adminlayout')

@section('admin')
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th><strong> Name </strong></th>
                    <th><strong> Student ID </strong></th>
                    <th><strong></strong></th>
                </tr>
                @foreach ($studentlist as $student)
                    <tr>
                        <form method="post" action="">
						@csrf
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->student_no }}</td>
                        <td>
                        <input type="hidden" name="student_id" value={{ $student->id }} >
                        <input type="submit" class="btn btn-primary" value="Delete" /> 
                        </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection