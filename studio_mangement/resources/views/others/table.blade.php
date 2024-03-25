<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel AJAX Dependent Country State City Dropdown Example - ItSolutionStuff.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Form</title>
</head>
<body>

<div class="container mt-5">
  <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="country">Country:</label>
              <select name="country" class="form-control" id="country-dropdown">
                <option  selected="" value="">--Select Country--</option>
                  @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->coname }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
            <label for="state">State:</label>
              <select name="state" class="form-control" id="state-dropdown">
                <option value="">Select State</option>
              </select>
            </div>

            <div class="form-group">
            <label for="city">City:</label>
              <select name="city" class="form-control" id="city-dropdown">
                <option value="">Select City</option>
              </select>
            </div>
   
    <button type="button" class="btn btn-primary">send message</button>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	$('#country-dropdown').on('change', function () {
                var idCountry = this.value;
				//alert(idCountry);
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
						//alert(result);
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.sname + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });
  
			     });  
			   
/*function sel_country(){

//var cert_type = $('#cert_typ').val();
var country=$('#country').val();

alert(country);

	 $.ajax({
                    url: '{{ URL("/getmsg") }}',
                            type: "get",
                            data: {country : country},
                            dataType:'JSON',
                    success:function(result){
						alert();
			//alert(result);return false;
			  $('#state').html(result);
			 
		 }
	  });
}*/



</script>
</body>
</html>