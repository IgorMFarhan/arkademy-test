<?php
//memasukkan file config.php
include('config.php');
include('header.php');
?>

	<div class="container" style="margin-top:100px">
		
		
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Cashier</th>
					<th>Product</th>
					<th>Category</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$queryShow = "SELECT product.id AS 'id', cashier.name AS 'Cashier', product.name AS 'Product', category.name AS 'Category', product.price AS 'Price' FROM product 
				INNER JOIN cashier ON product.id_cashier = cashier.id INNER JOIN category ON product.id_category = category.id";
				$sql = mysqli_query($connection, $queryShow ) or die(mysqli_error($connection));
				
				if(mysqli_num_rows($sql) > 0){
					
					$no = 1;
			
					while($data = mysqli_fetch_assoc($sql)){
						
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['Cashier'].'</td>
							<td>'.$data['Product'].'</td>
							<td>'.$data['Category'].'</td>
							<td>'.$data['Price'].'</td>
							<td>
								<a href="edit.php?id='.$data['id'].'" class="badge badge-warning">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				
				}else{
					echo '
					<tr>
						<td colspan="6">No Data</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>