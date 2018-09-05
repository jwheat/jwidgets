<?php
	// Get the JSON
	$json = file_get_contents('http://stories.messiah.edu/dev/wp-json/posts?filter[posts_per_page]=5&filter[order]=ASC');
	// Convert the JSON to an array of posts
	$posts = json_decode($json);
	
	foreach ($posts as $p) {
		echo '<h3 class="wp-api-title">' . $p->title . '</h3>';
		/*echo $p->featured_image ? '<img class="wp-api-featured-img" src="' . $p->featured_image->guid . '">' : '';*/
		echo '<p class="wp-api-excerpt">' . $p->excerpt . '</p>';
		echo '<hr>';
	}
	
?>
