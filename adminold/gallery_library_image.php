<?php require_once 'common/header.php'; ?>
<?php 
require_once 'classes/Gallery.php';
$gallery = new Gallery();
?>

<!-- Media library -->
					<div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title text-semibold">Media library emulation</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<table class="table table-striped media-library table-lg">
	                        <thead>
	                            <tr>
	                            	<th><input type="checkbox" class="styled"></th>
	                                <th>Preview</th>
	                                <th>Name</th>
	                                <th>File info</th>
	                                <th class="text-center">Actions</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                        <?php
	                        $getData = $gallery->getAllData();
	                        if ($getData) {
	                        	while ($res = $getData->fetch_assoc()) {
	                        ?>
	                            <tr>
	                            	<td><input type="checkbox" class="styled"></td>
			                        <td>
				                        <a href="<?php echo $res['image']; ?>" data-popup="lightbox">
					                        <img src="<?php echo $res['image']; ?>" alt="" class="img-rounded img-preview">
				                        </a>
			                        </td>
			                        <td><a href="#"><?php echo $res['image_title']; ?></a></td>
			                        <td>
			                        	<ul class="list-condensed list-unstyled no-margin">					                        		
				                        	<li><span class="text-semibold">Size:</span> 215 Kb</li>
				                        	<li><span class="text-semibold">Format:</span> .jpg</li>
			                        	</ul>
			                        </td>
			                        <td class="text-center">
			                            <ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-pencil7"></i> Edit file</a></li>
													<li><a href="#"><i class="icon-copy"></i> Copy file</a></li>
													<li><a href="#"><i class="icon-eye-blocked"></i> Unpublish</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-bin"></i> Move to trash</a></li>
												</ul>
											</li>
										</ul>
			                        </td>
	                            </tr>
	                            <?php }} ?>

	                        </tbody>
	                    </table>
                    </div>
                    <!-- /media library -->