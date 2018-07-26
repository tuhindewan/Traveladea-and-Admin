<?php require_once 'common/header.php'; ?>
<?php 
require_once 'classes/Slider.php';
$slider = new Slider();
$sliders  = $slider->getAllSliders();
?>

<?php 

  if (isset($_GET['del_slider'])) {
     $del_slider_id =   $_GET['del_slider'];
     $del = $slider->deleteSlider($del_slider_id);
  }

 ?>

<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Slider</span> - List</h4>
			</div>
		</div>

		<?php 
		    if (isset($del)) {
		      echo $del;
		    }
		?>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
				<li><a href="datatable_extension_select.html">Slider</a></li>
				<li class="active">All slider</li>
			</ul>
		</div>
	</div>

	<!-- /page header -->
	<!-- Content area -->
	<div class="content">

		<!-- Basic initialization -->
	
			<table class="table datatable-select-basic">
				<thead>
					<tr>
						<th>Sl.</th>
						<th>Image</th>
						<th>Headline one</th>
						<th>Headline Two</th>
						<th>Headline Three</th>
						<th class="" style="width:225px !important;">Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php 

				if ($sliders) {
					$i = 1;
				while ($result = $sliders->fetch_assoc()) {

				?>

				<tr>
					<td><?php echo $i++; ?></td>
					<td><img src="<?php echo $result['image']; ?>" style="height: 25px;"></td>
					<td><?php echo $result['headline_one']; ?></td>
					<td><?php echo $result['headline_two']; ?></td>
					<td><?php echo $result['headline_three']; ?></td>
					<td class="text-center" style="width:225px !important;">
						<a class="btn btn-info" href="slider_edit.php?slider=<?php echo $result['slider_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
						
						<a class="btn btn-danger del" href="all_slider.php?del_slider=<?php echo $result['slider_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
					</td>
				</tr>	

				<?php }} ?>

				</tbody>
			</table>
</div>
					<!-- /Basic initialization -->


					<!-- Single item selection -->
					
					<!-- /control buttons -->


					<!-- Footer -->
<?php include('common/footer.php'); ?>