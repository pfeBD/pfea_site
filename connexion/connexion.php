<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./connexion.css">
    <link rel="stylesheet" href="../fontweb/css/all.min.css">
</head>

<body >

	<!-- navbar -->
	<?php
	include '../navbar.php';
	?>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../images/logo1.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="fas fa-user"></i>
								</span>
							</div>
							<input type="text" name="email" class="form-control input_user"  placeholder="username" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="fas fa-key"></i>
								</span>
							</div>
							<input type="password" name="motPasse" class="form-control input_pass"  placeholder="mot de passe" required>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit"value="Login" name="submit" class="btn login_btn">
				   </div>
					
				</div>
		</form>
				<div class="mt-4">
					<div class="d-flex justify-content-center links text-dark">
						Don't have an account? <a href="../inscription/inscription.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
							<button type="button" class="btn btn-transparent text-primary text-decoration-underline" data-bs-toggle="modal" data-bs-target="#exampleModal">Forgot your password?  </button>
							
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header  d-flex flex-column">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										<img class="position-relative start-0" src="https://i.ibb.co/rshckyB/car-key.png" alt="car-key">
										<h2 class="text-center">oublier mot de passe?</h2>
										<p>vous pouvez reset votre mot de passe d'ici</p>
									
									</div>
									<div class="modal-body">
										<form id="formAwesome" method="POST" action="">
											<div class="form-group">
												<div class="input-group">
													<select class="form-control  m-3" >
														<option selected="true" disabled>Please Select Security Question</option>
														<option>Which is your favorite movie?</option>
														<option>What is your pet's name?</option>
														<option>What is the name of your village?</option>
													</select>
												</div>
											</div>
											<div class="form-group " >
												<div class="input-group">
													<input  type="text" name="forgetAnswer" placeholder="Answer" class="form-control m-3" >
												 </div>
												<div class="input-group">
													<input  type="password" name="newpassword" placeholder="Nouveaux Password" class="form-control m-3" > 
												</div>
												<div class="input-group">
													
													<input  type="password" name="renewpassword" placeholder="Saisire Nouveaux Password" class="form-control m-3" >
												</div>
												
												
												
											</div>
											<div class="form-group d-flex justify-content-center">
												<input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" style="width:150px" value="Reset" type="reset">
											</div>
									</div>
									<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
								</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	include '../footer.php';
	?>

</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>