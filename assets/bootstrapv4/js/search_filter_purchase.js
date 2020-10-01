var app = angular
		  .module("myModule" , []);
		  app.controller("myController", function($scope) {

		  		var purchase = [
		  			{ purchase_date: "01-15-18" , fullname: "Jeffrey D. Abellon" , address: "Rizal, Molave, Zds" , total_kilos: 100 , deduction: 10 , total_payment: "P567" },
		  			{ purchase_date: "01-15-18" , fullname: "Archie Nikka M. Bercero" , address: "Campo 4, RM, Zds" , total_kilos: 200 , deduction:20 , total_payment: "P1235" },
		  			{ purchase_date: "01-15-18" , fullname: "Gretchen B. Calib-og" , address: "Dipolo, Molave, Zds" , total_kilos: 150 , deduction: 15 , total_payment: "P1000" }
		  		];

		  		$scope.purchase = purchase ;
		  });