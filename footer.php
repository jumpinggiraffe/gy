<?php

$GEgen_select_COACCO01 = mysql_query("SELECT COACCO01ID FROM COACCO01 WHERE CRCUST01ID ='$CRCUST01ID' AND status='0'");
while($GEgen_fetch_COACCO01 = mysql_fetch_array($GEgen_select_COACCO01)) { 
	$GEgen_COACCO01_COACCO01ID = $GEgen_fetch_COACCO01['COACCO01ID'];
	
	?>
	<div class="GEgen_modal_gocreate_socialmedia" >
		<input type="checkbox" class="form-control green" value="<?php echo $GEgen_COACCO01_COACCO01ID; ?>" name="GEgen_modal_gocreate_field_accounts" checked />
	</div>
	
  <div id="cont"></div>

}


?>



