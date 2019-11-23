<?php 
include('config.php'); 
include('header.php'); 
?>
	
	<div class="container" style="margin-top:20px">
		<h2>Add Product</h2>
		
		<hr>
		
		<?php
		if(isset($_POST['submit'])){
			$cashier			= $_POST['cashier'];
			$product			= $_POST['product'];
			$category			= $_POST['category'];
			$price				= $_POST['price'];
			
			$check = mysqli_query($connection, "SELECT * FROM product WHERE name='$product'") or die(mysqli_error($connection));
			
			if(mysqli_num_rows($check) == 0){
				$sql = mysqli_query($connection, "INSERT INTO product(id_cashier, name, id_category, price) VALUES('$cashier', '$product', '$category', '$price')") or die(mysqli_error($connection));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="add.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="add.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Cashier</label>
				<div class="col-sm-10">
					<select name="cashier" class="form-control" required>
						<option value="1">Pevita Pearce</option>
						<option value="2">Raisa Andriana</option>
						<option value="3">Igor Muhammad Farhan</option>						
					</select>

				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Product</label>
				<div class="col-sm-10">
					<input type="text" name="product" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Category</label>
				<div class="col-sm-10">
				<select name="category" class="form-control" required>
						<option value="1">Food</option>
						<option value="2">Drink</option>											
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">					
					<input type="text" name="price" class="form-control" required>
					
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