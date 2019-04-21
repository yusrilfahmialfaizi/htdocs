<DOCTYPE html>
	<html lang="en">

	<head>
		<?php $this->load->view("admin/_partials/head.php") ?>
	</head>
	<body id="page-top">
		<?php $this->load->view("admin/_partials/navbar.php") ?>

		<div id="wrapper">
			<?php $this->load->view("admin/_partials/sidebar.php") ?>

			<div id="content-wrapper">

			<div class="container-fluid">
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/produk/add.php') ?>"> <i class="fas fa-plus"></i> Add New</a>
					</div>
					
				<div class="card-body">
					<div class="table-responsive">
						<form action="<?php echo base_url(). 'index.php/admin/produk/add'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	 
						</div>
					</div>
				</div>
				
			</div>
			<!-- /.container-fluid -->
			<!-- Sticky Footer -->
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
	</body>
</DOCTYPE>