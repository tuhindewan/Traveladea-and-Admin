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
   $result = $Tour->packageCustomTourAdd($_POST);
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
                              <input   type="text" id="will_visit" name="will_visit" value="" placeholder="Which country do you want to visit?"  class="form-control" />
                          </div>

                          <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <input  type="text" id="adults" name="adults" value="" placeholder="Number of adults (12+ years)" class="form-control" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <input  type="text" name="childs" value="" placeholder="Number of childs (3-11 years)" class="form-control" />
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <input   type="text" data-toggle="tooltip" title="In oreder to provide the best rates we need to know when you will travel?" data-placement="left" name="travel_date" class="form-control" placeholder="When you want to travel?" id="datepicker"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="fly_from" name="fly_from" value="" placeholder="Travelling from?"  class="form-control" />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="budget" name="budget" value="" placeholder="What is your per person budget without airfare TK? (BDT)"  class="form-control" />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="transit_type" name="transit_type" value="" placeholder="How you want to travel inter cities? (Bus,train etc.)"  class="form-control"/>
                          </div>

                          <div class="form-group">
                              <input   type="text" id="contact_type" name="contact_type" value="" placeholder="How do you like to be contacted? (Email/phone)"  class="form-control"/>
                          </div>



                          <div class="form-group">
                              <input  type="text" class="form-control" data-toggle="tooltip" title="This help us see the rates for different hotels" data-placement="left" name="hotel_type" id="hotel_type" value="" placeholder="Your preffered hotel class? (5 stars)"/>
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
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
      </script>
      <script>
      function validateForm() {
          var will_visit = document.forms["myForm"]["will_visit"].value;
          var adults = document.forms["myForm"]["adults"].value;
          var travel_date = document.forms["myForm"]["travel_date"].value;
          var fly_from = document.forms["myForm"]["fly_from"].value;
          var budget = document.forms["myForm"]["budget"].value;
          var transit_type = document.forms["myForm"]["transit_type"].value;
          var contact_type = document.forms["myForm"]["contact_type"].value;
          var hotel_type = document.forms["myForm"]["hotel_type"].value;
          var email = document.forms["myForm"]["email"].value;
          var phone = document.forms["myForm"]["phone"].value;


          if (will_visit == "") {
            $("#will_visit").addClass("dangerColor");
            return false;
          }else if (adults == "") {
            $("#adults").addClass("dangerColor");
            return false;
          }else if (travel_date == "") {
            $("#datepicker").addClass("dangerColor");
            return false; 
          }else if (fly_from == "") {
            $("#fly_from").addClass("dangerColor");
            return false;
          }else if (budget == "") {
            $("#budget").addClass("dangerColor");
            return false;
          }else if (transit_type == "") {
            $("#transit_type").addClass("dangerColor");
            return false;
          }else if (contact_type == "") {
            $("#contact_type").addClass("dangerColor");
            return false;
          }else if (hotel_type == "") {
            $("#hotel_type").addClass("dangerColor");
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