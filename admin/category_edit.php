<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
if (isset($_GET['category'])) {
	$category_id = $_GET['category'];
}
require_once 'classes/Category.php';
$category = new Category();
$getData = $category->getCatById($category_id);
?>
<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['update_category'])) {
   $cat_edit = $category->categoryEdit($_POST, $category_id);
}
?>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Blog</a></li>
				<li class="breadcrumb-item"><a href="category_list.php">Category list</a></li>
				<li class="breadcrumb-item active">Category Edit</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Blog</h1>
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
                            <h4 class="panel-title">Category Edit</h4>
                        </div>
                        <?php if (isset($cat_edit)){echo $cat_edit;}?>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
                        <?php 
                        if ($getData) {
                        	while ($res = $getData->fetch_assoc()) {
                        ?>
                            <form class="form-horizontal" data-parsley-validate="true" action="#" method="POST" style="margin-top: 20px;">
	                            
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Category name * :</label>
									<div class="col-md-7 col-sm-7">
										<input class="form-control" type="text" id="fullname" name="cat_name" value=" <?php echo $res['cat_name']; ?> " placeholder="Write here" required data-parsley-required="true" />
									</div>
								</div>

								

								<div class="form-group row m-b-15" style="float: right;margin-right: 90px;">
									<div class="text-right">
										<button type="reset"  class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
										<button type="submit" name="update_category" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
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

