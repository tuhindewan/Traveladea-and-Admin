<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Blog.php';
$Blog = new Blog();
if (isset($_GET['blog'])) {
	$blog_id = $_GET['blog'];
}
$blogs  = $Blog->getBlogById($blog_id);
?>

<?php
require_once 'classes/Category.php';
$Category = new Category();
?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Blog</a></li>
				<li class="breadcrumb-item"><a href="blog_list.php">Blog list</a></li>
				<li class="breadcrumb-item active">Blog details</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Blog</h1>
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
	                            <h4 class="panel-title">Blog details</h4>
	                        </div>
	                        
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
	                        <div class="panel-body">
	                            <?php 
	                            if ($blogs) {
	                            	while ($res = $blogs->fetch_assoc()) {
	                            	$cat_id = $res['cat_id'];
	                            	$cat_name = $Category->getCategoryNameById($cat_id);	
	                            ?>
	                                <div class="panel-heading">
	                                	<div class="row">
	                                		<div class="col-md-10">
	                                			<h3><?php echo $res['title']; ?></h3>
	                                		</div>
	                                		
	                                	</div>		
	                                </div>

	                                <div class="panel-body">
	                                <ul style="list-style:none;padding-left:0px;">
	                                	<li>Posted at : <?php echo $res['created_at']; ?></li>
	                                	<li>Category  : <?php 
		                                        	while ($result = $cat_name->fetch_assoc()) {
		                                        		echo $result['cat_name'];
		                                        	}
		                                        ?>
		                                </li>
		                                <li>Tags : <?php echo $res['tag']; ?></li>
	                                </ul>
	                                 <hr>
	                                <div class="row">
	                                	<div class="col-md-6" style="text-align:justify;">
	                                		<?php echo $res['description']; ?>
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="row">
	                                			
	                                			<div class="col-md-12 ">
	                                				<img src="<?php echo $res['image']; ?>" style="width:100%;margin-top: 18px;">
	                                			</div>
	                                			
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

