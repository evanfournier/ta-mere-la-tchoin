<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="Css/SignUpAndLogIn.scss">
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log in</span><span>Sign up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">

								<form class="logIn" id="logInForm">
									<div class="card-front">
										<div class="center-wrap">
											<div class="section text-center">
												<h4 class="mb-4 pb-3">Log in</h4>
												<div class="form-group">
													<input type="email" name="email" class="form-style" placeholder="Email">
													<i class="input-icon uil uil-at"></i>
													<label for="emailLogIn" class="emailLogIn_error" id="emailLogInError"></label>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="password" id="passwordLogIn" class="form-style password" placeholder="Password">
													<i class="input-icon uil uil-lock-alt"></i>
													<label for="passwordLogIn"><button class="see_label" id="logInPasswordButton"><img src="Images/oeilFermé.png" class="see_img" id="showLogInPassword"></button></label>
													<label for="passwordLogIn" class="passwordLogIn_error" id="passwordLogInError"></label>
												</div>
												<input type="submit" value="Log in"  id="submitLogIn" class="btn mt-4">
												<p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
											</div>
										</div>
									</div>
								</form>


								<form class="signUp" id="signUpForm">
									<div class="card-back">
										<div class="center-wrap">
											<div class="section text-center">
												<h4 class="mb-3 pb-3">Sign Up</h4>
												<div class="form-group">
													<input type="text" name="name" class="form-style" placeholder="Username">
													<i class="input-icon uil uil-user"></i>
													<label for="usernameSignUp" class="usernameSignUp_error" id="nameSignUpError"></label>
												</div>
													<div class="form-group mt-2">
													<input type="email" name="email" class="form-style" placeholder="Email">
													<i class="input-icon uil uil-at"></i>
													<label for="emailSignUp" class="emailSignUp_error" id="emailSignUpError"></label>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="password" id="passwordSignUp" class="form-style password" placeholder="Password">
													<i class="input-icon uil uil-lock-alt"></i>
													<label for="passwordSignUp"><button class="see_label" id="signUpPasswordButton"><img src="Images/oeilFermé.png" class="see_img" id="showSignUpPassword"></button></label>
													<label for="passwordSignUp" class="passwordSignUp_error" id="passwordSignUpError"></label>
												</div>
												<div class="form-group mt-2 pass2">
													<input type="password" name="passwordConfirmation" id="passwordConfirmationSignUp" class="form-style password" placeholder="Password confirmation">
													<i class="input-icon uil uil-lock-alt"></i>
													<label for="passwordConfirmationSignUp"><button class="see_label" id="signUpPasswordConfirmationButton"><img src="Images/oeilFermé.png"  class="see_img" id="showSignUpPasswordConfirmation"></button></label>
													<label for="passwordConfirmationSignUp" class="passwordConfirmatioSignUp_error" id="passwordConfirmationSignUpError"></label>
												</div>
												<input type="submit" value="Sign up" class="btn mt-4">
											</div>
										</div>
									</div>
								</form>

	
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
<script src="Js/SignUpAndLogIn.js"></script>
</html>