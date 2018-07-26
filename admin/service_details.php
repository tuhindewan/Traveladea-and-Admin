<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
if (isset($_GET['service'])) {
	$service_id = $_GET['service'];
}
require_once 'classes/Service.php';
$service = new Service();

?>


		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Service</a></li>
				<li class="breadcrumb-item"><a href="service_list.php">Service list</a></li>
				<li class="breadcrumb-item active">Service details</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Service</h1>
			<!-- end page-header -->
			
				<!-- begin row -->
				<div class="row">
				    <!-- begin col-10 -->
				    <div class="col-lg-12">
				        <!-- begin panel -->
	                    <div class="panel panel-inverse">
	                        <!-- begin panel-heading -->
	                        <div class="panel-heading">
	                            <div class="panel-heading-btn">
	                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
	                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
	                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
	                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
	                            </div>
	                            <h4 class="panel-title">Package list table</h4>
	                        </div>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                            <?php 
	                            $getData = $service->getServiceById($service_id);
	                            if ($getData) {
	                            	while ($res = $getData->fetch_assoc()) {
	                            ?>
	                            	<div class="panel-heading">
	                            		<div class="row">
	                            			<div class="col-md-10">
	                            				<?php echo $res['title']; ?>
	                            			</div>
	                            			<div class="col-md-2">
	                            				<?php if($res['status'] == '1'){ ?>
	                            				<span class="label label-success">Active</span>
	                            				<?php }else { ?>
	                            				<span class="label label-danger">Inactive</span>
	                            				<?php } ?>
	                            			</div>
	                            		</div>		
	                            	</div>
	                            	<hr>

	                            	<div class="panel-body">
	                            		<?php echo $res['description']; ?>
	                            	</div>
	                            <?php }} ?>
	                        </div>
	                        <!-- end panel-body -->
	                    </div>
	                    <!-- end panel -->
	                </div>
	                <!-- end col-10 -->
	            </div>
	            <!-- end row -->
		</div>
		<!-- end #content -->

<?php require_once 'partials/footer.php'; ?>
<script>
	$(document).ready(function() {
		App.init();
		TableManageResponsive.init();
	});
</script>	

