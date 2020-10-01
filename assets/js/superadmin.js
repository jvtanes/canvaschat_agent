var app = angular.module("superadminApp", ["ngRoute"])
	.config(function ($routeProvider, $locationProvider) {
	$locationProvider.hashPrefix('');
	$routeProvider
    
	});
	
	app.controller("superadminController", function($scope , $http, $route, $location){
	    
                 $scope.login=function(){
                    $http.post("assets/process/login.php", {
                        "user": $scope.username,
                        "pass":$scope.password
                    }).then(function (response) {
                        console.log(response.data);
                        if ( response.data !== "error") {
                            localStorage.setItem("accountid", response.data[0].account_id);
                            localStorage.setItem("profileid", response.data[0].profile_id);
                            sessionStorage.setItem("sessionID", response.data[0].session_id);
                            document.cookie = "sid="+response.data[0].session_id+"; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/";
                           
                                window.location.href = 'pages/index.php?id='+response.data[0].profile_id;
                                alert("Successfully logged in.");
                                $scope.user = null;
                                 $scope.pass = null;
                        } else {
                            alert("Invalid username or password.");
                        }
                    });
                    
                }
                
                
                
                   function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                
                for(var i = 0; i <ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    } if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                } return "";
            }
            
            
                $scope.bodyOnLoad = function() {
            
                $scope.session_id = sessionStorage.getItem("sessionID");    
                            
                if (sessionStorage.getItem("sessionID") === null) {
                    if (getCookie("sid") !== "") {
                        var sid = getCookie("sid");
                       
                      $http.post("assets/process/logoutsession.php", {
                        id: sid
                    }) .then(function (data) {
                        console.log(data.data);
                        if (data.data == "logout") {
        				    localStorage.clear();
                            sessionStorage.clear();
                            document.cookie = 'sid=' + sid + '; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=/';
                            
        				} 
                    });
                    } else {
                        localStorage.clear();
                        sessionStorage.clear();
                    }
                }
                else{
                    localStorage.clear();
                    sessionStorage.clear();
                }
              
          }
          
	    
	});
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    