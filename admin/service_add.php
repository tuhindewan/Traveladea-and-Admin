<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Service.php';
$service = new Service();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_service'])) {
   $ser_add = $service->serviceAdd($_POST);
}
?>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Service</a></li>
				<li class="breadcrumb-item active">Service add</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Service</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-lg-12">

                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-plugins-7">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Service Add</h4>
                        </div>
                        <?php if (isset($ser_add)){echo $ser_add;}?>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
                            <form class="form-horizontal" data-parsley-validate="true" action="#" method="POST">
	                            <div class="form-group row m-b-15">
	                            	<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Service Status * :</label>
	                            	<div class="checkbox checkbox-switch">
	                            		<label style="margin-top: 10px;margin-left: 10px;">
	                            			<input type="checkbox" name="status" value="1" data-on-text="Yes" data-off-text="No" class="switch">
	                            			Active
	                            		</label>
	                            	</div>
	                            </div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Service Title * :</label>
									<div class="col-md-7 col-sm-7">
										<input class="form-control" type="text" id="fullname" name="title" placeholder="Write here" required data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Service Description * :</label>
									<div class="col-md-7 col-sm-7">
										<textarea rows="5" cols="5" name="description" class="form-control" required="required" placeholder="Write here"></textarea>
									</div>
								</div>

								<div class="form-group row m-b-15" style="float: right;margin-right: 90px;">
									<div class="text-right">
										<button type="reset"  class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
										<button type="submit" name="add_service" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
								
                            </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->

                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->

<?php require_once 'partials/footer.php'; ?>
<script>
	$(document).ready(function() {
		App.init();
		FormPlugins.init();
	});
</script>	

