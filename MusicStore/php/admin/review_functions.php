<?php function delete_comment_button($review_id) {
	if(isset($_SESSION['username']) && isset($_SESSION['admin']) && ($_SESSION['admin'])) {
		echo '<form method="post">';
		echo '<input type="hidden" name="review_id" value="' . $review_id . '"/>';
		echo '<input class="btn btn-link" type="submit" name="review_delete" value="Delete"/>';
		echo '</form>';
	}
}

if(isset($_SESSION['username']) && isset($_SESSION['admin']) && ($_SESSION['admin'])) {
	if(isset($_POST['review_delete']) && isset($_POST['review_id'] )) {
		$db->query("DELETE FROM reviews WHERE review_id='".$_POST['review_id']."'");
	}
} ?>