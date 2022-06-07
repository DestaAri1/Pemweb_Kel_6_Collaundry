@extends('auth.master')

@section('judul_halaman', 'Halaman Home')

@section('konten')

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="{{ route('login') }}" method="POST">
                    @csrf

					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Type your Email" value="{{ old('email') }}" autofocus>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Type your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

</body>

@endsection
