@extends('admin.layout')

@section('content')

<style type="text/css">
.serverp{
    margin-top: 30px;
    text-align: center;
    margin-bottom: 30px;
}
</style>

<div class="submenu">
                  

                  <ul>
                    <li> <a href="{{ url('admin/autoposts/new_autopost') }}"> <i class="icon-line-square-plus"></i> New Autopost </a> </li>
                    <li> <a href="{{ url('admin/autoposts') }}"> <i class="icon-paperclip"></i> All </a> </li>                    
                  </ul>
                </div>
                    
                <p class="serverp">  Server Time: <span>  {{ $datetime->format('Y-m-d H:i:s') }} </span> </p>
                
    <table class="table table-condensed table-bordered table-striped" id="users-table">
        <thead>
            <tr>
                <th>Description</th>
                <th>FB</th>
                <th>Twitter</th>
                <th>Pinterest</th>
                <th>Instagram</th>
                <th>DatePosting</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>


           <!--      <table style="text-align:left">
               <thead>
                   <tr>
                       <th width="40%">Description</th>
                       <th>FB</th>
                       <th>Twitter</th>
                       <th>Pinterest</th>
                       <th>Instagram</th>
               <th>Google Plus</th>
                       <th>Date Posting</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   
                   @foreach($autoposts as $a)
                                       <tr>
                                           <td>
                               {{ $a->description }}                                
                           </td>
                                           <td>
                               @if($a->fb == 1)
                                   <span style="color:yellow;">Not Posted</span>
                               @elseif($a->fb == 2)
                                   <span style="color:red;">ERROR POSTING</span>
                               @elseif($a->fb == 3)
                                   <span style="color:green;">POSTED</span>
                               @else
           
                               @endif
                           </td>
                                           <td>
                               @if($a->twitter == 1)
                                   <span style="color:yellow;">Not Posted</span>
                               @elseif($a->twitter == 2)
                                   <span style="color:red;">ERROR POSTING</span>
                               @elseif($a->twitter == 3)
                                   <span style="color:green;">POSTED</span>
                               @else
           
                               @endif
                           </td>
                                           <td>
                               @if($a->pinterest == 1)
                                   <span style="color:yellow;">Not Posted</span>
                               @elseif($a->pinterest == 2)
                                   <span style="color:red;">ERROR POSTING</span>
                               @elseif($a->pinterest == 3)
                                   <span style="color:green;">POSTED</span>
                               @else
           
                               @endif
                           </td>
                                           <td>
                               @if($a->instagram == 1)
                                   <span style="color:yellow;">Not Posted</span>
                               @elseif($a->instagram == 2)
                                   <span style="color:red;">ERROR POSTING</span>
                               @elseif($a->instagram == 3)
                                   <span style="color:green;">POSTED</span>
                               @else
           
                               @endif
                           </td>
                                           td><input type="checkbox" disabled {{ $a->google_plus == 1 ? 'checked' : '' }} {{ $a->google_plus == 2 ? 'disabled="disabled" checked' : '' }}></td>
                                           <td>{{ $a->date_posting }}</td>
                                           <td>
                                               <a href="{{ url('admin/autoposts') }}/{{ $a->id }}/delete"> <i class="fa fa-times"></i>  </a>
                                               <a href="{{ url('admin/autoposts') }}/{{ $a->id }}/edit" style="margin-left: 10px;"> <i class="fa fa-pencil"></i> </a>
                                           </td>
                                       </tr>
                                   @endforeach
               </tbody>
           </table> -->
<!-- <script>
    $(document).ready(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        
    });
</script>
 -->
@endsection


@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/autoposts/getAll',
        columns: [
            { data: 'description', name: 'description' },
            { data: 'fb', name: 'fb' },
            { data: 'twitter', name: 'twitter' },
            { data: 'pinterest', name: 'pinterest' },
            { data: 'instagram', name: 'instagram' },
            { data: 'date_posting', name: 'date_posting' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
/*
     $('#users-table2').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/get_mobile_adds',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'image', name: 'image' },
            { data: 'link', name: 'link' },
            { data: 'redirect_link', name: 'redirect_link' },
            { data: 'position', name: 'position' },
            { data: 'show_add', name: 'show_add' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });*/
});
</script>
@endsection