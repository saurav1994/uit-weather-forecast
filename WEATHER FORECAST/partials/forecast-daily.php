<div class="row">
				<?php
				
					// set counter at 0
					$i = 0;
					
					
					// start the for each loop to get hourly forecast
					
					foreach($forecast->daily->data as $day):
					
					$average_temp = (round($day->temperatureHigh)+round($day->temperatureLow))/2;
					
				?>
				  <div class="col-12 col-md-4">
				  	<div class="card p-4 mb-4">
				 		 <h2 class="h4">
						  <?php echo date("l", $day->time);?>&deg;
				 		 </h2>
				 		 <h3 class="display-4">
				 	      <?php echo round($average_temp);;?>&deg;
				 	    </h3>
				 		 <p class="lead m-0">
				         <?php echo celcius($average_temp);?>&deg;<abbr title="celcius"> C </abbr>
				       </p>
				 		 
				 		 <p class="lead">
				 		 Hi <?php echo round($day->temperatureHigh);?>&deg;
				  	  	</p>
				  	  	<p class="lead m-0">
				 		 Low <?php echo round($day->temperatureLow);?>&deg;
				  	  	</p>
				 		 <p class="lead">
				  		<span class="sr-only">Humidity </span><?php echo $day->humidity*100;?>%;
				  		</p>
				  		</div>
				  </div>
  			   	
  			   	<?php 
  			   	// increase counter by one for each iteration
  			   	$i++;
  			   	//stop the loopafter 12 iteration
  			   	
  			   	if($i==12) break;
  			   	//end the foreach loop
  			   	endforeach;
  			   	?>
				<div>	