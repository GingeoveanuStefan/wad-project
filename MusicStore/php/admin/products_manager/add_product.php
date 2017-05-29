


<div class="thumbnail">

	<table class="table">
	
		<thead>
		  <tr>
			<th><center> <h2> Add product </h2> </center> </th>
		  </tr>
		</thead>
		
		<tbody>
			<form method="post" enctype="multipart/form-data">
				<tr>
				  <th><b>UID:</b></th>
				  <td> <input type="text" name="uid" required /> </td>
				</tr>
				<tr>
				  <th><b>Name:</b></th>
				  <td> <input type="text" name="name" required /> </td>
				</tr>
				<tr>
				  <th><b>Description:</b></th>
				  <td> <textarea name="description" ></textarea> </td>
				</tr>
				<tr>
				  <th><b>Category:</b></th>
				  <td> <input type="text" name="category" /> </td>
				</tr>
				<tr>
				  <th><b>Price:</b></th>
				  <td> <input type="number" name="price" required /> </td>
				</tr>
				<tr>
					<th><b>Image:</b></th>
					<td> <input type="file" name="image" id="image"> </td>
					<input type="hidden" name="max_size" value="2000000">
				</tr>
				<tr>
					<td> <center> <input class="btn btn-primary" type="submit" name="submitAddQuery" /></center> </td>
				</tr>
			</form>
		</tbody>
		
	</table>

</div>
	