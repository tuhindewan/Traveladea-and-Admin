	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="index.php" class="media-left"><img src="assets/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo Session::get('name'); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Trabeladea,Bangladesh
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Package</span></a>
									<ul>
										<li><a href="package_add.php">Package add</a></li>
										<li><a href="package_list.php">Package list</a></li>
									</ul>
								</li>

                                <li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Gallery</span></a>
									<ul>
										<li><a href="add_gallery.php">Add gallery</a></li>
										<li><a href="view_video_gallery.php">View video gallery</a></li>
										<li><a href="view_image_gallery.php">View image gallery</a></li>
								
									</ul>

								</li>
                                <li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Slider</span></a>
									<ul>
										<li><a href="add_slider.php">Add slider</a></li>
										<li><a href="all_slider.php">All slider</a></li>
									</ul>

								</li>
								<li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Services</span></a>
									<ul>	
										<li><a href="service_add.php">Service add</a></li>
										<li><a href="service_list.php">Service list</a></li>
										<li><a href="service_count.php">Service count</a></li>
									</ul>

								</li>

								<li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Blog</span></a>
									<ul>	
										<li><a href="add_category.php">Category add</a></li>
										<li><a href="list_category.php">Category list</a></li>
									</ul>

								</li>

							</ul>
						</div>
					</div>
					<!-- /main navigation -->
					</div>
			</div>
			<!-- /main sidebar -->