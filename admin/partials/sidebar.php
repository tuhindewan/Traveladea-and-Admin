		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="assets/img/user/user-12.jpg" alt="" />
							</div>
							<div class="info">
								<?php echo Session::get('name'); ?>
								<small>Admin</small>
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="dashboard.php">
						    <i class="fa fa-th-large"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Package</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="package_add.php">Package add</a></li>
					        <li><a href="package_list.php">Package list</a></li>
					    </ul>
					</li>
					
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Gallery</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="add_gallery.php">Add Photo/Video</a></li>
					        <li><a href="view_image_gallery.php">View Photo Gallery</a></li>
					        <li><a href="view_video_gallery.php">View Video Gallery</a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Slider</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="slider_add.php">Slider add</a></li>
					        <li><a href="slider_list.php">Slider list</a></li>
					    </ul>
					</li>

					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Service</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="service_add.php">Service add</a></li>
					        <li><a href="service_list.php">Service list</a></li>
					        <li><a href="service_count.php">Service count</a></li>
					    </ul>
					</li>

					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Blog</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="category_add.php">Category add</a></li>
					        <li><a href="category_list.php">Category list</a></li>
					        <li><a href="blog_post.php">Blog post</a></li>
					        <li><a href="blog_list.php">Blog list</a></li>
					    </ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
							<span class="badge pull-right">10</span>
						    <i class="fa fa-image"></i>
							<span>Message</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="inbox.php">Inbox</a></li>
						</ul>
					</li>



			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->