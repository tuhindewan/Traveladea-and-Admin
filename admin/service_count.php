<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
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


		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Service</a></li>
				<li class="breadcrumb-item active">Service count</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Service</h1>
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
	                            <h4 class="panel-title">Package count</h4>
	                        </div>
	                        <?php if (isset($ser_add)){echo $ser_add;}?>
	                        <!-- end panel-heading -->
	                        <!-- begin panel-body -->
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
<script>
	$(document).ready(function() {
		App.init();
		TableManageResponsive.init();
	});
</script>	

