<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
spl_autoload_register('my_autoload');
function my_autoload($className){
  require_once 'classes/'.$className.'.php';
}
$Message = new Message();
if (isset($_GET['message'])) {
	$message_id = $_GET['message'];
}
$getData = $Message->getMessageById($message_id);
?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Message</a></li>
				<li class="breadcrumb-item"><a href="inbox.php">Message list</a></li>
				<li class="breadcrumb-item active">Message details</li>
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
	                            <h4 class="panel-title">Message details</h4>
	                        </div>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                        <?php 
	                        if ($getData) {
	                        	while ($res = $getData->fetch_assoc()) {
	                        ?>

	                            <div class="panel-body">
	                            <ul style="list-style:none;padding-left:0px;">
	                            	<li>Sender name : <?php echo $res['name']; ?></li>
	                            	<li>Email       : <?php echo $res['email']; ?></li>
	                            </ul>
	                             <hr>
	                            <div class="row">
	                            	<div class="col-md-12" style="text-align:justify;">
	                            		<?php echo $res['comment']; ?>
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

