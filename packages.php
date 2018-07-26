<?php require_once 'partials/header.php'; ?>
<?php 
  require_once 'classes/Package.php'; 
  $package = new Package();
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }
  if ($page == "" || $page == 1) {
     $pak_limit = 0;
  }else{
    $pak_limit = ($page * 5) - 5;
  }
  $packages = $package->getAllPackagesForPagiantion($pak_limit);
?>

<style type="text/css">
  #not_work{
    pointer-events: none;
           cursor: default;
  }
  .pagination {
    font-weight: bold;
    font-size: 16px;
    font-family: "helvetica neue", helvetica, arial, sans-serif;
  }
  .pagination a {
    padding: 5px 10px;
    border-radius: 3px;
    background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e3e3e3), color-stop(100%, #b8b8b8));
    background: -moz-linear-gradient(top, #e3e3e3, #b8b8b8);
    background: -webkit-linear-gradient(top, #e3e3e3, #b8b8b8);
    background: linear-gradient(to bottom, #e3e3e3, #b8b8b8);
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.6), inset 0 1px rgba(255, 255, 255, 0.4);
    color: #333;
    text-decoration: none;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.72);
  }
  .pagination a:hover {
    background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #d90073), color-stop(100%, #a00056));
    background: #424d58;
    color: #ffc107;
  }
  .pagination a.active {
    background: #ffc107;
    color: #fff;
  }
  .pagination a.active:hover {
    cursor: default;
  }
  .pagination .prev:before {
    content: "« ";
    font-weight: normal;
  }
  .pagination .next:after {
    content: " »";
    font-weight: normal;
  }
  .pagination .next:hover, .pagination .prev:hover {
    background: #424d58;
    color: #ffc107;
    text-shadow: none;
  }
</style>
    <div class="content-body">
      <div class="container page">
        <div class="row">
          <?php require_once 'package_search.php'; ?>
          <div class="col-md-8">

            
            <?php if ($packages) {
                  while ($result = $packages->fetch_assoc()) {
                    $package_id = $result['package_id'];
                   ?>
            <div class="recom-item border">
              <div class="recom-media">
                <a href="package_details.php?package=<?php echo $result['package_id']; ?>">
                <?php
                  $images = $package->getPackageImageByIdLast($package_id);
                  if ($images) {
                    while ($value = $images->fetch_assoc()) {
                   
                ?>
                  <div class="pic" style="height:180px"><img src="admin/<?php echo $value['image']; ?>" data-at2x="admin/<?php echo $value['image']; ?>" alt>
                  </div>
                <?php
                  }
                }
                ?>  
                </a>
                <div class="location"><i class="flaticon-suntour-map"></i> <?php echo $result['country']; ?></div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="package_details.php?package=<?php echo $result['package_id']; ?>">
                  <h6 class="blog-title"><?php echo $result['title']; ?></h6></a>
                <div class="recom-price"><span class="font-4">$<?php echo $result['price']; ?></span> per night</div>
                <p class="mb-30"><?php echo substr($result['description'], 0,50);  ?><?php if (strlen($result['description']) > 50) { ?>.... <?php } ?></p><a href="package_details.php?package=<?php echo $result['package_id']; ?>" class="recom-button">Read more</a><a href="" class="cws-button small alt">Book now</a>
              </div>
            </div>
            <?php 
              }
                } 
            ?>

          <!-- this is for counting number of page -->
          <?php
            $packages = $package->countAllPackages();
            $total = $packages->fetch_assoc();
            $count = $total['COUNT(*)'];
            $a = $count/5;
            $total_page = ceil($a);
          ?>
          <div style="text-align:center;">
            <nav class="pagination" role="navigation">
              <a class="prev" style="margin-right: 5px;" <?php if($_GET['page']== 1){?> id="not_work" <?php } ?> href="packages.php?page=<?php echo ($_GET['page'] - 1); ?>"></a>
              <?php
                for ($i=1; $i <= $total_page; $i++) { 
              ?>
              <a <?php if($_GET['page']== $i){?> class="active" <?php } ?> href="packages.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php  }?>
              <a class="next" <?php if($_GET['page']== $total_page){?> id="not_work" <?php } ?> href="packages.php?page=<?php echo ($_GET['page'] + 1); ?>"></a>
            </nav>
          </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once 'partials/footer.php'; ?>