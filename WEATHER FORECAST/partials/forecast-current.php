<div class="what">
<div class="card p-4" style="margin: 0 auto: max-width:320px:">
				<h2>CURRENT FORECAST</h2>		
				<h3 class="display-2"><?php echo $temperature_current;?>&deg;<abbr title="Farenheit"> F </abbr></h3>
				<p> <?php echo celcius($temperature_current);?>&deg; <abbr title="celcius"> C </abbr> </p>
				<h3>Humidity=<?php echo $humidity_current;?>%<h3>
				<p class="lead"><?php echo $summary_current;?><p>
				<p class="lead">Wind Speed=<?php echo $windspeed_current = $windspeed_current;?><abbr title="miles per hour"> MPH</abbr><p> 
			</div>
</div>