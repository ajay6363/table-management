
  <link href="{{url('public/assets/css/login.css')}}" rel="stylesheet">
 

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="{{url('/customer_register')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
			<h1>Create Account</h1>			
			<input type="text" name="name" placeholder="Name" required />
			<input type="text"name="email" placeholder="Email" required />
			<input type="password" name="password" placeholder="Password" required />
			<button>Sign Up</button>
		</form>
	</div>


	<div class="form-container sign-in-container">
		<form action="{{url('/customer_login')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
			<h1>Sign in</h1>		
		 <!-- Display "no record found" message -->
     @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                   @endif
			<input type="text" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
  
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>



  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('public/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('public/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('public/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('public/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public/assets/js/main.js')}}"></script>
  <script src="{{url('public/assets/js/login.js')}}"></script>

</body>

</html>