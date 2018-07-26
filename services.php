<?php require_once 'partials/header.php'; ?>
    <div class="content-body">
      <!-- section features-->
      <section class="page-section pb-70 res-pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h6 class="title-section-top font-4">We are</h6>
              <h2 class="title-section res-traveladea"><span>Traveladea</span></h2>
              <div class="cws_divider mb-25 mt-5 "></div>
              <p class="res-pac-des">Vestibulum feugiat vitae tortor ut venenatis. Sed cursus, purus eu euismod bibendum, diam nisl suscipit odio, vitae ultrices mauris dolor quis mauris. Curabitur ac metus id leo maximus porta.</p>
            </div>
          </div>
          <div class="row">

          <?php
            require_once 'classes/Service.php';
            $service = new Service();
            $services = $service->getAllServices();
          ?>

          <?php
            if ($services) {
              while ($result = $services->fetch_assoc()) {
          ?>
            <div class="col-md-4 mb-40 col-sm-6 col-xs-6">
              <div class="service-item icon-right color-icon">
                <h3><?php echo $result['title']; ?></h3>
                <p class="mb-0 res-pac-des"><?php echo $result['description']; ?></p>
              </div>
            </div>
          <?php }} ?>  

          </div>
        </div>
      </section>
    </div>
<?php require_once 'partials/footer.php'; ?>