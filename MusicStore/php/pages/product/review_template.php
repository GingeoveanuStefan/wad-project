<hr>

<div class="row">
	<div class="col-md-12">
		<?php 
		for ($i = 1; $i <= $review['rating']; $i++) {
			echo '<span class="glyphicon glyphicon-star"></span>';
		}
		for ($i = 1; $i <= 5 - $review['rating']; $i++) {
			echo '<span class="glyphicon glyphicon-star-empty"></span>';
		} 
		
		echo "\t" . $review['username'];
		

		
		echo '<span style="float:right;">' . $review['date'] . '</span>';
		
		
		
		echo '<p>' . $review['comment'] . '</p>';
		
		delete_comment_button($review['review_id']);
		
		?>
	</div>
</div>