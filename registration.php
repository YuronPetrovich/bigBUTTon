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
          
            <div class="col-lg-4">
                <form action="include/signup.php" method="post">

                    <div class="form-group">
                        <label for="inputLogin" ><font color="red"><?php echo $_SESSION['message']; unset($_SESSION['message']);  ?></font></label>
                       
                    </div>
                    <div class="form-group">
                        <label for="inputLogin">Login</label>
                        <input type="text" name="login" class="form-control" id="inputLogin" aria-describedby="emailHelp"
                            placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password1" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Repeat assword</label>
                        <input type="password" name="password2" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="row justify-content-around rowLoginButtons">
                        <form>
                             <button type="submitLogin" class="btn btn-primary" formaction="index.php">Home page</button>
                        </form>
                       
						
                        <button type="submitSignin" class="btn btn-primary" > Sign up</button>
                   		
                    </div>
                </form>
            </div>
        </div>
        <div class="row main">
            


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