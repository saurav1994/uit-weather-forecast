<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<?php 
		//THIS GETS OUR FORECAST BASED ON OUR CO-ORDINATES
		require 'logic/forecast.php'; 
		//DOCTYPE AND ALL THE REST OF THE HEADER INFO
		//<BODY STARTS AS WELL
		require 'partials/header.php'; 
		//CONTAINS MAIN CONTENT
		//INCLUDES OTHER PHP REQUIRED FOR FORECASR(DAILY,WEEKLY)
		require 'partials/main1.php';
		//	CLOSES BODY AND HTML
		require 'partials/footer.php';
 ?>
</b>