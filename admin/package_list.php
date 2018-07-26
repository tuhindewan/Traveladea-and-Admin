<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Package.php';
$package = new Package();
$packages = $package->getAllPackages();
$i = 1;
?>
<?php
if (isset($_GET['del_package'])) {
   $del_package_id =   $_GET['del_package'];
   $del_pac = $package->deletePackage($del_package_id);
}
?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Package</a></li>
				<li class="breadcrumb-item active">Package list</li>
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
	                            <h4 class="panel-title">Package list table</h4>
	                        </div>
	                        <?php 
	                            if (isset($del_pac)) {
	                              echo $del_pac;
	                            }
	                        ?>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                            <table id="data-table-responsive" class="table table-striped table-bordered">
	                                <thead>
	                                    <tr>
	                                    	<th width="1%"></th>
	                                        <th class="text-nowrap">Package name</th>
	                                        <th class="text-nowrap">Price</th>
	                                        <th class="text-nowrap">Country</th>
	                                        <th class="text-nowrap">Status</th>
	                                        <th class="text-nowrap">Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<?php
	                                	if ($packages) {
	                                		while ($res = $packages->fetch_assoc()) {

	                                	 ?>
	                                    <tr class="odd gradeX">
	                                    	<td width="1%" class="f-s-600 text-inverse"><?php echo $i++; ?></td>
	                                        <td><?php echo $res['title']; ?></td>
	                                        <td><?php echo $res['price']; ?></td>
	                                        <td><?php echo $res['country']; ?></td>
	                                        <td>
	                                        	<?php if($res['status'] == '1'){ ?>
	                                        	<span class="label label-success"><i class="fa fa-check" aria-hidden="true"></i> Active</span>
	                                        	<?php }else { ?>
	                                        	<span class="label label-danger"><i class="fa fa-times" aria-hidden="true"></i> Inactive</span>
	                                        	<?php } ?>
	                                        </td>
	                                        <td class="text-center" style="width:225px !important;">
	                                        	<a class="btn btn-success" href="package_details.php?package=<?php echo $res['package_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
	                                        	<a class="btn btn-info" href="package_edit.php?package_id=<?php echo $res['package_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
	                                        	
	                                        	<a class="btn btn-danger del" href="package_list.php?del_package=<?php echo $res['package_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
	                                        </td>
	                                    </tr>
	                                    <?php }} ?>
	                                </tbody>
	                            </table>
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

