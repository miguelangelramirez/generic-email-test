<!-- Feel free to change any of this -->
<script type="text/javascript">

  // The ajax endpoint information and payload schema
  var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
  var action = "generic_email_submit";
  var payload = {
     "email": "",
     "secondary_optin": false,
  }
  
</script>

<div class="generic-email-widget">
  		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="715.111px" height="100px" viewBox="0 0 715.111 715.111" enable-background="new 0 0 715.111 715.111"
			 xml:space="preserve">
			<g>
				<path fill="" d="M357.629,48c169.303-0.012,307.5,136.239,309.461,305.98c1.975,170.95-135.009,311.135-305.959,313.11
					c-1.21,0.014-2.441,0.021-3.647,0.021c-169.305,0-307.5-136.241-309.461-305.98C46.046,190.179,183.029,49.996,353.98,48.021
					C355.19,48.007,356.422,48,357.629,48 M357.652,0h-0.026c-1.387,0-2.806,0.008-4.201,0.024
					c-48.244,0.557-94.963,10.558-138.856,29.724c-42.373,18.502-80.306,44.716-112.746,77.915
					c-32.44,33.199-57.771,71.727-75.29,114.516C8.386,266.503-0.533,313.44,0.024,361.687c0.553,47.902,10.42,94.314,29.326,137.946
					c18.251,42.121,44.129,79.9,76.915,112.288c32.768,32.37,70.839,57.777,113.157,75.52c43.802,18.36,90.251,27.673,138.062,27.673
					c1.391,0,2.809-0.01,4.202-0.024c48.245-0.558,94.965-10.559,138.856-29.725c42.372-18.502,80.306-44.716,112.746-77.915
					c32.438-33.198,57.771-71.729,75.29-114.518c18.146-44.322,27.063-91.261,26.509-139.504
					c-0.554-47.901-10.42-94.312-29.324-137.943c-18.25-42.121-44.126-79.899-76.909-112.288
					c-32.766-32.371-70.835-57.78-113.148-75.521C451.904,9.311,405.457,0,357.652,0L357.652,0z"/>
			</g>
			<polygon fill="" points="430.749,356.555 592.927,213.062 592.927,500.047 "/>
			<polygon fill="" points="284.398,356.555 122.22,213.062 122.22,500.047 "/>
			<polygon fill="" points="141.493,187.198 574.122,187.198 357.782,375.832 "/>
			<polygon fill="" points="357.781,431.22 306.041,386.095 141.493,529.569 574.122,529.569 409.573,386.06 "/>
		</svg>

  		<h1>Email Widget</h1>
  		<form action="" method="post">
		    <label><input name="checkbox_1" id="checkboxes-0" value="1" type="checkbox">Secondary Opt In </label>
 		   	<br>
 		    <input id="Email" name="email" placeholder="Enter your email" required="yes" type="text">
 		    <button id="submit-subscription" name="submit-subscription">Submit</button>
		</form>

		
<div>
<p style="visibility: hidden;" class="message">This is my message</p>