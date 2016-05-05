@extends('clubhouse.app')


@section('content-list')

<div class="app-page" data-page="chatroom">
    {!! csrf_field() !!}
 
  	<div class="app-content">
    	    
<!--     	     <img class="materialboxed" width="650" src="images/sample-1.jpg"> -->
	 <table>
	        <thead>
	          <tr>
	              <th data-field="id">Name</th>
	              <th data-field="name">Item Name</th>
	              <th data-field="price">Item Price</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>Alvin</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	          </tr>
	          <tr>
	            <td>Alan</td>
	            <td>Jellybean</td>
	            <td>$3.76</td>
	          </tr>
	          <tr>
	            <td>Jonathan</td>
	            <td>Lollipop</td>
	            <td>$7.00</td>
	          </tr>
	        </tbody>
	      </table>
            


                
    </div>    

  </div>
</div>

@endsection

@section('script')

<script>


  App.controller('chatroom', function (page){
    $(page)
      .find('#btnSignup')
      .on('click', function(){
        getData("Hello World");
        
      });
  });

  function getData(data){
     App.dialog({
                    title: 'Data Infromation',
                    text: data,
                    okButton: 'Try Again',
                    cancelButton: 'Cancel'
                },function (tryAgain) {
                    if (tryAgain) {
                        App.load('SignUp');
                    }
                });
  }

	App.load('chatroom');
</script>

@endsection