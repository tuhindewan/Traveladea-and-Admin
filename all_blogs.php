<?php require_once 'partials/header.php'; ?>
<?php
require_once 'classes/Blog.php';
$Blog = new Blog();
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
if ($page == "" || $page == 1) {
   $pak_limit = 0;
}else{
  $pak_limit = ($page * 8) - 8;
}
$blogs  = $Blog->getAllBlogsForPagiantion($pak_limit);
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
        <div class="row masonry">
          <div class="col-md-12">
            <div class="row">
            <?php
              if ($blogs) {
                while ($result = $blogs->fetch_assoc()) {

            ?>
              <!-- Blog Post-->
              <div class="col-lg-6 mb-30">
                <!-- Blog item-->
                <div class="blog-item clearfix border">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>">
                      <div class="pic"><img class="res_blog_img" src="admin/<?php echo $result['image']; ?>" data-at2x="admin/<?php echo $result['image']; ?>" alt style="height:200px;width:180px;" ></div></a></div>
                  <!-- blog body--> 
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>">
                      <h6 class="blog-title"><?php echo substr($result['title'], 0,60);  ?><?php if (strlen($result['title']) > 60) { ?>.... <?php } ?></h6></a>
                    <div class="blog-item-data"><?php echo date('M j Y g:i A', strtotime($result['created_at'])); ?></div>
                    <!-- Text Intro-->
                    <p><?php echo substr($result['description'], 0,80);  ?><?php if (strlen($result['description']) > 80) { ?>.... <?php } ?></p><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>" class="blog-button">Read more</a>
                  </div>
                </div>
                <!-- ! Blog item-->
              </div>
              <!-- ! Blog Post-->
              <?php }} ?> 
            </div>
            <div style="text-align:center;">
              <?php
                $data = $Blog->countTotalBlogs();
                $total = $data->fetch_assoc();
                $count = $total['total_blog'];
                $a = $count/8;
                $total_page = ceil($a);
              ?>
              <nav class="pagination" role="navigation">
                <a class="prev" style="margin-right: 5px;" <?php if($_GET['page']== 1){?> id="not_work" <?php } ?> href="all_blogs.php?page=<?php echo ($_GET['page'] - 1); ?>"></a>
                <?php
                  for ($i=1; $i <= $total_page; $i++) { 
                ?>
                <a <?php if($_GET['page']== $i){?> class="active" <?php } ?> href="all_blogs.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php  }?>
                <a class="next" <?php if($_GET['page']== $total_page){?> id="not_work" <?php } ?> href="all_blogs.php?page=<?php echo ($_GET['page'] + 1); ?>"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once 'partials/footer.php'; ?>