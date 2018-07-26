<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php
  spl_autoload_register('my_autoload');
  function my_autoload($className){
    require_once 'classes/'.$className.'.php';
  }
  $Message = new Message();
  $messages = $Message->getAllMessages();
  $i = 1;
?>


		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Message</a></li>
				<li class="breadcrumb-item active">Message list</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Message</h1>
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
	                            <h4 class="panel-title">Message list table</h4>
	                        </div>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                            <table id="data-table-responsive" class="table table-striped table-bordered">
	                                <thead>
	                                    <tr>
	                                    	<th width="1%"></th>
	                                        <th class="text-nowrap">Message From</th>
	                                        <th class="text-nowrap">Email</th>
	                                        <th class="text-nowrap">Message</th>
	                                        <th class="text-nowrap">Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<?php 
	                                	if ($messages) {
	                                		while ($res = $messages->fetch_assoc()) {

	                                	 ?>
	                                    <tr class="odd gradeX">
	                                    	<td width="1%" class="f-s-600 text-inverse"><?php echo $i++; ?></td>
	                                        <td><?php echo $res['name']; ?></td>
	                                        <td><?php echo $res['email']; ?></td>
	                                        <td>
	                                        	<?php echo substr($res['comment'], 0,50);  ?><?php if (strlen($res['comment']) > 50) { ?>.... <?php } ?>
	                                        </td>
	                                        <td class="text-center" style="width:225px !important;">
	                                        	<a class="btn btn-success" href="message_details.php?message=<?php echo $res['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
	                                        	
	                                        	<a class="btn btn-danger del" href="service_list.php?del_service_id=<?php echo $res['service_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
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

