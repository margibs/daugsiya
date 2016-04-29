<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> 

@extends('admin.layout')

@section('content')

<div class="submenu">
                  
  <div class="searchform"> 
  <form action="">
    <a href=""> <i class="icon-angle-right"></i> </a>
    <input type="text" class="searchbox" />
  </form>
  </div>

  <ul>
    <li> <a href="{{ url('/admin/users') }}" class="active"> <i class="icon-line-head"></i> All </a> </li>
    <li> <a href=""> <i class="icon-line-star"></i> Admins </a> </li>                    
    <li> <a href=""> <i class="icon-line-cross"></i> Banned </a> </li>            
    <li> <a class="searchlink"> <i class="icon-line-search"></i> Search </a> </li>
  </ul>

</div>
<br>
<center><h1>Articles Banner</h1></center>

 <table class="table table-condensed table-bordered table-striped" id="users-table">
        <thead>
            <th>Banner</th>
            <th>Banner Link</th>
            <th>Show Banner</th>
            <th>Priority</th>
            <th>Action</th>
		</thead>
		<tbody>
        	@foreach($articles as $article)
        	 <tr>
        		<td>{{ $article->image_url }}</td>
        		<td>{{ $article->image_link }}</td>
        		<td>{{ $article->show_banner }}</td>
        		<td>{{ $article->priority }}</td>
        		 <td class="center">
                {!! Form::open() !!}
                    <a href="{!! url('dental/clinics/'.$article->id.'/edit') !!}">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    {!! Form::hidden('id', $article->id) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-link']) !!}
                {!! Form::close() !!}   
                </td>
        	</tr>
        	@endforeach
		</tbody>
    </table>

<hr>
 <center><h1>Skypsrapper Banner</h1></center>

 <table class="table table-condensed table-bordered table-striped" id="users-table">
        <thead>
            <th>Banner</th>
            <th>Banner Link</th>
            <th>Show Banner</th>
            <th>Priority</th>
            <th>Action</th>
		</thead>
		<tbody>
        	@foreach($skypsCrappers as $skypsCrapper)
        	 <tr>
        		<td>{{ $skypsCrapper->image_url }}</td>
        		<td>{{ $skypsCrapper->image_link }}</td>
        		<td>{{ $skypsCrapper->show_banner }}</td>
        		<td>{{ $skypsCrapper->priority }}</td>
        		 <td class="center">
                {!! Form::open() !!}
                    <a href="{!! url('dental/clinics/'.$skypsCrapper->id.'/edit') !!}">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    {!! Form::hidden('id', $skypsCrapper->id) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-link']) !!}
                {!! Form::close() !!}   
                </td>
        	</tr>
        	@endforeach
		</tbody>
    </table>


<hr>
 <center><h1>Casino Banner</h1></center>

 <table class="table table-condensed table-bordered table-striped" id="users-table">
        <thead>
            <th>Banner</th>
            <th>Banner Link</th>
            <th>Position</th>
            <th>Action</th>
		</thead>
		<tbody>
        	@foreach($casinos as $casino)
        	 <tr>
        		<td>{{ $casino->image }}</td>
        		<td>{{ $casino->link }}</td>
        		<td>{{ $casino->position }}</td>
        		 <td class="center">
                {!! Form::open() !!}
                    <a href="{!! url('dental/clinics/'.$casino->id.'/edit') !!}">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    {!! Form::hidden('id', $casino->id) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-link']) !!}
                {!! Form::close() !!}   
                </td>
        	</tr>
        	@endforeach
		</tbody>
    </table>



@endsection

