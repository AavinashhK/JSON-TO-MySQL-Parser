<?php

/*MovieSearch - Searching Movies with Keywords or Genre
		@author: Avinash
		@filename: json_mysql_parser.php
		@date: 28 Aug 2015
		@version: 1.0 JSON to MySQL Processor
*/

require("settings.php");
require("data.php");

$parsing = json_decode($data_source);

	foreach($parsing as $entity) {

		$query = "INSERT INTO movies values('$entity->plot','$entity->rated','$entity->language','$entity->title','$entity->country','$entity->writer','$entity->year','$entity->metascore','$entity->imdb_id','$entity->director','$entity->released','$entity->imdb_rating','$entity->awards','$entity->poster','$entity->genre','$entity->actors','$entity->runtime','$entity->type','$entity->response','$entity->imdb_votes');";
			
			if(mysql_query($query)) {	
				echo "Success<br>"; 	
			} else {	
				echo "failed<br>";	
			}
			
		
	}

?>