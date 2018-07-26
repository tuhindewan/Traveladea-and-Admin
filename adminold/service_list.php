<?php require_once 'common/header.php'; ?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Service</span> - List</h4>
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
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="index.php">Service</a></li>
							<li class="active">Service list</li>
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
require_once 'classes/Service.php';
$service = new Service();
?>

<?php 

  if (isset($_GET['del_service_id'])) {
     $del_service_id =   $_GET['del_service_id'];
     $del_ser = $service->deleteService($del_service_id);
  }

 ?>
<?php 
    if (isset($del_ser)) {
      echo $del_ser;
    }
?>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">


					<!-- Basic initialization -->
				
						<table class="table datatable-select-basic">
							<thead>
								<tr>
									<th>Service Name</th>
									<th>Description</th>
									<th>Status</th>
									<th class="" style="width:225px !important;">Actions</th>
								</tr>
							</thead>
				<tbody>
				<?php 
				$services = $service->getAllServices();
				if ($services) {
					while ($res = $services->fetch_assoc()) {

				 ?>
					<tr>
						<td><?php echo $res['title']; ?></td>
						<td><?php echo substr($res['description'], 0,50);  ?><?php if (strlen($res['description']) > 50) { ?>.... <?php } ?></td>
						<td>
						<?php if($res['status'] == '1'){ ?>
						<span class="label label-success">Active</span>
						<?php }else { ?>
						<span class="label label-danger">Inactive</span>
						<?php } ?>
						</td>
						<td class="text-center" style="width:225px !important;">
							<a class="btn btn-success" href="service_view.php?service_id=<?php echo $res['service_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
							<a class="btn btn-info" href="service_edit.php?service_id=<?php echo $res['service_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							<a class="btn btn-danger del" href="service_list.php?del_service_id=<?php echo $res['service_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
						</td>
					</tr>
				<?php }} ?>					
				</tbody>
			</table>
		</div>
					<!-- /Basic initialization -->


					<!-- Single item selection -->
					
					<!-- /control buttons -->


					<!-- Footer -->
<?php include('common/footer.php'); ?>