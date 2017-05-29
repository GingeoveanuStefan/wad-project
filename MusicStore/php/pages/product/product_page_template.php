<div class="container">
  <div class="row">
		<div class="col-md-3">
			<div class="thumbnail">
				<div class="caption-full">
					<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'"/>' ?>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			
				<p class="Lead"> <u> <a> <?php echo $product['name'] ?> </a> </u> </p>
				<p class="Lead"> <b> Price:</b> $  <?php echo $product['price'] ?> 
				
					<span style="float:right;">
						<?php 
							for ($i = 1; $i <= $avg_rating; $i++) {
								echo '<span class="glyphicon glyphicon-star"></span>';
							}
							for ($i = 1; $i <= 5 - $avg_rating; $i++) {
								echo '<span class="glyphicon glyphicon-star-empty"></span>';
							} 
                            echo $avg_rating . " stars";
						?>
                    </span>
				</p>		
				
				<p class="Lead"> <b> Description: </b> 
					<span style="float:right;">
					<?php echo $reviewCount; 
						if($reviewCount == 1) echo " Review";
						else  echo " Reviews"; 
					?>
					</span>
				</p>
				<p > <?php echo $product['description'] ?> </p>
			
		</div>
    </div>

	
	<!-- REVIEWS -->
    <div class="container">
		<div class="col-md-8">
			<?php 
			
				include('php/admin/review_functions.php');
				$reviews = mysqli_query($db, "SELECT * FROM reviews WHERE product_uid='" . $product['uid'] . "'");
				
				while($review = mysqli_fetch_array($reviews) ) {
					include($filepath.'review_template.php');
				} 
			?>
		</div>
	
	
		<div class="col-md-2">
			<br><br>
			<form method="post">
				<table>
					<tr>
						<td colspan="2">
						
							<?php if(isset($_SESSION['username']) ) {  ?> 
							<input type="hidden" class="form-control" name="username" <?php echo 'value="'.$_SESSION['username'].'"'; ?> > 
								You are logged as <b> <?php echo $_SESSION['username']; ?> </b>.
							</input>
							
							<?php } else { ?>
							<input type="text" class="form-control" name="username" placeholder="Name"/>
							<?php } ?>
							
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="form-group" style="float:right;width:400px;">
							  <label for="comment"></label>
							  <textarea class="form-control" rows="3" name="comment" placeholder="Leave a review..."></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group" style="width:150px;">
								<label for="sel1">Rate:</label>
								<select class="form-control" name="rating">
									<option>5</option>
									<option>4</option>
									<option>3</option>
									<option>2</option>
									<option>1</option>
									<option>0</option>
								</select>
							</div> 
						</td>
						<td>
							<input style="float:right;" type="submit" class="btn btn-success" name="submit" value="Review" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	
	</div>
	
</div>