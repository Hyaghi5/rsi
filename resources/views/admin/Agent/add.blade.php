@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/agent/add' method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label for="exampleInputEmail1">link</label>
		<textarea name="link" class="form-control" rows="5" id="comment" required></textarea>
		
	</div>
	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="img" enctype="multipart/form-data" required>
	<br><br>
	<button style="background-color:#990000;color:white" type="submit" class="btn">Add Agent</button>
</form>
@endsection