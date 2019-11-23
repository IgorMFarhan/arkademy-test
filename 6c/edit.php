<?php 
include('config.php'); 
include('header.php');
?>

	
	<div class="container" style="margin-top:20px">
		<h2>Edit Data</h2>
		
		<hr>
		
		<?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			$queryShow = "SELECT product.id AS 'id', cashier.name AS 'Cashier', product.name AS 'Product', category.name AS 'Category', product.price AS 'Price' FROM product 
				INNER JOIN cashier ON product.id_cashier = cashier.id INNER JOIN category ON product.id_category = category.id WHERE product.id='$id'";
			$select = mysqli_query($connection, $queryShow) or die(mysqli_error($connection));
			
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			}else{
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php

		if(isset($_POST['submit'])){
			$cashier			= $_POST['cashier'];
			$product			= $_POST['product'];
			$category			= $_POST['category'];
			$price				= $_POST['price'];
			
			$sql = mysqli_query($connection, "UPDATE product SET name='$product', price='$price', id_category='$category', id_cashier='$cashier'  WHERE id='$id'") or die(mysqli_error($connection));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		
		<form action="edit.php?id=<?php echo $id; ?>" method="post">
		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Cashier</label>
				<div class="col-sm-10">
					<select name="cashier" class="form-control" required>
						<option value="1"<?php if($data['Cashier'] == 'Pevita Pearce'){ echo 'selected'; } ?>>Pevita Pearce</option>
						<option value="2"<?php if($data['Cashier'] == 'Raisa Andriana'){ echo 'selected'; } ?>>Raisa Andriana</option>
						<option value="3"<?php if($data['Cashier'] == 'Igor Muhammad Farhan'){ echo 'selected'; } ?>>Igor Muhammad Farhan</option>						
					</select>

				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Product</label>
				<div class="col-sm-10">
					<input type="text" name="product" class="form-control" value="<?php echo $data['Product']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Category</label>
				<div class="col-sm-10">
					<select name="category" class="form-control" required>
					<option value="1" <?php if($data['Category'] == 'Food'){ echo 'selected'; } ?>>Food</option>
					<option value="2" <?php if($data['Category'] == 'Drink'){ echo 'selected'; } ?>>Drink</option>
																	
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">					
					<input type="text" name="price" class="form-control" value="<?php echo $data['Price']; ?>" required>
					
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
				
			
			
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>