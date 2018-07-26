<?php include('common/header.php'); ?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Edit</span> </h4>
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
					<li><a href="edit.php">Edit</a></li>
					
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
		
	<div class="content" style="min-height: 460px;">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Edit</h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>
<?php 
if (isset($_GET['service_id'])) {
	$service_id = $_GET['service_id'];
}
require_once 'classes/Service.php';
$service = new Service();
$getData = $service->getServiceById($service_id);
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit_edit'])) {
   $ser_edit = $service->serviceEdit($_POST , $service_id);
}
?>
			<div class="panel-body">
				<?php 
				    if (isset($ser_edit)) {
				      echo $ser_edit;
				    }
				?>
				<?php 
				if ($getData) {
					while ($res = $getData->fetch_assoc()) {
				?>
				<form class="form-horizontal form-validate-jquery" action="#" method="POST">
					<fieldset class="content-group">
						
						<div class="form-group">
							<label class="control-label col-lg-3">Service Status <span class="text-danger"></span></label>
							<div class="col-lg-9">
								<div class="checkbox checkbox-switch">
									<label>
										<input type="checkbox" name="status" value="1" <?php if($res['status']=='1'){echo 'checked';} ?>  data-on-text="Yes" data-off-text="No" class="switch" required="required">
										Active
									</label>
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3">Service Title <span class="text-danger"></span></label>
							<div class="col-lg-9">
								<input type="text" name="title" value=" <?php echo $res['title']; ?> " class="form-control" required="required" placeholder="Package Title">
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-lg-3">Description <span class="text-danger"></span></label>
							<div class="col-lg-9">
								<textarea rows="5" cols="5" name="description"  class="form-control" required="required" placeholder="Description"><?php echo $res['description']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3">Service Position<span class="text-danger"></span></label>
							<div class="col-lg-9">
								<input type="number" name="position" value="<?php echo $res['position']; ?>" class="form-control" required="required" placeholder="Package price">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3">Service Type <span class="text-danger"></span></label>
							<div class="col-lg-9">
								<select id="second" data-placeholder="Choose a Type..." class="chosen-select" name="type"  style="width:350px;" tabindex="4">
						          <option value=""></option> 
						          <?php
						          	$types = $service->getAllTypes();
						          ?>
						          <?php
						          if ($types) {
						          	while ($val = $types->fetch_assoc()) {

						          ?>
						          <option value="<?php echo $val['type_name']; ?>" <?php if($res['type_name']=='United States'){echo 'selected';}?> > <?php echo $val['type_name']; ?> </option> 
						          <?php }} ?>
						        </select>
							</div>
						</div>
				</fieldset>
					<div class="text-right">
						<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
						<button type="submit" class="btn btn-primary" name="submit_edit">Submit <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>
				<?php }} ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(".chosen-select").chosen();
	</script>
	
<?php include('common/footer.php'); ?>