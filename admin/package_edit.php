<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Package.php';
$package = new Package();

if (isset($_GET['package_id'])) {
	$package_id = $_GET['package_id'];
}
$getData = $package->getPackageById($package_id);

if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit_edit'])) {
   $pac_edit = $package->packageEdit($_POST , $package_id);
}

?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Package</a></li>
				<li class="breadcrumb-item"><a href="package_list.php">Package list</a></li>
				<li class="breadcrumb-item active">Package edit</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Package</h1>
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
                            <h4 class="panel-title">Add Package</h4>
                        </div>
                        <?php 
                            if (isset($pac_edit)) {
                              echo $pac_edit;
                            }
                        ?>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
							<?php 
							if ($getData) {
								while ($res = $getData->fetch_assoc()) {
							?>

                            <form class="form-horizontal" data-parsley-validate="true" action="#" method="POST">
	                            <div class="form-group row m-b-15">
	                            	<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Package Status * :</label>
	                            	<div class="checkbox checkbox-switch">
	                            		<label style="margin-top: 10px;margin-left: 10px;">
	                            			<input type="checkbox" name="status" value="1" <?php if($res['status']=='1'){echo 'checked';} ?> data-on-text="Yes" data-off-text="No" class="switch">
	                            			Active
	                            		</label>
	                            	</div>
	                            </div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Package Title * :</label>
									<div class="col-md-7 col-sm-7">
										<input class="form-control" type="text" id="fullname" name="title" value="<?php echo $res['title']; ?>" placeholder="Write here" required data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Package Description * :</label>
									<div class="col-md-7 col-sm-7">
										<textarea rows="5" cols="5" name="description" class="form-control" required="required" placeholder="Write here"><?php echo $res['description']; ?></textarea>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Package Price * :</label>
									<div class="col-md-7 col-sm-7">
										<input type="number" name="price" value="<?php echo $res['price']; ?>" class="form-control" required="required" placeholder="Package price">
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Country * :</label>
									<div class="col-md-7 col-sm-7">
									    <select class="form-control selectpicker" data-size="10" name="country" data-live-search="true">
                                            <option value="United States" <?php if($res['country']=='United States'){echo 'selected';} ?> >United States</option> 
                                            <option value="United Kingdom" <?php if($res['country']=='United Kingdom'){echo 'selected';} ?>>United Kingdom</option> 
                                            <option value="Afghanistan" <?php if($res['country']=='Afghanistan'){echo 'selected';} ?>>Afghanistan</option> 
                                            <option value="Albania" <?php if($res['country']=='Albania'){echo 'selected';} ?>>Albania</option> 
                                            <option value="Algeria" <?php if($res['country']=='Algeria'){echo 'selected';} ?>>Algeria</option> 
                                            <option value="American Samoa" <?php if($res['country']=='American Samoa'){echo 'selected';} ?>>American Samoa</option> 
                                            <option value="Andorra" <?php if($res['country']=='Andorra'){echo 'selected';} ?>>Andorra</option> 
                                            <option value="Angola" <?php if($res['country']=='Angola'){echo 'selected';} ?>>Angola</option> 
                                            <option value="Anguilla" <?php if($res['country']=='Anguilla'){echo 'selected';} ?>>Anguilla</option> 
                                        </select>
									</div>
								</div>
								<div class="form-group row m-b-15" style="float: right;margin-right: 90px;">
									<div class="text-right">
										<button type="reset"  class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
										<button type="submit" name="submit_edit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
                            </form>
                            <?php }} ?>
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

