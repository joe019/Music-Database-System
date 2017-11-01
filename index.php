<!DOCTYPE html>
<html lang="en-us" data-ng-app="musicApp">

    <head>
        <meta charset="utf-8">
        <title>Music Database System</title>
        <script src="js/jquery-2.0.2.min.js"></script> 
        <script src="js/angular/angular.js"></script>
        <script src="js/angular/angular-route.js"></script>
        <script src="js/ng/mainController.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Miltonian" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>

    <body data-ng-controller="GlobalController" style=" background-image: url(views/images/musicNote2.jpg); 
          background-size: cover; background-attachment: fixed;">
        <header id="header" style="position: fixed !important; z-index: 10; width: 100%; margin: 0px"> 
            <div style="padding: 6px; background-color: black;color: white; border: 1px solid #aaa; font-family: Lobster; 
                 font-size: 34px; padding-left: 15px;">Music DataBase System</div>
        </header>
        <div id="content" data-ng-view="" autoscroll="true" class="view-animate"></div>
    </body>

</html>