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

       <?php include "header.php" ?>

        <div class="row main">
        
            <div class="col-lg-4">
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
                        <input type="" name="" class="form-control" id="selectBoreholesFields">
                            
                        </input>
                    </div>
                    <div class="form-group">
                        <input type="" name="" class="form-control" id="selectBoreholesFields">
                            
                        </input>
                    </div>
                    <div class="form-group">
                        <input type="" name="" class="form-control" id="selectBoreholesFields">
                            
                        </input>
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
                            
                                <button type="submitDownloading" class="btn btn-primary">Delete selected field</button>
                            
                        </div>
                          
                             
                        </div>
                        <div > 
                    <button type="submitDownloading" class="btn btn-primary">Download file</button>
                </div>
                         <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>  <div class="row"> 
                        <label> </label>
                            
                        </div>
                        <button type="submitDownloading" class="btn btn-primary">Change</button>
                        <button type="submitDownloading" class="btn btn-primary">Delete</button>
  <div class="row"> 
                        <label> </label>
                            
                        </div>
<div > 
                    <button type="submitDownloading" class="btn btn-primary">Home</button>
                </div>
                    </div>

                </form>
                 <div class="col-lg-4">
            <div class="col">
                                <div class="row">
                            <div class="col">
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
                            
                                <button type="submitDownloading" class="btn btn-primary">Add selected fields</budtton>
                            
                        </div>
        </div>
            </div>
            
        </div>

        <?php include "footer.php" ?>     
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