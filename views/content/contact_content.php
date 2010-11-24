<div id="content">

<?php if(isset($sent) && $sent == true) { echo ""; } else { ?>
  
  <?php if(isset($warning)){echo "$message";} ?>
  <div id="contact_form">
    <form method="post" action="script.php" name="contact">
      
			<div class="form_field">
			  <label for="name">* Name:</label>
    		<input name="name" type="text" value="<?php echo $name; ?>" size="35"/><br />
    		<div class="error">
  				<!--ERRORMSG:name-->
  			</div>
			</div>

      
			<div class="form_field">
			  <label for="email_address">* Email:</label>
      	<input name="email_address" type="text" value="<?php echo $email_address; ?>" size="35"/><br />
      	<div class="error">
  				<!--ERRORMSG:email_address-->
  			</div>
			</div>

      
			<div class="form_field">
			  <label for="tel">* Telephone: (555-555-5555)</label>
      	<input name="tel" type="text" value="<?php echo $tel; ?>" size="35"/><br />
      	<div class="error">
  				<!--ERRORMSG:tel-->
  			</div>
			</div>

			<div class="form_field form_field_select">
        <label for="select">Select One:</label>
      	<select name="select">
        	<option>General</option>
        	<option>Watch Repair</option>
        	<option>Jewelry Repair</option>
        	<option>Jewelry Design</option>
        	<option>Jewelry</option>
        	<option>Gold Buying</option>
      	</select>
      	<div class="error"></div>
			</div>
			
     
			<div class="form_field form_field_text">
			   <label for="comment">Additional Comments:</label>
    	   <textarea name="comments" cols="68" rows="5"><?php echo $comments; ?></textarea>
			</div>
			
      <div class="clear"></div>
      
			<div class="form_field form_field_button">
        <input name="submit" type="submit" value="Submit" class="btn" />
			</div>
    </form>
  </div>
	<?php } ?>
</div>