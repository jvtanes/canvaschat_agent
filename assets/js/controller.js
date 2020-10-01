var audio = new Audio('assets/bell.mp3');
var chatRequest_sound = new Audio('assets/telephone.mp3');
var socket = io("https://canvaschat.com:3000");

var  app=angular.module("mainapp", ["ngRoute", "pubnub.angular.service", "zingchart-angularjs"]);

app.run(['Pubnub', function (Pubnub) {
    Pubnub.init({
        publish_key: 'pub-c-5ca5090b-02a8-413e-9cb8-ccfebc958ebf',
        subscribe_key: 'sub-c-5e2b791c-5a8b-11ea-9a59-eab2515ceb0d',
        ssl: true
    });
}]);

app.config(function ($routeProvider, $locationProvider) {
    $locationProvider.hashPrefix('');
    
    $routeProvider
        .when("/messages", {
            templateUrl: "chat.php",
            controller: "maincontroller"
        }).when("/leads", {
            templateUrl: "leads.php",
            controller: "maincontroller"
        }).when("/report", {
            templateUrl: "report.php",
            controller: "maincontroller"
        }).when("/history", {
            templateUrl: "history.php",
            controller: "maincontroller"
        }).when("/profile", {
            templateUrl: "profile.php",
            controller: "maincontroller"
        }).otherwise({
            redirectTo: "/messages"
        });
});

var myalert = new Myalert(); 
$(document).ready(function() {
    myalert.initialize();
});

app.factory("callFunction", function($http, $interval, $timeout, $location) {
    return {
        
    };
});

app.controller("maincontroller", function($scope, callFunction, Pubnub, $pubnubChannel, $http, $timeout, $location){
    socket.on("connect", () => {
        console.log("Connected to server!");
    });
    
    socket.on("newRequest", data => {
        console.log(data);
    });
});