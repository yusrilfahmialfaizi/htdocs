<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/_partial/head.php') ?>
</head>
<body id="page-top">
	<?php $this->load->view('admin/_partial/navbar.php') ?>
	<div id="wrapper">
		<?php $this->load->view('admin/_partial/sidebar.php') ?>
		<div id="content-wrapper">
			<div id="container-fluid">
				<?php $this->load->view('admin/_partial/breadcrumb.php') ?>
				<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/products/add') ?>"> <i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Products ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Products ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Option</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                      $no =1;
                      foreach ($products as $a ) {
                        # code...
                   ?>
                   <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->name ?></td>
                    <td><?php echo $a->price ?></td>
                    <td><?php echo $a->image ?></td>
                    <td><?php echo $a->description ?></td>   
                    <td width="250">
                        <a href="<?php echo site_url('admin/products/edit/'.$a->products_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
                        <a href="<?php echo site_url('admin/products/delete/'.$a->products_id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                   </tr>
                 <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      <!-- /.container-fluid -->

      <?php $this->load->view('admin/_partial/footer.php') ?>

			</div>
		</div>
	</div>
  <?php $this->load->view('admin/_partial/js') ?>
</body>
</html>