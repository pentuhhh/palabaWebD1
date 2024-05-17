<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Just Me Again Down Here' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="businessdashboard.css">
    <title>Palaba</title>
</head>
<body>
    <img src="images/Vector (1).png" class="des1">
    <div class="header" id="myHeader"></div>
    <div class="navbar" id="navbar">
        <center>
            <a href="businesshome.html">Home</a>
            <a href="busprofile.html">Profile</a>
            <a href="bustrack.html"><strong>Dashboard</strong></a>
        </center>
        
    </div>


    <div class="wrapper">
        <div class="dashboardcontainer">
            <div class="dashboardbox">
                <div class="log1">
                    <span class="title">Palaba</span>
                </div>
            </div>

            <div class="crudContainer">
                <form action="submit" id="crudForm">
                    <div class="input-group">
                        <input type="text" name="crudUsernameInput" placeholder="Username" class="input-field">
                        <input type="text" name="crudOrderStatus" placeholder="Status" class="input-field">
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn create-btn">Create</button>
                        <button type="submit" class="btn delete-btn">Delete</button>
                        <button type="submit" class="btn update-btn">Update</button>
                    </div>
                </form>
            </div>
            

        </div>
    </div>
    
        

   
</body> 
</html>