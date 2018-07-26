<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Slider.php';
$slider = new Slider();
$sliders  = $slider->getAllSliders();
$i = 1;
?>
<?php 
if (isset($_GET['del_slider'])) {
 $del_slider_id =   $_GET['del_slider'];
 $del = $slider->deleteSlider($del_slider_id);
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
	                            if (isset($del)) {
	                              echo $del;
	                            }
	                        ?>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                            <table id="data-table-responsive" class="table table-striped table-bordered">
	                                <thead>
	                                    <tr>
	                                    	<th width="1%"></th>
	                                        <th class="text-nowrap">Image</th>
	                                        <th class="text-nowrap">Headline one</th>
	                                        <th class="text-nowrap">Headline two</th>
	                                        <th class="text-nowrap">Headline three</th>
	                                        <th class="text-nowrap">Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<?php 

	                                	if ($sliders) {
	                                		$i = 1;
	                                	while ($result = $sliders->fetch_assoc()) {

	                                	?>
	                                    <tr class="odd gradeX">
	                                    	<td width="1%" class="f-s-600 text-inverse"><?php echo $i++; ?></td>
	                                        <td><img src="<?php echo $result['image']; ?>" style="height: 25px;"></td>
	                                        <td><?php echo $result['headline_one']; ?></td>
	                                        <td><?php echo $result['headline_two']; ?></td>
	                                        <td><?php echo $result['headline_three']; ?></td>
	                                        <td class="text-center" style="width:225px !important;">
	                                        	
	                                        	<a class="btn btn-info" href="slider_edit.php?slider=<?php echo $result['slider_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
	                                        	
	                                        	<a class="btn btn-danger del" href="slider_list.php?del_slider=<?php echo $result['slider_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
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

