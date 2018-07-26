<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Package.php';
$package = new Package();
if (isset($_GET['package'])) {
	$package_id = $_GET['package'];
}
$getData = $package->getPackageById($package_id);
?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Package</a></li>
				<li class="breadcrumb-item"><a href="package_list.php">Package list</a></li>
				<li class="breadcrumb-item active">Package details</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Package</h1>
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
	                            <h4 class="panel-title">Package details</h4>
	                        </div>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                        <?php 
	                        if ($getData) {
	                        	while ($res = $getData->fetch_assoc()) {
	                        ?>
	                            <div class="panel-heading">
	                            	<div class="row">
	                            		<div class="col-md-10">
	                            			<h3><?php echo $res['title']; ?></h3>
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

	                            <div class="panel-body">
	                            <ul style="list-style:none;padding-left:0px;">
	                            	<li>Package Price : <?php echo $res['price']; ?></li>
	                            	<li>Availabe in   : <?php echo $res['country']; ?></li>
	                            </ul>
	                             <hr>
	                            <div class="row">
	                            	<div class="col-md-6" style="text-align:justify;">
	                            		<?php echo $res['description']; ?>
	                            	</div>
	                            	<div class="col-md-6">
	                            		<div class="row">
	                            			<?php
	                            			$getImg = $package->getPackageImageById($package_id);
	                            			if ($getImg) {
	                            				while ($res = $getImg->fetch_assoc()) {
	                            			?>
	                            			<div class="col-md-6 ">
	                            				<img src="<?php echo $res['image']; ?>" style="width:100%;margin-top: 18px;">
	                            			</div>
	                            			<?php }} ?>
	                            		</div>
	                            	</div>
	                            </div> 
	                            	
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

