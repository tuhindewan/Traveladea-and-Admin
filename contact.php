<?php require_once 'partials/header.php'; ?>

<style type="text/css">
  .form-control:focus {
      border-color: #ffc107;
      outline: 0;
  }
  .dangerColor::placeholder{color:red !important;}
</style>

<?php
  spl_autoload_register('my_autoload');
  function my_autoload($className){
    require_once 'classes/'.$className.'.php';
  }
  $Message = new Message();
?>
<?php 
$result = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['randcheck']==$_SESSION['rand']) {
   $result = $Message->saveUserMessage($_POST);
}
?>
    <!-- content-->
    <div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold">Contacts</span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon">
                <li> <a href="#"><span class="__cf_email__" data-cfemail="82f1f7f2f2edf0f6acf1f7ecf6edf7f0c2e7fae3eff2eee7ace1edef">contact@traveladea.com</span><i class="flaticon-suntour-email"></i></a></li>
                <li> <a href="#">+88029564935<i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="#">Suite 15-16, Ramna Bhaban (4th Floor), #45 Bangabandhu Avenue, Dhaka- 1000, Bangladesh<i class="flaticon-suntour-map" style="top:0px;"></i></a></li>
              </ul>
              <!-- <p class="mt-20">Guests can enjoy a range of massage treatments and beauty therapy at the on-site spa, U Spa. It offers child-minding services, a currency exchange and a reception that is available 24/7. It also has superb facilities for meetings and events. </p> -->
              <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757.3062713135782!2d90.41020227886156!3d23.726206154817785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f824831043%3A0x5b07cde0e0e8d5a1!2sRamna+Bhaban%2C+45%2C+Bangabandhu+Ave%2C+Dhaka+1000!5e0!3m2!1sen!2sbd!4v1530597212231" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
        <div class="container">
          <h4 class="title-section mb-20"><span class="font-bold">Contact us</span></h4>
        <?php require_once 'helpers/messageAlert.php'; ?>
          <div class="widget-contact-form pb-0">
            <!-- contact-form-->
            <div class="email_server_responce"></div>
            <form role="form" name="myForm" onsubmit="return validateForm()" action="" method="POST">
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
                <div class="row setup-content" id="step-1">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <textarea rows="5" cols="5" id="comment" name="comment" class="form-control" placeholder="Your message"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Submit now" name="submit" class="cws-button alt">
            </form>
            <!-- /contact-form-->
          </div>
        </div>
      </div>
    </div>
    <!-- ! content-->
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