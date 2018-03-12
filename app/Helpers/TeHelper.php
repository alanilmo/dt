<?php 

	if(!function_exists('willExpireAt'))	{

		/**
		 *	@param: $date_created the date the entity is created
		 *
		 *	@return: returns the number of days before the entity will expire
		 */


		function willExpireAt($date_ceated)	{
			$current_time = time();		
			$date_ceated = strtotime($date_ceated);
			$time_diff = $current_time - $date_created;
			$day_difference = $time_diff / (3600 * 24);

			return intval(floor($day_difference) / 86400); //returns the nuumber of days before it will expire
		}
	}
