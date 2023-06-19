<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="loginregister.css">
</head>
<body>
<section class="sectionloginregister">
<div class="section">
		<div class="container">
		    <div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span style="margin-right: 15px"> Login </span>  <span style="margin-left: 10px"> Register </span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" <?php if(@$_GET["reg"]==1){echo 'checked';}?>/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
                                    <form action="control/loginc.php" method="POST">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
                                                <input type="email" name="email" class="form-style" placeholder="Email" id="logemail" autocomplete="none" required>
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-4">
                                                <input type="password" name="password" class="form-style" placeholder="Password" id="logpass" autocomplete="none" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" name="add" class="btn mt-4">Login</button>
				      					</div>
                                    </form>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
                                        <form action="control/registerc.php" method="POST">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Register</h4>
											<div class="form-group">
                                                <input type="text" name="username" class="form-style" placeholder="Username" id="logname" autocomplete="none" required>
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-3">
                                                <input type="email" name="email" class="form-style" placeholder="Email" id="logemail" autocomplete="none"required>
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-3">
                                                <input type="password" name="password" class="form-style" placeholder="Password" id="logpass" autocomplete="none" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" name="add" class="btn mt-4">Register</button>
				      					</div>
                                        </form>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</section>
</body>
</html>