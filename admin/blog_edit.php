<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Package.php';
$package = new Package();
?>

<?php
require_once 'classes/Category.php';
$Category = new Category();
$categories = $Category->getAllCategories();
?>

<?php
require_once 'classes/Blog.php';
$Blog = new Blog();
if (isset($_GET['blog'])) {
	$blog_id = $_GET['blog'];
}
$blogs  = $Blog->getBlogById($blog_id);
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['update'])) {
 	$title  = $_POST['title'];
 	$description  = $_POST['description'];
 	$cat_id  = $_POST['category'];
 	$tag  = $_POST['tags'];
 	$update = $Blog->blogPostUpdate($_FILES,$title,$description,$cat_id,$blog_id,$tag);
   }
?>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Blog</a></li>
				<li class="breadcrumb-item"><a href="blog_list.php">Blog list</a></li>
				<li class="breadcrumb-item active">Blog post update</li>
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
                            <h4 class="panel-title">Blog Post Add </h4>
                        </div>
                        <?php 
                            if (isset($update)) {
                              echo $update;
                            }
                        ?>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
                        <?php
                        	if ($blogs) {
                        		while ($value = $blogs->fetch_assoc()) {

                        ?>
                            <form class="form-horizontal" data-parsley-validate="true" action="#" method="POST" enctype="multipart/form-data" style="margin-top:20px;">

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Blog Title * :</label>
									<div class="col-md-7 col-sm-7">
										<input class="form-control" type="text" id="fullname" name="title" value=" <?php echo $value['title']; ?> " placeholder="Write here" required data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Blog Description * :</label>
									<div class="col-md-7 col-sm-7">
										<textarea rows="5" cols="5" name="description" class="form-control" required="required" placeholder="Write here"><?php echo $value['description']; ?> </textarea>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Add Image * :</label>
									<div class="col-md-7 col-sm-7">
										<input type="file" name="files"  class="form-control">
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Category * :</label>
									<div class="col-md-7 col-sm-7">
									    <select class="form-control selectpicker" data-size="10" name="category" data-live-search="true">
                                            <option value="" selected>Select a Category</option>
                                            <?php
                                            	if ($categories) {
                                            		while ($result  = $categories->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $result['cat_id']; ?>" <?php if ($result['cat_id'] == $value['cat_id']) { ?>
                                            	selected <?php } ?> ><?php echo $result['cat_name']; ?></option>
                                            <?php }} ?>
                                        </select>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Tag * :</label>
									<div class="col-md-7 col-sm-7">
										<input type="text" name="tags" value=" <?php echo $value['tag']; ?> " data-role="tagsinput" class="form-control" />
									</div>
								</div>
								<div class="form-group row m-b-15" style="float: right;margin-right: 90px;">
									<div class="text-right">
										<button type="reset"  class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
										<button type="submit" name="update" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
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

