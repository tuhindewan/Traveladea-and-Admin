<?php require_once 'partials/header.php'; ?>

<?php
require_once 'classes/Blog.php';
$Blog = new Blog();
if (isset($_GET['blog'])) {
  $b_id = $_GET['blog'];
}
$blogs = $Blog->getBlogById($b_id);
$all_tags = $Blog->getAllTagsByBlogId($b_id);
?>
<?php
require_once 'classes/Category.php';
$Category = new Category();
?>
<?php
require_once 'classes/Comment.php';
$Comment = new Comment();
?>
<?php 

$result = array();
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit_comment']) && $_POST['randcheck']==$_SESSION['rand']) {
   $result= $Comment->commentAdd($_POST);
}
?>

<style type="text/css">
  .dangerColor::placeholder{color:red !important;}
</style>
    <div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-8 mb-res-40">

          <?php
            if ($blogs) {
              while ($value = $blogs->fetch_assoc()) {
                $cat_id = $value['cat_id'];
                $cat_name = $Category->getCategoryNameById($cat_id);
          ?>
            <!-- Blog Post image-->
            <div class="blog-item alt pb-20">
              <!-- Blog Image-->
              <div class="pic"><img class="res_sin_blog_img" src="admin/<?php echo $value['image']; ?>" data-at2x="admin/<?php echo $value['image']; ?>" style="width:100%;height: 370px;;" alt></div>
              <!-- title, author...-->
              <div class="blog-item-data clearfix">
                <h3 class="blog-title res_blog_title"><?php echo $value['title']; ?></h3>
                <p class="post-info res_blog_info"><i class="flaticon-people"></i><span class="posr-author">Traveladea </span>on<a href="#" class="post-category"> 
                  <span>
                    <?php 
                      while ($res = $cat_name->fetch_assoc()) {
                        echo $res['cat_name'];
                      }
                    ?>
                  </span>
                </a> at <?php echo date('M j Y g:i A', strtotime($value['created_at'])); ?></p>
              </div>
              <!-- Text Intro-->
              <p class="mb-25 res_blog_description"><?php echo $value['description']; ?></p>

            </div>

            <?php } } ?>


            <!-- Blog Testimonials-->
            <div class="blog-item alt">
              <?php 
                $countComment = $Comment->countBlogWiseComment($b_id);
                $c_com = $countComment->fetch_assoc();
              ?>

              <h2 class="title-section alt-3 font-bold mt-0 mb-10 res_blog_comment">Comments <span>(<?php echo($c_com['COUNT(blog_id)']); ?>)</span></h2>
              <div class="cws_divider"></div>
              <!-- comment list section-->
              <div class="comments mt-40">

              <?php
                $comments = $Comment->getBlogWiseComments($b_id);
                if ($comments) {
                  while ($res = $comments->fetch_assoc()) {
              ?>
                <div class="comment-body">
                  <div class="comment-info">
                    <div class="comment-meta">
                      <div class="title">
                        <h5><?php echo $res['name']; ?></h5>
                      </div>
                      <div class="comment-date"><span><?php echo date('M j Y g:i A', strtotime($res['time'])); ?></span></div>
                    </div>
                    <div class="comment-content">
                      <p><?php echo $res['comment']; ?></p>
                    </div>
                  </div>
                </div>

                <?php }}else{ ?>
                  <div class="comment-info">
                    <div class="comment-meta" style="border-bottom:1px solid #e8ecf0">
                      <div class="title">
                        <h5>No comments yet</h5>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
              <!-- ! comment list section-->
            </div>
            
            <!-- Leave a comment-->
            <h2 class="title-section mt-50 mb-20 res_fs_20"><span>Post a comment</span></h2>

            <div class="add-comment pattern bg-gray-3 relative">
              <?php require_once 'helpers/commentMgh.php'; ?>
              <div class="widget-contact-form pb-0">
                <!-- contact-form-->
                
                <form action="" name="myForm" onsubmit="return validateForm()" method="POST">
                <?php
                  $rand=rand();
                  $_SESSION['rand']=$rand;
                ?>
                <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                  <div class="row setup-content" id="step-1">
                      <div class="col-md-6 col-xs-12">
                          <div class="form-group">
                              <input  type="text" id="name" name="name"  class="form-control" placeholder="Name"  />
                          </div>
                      </div>
                      <div class="col-md-6 col-xs-12">
                          <div class="form-group">
                              <input  type="text" id="email" name="email"  class="form-control" placeholder="Email"  />
                          </div>
                      </div>
                  </div>
                  <div class="input-container">
                    <textarea rows="5" cols="5" id="comment" name="comment" class="form-control"  placeholder="Write here"></textarea>
                    
                  </div>
                  <input type="hidden" value="<?php echo $b_id; ?>" name="blog_id" class="cws-button alt">
                  <button type="submit" name="submit_comment"  class="cws-button alt res_comment_now" style="    margin-top: 10px;margin-left: 0px;" >Comment now</button>
                </form>
                <!-- /contact-form-->
              </div>
            </div>
          </div>
          <div class="col-md-4 sidebar">
            <aside class="sb-right pb-50-imp">

              <!-- widget category-->
              <div class="cws-widget">
                <div class="widget-categories">
                  <h2 class="widget-title">Categories</h2>
                  <ul>
                  <?php
                    $categories = $Category->getAllCategories();
                    
                    if ($categories) {
                      while ($result = $categories->fetch_assoc()) {
                        $cat_id = $result['cat_id'];
                        $countData = $Category->countCategory($cat_id);
                        $count = $countData->fetch_assoc();
                        
                  ?>
                    <li class="cat-item cat-item-1"><a href="category_post_list.php?category=<?php echo $result['cat_id'];  ?>&&page=1"><?php echo $result['cat_name']; ?> </a>(<?php echo($count['COUNT(cat_id)']); ?>)</li>
                  <?php } } ?>  
                  </ul>
                </div>
              </div>
              <!-- ! widget category-->
              <!-- widget post-->
              <div class="cws-widget">
                <div class="widget-post">
                  <h2 class="widget-title alt">Popular Posts</h2>
                  <?php
                    $blogs  = $Blog->getLatestFourBlogs();
                    if ($blogs) {
                      while ($result = $blogs->fetch_assoc()) {

                  ?>
                  <!-- item recent post-->
                  <div class="item-recent clearfix">
                    <div class="widget-post-media"><img src="admin/<?php echo $result['image']; ?>" data-at2x="admin/<?php echo $result['image']; ?>" alt></div>
                    <h3 class="title"><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>"><?php echo $result['title']; ?></a></h3>
                    <div class="date-recent"><?php echo date('M j Y g:i A', strtotime($result['created_at'])); ?></div>
                  </div>
                  <!-- ! item recent post-->
                  <?php }} ?> 
                </div>
              </div>
              <!-- ! widget post-->
              <!-- widget tags-->
              <div class="cws-widget">
                <div class="widget-tags">
                  <h2 class="widget-title">Tags</h2>
                  <!-- item tags-->
                  <div class="widget-tags-wrap">
                  <?php
                    
                    if ($all_tags) {
                       while ($result = $all_tags->fetch_assoc()) {
                  ?>
                    <a href="tag_blog_list.php?tag=<?php echo $result['name']; ?>&&page=1" rel="tag" class="tag"><?php echo $result['name']; ?></a>
                    <?php } } ?>
                  </div>
                </div>
              </div>
              <!-- ! widget tags-->
              <!-- widget calendar-->
              <div class="cws-widget">
                <div class="widget-calendar">
                  <div id="calendar"></div>
                </div>
              </div>
              <!-- ! widget calendar-->
            </aside>
          </div>
        </div>
      </div>
    </div>
    <script>
    function validateForm() {
        var name = document.forms["myForm"]["name"].value;
        var email = document.forms["myForm"]["email"].value;
        var comment = document.forms["myForm"]["comment"].value;


        if (name == "") {
          $("#name").addClass("dangerColor");
          return false;
        }else if(email == "") {
          $("#email").addClass("dangerColor");
          return false;
        }else if(comment == "") {
          $("#comment").addClass("dangerColor");
          return false;
        }  
        else{
          return true;
        }
    }
    </script>
<?php require_once 'partials/footer.php'; ?>