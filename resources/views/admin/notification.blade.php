@extends('admin.layout')

@section('content')

<style type="text/css">

.form-group input[type=text], .form-group textarea, .form-group select, .form-group input[type=date]{
    border: 1px solid #ddd;
    border-radius: 2px;
    font-family: Roboto;    
    width: 100%;
    padding: 10px;
    font-size: 15px;
   margin-bottom: 1px!important;
}
input[type=submit]{
    margin-top: 17px;
    font-size: 20px
}
h2{
    font-size: 23px;
    margin-bottom: 30px;
}

.serverp{
    margin-top: 30px;
    text-align: center;
    margin-bottom: 30px;
}
</style>
                
                <div class="submenu">
                  <ul>
                    <li> <a href="{{ url('admin/autoposts/new_autopost') }}"> <i class="icon-line-search"></i> Search </a> </li>
                  </ul>
                </div>

                    
                <div class="row">

                   

                    <div class="col-lg-4">  

                    
                          <div class="panel">
      
                                 <h2> Custom Notification </h2>    

                                    <p class="serverp">  Server Time: <span>  {{ $datetime->format('Y-m-d H:i:s') }} </span> </p>
                            <div class="categform">
                              <form class="form-inline" method="POST" action="{{ url('admin/addNewCustomNotification') }}">
                                  {!! csrf_field() !!}
                                 <input type="hidden" name="category_id" id="category_id" value="">
                                    <div class="form-group"> 
                                      <h6> Notification Link </h6>                             
                                      <input type="text" name="link" id="edit_me" value="">
                                    </div>
                                    <div class="form-group">
                                      <h6> Description </h6>
                                      <textarea name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h6> Autonotify Date/Time </h6> 
                                         <input id='date' name="date_posting" class='input' type="text"> 
                                      </div>  
                                <input type="submit" value="Submit">
                              </form>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8">
                        
                        <table style="text-align:left">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Autonotify</th>
                                    <th>Sent</th>
                                    <th>Action</th>            
                                </tr>
                            </thead>
                            <tbody>
                                  
                                  @foreach($custom_notifications as $c)
                                    <tr>
                                      <td>{{ $c->description }}</td>
                                      <td>{{ $c->link }}</td>
                                      <td>{{ $c->date_posting }}</td>
                                      <td><input type="checkbox" onclick="return false" {{ $c->executed == 1 ? 'checked="checked"' : '' }}></td>
                                      <td>

                                      @if($c->executed == 0)
                                           <a href="{{ url('admin/notification') }}/{{ $c->id }}/delete"> <i class="fa fa-times"></i>  </a>
                                            <a href="{{ url('admin/notification') }}/{{ $c->id }}/edit" style="margin-left: 10px;"> <i class="fa fa-pencil"></i> </a>
                                      @endif
                                         

                                          </td>
                                    </tr>
                                  @endforeach
                         
                            </tbody>
                        </table>

                    </div>
                    

                </div>


<script src="{{ asset('nexuspress/js/rome.min.js') }}"></script>     
<script>

  rome(date);

	$(document).ready(function(){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		
	});
</script>

@endsection