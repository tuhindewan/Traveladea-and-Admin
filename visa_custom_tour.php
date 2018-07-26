<?php require_once 'partials/header.php'; ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
  #ui-datepicker-div{
    position: absolute;
    top: 388px;
    left: 439.5px;
    z-index: 2;
    width: 35%;
    background: aliceblue;
  }
  .form-control:focus {
      border-color: #ffc107;
      outline: 0;
  }
  .dangerColor::placeholder{color:red !important;}
</style>

<?php
  require_once 'classes/Tour.php';
  $Tour = new Tour();
?>
<?php 
$result = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['randcheck']==$_SESSION['rand']) {
   $result = $Tour->visaCustomTourAdd($_POST);
}
?>
    <div class="element-section pattern bg-gray-3 relative pt-60 pb-100 res-pb-25" style="margin-top:90px;">
      <div class="container">
        <?php require_once 'helpers/errors.php'; ?>
        
        <div class="widget-contact-form pb-0">
          <form role="form" name="myForm" onsubmit="return validateForm()" action="" method="POST">
            <?php
              $rand=rand();
              $_SESSION['rand']=$rand;
            ?>
            <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
              <div class="row setup-content" id="step-1">
                  <div class="col-md-8 col-md-offset-2 col-xs-12">
                      <div class="col-md-12">

                          <div class="form-group">
                              <input  type="text" id='passport_name' name="passport_name"  class="form-control" placeholder="Name (As per passport name)"  />
                          </div>

                          <div class="form-group">
                              <input  type="text"  name="travel_date" class="form-control" placeholder="Your travel date" id="datepicker" />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="profession" name="profession"  class="form-control" placeholder="Present profession"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="education" name="education"  class="form-control" placeholder="Your educational qualification"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="will_visit" name="will_visit"  class="form-control" placeholder="Which country do you want to visit now?"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="pre_visit" name="pre_visit"  class="form-control" placeholder="Which country you have previously visited?"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" name="info"  class="form-control" placeholder="Additional information"  />
                          </div>

                          <div class="form-group">
                            <p class="res-fs-16" style="font-size:25px;">Please provide your contact details</p>  
                          </div>

                          <div class="form-group">
                              <input   type="text" id="email" name="email"  class="form-control" placeholder="Email"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="phone" name="phone"  class="form-control" placeholder="Contact number"  />
                          </div>
                      </div>
                  </div>

                  <div class="col-md-10" >
                    <div class="input-container" style="float:right;margin-right: 15px;">
                      <button type="reset" class="cws-button alt" style="background:#424d58;border:none;">Reset </button>
                      <button type="submit" name="submit" class="cws-button alt">Submit now</button>
                    </div>
                  </div>

              </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
      </script>

      <script>
      function validateForm() {
          var passport_name = document.forms["myForm"]["passport_name"].value;
          var travel_date = document.forms["myForm"]["travel_date"].value;
          var profession = document.forms["myForm"]["profession"].value;
          var education = document.forms["myForm"]["education"].value;
          var will_visit = document.forms["myForm"]["will_visit"].value;
          var pre_visit = document.forms["myForm"]["pre_visit"].value;
          var email = document.forms["myForm"]["email"].value;
          var phone = document.forms["myForm"]["phone"].value;

          if (passport_name == "") {
            //alert('hi');
            $("#passport_name").addClass("dangerColor");
            return false;
              
          }else if(travel_date == "") {
            $("#datepicker").addClass("dangerColor");
            return false;
          }else if(profession == "") {
            $("#profession").addClass("dangerColor");
            return false;
          }else if(education == "") {
            $("#education").addClass("dangerColor");
            return false;
          }else if(will_visit == "") {
            $("#will_visit").addClass("dangerColor");
            return false;
          }else if(pre_visit == "") {
            $("#pre_visit").addClass("dangerColor");
            return false;
          }else if(email == "") {
            $("#email").addClass("dangerColor");
            return false;
          }else if(phone == "") {
            $("#phone").addClass("dangerColor");
            return false;
          }
          else{
            return true;
          }
      }
      </script>
<?php require_once 'partials/footer.php'; ?>