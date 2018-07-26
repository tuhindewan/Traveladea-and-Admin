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
   $result = $Tour->flightCustomTourAdd($_POST);
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
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <input  type="text" id="adults" name="adults" value="" placeholder="Adults (12+ years)" class="form-control" />
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <input  type="text" name="childs" value="" placeholder="Childs (2-11 years)" class="form-control" />
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <input  type="text"  name="infants" value="" placeholder="Infants (0-2 years)" class="form-control" />
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <input  type="text" class="form-control" data-toggle="tooltip" title="Return flight, one way flight or Multiple destination?" data-placement="left" id="flight_type" name="flight_type" value="" placeholder="What are you looking for?" />
                          </div>

                          <div class="form-group">
                              <input   type="text" data-toggle="tooltip" title="In order to check rates we need to know when you will travel?" data-placement="left" name="travel_date" class="form-control" placeholder="Intended departure date" id="datepicker"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" data-toggle="tooltip" title="In order to check rates we need to know when you will travel?" data-placement="left" name="return_date" value="" placeholder="Intended arrival date" id="datepicker2" class="form-control"  />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="fly_from" name="fly_from" value="" placeholder="Flying from? (Dhaka, chittagong)"  class="form-control" />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="fly_to" name="fly_to" value="" placeholder="Flying to? (City or airport)"  class="form-control" />
                          </div>

                          <div class="form-group">
                              <input   type="text" id="transit_type" name="transit_type" value="" placeholder="Want any transit during your flight? (City/airport & no. of days)"  class="form-control"/>
                          </div>

                          <div class="form-group">
                              <input   type="text" name="info"  class="form-control" placeholder="Additional information"  />
                          </div>

                          <div class="form-group">
                            <p class="res-fs-16" style="font-size:25px;">Please share all the travellers details</p>  
                          </div>

                          <div class="form-group">
                              <input   type="text" id="traveller_name" name="traveller_name" value="" placeholder="Traveller(s) Name"  class="form-control"/>
                          </div>

                          <div class="form-group">
                              <input   type="text" id="dob" name="dob" value="" placeholder="Traveller(s) date of birth" class="form-control"/>
                          </div>

                          <div class="form-group">
                              <input   type="text" id="passport_no" name="passport_no" value="" placeholder="Traveller(s) passport no." class="form-control"/>
                          </div>

                          <div class="form-group">
                              <input   type="text" id="pass_expire" name="pass_expire" value="" placeholder="Traveller(s) passport expiration" class="form-control"/>
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
        $( function() {
          $( "#datepicker2" ).datepicker();
        } );
        </script>
      <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
      </script>

      <script>
      function validateForm() {
          var adults = document.forms["myForm"]["adults"].value;
          var flight_type = document.forms["myForm"]["flight_type"].value;
          var travel_date = document.forms["myForm"]["travel_date"].value;
          var return_date = document.forms["myForm"]["return_date"].value;
          var fly_from = document.forms["myForm"]["fly_from"].value;
          var fly_to = document.forms["myForm"]["fly_to"].value;
          var transit_type = document.forms["myForm"]["transit_type"].value;
          var traveller_name = document.forms["myForm"]["traveller_name"].value;
          var dob = document.forms["myForm"]["dob"].value;
          var passport_no = document.forms["myForm"]["passport_no"].value;
          var pass_expire = document.forms["myForm"]["pass_expire"].value;
          var email = document.forms["myForm"]["email"].value;
          var phone = document.forms["myForm"]["phone"].value;

          if (adults == "") {
            $("#adults").addClass("dangerColor");
            return false;
          }else if (flight_type == "") {
            $("#flight_type").addClass("dangerColor");
            return false;
          }else if (travel_date == "") {
            $("#datepicker").addClass("dangerColor");
            return false; 
          }else if (return_date == "") {
            $("#datepicker2").addClass("dangerColor");
            return false;
          }else if (fly_from == "") {
            $("#fly_from").addClass("dangerColor");
            return false;
          }else if (fly_to == "") {
            $("#fly_to").addClass("dangerColor");
            return false;
          }else if (transit_type == "") {
            $("#transit_type").addClass("dangerColor");
            return false;
          }else if (traveller_name == "") {
            $("#traveller_name").addClass("dangerColor");
            return false;
          }else if (dob == "") {
            $("#dob").addClass("dangerColor");
            return false;
          }else if (passport_no == "") {
            $("#passport_no").addClass("dangerColor");
            return false;
          }else if (pass_expire == "") {
            $("#pass_expire").addClass("dangerColor");
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