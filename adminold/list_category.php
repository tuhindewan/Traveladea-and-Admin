<?php require_once 'common/header.php'; ?>


<?php 
require_once 'classes/Package.php';
$package = new Package();
?>

<?php 

  if (isset($_GET['del_package_id'])) {
     $del_package_id =   $_GET['del_package_id'];
     $del_pac = $package->deletePackage($del_package_id);
  }

 ?>



		
			<!-- /main sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Package</span> - List</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="datatable_extension_select.html">Package</a></li>
							<li class="active">Package list</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<?php 
				    if (isset($del_pac)) {
				      echo $del_pac;
				    }
				?>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Basic initialization -->
				
						<table class="table datatable-select-basic">
							<thead>
								<tr>
									<th>Package Name</th>
									<th>Price</th>
									<th>Type</th>
									<th>Country</th>
									<th>Status</th>
									<th class="" style="width:225px !important;">Actions</th>
								</tr>
							</thead>
				<tbody>
				<?php 
				$packages = $package->getAllPackages();
				if ($packages) {
					while ($res = $packages->fetch_assoc()) {

				 ?>

					<tr>
						<td><?php echo $res['title']; ?></td>
						<td><?php echo $res['price']; ?></td>
						<td>Traffic Court Referee</td>
						<td><?php echo $res['country']; ?></td>
						<td>
						<?php if($res['status'] == '1'){ ?>
						<span class="label label-success">Active</span>
						<?php }else { ?>
						<span class="label label-danger">Inactive</span>
						<?php } ?>
						</td>
						<td class="text-center" style="width:225px !important;">
							<a class="btn btn-success" href="view.php?package_id=<?php echo $res['package_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
							<a class="btn btn-info" href="edit.php?package_id=<?php echo $res['package_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							
							<a class="btn btn-danger del" href="Package_list.php?del_package_id=<?php echo $res['package_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
						</td>
					</tr>	

					<?php }} ?>

				</tbody>
			</table>

<?php include('common/footer.php'); ?>