<!DOCTYPE html>
<html ng-app="mainapp" ng-controller="maincontroller">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agent Portal</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/bootstrapv4/js/js/angular.min.js"></script>
        <script type="text/javascript" src="https://mathieuspizza.com/myAlert/v1.1/myAlert.js"></script>
        <script src="assets/bootstrapv4/js/js/angular-route.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://mathieuspizza.com/myAlert/v1.1/myAlert.css">
         <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/374756/zingchart-2.1.4.min.js"></script>
        <script src="https://codepen.io/zingchart/pen/epvRNK"></script>
        <script type="text/javascript" src="assets/js/angularchart.js"></script>
        
        <script type="text/javascript" src="assets/js/controller.js"></script>
  <!-- base:css -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
  
  <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.27.6.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pubnub-angular@4.1.0/dist/pubnub-angular.min.js"></script>
 
    <!--<script src="https://cdn.pubnub.com/pubnub-3.7.21.js"></script>-->
    <!--<script src="https://cdn.pubnub.com/sdk/pubnub-angular/pubnub-angular-3.2.1.js"></script>-->
    <!--<script src="https://maps.googleapis.com/maps/api/js?places&key=AIzaSyDFDELdL7nb7HzoW_9prMIHcO4cbY9Kt8o"></script>-->
     
   
    
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../images/hplogo3.jpg" /> -->
</head>
<body  data-ng-init = "bodyOnLoad('<?php echo $_GET['session'] ?>') || getWebsiteList()" ng-cloak >
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="border-bottom:1px solid lightgray;">
        <div class=".navbar-brand brand-logo" >
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 250.9" style="enable-background:new 0 0 800 250.9; width: 100%; height: 50px;" xml:space="preserve">
            <style type="text/css">
              
              .st1{fill:#A83AEF;}
            </style>
            <g>
              <g>
                <path style="fill:#A83AEF;" d="M356.3,83.4c5.1,2.6,7.6,6,7.6,10.3c0,2.1-0.6,4-1.9,5.6c-1.3,1.6-2.9,2.4-5,2.4c-1.6,0-2.8-0.2-3.8-0.7
                  c-1-0.4-1.9-1-2.8-1.8c-0.9-0.7-1.8-1.3-2.7-1.8c-1-0.5-2.4-0.9-4.3-1.3c-1.9-0.4-3.4-0.6-4.6-0.6c-7.3,0-13,2.3-17.1,6.8
                  c-4.1,4.5-6.2,10.4-6.2,17.7c0,7,2.1,12.8,6.3,17.4c4.2,4.6,9.5,6.9,16,6.9c4.8,0,8.3-0.6,10.6-1.8c0.6-0.3,1.4-0.8,2.4-1.5
                  c1-0.7,2-1.3,2.8-1.7c0.9-0.4,1.9-0.6,3.2-0.6c2.4,0,4.4,0.8,5.8,2.3c1.4,1.6,2.1,3.6,2.1,6c0,2.3-1.4,4.5-4.1,6.6
                  c-2.7,2-6.3,3.7-10.8,4.9c-4.5,1.2-9.2,1.8-14.3,1.8c-7.5,0-14.1-1.8-19.8-5.3c-5.7-3.5-10.1-8.3-13.2-14.5
                  c-3.1-6.2-4.7-13.1-4.7-20.6c0-7.9,1.6-14.9,4.9-21c3.3-6.1,7.8-10.9,13.6-14.4c5.8-3.5,12.4-5.2,19.8-5.2
                  C344.6,79.5,351.3,80.8,356.3,83.4z"/>
                <path style="fill:#A83AEF;" d="M446.9,82c1.7,1.7,2.5,3.8,2.5,6.4v61.7c0,2.5-0.8,4.6-2.5,6.3c-1.7,1.7-3.7,2.6-6.3,2.6
                  c-2.5,0-4.6-0.8-6.2-2.5c-1.6-1.7-2.5-3.7-2.6-6.3c-2.4,2.8-5.7,5.2-9.8,7.2c-4.1,2-8.5,3-13.1,3c-6.7,0-12.8-1.7-18.2-5.2
                  c-5.4-3.5-9.8-8.2-12.9-14.4c-3.2-6.1-4.7-13.1-4.7-20.9c0-7.8,1.6-14.8,4.7-20.9c3.1-6.2,7.4-11,12.8-14.4
                  c5.4-3.5,11.4-5.2,17.9-5.2c4.7,0,9,0.9,13.1,2.6c4.1,1.7,7.5,3.9,10.4,6.5v-0.1c0-2.5,0.8-4.6,2.5-6.3c1.7-1.7,3.7-2.6,6.3-2.6
                  C443.2,79.5,445.3,80.3,446.9,82z M426.6,137.5c4-4.6,6-10.4,6-17.4c0-7-2-12.8-6-17.5c-4-4.7-9.1-7-15.5-7
                  c-6.2,0-11.3,2.3-15.3,7c-4,4.7-6,10.5-6,17.5c0,7,2,12.8,5.9,17.4c3.9,4.6,9.1,6.9,15.4,6.9C417.5,144.4,422.7,142.1,426.6,137.5
                  z"/>
                <path style="fill:#A83AEF;" d="M530.6,88.3c3.8,5.9,5.7,14,5.7,24.4v37.3c0,2.5-0.8,4.6-2.5,6.3c-1.7,1.7-3.7,2.6-6.3,2.6
                  c-2.5,0-4.6-0.9-6.3-2.6c-1.7-1.7-2.5-3.8-2.5-6.3v-37.3c0-5.3-1.1-9.6-3.4-12.6c-2.2-3.1-6.1-4.6-11.5-4.6
                  c-5.6,0-10.1,1.6-13.3,4.9c-3.2,3.3-4.8,7.4-4.8,12.3v37.3c0,2.5-0.8,4.6-2.5,6.3c-1.7,1.7-3.7,2.6-6.3,2.6
                  c-2.5,0-4.6-0.9-6.3-2.6c-1.7-1.7-2.5-3.8-2.5-6.3V89.9c0-2.5,0.8-4.6,2.5-6.3c1.7-1.7,3.7-2.6,6.3-2.6c2.5,0,4.6,0.9,6.3,2.6
                  c1.7,1.7,2.5,3.8,2.5,6.3v2.5c2.6-3.5,6.1-6.5,10.3-9c4.2-2.5,8.9-3.8,13.9-3.8C520,79.5,526.8,82.4,530.6,88.3z"/>
                <path style="fill:#A83AEF;" d="M620.3,83.4c1.6,1.5,2.3,3.4,2.3,5.6c0,1.2-0.4,2.6-1.2,4.4l-27.3,60.1c-0.7,1.7-1.7,3-3,3.9
                  c-1.3,1-2.8,1.5-4.4,1.6l-1.3,0.1c-1.7,0-3.2-0.5-4.6-1.5c-1.4-1-2.5-2.4-3.3-4.2l-27.1-60.1c-0.7-1.6-1-3.1-1-4.7
                  c0-1.9,0.8-3.7,2.5-5.3c1.7-1.6,3.7-2.4,6.1-2.4c1.8,0,3.5,0.5,5.1,1.5c1.6,1,2.7,2.3,3.5,4.1l20.1,46.1l20-45.9
                  c0.8-1.8,1.8-3.3,3.2-4.2c1.4-1,2.9-1.4,4.5-1.3C616.8,81.1,618.8,81.9,620.3,83.4z"/>
                <path style="fill:#A83AEF;" d="M705.7,82c1.7,1.7,2.5,3.8,2.5,6.4v61.7c0,2.5-0.8,4.6-2.5,6.3c-1.7,1.7-3.7,2.6-6.3,2.6
                  c-2.5,0-4.6-0.8-6.2-2.5c-1.6-1.7-2.5-3.7-2.6-6.3c-2.4,2.8-5.7,5.2-9.8,7.2c-4.1,2-8.5,3-13.1,3c-6.7,0-12.8-1.7-18.2-5.2
                  c-5.4-3.5-9.8-8.2-12.9-14.4c-3.2-6.1-4.7-13.1-4.7-20.9c0-7.8,1.6-14.8,4.7-20.9c3.1-6.2,7.4-11,12.8-14.4
                  c5.4-3.5,11.4-5.2,17.9-5.2c4.7,0,9,0.9,13.1,2.6c4.1,1.7,7.5,3.9,10.4,6.5v-0.1c0-2.5,0.8-4.6,2.5-6.3c1.7-1.7,3.7-2.6,6.3-2.6
                  C701.9,79.5,704,80.3,705.7,82z M685.4,137.5c4-4.6,6-10.4,6-17.4c0-7-2-12.8-6-17.5c-4-4.7-9.1-7-15.5-7c-6.2,0-11.3,2.3-15.3,7
                  c-4,4.7-6,10.5-6,17.5c0,7,2,12.8,5.9,17.4c3.9,4.6,9.1,6.9,15.4,6.9C676.3,144.4,681.4,142.1,685.4,137.5z"/>
                <path style="fill:#A83AEF;" d="M721.3,142.5c0-2.5,1.3-4.7,3.8-6.4c1.4-0.9,2.8-1.3,4.2-1.3c2,0,4,0.9,5.8,2.8c2.9,3,6,5.3,9.1,6.7
                  c3.2,1.5,7,2.2,11.5,2.2c7.6-0.3,11.4-3.2,11.4-8.6c0-2.8-1.3-5-3.9-6.4c-2.6-1.5-6.6-2.9-12-4.4c-5.6-1.6-10.2-3.1-13.8-4.7
                  c-3.6-1.6-6.6-3.9-9.2-7.1c-2.6-3.2-3.9-7.4-3.9-12.8c0-4.7,1.3-8.7,4-12.2c2.7-3.5,6.2-6.1,10.5-8c4.3-1.9,8.9-2.8,13.8-2.8
                  c5,0,9.9,0.9,14.9,2.8c5,1.8,8.8,4.6,11.7,8.2c1.3,1.6,1.9,3.3,1.9,5.3c0,2.2-0.9,4.1-2.8,5.5c-1.4,1.1-2.9,1.6-4.7,1.6
                  c-2.1,0-3.9-0.7-5.3-2c-1.8-2.1-4-3.8-6.8-5.1c-2.8-1.3-5.9-1.9-9.4-1.9c-7.4,0-11.1,2.7-11.1,8c0,2.1,0.7,3.9,2,5.2
                  c1.4,1.3,3.1,2.3,5.2,3.1c2.1,0.7,5,1.6,8.8,2.7c5.3,1.5,9.6,3,13.1,4.5c3.5,1.6,6.5,3.9,8.9,7.1c2.4,3.2,3.6,7.4,3.6,12.7
                  c0,4.8-1.4,8.9-4.2,12.5c-2.8,3.6-6.4,6.2-10.9,8.1c-4.4,1.8-9,2.8-13.6,2.8c-6.4,0-12.4-1.1-17.9-3.2s-10.1-5.6-13.6-10.4
                  C721.7,145.7,721.3,144.3,721.3,142.5z"/>
              </g>
              <g>
                <path style="fill:#A83AEF;" d="M507.1,191c1.8,1.2,3.2,2.8,4.3,4.8c1,2.1,1.6,4.4,1.6,6.9c0,2.6-0.5,4.9-1.6,7c-1,2.1-2.5,3.7-4.3,4.9
                  c-1.8,1.2-3.8,1.7-6,1.7c-1.7,0-3.3-0.4-4.8-1.1c-1.5-0.8-2.7-1.7-3.6-2.8v1.4c0,0.7-0.2,1.2-0.7,1.7s-1,0.7-1.7,0.7
                  c-0.7,0-1.2-0.2-1.7-0.7s-0.7-1-0.7-1.7v-32.3c0-0.7,0.2-1.3,0.6-1.7c0.4-0.4,1-0.7,1.7-0.7s1.3,0.2,1.7,0.7
                  c0.4,0.5,0.7,1,0.7,1.7v12.1c0.8-1.2,2-2.2,3.5-3.1c1.5-0.9,3.1-1.3,4.9-1.3C503.2,189.3,505.2,189.8,507.1,191z M504.5,210.8
                  c1.2-0.8,2.2-1.9,2.9-3.3c0.7-1.4,1-3,1-4.7c0-1.7-0.3-3.3-1-4.7c-0.7-1.4-1.6-2.5-2.9-3.3c-1.2-0.8-2.6-1.2-4.1-1.2
                  c-1.6,0-2.9,0.4-4.2,1.2c-1.2,0.8-2.2,1.9-2.9,3.2c-0.7,1.4-1,2.9-1,4.7s0.3,3.3,1,4.7s1.6,2.5,2.9,3.3c1.2,0.8,2.6,1.2,4.2,1.2
                  C501.9,212,503.3,211.6,504.5,210.8z"/>
                <path style="fill:#A83AEF;" d="M539.4,190.3c0.4,0.5,0.7,1,0.7,1.7v21.4c0,4.1-1.1,7.2-3.4,9.3c-2.3,2-5.3,3.1-9,3.1c-1.2,0-2.4-0.1-3.6-0.3
                  c-1.2-0.2-2.2-0.5-2.9-0.9c-1.2-0.6-1.8-1.3-1.8-2.3c0-0.2,0-0.4,0.1-0.6c0.2-0.6,0.5-1,0.8-1.3c0.4-0.3,0.8-0.4,1.2-0.4
                  c0.3,0,0.5,0,0.7,0.1c1,0.5,1.9,0.8,2.7,1.1c0.8,0.3,1.7,0.4,2.8,0.4c5.1,0,7.7-2.6,7.7-7.9v-1c-0.9,1.2-2,2.1-3.4,2.8
                  c-1.4,0.7-3,1-4.8,1c-2.7,0-4.9-0.9-6.4-2.6c-1.5-1.8-2.3-4-2.3-6.9V192c0-0.7,0.2-1.3,0.6-1.7s1-0.7,1.7-0.7s1.3,0.2,1.7,0.7
                  c0.4,0.5,0.7,1,0.7,1.7v13.6c0,2.2,0.5,3.8,1.4,4.8s2.4,1.6,4.4,1.6c1.9,0,3.4-0.6,4.7-1.8c1.2-1.2,1.8-2.7,1.8-4.6V192
                  c0-0.7,0.2-1.3,0.6-1.7s1-0.7,1.7-0.7S539,189.8,539.4,190.3z"/>
                <path style="fill:#A83AEF;" d="M564.2,214.9c-1.6-0.9-2.9-2.2-3.9-3.8c-0.3-0.5-0.4-0.9-0.4-1.3c0-0.6,0.2-1.2,0.7-1.6
                  c0.5-0.4,1-0.7,1.5-0.7c0.7,0,1.5,0.4,2.2,1.2c1.3,1.9,3,2.9,5.2,2.9c1.8,0,3.4-0.6,4.6-1.8c1.3-1.2,1.9-2.7,1.9-4.5v-21.8
                  c0-0.7,0.2-1.2,0.7-1.7c0.5-0.5,1.1-0.7,1.7-0.7c0.7,0,1.3,0.2,1.8,0.7s0.7,1,0.7,1.7v21.8c0,2-0.5,3.9-1.5,5.6
                  c-1,1.7-2.4,3-4.1,4c-1.7,1-3.7,1.5-5.8,1.5C567.6,216.3,565.8,215.9,564.2,214.9z"/>
                <path style="fill:#A83AEF;" d="M611.4,190.2c0.4,0.4,0.7,1,0.7,1.8v21.5c0,0.7-0.2,1.2-0.7,1.7c-0.4,0.5-1,0.7-1.7,0.7s-1.3-0.2-1.7-0.7
                  c-0.4-0.4-0.6-1-0.6-1.7v-1.3c-0.9,1.2-2,2.1-3.5,3c-1.5,0.8-3.1,1.2-4.8,1.2c-2.2,0-4.3-0.6-6.1-1.7c-1.8-1.2-3.3-2.8-4.3-4.8
                  c-1-2.1-1.6-4.4-1.6-7s0.5-4.9,1.6-7c1-2.1,2.5-3.7,4.3-4.8c1.8-1.2,3.8-1.7,6-1.7c1.8,0,3.4,0.4,4.9,1.1c1.5,0.7,2.7,1.7,3.6,2.8
                  v-1.2c0-0.7,0.2-1.3,0.6-1.7c0.4-0.5,1-0.7,1.7-0.7S610.9,189.7,611.4,190.2z M603.7,210.8c1.2-0.8,2.1-1.9,2.8-3.3s1-3,1-4.7
                  c0-1.7-0.3-3.3-1-4.7s-1.6-2.5-2.8-3.3c-1.2-0.8-2.6-1.2-4.1-1.2c-1.6,0-2.9,0.4-4.1,1.2c-1.2,0.8-2.2,1.9-2.8,3.3
                  c-0.7,1.4-1,3-1,4.7c0,1.8,0.3,3.3,1,4.7c0.7,1.4,1.6,2.5,2.8,3.3c1.2,0.8,2.6,1.2,4.1,1.2C601.1,212,602.5,211.6,603.7,210.8z"/>
                <path style="fill:#A83AEF;" d="M636.9,190.5c1.7,0.8,2.6,1.9,2.6,3.2c0,0.6-0.2,1.1-0.5,1.5c-0.4,0.4-0.8,0.7-1.4,0.7c-0.4,0-0.8-0.1-1-0.2
                  c-0.2-0.1-0.6-0.3-1-0.6c-0.2-0.2-0.5-0.4-0.9-0.7c-0.4-0.2-1-0.4-1.7-0.5c-0.7-0.1-1.4-0.2-2-0.2c-1.7,0-3.2,0.4-4.6,1.2
                  s-2.3,1.9-3.1,3.3c-0.7,1.4-1.1,3-1.1,4.7c0,1.8,0.4,3.3,1.1,4.7s1.7,2.5,3,3.3c1.3,0.8,2.8,1.2,4.4,1.2c1.7,0,3.1-0.3,4.2-0.8
                  c0.2-0.1,0.5-0.3,0.9-0.6c0.3-0.3,0.6-0.5,0.9-0.6c0.2-0.1,0.6-0.2,0.9-0.2c0.7,0,1.2,0.2,1.6,0.6c0.4,0.4,0.6,1,0.6,1.6
                  c0,0.7-0.4,1.4-1.3,2.1c-0.9,0.7-2,1.2-3.5,1.7c-1.5,0.4-3.1,0.6-4.7,0.6c-2.5,0-4.7-0.6-6.6-1.8c-1.9-1.2-3.4-2.8-4.4-4.9
                  c-1-2.1-1.6-4.4-1.6-6.9c0-2.5,0.5-4.9,1.6-6.9c1.1-2.1,2.6-3.7,4.6-4.9c2-1.2,4.2-1.8,6.7-1.8C633,189.3,635.1,189.7,636.9,190.5
                  z"/>
                <path style="fill:#A83AEF;" d="M666.5,213.5c0,0.7-0.3,1.2-0.8,1.7s-1,0.7-1.6,0.7c-0.7,0-1.3-0.3-1.7-0.8l-9.8-10.4l-3,2.7v6.1
                  c0,0.7-0.2,1.2-0.7,1.7c-0.4,0.5-1,0.7-1.7,0.7c-0.7,0-1.3-0.2-1.7-0.7c-0.4-0.5-0.7-1-0.7-1.7v-31.9c0-0.7,0.2-1.2,0.7-1.7
                  c0.4-0.5,1-0.7,1.7-0.7c0.7,0,1.2,0.2,1.7,0.7c0.4,0.5,0.7,1,0.7,1.7v20.1l12.2-11.2c0.6-0.5,1.1-0.7,1.7-0.7
                  c0.6,0,1.1,0.2,1.5,0.7c0.5,0.5,0.7,1,0.7,1.5c0,0.7-0.3,1.3-0.9,1.8l-8.6,7.6l9.5,10.3C666.3,212.3,666.5,212.8,666.5,213.5z"/>
                <path style="fill:#A83AEF;" d="M705.1,182.5c1.5,0.9,2.7,2.2,3.5,3.8c0.9,1.6,1.3,3.4,1.3,5.4c0,2-0.4,3.8-1.3,5.4c-0.9,1.7-2.1,3-3.5,3.9
                  c-1.5,1-3.1,1.4-4.9,1.4h-9.3v11c0,0.7-0.2,1.2-0.6,1.7c-0.4,0.5-1,0.7-1.6,0.7c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.4-0.6-1-0.6-1.7
                  v-30c0-0.7,0.2-1.2,0.7-1.7c0.5-0.5,1-0.7,1.7-0.7h11.5C702,181.1,703.6,181.6,705.1,182.5z M702.8,197.1c0.8-0.6,1.4-1.3,1.8-2.3
                  c0.4-1,0.7-2,0.7-3.1c0-1.7-0.5-3.1-1.5-4.3c-1-1.2-2.1-1.8-3.5-1.8h-9.3V198h9.3C701.2,198,702,197.7,702.8,197.1z"/>
                <path style="fill:#A83AEF;" d="M715.6,185.8c-0.4-0.3-0.6-0.9-0.6-1.7v-0.8c0-0.8,0.2-1.4,0.7-1.7c0.4-0.3,1.1-0.5,2.1-0.5s1.6,0.2,2,0.5
                  s0.6,0.9,0.6,1.7v0.8c0,0.8-0.2,1.4-0.6,1.7c-0.4,0.3-1.1,0.5-2,0.5C716.7,186.3,716,186.2,715.6,185.8z M719.3,215.1
                  c-0.4,0.5-1,0.7-1.7,0.7c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.7-1-0.7-1.7V192c0-0.7,0.2-1.2,0.7-1.7c0.4-0.5,1-0.7,1.7-0.7
                  c0.7,0,1.3,0.2,1.7,0.7c0.4,0.5,0.7,1,0.7,1.7v21.5C720,214.1,719.8,214.7,719.3,215.1z"/>
                <path style="fill:#A83AEF;" d="M749,200v13.5c0,0.7-0.2,1.2-0.7,1.7c-0.4,0.5-1,0.7-1.7,0.7c-0.7,0-1.2-0.2-1.7-0.7c-0.4-0.5-0.7-1-0.7-1.7
                  V200c0-2-0.4-3.5-1.3-4.7c-0.9-1.2-2.3-1.7-4.4-1.7c-1.3,0-2.5,0.3-3.6,0.9c-1.1,0.6-1.9,1.4-2.5,2.3c-0.6,1-0.9,2-0.9,3.2v13.4
                  c0,0.7-0.2,1.2-0.7,1.7c-0.4,0.5-1,0.7-1.7,0.7s-1.3-0.2-1.7-0.7s-0.6-1-0.6-1.7v-21.2c0-0.7,0.2-1.2,0.7-1.7
                  c0.4-0.5,1-0.7,1.7-0.7c0.7,0,1.3,0.2,1.7,0.7c0.4,0.5,0.7,1,0.7,1.7v1.7c0.9-1.3,2.1-2.4,3.6-3.3c1.5-0.9,3.2-1.4,4.9-1.4
                  C746,189.3,749,192.8,749,200z"/>
                <path style="fill:#A83AEF;" d="M778.1,203.4c-0.5,0.4-1,0.6-1.6,0.6H759c0.2,2.4,1.1,4.3,2.8,5.8c1.6,1.5,3.6,2.2,5.9,2.2
                  c1.6,0,2.9-0.2,3.9-0.7c1-0.5,1.9-1.1,2.6-1.8c0.5-0.3,1-0.4,1.4-0.4c0.6,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.9,0.6,1.4
                  c0,0.7-0.3,1.3-1,1.9c-1,1-2.2,1.8-3.8,2.4c-1.6,0.7-3.2,1-4.9,1c-2.7,0-5-0.6-7.1-1.7c-2-1.1-3.6-2.7-4.7-4.7
                  c-1.1-2-1.7-4.3-1.7-6.8c0-2.8,0.6-5.2,1.7-7.3c1.1-2.1,2.6-3.7,4.5-4.8c1.9-1.1,3.9-1.7,6-1.7c2.1,0,4.1,0.5,6,1.6
                  c1.9,1.1,3.3,2.6,4.5,4.5c1.1,1.9,1.7,4.1,1.7,6.4C778.8,202.5,778.5,203,778.1,203.4z M761.9,195.2c-1.4,1-2.2,2.7-2.7,4.8h14.6
                  v-0.4c-0.2-1.8-1-3.2-2.4-4.3c-1.4-1.1-3-1.7-4.8-1.7C764.8,193.6,763.2,194.1,761.9,195.2z"/>
              </g>
            </g>
            <g>
              <path style="fill:#A83AEF;" d="M150.4,179.7c-10.3,4.6-22,6.8-34.2,5.8c-34.4-2.8-62.1-31.1-64.1-65.5C49.7,79.3,81.9,45.6,122,45.6
                c25.1,0,47,13.2,59.4,32.9c3.4,5.4,9.2,8.9,15.6,8.9c0.3,0,0.6,0,0.9,0c15.4,0,24.7-17,16.5-30c-20.3-32-56.7-52.7-97.8-50.7
                C61.3,9.4,16.2,54.1,13,109.3c-1.7,29.7,8.5,56.9,26.2,77.5l-8,37.8c-1,4.6,3.7,8.4,8.1,6.5l36.6-16.4c14,6.5,29.6,10.2,46.1,10.2
                c36.1,0,68.1-17.5,87.9-44.5c9.5-13,0.5-31.3-15.6-31.3h-0.1c-6.3,0-11.7,3.5-15.9,8.2C165.7,171.5,150.4,179.7,150.4,179.7z"/>
              <circle style="fill:#A83AEF;" cx="92.3" cy="116.4" r="8.6"/>
              <circle style="fill:#A83AEF;" cx="120.4" cy="116.4" r="8.6"/>
              <circle style="fill:#A83AEF;" cx="148.4" cy="116.4" r="8.6"/>
            </g>
            </svg>
        </div>
        <a class="navbar-brand brand-logo-mini" href="#dashboard"><img src="images/canvaschat3.png" style="width: 98%;height:55px;"></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center"  id="leftarrow" style="transform:scale(1.5);" type="button" data-toggle="minimize" ng-click="closenav()">
          <span class="fa fa-arrow-circle-left"></span>
        </button>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize" id="rightarrow"  style="display:none;" ng-click="opennav()">
          <span class="fa fa-arrow-circle-right"   style="transform:scale(1.5);"></span>
        </button>
        <ul class="navbar-nav  mr-lg-2" style="color:#fff;">
          <!--<li class="nav-item nav-search d-none d-lg-block">-->
          <!--  <div class="input-group">-->
          <!--    <div class="input-group-prepend">-->
          <!--      <span class="input-group-text" id="search">-->
          <!--        <i class="icon-search" style="color:#fff;"></i>-->
          <!--      </span>-->
          <!--    </div>-->
          <!--    <input type="text"  class="form-control"  aria-label="search" aria-describedby="search" style="color:#fff;">-->
          <!--  </div>-->
          <!--</li>-->
        </ul>
        <ul class="navbar-nav navbar-nav-right">
           
        
          <!--<li class="nav-item dropdown d-flex mr-4 " ng-init="notificationtimer()">-->
              
          <!--     <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="" data-toggle="dropdown" style="color:#fcdeae;">-->
          <!--        <div class="preview-thumbnail">-->
          <!--              <i class="fa fa-bell"></i>-->
          <!--              <span  class="badge badge-danger badge-counter" ng-show="counter > 0 ">{{counter}}</span>-->
          <!--          </div>-->
          <!--      </a>-->
            <!--<a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="" data-toggle="dropdown" >-->
            <!--  <i > </i> &nbsp; <b>{{fname}}</b> -->
            <!--</a>-->
          <!--  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown" style="width:400px;">-->
          <!--    <p class="mb-0 font-weight-normal float-left dropdown-header" >Request for Leads Despute</p>-->
                
          <!--          <div class="dropdown-item preview-item"  style="border-top:1px solid lightgray;border-bottom:1px solid lightgray;cursor:pointer;"  ng-repeat="n in disputenotification">-->
          <!--               <div class="font-weight-bold" >-->
          <!--                      <div >Lead From: {{n.website}}</div>-->
          <!--                      <div >Date Converted: {{n.date}}</div>-->
          <!--                  </div>-->
          <!--                  <div class="dropdown-list-image ml-3"><button class="btn btn-primary btn-xs" ng-click="viewdisputethread(n.chatid, n.thread)">View</button></div>-->
          <!--          </div>-->
                           
                
              
             
          <!--  </div>-->
          <!--</li>-->
          <!-- <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <div class="user-profile" >
          <div class="user-image mt-3">
            <img ng-src="{{update_profile_source}}">
          </div>
           <div class="user-name">
               
                <li  style="list-style:none" title="Click here to view profile settings">
                    <a class="nav-link" data-toggle="collapse" class="tooltip" href="" data-target="#profilenav" aria-expanded="false" aria-controls="profilenav" style="cursor: pointer; border-bottom:1px solid #fff;">
                      <i class="fa fa-user" style="color:#fff;font-size:13px;"></i>
                      <span class="menu-title" style="color:#fff;font-size:11px;">Admin ( {{clientfirstname}} )<i class="menu-arrow pull-right"></i></span>
                  
                     
                    </a>
                    <div class="collapse" id="profilenav" style="border-bottom:1px solid #fff; padding:0">
                   
                          <ul  style=" margin-top:10px; text-align:left;padding-left:35%;">
                            <li  style="list-style:none;cursor:pointer;"  ng-click="logoutuser()"><a href=""  style="color:#fff;"> <i class="fa fa-sign-out"></i> Logout</a></li>
                            <li  style="list-style:none;cursor:pointer;"><a  href="#profile" style="color:#fff;">   <i class="fa fa-user-circle"></i>  Profile </a></li>
                          </ul>
                     
                    </div>
                  </li>
            
          </div>
          
        </div> 
        <ul class="nav" id="mynav" >
            <li class="nav-item" id="messagesBTN">
            <a class="nav-link" href="#messages" >
              <i class="fa fa-comments menu-icon"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li> 
            <li class="nav-item" id="historyBTN">
            <a class="nav-link" href="#history">
              <i class="fa fa-history menu-icon"></i>
              <span class="menu-title"> Chat History</span>
            </a>
          </li>
         
          <li class="nav-item" id="leadsBTN">
            <a class="nav-link" href="#leads" >
              <i class="fa fa-list menu-icon"></i>
              <span class="menu-title">Leads</span>
            </a>
          </li>
          
         
           <li class="nav-item" id="reportBTN"  >
            <a class="nav-link" href="#report">
              <i class="fa fa-table menu-icon"></i>
              <span class="menu-title"> Report</span>
            </a>
          </li>
       
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <div ng-view></div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://canvaschat.com/" target="_blank" class="text-info">Canvas Chat</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed by: VBN DevTeam</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    
     <div class="modal fade" id="viewdisputeleads">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <label><strong> Lead conversation.</strong></label>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="form-control" style="background:darkgray;color:#fff;">Chat ID: {{ChatID}}</label>
                <ul>
    			    <li ng-repeat="i in disputethreadConvo" style="border:none;">
    			        <div ng-if="i.sender_uuid != 0">
    			            <div ng-if="i.agentname == 'undefined'" style="width: 100%; float: left; font-size:13px; display: block; margin-bottom: 10px">
        			            <p style="max-width: 80%; padding: 15px; background: #fff; border:1px solid rgba(0,0,0,.2); color: #000; float: left; border-radius: 8px;">
        			                <b>{{i.visitorname}}:&nbsp;</b>
        			                {{i.content}}
        			            </p>
        			        </div>
        			        
        			        <div ng-if="i.agentname != 'undefined'" style="width: 100%; float: right; font-size:13px; display: block; margin-bottom: 10px">
        			            <p style="max-width: 80%; padding: 15px; background: #F2FFED; border:1px solid rgba(0,0,0,.2); color: #000; float: right; border-radius: 8px;">
        			                <b>{{i.agentname}}:&nbsp;</b>
        			                {{i.content}}
        			            </p>
        			        </div>
    			        </div>
    			        
    			        <div ng-if="i.sender_uuid == 0">
        			        <div style="width: 100%; float: right; font-size:13px; display: block; margin-bottom: 10px">
        			            <p style="max-width: 80%; padding: 15px; background: #F2FFED; border:1px solid rgba(0,0,0,.2); color: #000; float: right; border-radius: 8px;">
        			                <b>CanvasChat:&nbsp;</b>
        			                {{i.content}}
        			            </p>
        			        </div>
    			        </div>
    			    </li>
    			</ul>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" ng-model="ChatID">
                <span><button  class= "btn btn-xs btn-primary" ng-click="Disapprovedispute(ChatID)">Reject Despute</button></span>
                <span><button  class= "btn btn-xs btn-primary" ng-click="Approvedispute(ChatID)"> Remove Lead</button></span>
             
            </div>
        </div>
    </div>
</div>
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>


</body>
<script>

</script>
</html>

