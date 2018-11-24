<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>NSF</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
		
				
		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->	
        <!-- #Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                 <div class="j-row"><input type="hidden" name="action" value="kkd_pff_paystack_submit_action"><input type="hidden" name="pf-id" value="266" /><input type="hidden" name="pf-user_id" value="0" /><input type="hidden" name="pf-recur" value="no" /><div class="span12 unit">
				 <label class="label">Full Name <span>*</span></label>
				 <div class="input">
					 <input type="text" name="pf-fname" placeholder="First & Last Name" value=""
					  required>
				 </div>
			 </div>
             <div class="span12 unit">
				<label class="label">Email <span>*</span></label>
				 <div class="input">
					 <input type="email" name="pf-pemail" placeholder="Enter Email Address"  id="pf-email" value=""
					  required>
				 </div>
			 </div>
             <div class="span12 unit">
				<label class="label">Amount (NGN) <span>*</span></label>
				<div class="input">
                    <div class="select">
			 			<input type="hidden"  id="pf-vname" name="pf-vname" />
			 			<input type="hidden"  id="pf-amount" />
 					    <select class="form-control" id="pf-vamount" name="pf-amount"><option value="1500" data-name="Students ₦">Students ₦(1,500)</option><option value="7500" data-name=" Registered Members ₦"> Registered Members ₦(7,500)</option><option value="10000" data-name=" Non/Intending Members ₦"> Non/Intending Members ₦(10,000)</option><option value="20000" data-name=" Corporate Organisations ₦"> Corporate Organisations ₦(20,000)</option><option value="20000" data-name=" Exhibition Stand ₦"> Exhibition Stand ₦(20,000)</option></select> <i></i> </div><br /><span id="pf-min-val-warn" style="color: red; font-size: 13px;"></span> 
				    </div>
			    </div>
                <div class="span12 unit">
                    <label class="label">Seats</label>
                        <div class="select">
                            <input type="hidden" value="" id="pf-qamount"/>
                            <select class="form-control" id="pf-quantity" name="pf-quantity" > 
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option> 
                                <option value="7">7</option>
                                 <option value="8">8</option> 
                                 <option value="9">9</option> 
                                 <option value="10">10</option>
                            </select>
                            <i></i>
                        </div>
                    </div>
                    <div class="span12 unit">
                    <label class="label">Phone Number</label>
                    <div class="input">
			        <input type="text" name="Phone Number" placeholder="Enter Phone Number"" /></div></div><div class="span12 unit">
						<small><span style="color: red;">*</span> are compulsory</small><br />
						<img src="https://geoson.org/wp-content/plugins/payment-forms-for-paystack/public/../images/logos@2x.png" alt="cardlogos"  class="paystack-cardlogos size-full wp-image-1096" />

						<button type="reset" class="secondary-btn">Reset</button><button type="submit" class="primary-btn">Register</button></div></div>
            </form>
            </div>
        </div>
    </div>
</div>				
			
		
	
</div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
