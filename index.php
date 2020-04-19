<?php
session_start();
	require_once'include/db.php';
	require_once'include/functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="container-fluid">

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
        <div class="row main">
            <div class="col-lg-8">Карта</div>
            <div class="col-lg-4">
                <form>
					<?php if($_SESSION['user']['role_id'] == 1) : ?>
	                    <div class="form-group">
	                        <a class="form-control" id="edit_users" href="edit_users.php">Edit users</a>
	                    </div>
					<?php endif ?>

					<?php if($_SESSION['user']['role_id'] == 1 || $_SESSION['user']['role_id'] == 2 || $_SESSION['user']['role_id'] == 4) : ?>
                    <div class="form-group">
                        <a class="form-control" id="Edit_boreholes" href="edit_boreholes.php">Edit boreholes</a>
                    </div>
					<?php endif ?>
                    <?php if($_SESSION['user']['role_id'] == 1|| $_SESSION['user']['role_id'] == 2 || $_SESSION['user']['role_id'] == 5) : ?>
                    <div class="form-group">
                        <a class="form-control" id="edit_fields" href="edit_fields.php">Edit fields</a>
                    </div>
                    <?php endif ?>
                </form>
                <div class="container-fluid links">
                    <div class="row">
                        <a href="index.php">boreholes</a>
                    </div>
                    <div class="row">
                        <a href="fields.php">fields</a>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <select class="form-control" id="selectBoreholes">
                            <option selected disabled hidden>boreholes</option>
							<?php 
								$boreholes = get_boreholes($link);
							?>
							<?php if(count($boreholes) == 0) : ?>
								<option>Скважены не найдены</option>
							<?php else :?>
								<?php foreach ($boreholes as $borehole) : ?>
								<option><?=$borehole["name"]?></option>
								<?php endforeach ;?>     
                        <?php endif;?>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="selectBoreholesFields">
                            <option selected disabled hidden>fields of the borehole</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <select class="form-control" id="selectFiles">
                                    <option selected disabled hidden>files</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submitDownloading" class="btn btn-primary">Download</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row footer">
            <div class="col-lg-8">Footer</div>
            <div class="col-lg-4">Contacts</div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>