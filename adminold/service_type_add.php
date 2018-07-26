<?php include('common/header.php'); ?>
<?php 
require_once 'classes/Service.php';
$service = new Service();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_type'])) {
   $type_add = $service->typeAdd($_POST);
}
?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Package</span> -Type-Add</h4>
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
					<li><a href="form_validation.html">Package</a></li>
					<li class="active">Package type add</li>
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
		<!-- /page header -->


		<!-- Content area -->
	<div class="content">
		<div class="add_section">
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_theme_success">Add Type<i class="icon-play3 position-right"></i></button>

			<?php 
			    if (isset($type_add)) {
			      echo $type_add;
			    }
			?>

			<?php 
			    if (isset($del_type)) {
			      echo $del_type;
			    }
			?>
			<!-- Success modal -->
				<div id="modal_theme_success" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-success">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

						<form action="" method="POST">
						<div class="modal-body">
								<div class="form-group">
									<label class="control-label col-lg-2">Type Name <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="type_name" class="form-control" required="required" placeholder="Name">
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
							<button type="submit" name="add_type" class="btn btn-success">Add</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		<!-- /success modal -->
		</div>		
	</div>
	<!--table-->
			<div class="content">
				<table class="table datatable-select-basic">
					<thead>
						<tr>
							<th>Package Name</th>
							<th class="" style="width:225px !important;">Actions</th>
						</tr>
					</thead>
				<tbody>
				<?php 
				$types = $service->getAllTypes();
				if ($types) {
					while ($res = $types->fetch_assoc()) {

				 ?>
					<tr>
						<td><?php echo $res['type_name']; ?></td>
						<td class="text-center" style="width:265px !important;">
							
							<a class="btn btn-info" href="type_edit.php?type_id=<?php echo $res['type_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							<?php 

							  if (isset($_GET['del_type_id'])) {
							     $del_type_id =   $_GET['del_type_id'];
							     $del_type = $service->deleteType($del_type_id);
							  }

							 ?>
							<a class="btn btn-danger del" href="service_type_add.php?del_type_id=<?php echo $res['type_id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
						</td>	
					</tr>
				<?php }} ?>	
				</tbody>
			</table>
		</div>
		<!--table-->

				
	<?php include('common/footer.php'); ?>

