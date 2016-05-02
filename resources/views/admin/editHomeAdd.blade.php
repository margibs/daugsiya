@extends('admin.layout')

@section('content')

@include('admin.navigations.homeImageNav')


@if($errors->any())
  <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
         <li> {{ $error }} </li>
      @endforeach
  </ul>
@endif


{!! Form::model($home_image, ['method' => 'POST' , 'action' => ['AdminController@editImageAdd', $home_image->id]]) !!}
	
	{!! Form::hidden('id', $home_image->id) !!}
	{!! Form::hidden('homeadds', $redirect) !!}
	<div class="form-group">
		<h6> Image  </h6> 
		
		{!! Form::text('image', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		<h6> Link </h6> 
		{!! Form::text('link', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		<h6> Position </h6> 
		{!! Form::text('position', null, ['class' => 'form-control']) !!}
	</div>


	<div class="form-group">
		<input type="submit"></input>
	</div>		
</div>	
{!! Form::close() !!}

@endsection


