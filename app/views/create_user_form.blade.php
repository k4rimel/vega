@extends('loginLayout')
@section('content')
<div class="large-6 large-centered columns formContainer">
	<form action="{{ url('signup') }}" method="post">
		<legend id="formLegend">Sign Up</legend>
			<div class="row">
				<div class="large-9 large-centered columns">
					<div class="row">
						<div class="large-1 columns">
							<i class="fi-torso signUpIcons"></i>
						</div>
						<div class="large-11 large-centered columns">	   
							<input type="text" name="username" placeholder="Username" />
						</div>
					</div>
					<div class="row">
						<div class="large-1 columns">
							<i class="fi-mail signUpIcons"></i>
						</div>
						<div class="large-11 large-centered columns">
							<input type="text" name="email" placeholder="Email" />
						</div>
					</div>
					<div class="row">
						<div class="large-1 columns">
							<i class="fi-lock signUpIcons"></i>
						</div>
						<div class="large-11 large-centered columns">
							<input type="password" name="password" placeholder="Password" />
						</div>
					</div>
					<div class="row">
						<div class="large-4 large-centered columns">
							<input class="button" type="submit" value="Create">
						</div>
					</div>
				</div>
			</div>
	</form>
</div>
@stop	     