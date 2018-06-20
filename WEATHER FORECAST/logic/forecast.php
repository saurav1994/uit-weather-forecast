<?php 
		//test coordinates
		//'26.7271,88.3953'
		
		//Google geocode api url
		//https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyCM-9TUo5QIZO6xyBoRbNcWbRnDtfCnzfk
	//sanitize the form input
	$location = htmlentities($_POST['location']);
	//replace space i nthe form input with +
	$location = str_replace(' ','+',$location);
	//we will be using the google geo coding api to convert addresses,cities to coordinates
	//https://developers.google.com/maps/documentation/geocoding/start
	//we will send that coordinate to dark sky
	$geocode_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'&key=AIzaSyCM-9TUo5QIZO6xyBoRbNcWbRnDtfCnzfk';
	//lets decode the information we get back from google
	$location_data = json_decode(file_get_contents($geocode_url));
	//for testing results
	//echo '<pre>';
	//print_r($location_data);
	//echo '</pre>';
	
	//we need to get coordinates for whichever location the user searches
	//for to pass it to dark sky. this grabs coordinates
	//array from google
	$coordinates = $location_data->results[0]->geometry->location;
	//lets combine the latitude and longitude for dark sky
	$coordinates = $coordinates->lat.','.$coordinates->lng;
	
	//var_dump($place);
	
	//send the coordinates to darksky to get the forecast in return
	//
	//https://darksky.net/dev/docs
	$api_url = 'https://api.darksky.net/forecast/f9e72fe43764d0cfff2b7e9d45a89c46/'.$coordinates.'?exclude=minutely';
	//get the location that the users searches for to display along with the results
	$place = $location_data->results[0]->address_components[0]->long_name;
	//ddecode the forecast from dark sky
	$forecast = json_decode(file_get_contents($api_url));
	// set timzone based on current timezone
	//we will use this when we get hourly forecast
	date_default_timezone_set($forecast->timezone);
	
	//echo '<pre>';
	//print_r($forecast);
	//echo'</pre>';
	
	//Forecast variables to use on the partial files
	
	//current conditions
	$temperature_current = round($forecast->currently->temperature);
	$summary_current = $forecast->currently->summary;
	$windspeed_current = round($forecast->currently->windSpeed);
	$humidity_current = $forecast->currently->humidity*100;
	
	
	
	
	
	
	function celcius ($temp)
	{
		return round(($temp-32)*.555);
	}
	
	function farenheit ($temp)
	 {
			return round($temp*10*+32);
    }
	
	
	
	// set timzone based on current timezone
	date_default_timezone_set($forecast->timezone);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	