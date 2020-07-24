@extends('layouts.adminlayout')

@section('admin')
         <div class="container box" style="background-color:ghostwhite">
          <br>
		  <h3 align="center">Create Community</h3><br />

		  <form method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Community Name</label>
			 <input type="text" name="name" class="form-control" />
			</div>
			<div class="form-group">
			 <input type="submit" name="create" class="btn btn-primary" value="Create Community" />
			</div>
		  </form>
		 </div>
@endsection