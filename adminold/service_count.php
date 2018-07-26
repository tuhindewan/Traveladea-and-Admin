<?php include('common/header.php'); ?>
 <?php 
 require_once 'classes/Service.php';
 $service = new Service();
 ?>
 <?php 
 if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_count'])) {
    $ser_add = $service->addServiceCount($_POST);
 }
 ?>

<style type="text/css">
	* {
	  box-sizing: border-box;
	}

	.input-number {
	  width: 80px;
	  padding: 0 12px;
	  vertical-align: top;
	  text-align: center;
	  outline: none;
	}

	.input-number,
	.input-number-decrement,
	.input-number-increment {
	  border: 1px solid #ccc;
	  height: 40px;
	  user-select: none;
	}

	.input-number-decrement,
	.input-number-increment {
	  display: inline-block;
	  width: 30px;
	  line-height: 38px;
	  background: #f1f1f1;
	  color: #444;
	  text-align: center;
	  font-weight: bold;
	  cursor: pointer;
	}
	.input-number-decrement:active,
	.input-number-increment:active {
	  background: #ddd;
	}

	.input-number-decrement {
	  border-right: none;
	  border-radius: 4px 0 0 4px;
	}

	.input-number-increment {
	  border-left: none;
	  border-radius: 0 4px 4px 0;
	}

</style>
	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Services Count</span> -Add</h4>
				</div>
			</div>

			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
					<li><a href="form_validation.html">services</a></li>
					<li class="active">services count</li>
				</ul>
			</div>
		</div>
		


		<!-- Content area -->
		<div class="content">


			<!-- Form validation -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Services Count Add</h5>
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="collapse"></a></li>
	                		<li><a data-action="reload"></a></li>
	                		<li><a data-action="close"></a></li>
	                	</ul>
                	</div>
                	<?php if (isset($ser_add)){echo $ser_add;}?>
				</div>

				<div class="panel-body">
					
					<form class="form-horizontal form-validate-jquery" action="#" method="POST">
						<fieldset class="content-group">
							<?php
								$total = $service->getCountData();
							?>
							<?php
								if ($total) {
									while ($result = $total->fetch_assoc()) {
							?>
							<div class="form-group">
								<label class="control-label col-lg-3">Total Tours <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<span class="input-number-decrement">–</span><input class="input-number" type="text" name="tours" value=" <?php echo $result['tours']; ?> "  min="0" max="10000"><span class="input-number-increment">+</span>
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-lg-3">Total Holiday package <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<span class="input-number-decrement">–</span><input class="input-number" type="text" name="holiday" value=" <?php echo $result['holiday']; ?> "  min="0" max="10000"><span class="input-number-increment">+</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3">Total Hotels  <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<span class="input-number-decrement">–</span><input class="input-number" type="text" name="hotel" value=" <?php echo $result['hotel']; ?> "  min="0" max="10000"><span class="input-number-increment">+</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3">Total Cruises  <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<span class="input-number-decrement">–</span><input class="input-number" type="text" name="cruise" value=" <?php echo $result['cruise']; ?> "  min="0" max="10000"><span class="input-number-increment">+</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3">Total Flights  <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<span class="input-number-decrement">–</span><input class="input-number" type="text" name="flight" value=" <?php echo $result['flight']; ?> "  min="0" max="10000"><span class="input-number-increment">+</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3">Total Cars  <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<span class="input-number-decrement">–</span><input class="input-number" type="text" name="car" value=" <?php echo $result['car']; ?> "  min="0" max="10000"><span class="input-number-increment">+</span>
								</div>
							</div>
							<?php }} ?>
						</fieldset>
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<button type="submit" class="btn btn-primary" name="add_count">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
				</div>
			</div>
			<!-- /form validation -->
			<!-- <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script> -->
			<script type="text/javascript">
				$(".chosen-select").chosen();
			</script>
			<script type="text/javascript">
				(function() {
				 
				  window.inputNumber = function(el) {

				    var min = el.attr('min') || false;
				    var max = el.attr('max') || false;

				    var els = {};

				    els.dec = el.prev();
				    els.inc = el.next();

				    el.each(function() {
				      init($(this));
				    });

				    function init(el) {

				      els.dec.on('click', decrement);
				      els.inc.on('click', increment);

				      function decrement() {
				        var value = el[0].value;
				        value--;
				        if(!min || value >= min) {
				          el[0].value = value;
				        }
				      }

				      function increment() {
				        var value = el[0].value;
				        value++;
				        if(!max || value <= max) {
				          el[0].value = value++;
				        }
				      }
				    }
				  }
				})();

				inputNumber($('.input-number'));
			</script>
<?php include('common/footer.php'); ?>