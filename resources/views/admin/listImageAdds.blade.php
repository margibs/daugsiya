@extends('admin.layout')

@section('content')

@include('admin.navigations.homeImageNav')


<table>
	<thead>
		<th>Image</th>
		<th>Link</th>
		<th>Position</th>
		<th>Action</th>
	</thead>
	<tbody>
		@foreach($home_images as $media_file)
			<tr>
				<td>{{$media_file->image}}</td>
				<td>{{$media_file->link}}</td>
				<td>{{$media_file->position}}</td>
				<td>
					<a href="{{url('admin/homeads')}}/{{$media_file->id}}">View</a> |
					<a href="{{url('admin/edit/homeads')}}/{{$media_file->id}}">Edit</a> |
					<a href="{{url('admin/delete/imageDelete')}}/{{$media_file->id}}">Delete</a> 
				</td>
			</tr>
		@endforeach
	</tbody>
</table> 

@endsection