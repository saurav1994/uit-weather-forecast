<ul class="list-group"style="margin: 0 auto: max-width:320px:">
				<?php
				
					// set counter at 0
					$i = 0;
					
					
					// start the for each loop to get hourly forecast
					
					foreach($forecast->hourly->data as $hour):

								
					
				?>
				  <li class="list-group-item d-flex justify-content-between">
				  <p class="lead m-0">
				 	 <?php echo date("g a", $hour->time);?>&deg;
				  </p>
				  <p class="lead m-0">
				  <?php echo round($hour->temperature);?>&deg;<abbr title="Farenheit"> F </abbr>
				  </p>
				  <p class="lead m-0">
				  <?php echo celcius($hour->temperature);?>&deg;<abbr title="celcius"> C </abbr>
				  </p>
				  <p class="lead m-0">
				  <span class="sr-only">Humidity </span><?php echo $hour->humidity*100;?>%;
				  </p>
				  </li>
  			   	
  			   	<?php 
  			   	// increase counter by one for each iteration
  			   	$i++;
  			   	//stop the loopafter 12 iteration
  			   	
  			   	if($i==12) break;
  			   	//end the foreach loop
  			   	endforeach;
  			   	?>
</ul>