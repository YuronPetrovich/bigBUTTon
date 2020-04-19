 <div class="row header">
            <div class="col-lg-8">
                <h1>Header Title</h1>
            </div>
            <div class="col-lg-4">
            	<?php	if(!$_SESSION['user']) : ?>
               		<form action="include/loginin.php" method="post">
                		<label for="inputLogin" ><font color="green"><?php echo $_SESSION['message']; unset($_SESSION['message']);  ?></font></label>
		                    <div class="form-group">
		                        <label for="inputLogin">Login</label>
		                        <input type="text" name="login" class="form-control" id="inputLogin" aria-describedby="emailHelp"
		                            placeholder="Login">
		                    </div>
		                    <div class="form-group">
		                        <label for="inputPassword">Password</label>
		                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
		                    </div>
		                    <div class="row justify-content-around rowLoginButtons">
		                        <button type="submitLogin" class="btn btn-primary" >Log in</button>
								
		                        <button formaction="registration.php" type="submitSignin" class="btn btn-primary" > Sign up</button>
						
							</div>
					</form>
					<?php else : ?>
						
						<label for="inputLogin">WELCOM "<?= $_SESSION['user']['login']?>"!</label>	

						<form action="include/loginout.php" method="post">
							<button type="submitSignin" class="btn btn-primary" > Login out</button>
						</form>
                   	<?php endif ?>

                   		
                 
            </div>
        </div>