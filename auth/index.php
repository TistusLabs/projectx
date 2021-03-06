<?php
require_once ("../include/config.php"); require_once ("../include/authenticity.php");
?>

<!DOCTYPE html>
<html lang="en" class="" ng-app="loginapp">

<head>
    <meta charset="utf-8" />
    <title>BitSMS Authentication</title>
    <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="../libs/assets/animate.css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../libs/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="../libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

    <link rel="stylesheet" href="../css/font.css" type="text/css" />
    <link rel="stylesheet" href="../css/app.css" type="text/css" />

</head>

<body ng-controller="MainController">
    <div class="app app-header-fixed ">


        <div ui-view></div>


    </div>

    <script src="../libs/jquery/jquery/dist/jquery.js"></script>
    <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/ui-load.js"></script>
    <script src="../js/ui-jp.config.js"></script>
    <script src="../js/ui-jp.js"></script>
    <script src="../js/ui-nav.js"></script>
    <script src="../js/ui-toggle.js"></script>
    <script src="../js/ui-client.js"></script>
    <script type="text/javascript" src="../bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="../bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script type="text/javascript" src="../js/controllers/uiKernal.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="controllers/signin.controller.js"></script>

</body>

</html>