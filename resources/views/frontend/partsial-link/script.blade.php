<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/query.js') }}"></script>
<script>
	$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
	function addToCart(product_id){
$.post( "http://127.0.0.1:8000/api/carts/store", 
	{
	 :product_id
	})
  .done(function( data ) {
  	data= JSON.parse(data);
    // alert( "Data Loaded: " + data );
    if(data.status => 'success'){
    	$('#totalItems').html(data.totalItems);
    	// console.log(data);
      alert(product_id); 

    }
  });
	}
</script>