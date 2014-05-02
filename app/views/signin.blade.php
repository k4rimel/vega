@extends('loginLayout')

@section('content')

<div class="large-6 large-centered columns formContainer">
	<form action="{{ url('signin') }}" method="post">
		<!-- <fieldset> -->
		<legend id="formLegend">Sign In</legend>
			<div class="row">
				<div class="large-8 large-centered columns">
					<div class="row">
						<div class="large-1 columns">
							<i class="fi-mail signUpIcons"></i>
						</div>
						<div class="large-10  columns">
							<input type="text" name="email" placeholder="Email" />
						</div>
					</div>
					<div class="row">
						<div class="large-1 columns">
							<i class="fi-lock signUpIcons"></i>
						</div>
						<div class="large-10  columns">
							<input type="password" name="password" placeholder="Password" />
						</div>
					</div>				
					<div class="row">
						<div class="large-5 columns">
							<input type="checkbox" name="remember" /><label class="rememberMe" for="remember">Remember me </label>
						</div>
						<div class="large-7 large-centered columns">
							<a href="" class="forgotPwd secondary">Forgot your password ?</a>
						</div>
					</div>
					<div class="row">
						<div class="large-5 large-centered columns">
							<input type="submit" href="" class="button btnLogin" value="Submit">
						</div>
					</div>
				</div>
			</div>
		<!-- </fieldset> -->
	</form>
</div>

@stop