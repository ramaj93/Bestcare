<?php 
			$name = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => $biller->name,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("name").' '.$this->lang->line("is_required")
            );
			$email = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => $biller->email,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("email_address").' '.$this->lang->line("is_required")
            );
			$company = array(
              'name'     => 'company',
              'id'          => 'company',
              'value'       => $biller->company,
              'class'       => 'span4 tip',
			  'title'		=> $this->lang->line("bypass") ,
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("company").' '.$this->lang->line("is_required")
            );
			$address = array(
              'name'        => 'address',
              'id'          => 'address',
              'value'       => $biller->address,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("address").' '.$this->lang->line("is_required")
            );
			$city = array(
              'name'        => 'city',
              'id'          => 'city',
              'value'       => $biller->city,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("city").' '.$this->lang->line("is_required")
            );
			$state = array(
              'name'     => 'state',
              'id'          => 'state',
              'value'       => $biller->state,
              'class'       => 'span4',
                          'required'	=> 'required',
			  'data-error'	=> $this->lang->line("state").' '.$this->lang->line("is_required")
            );
			$postal_code = array(
              'name'        => 'postal_code',
              'id'          => 'postal_code',
              'value'       => $biller->postal_code,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("postal_code").' '.$this->lang->line("is_required")
            );
			$country = array(
              'name'        => 'country',
              'id'          => 'country',
              'value'       => $biller->country,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("country").' '.$this->lang->line("is_required")
            );
			$phone = array(
              'name'        => 'phone',
              'id'          => 'phone',
              'value'       => $biller->phone,
              'class'       => 'span4',
			  'required'	=> 'required',
			  'data-error'	=> $this->lang->line("phone").' '.$this->lang->line("is_required")
            );
			$cf1 = array(
              'name'        => 'cf1',
              'id'          => 'cf1',
              'value'       => $biller->cf1,
              'class'       => 'span4',
            );
			$cf2 = array(
              'name'        => 'cf2',
              'id'          => 'cf2',
              'value'       => $biller->cf2,
              'class'       => 'span4',
            );
			$cf3 = array(
              'name'        => 'cf3',
              'id'          => 'cf3',
              'value'       => $biller->cf3,
              'class'       => 'span4',
            );
			$cf4 = array(
              'name'        => 'cf4',
              'id'          => 'cf4',
              'value'       => $biller->cf4,
              'class'       => 'span4',
            );
            $cf5 = array(
              'name'        => 'cf5',
              'id'          => 'cf5',
              'value'       => $biller->cf5,
              'class'       => 'span4',
            );
			$cf6 = array(
              'name'        => 'cf6',
              'id'          => 'cf6',
              'value'       => $biller->cf6,
              'class'       => 'span4',
            );
			
		?>
  
<script src="<?php echo $this->config->base_url(); ?>assets/js/validation.js"></script>
<script type="text/javascript">
$(function() {
	$('form').form();
});
</script>        
<?php if($message) { echo "<div class=\"alert alert-error\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $message . "</div>"; } ?>


	<h3 class="title"><?php echo $page_title; ?></h3>
	<p><?php echo $this->lang->line("enter_info"); ?></p>

   	<?php $attrib = array('class' => 'form-horizontal'); echo form_open("module=billers&view=edit&id=".$id, $attrib);?>

<div class="control-group">
  <label class="control-label" for="name"><?php echo $this->lang->line("name"); ?></label>
  <div class="controls"> <?php echo form_input($name);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="email_address"><?php echo $this->lang->line("email_address"); ?></label>
  <div class="controls"> <?php echo form_input($email);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="phone"><?php echo $this->lang->line("phone"); ?></label>
  <div class="controls"> <?php echo form_input($phone);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="company"><?php echo $this->lang->line("company"); ?></label>
  <div class="controls"> <?php echo form_input($company);?>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="postal_code"><?php echo $this->lang->line("postal_code"); ?></label>
  <div class="controls"> <?php echo form_input($postal_code);?>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="address"><?php echo $this->lang->line("address"); ?></label>
  <div class="controls"> <?php echo form_input($address);?>
  </div>
</div>  
<div class="control-group">
  <label class="control-label" for="city"><?php echo $this->lang->line("city"); ?></label>
  <div class="controls"> <?php echo form_input($city);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="state"><?php echo $this->lang->line("state"); ?></label>
  <div class="controls"> <?php echo form_input($state);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="country"><?php echo $this->lang->line("country"); ?></label>
  <div class="controls"> <?php echo form_input($country);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label"><?php echo $this->lang->line("logo"); ?></label>
  <div class="controls">  
	  <?php 
	  $biller_logos[''] = ''; 
	  	foreach($logos as $key=>$value){
    		$biller_logos[$value] = $value;
		}
		echo form_dropdown('logo', $biller_logos, $biller->logo, 'data-placeholder="'.$this->lang->line("select")." ".$this->lang->line("biller_logo").'" required="required" data-error="'.$this->lang->line("biller_logo").' '.$this->lang->line("is_required").'"'); ?> </div>
</div>
<div class="control-group">
  <label class="control-label" for="cf1"><?php echo $this->lang->line("bcf1"); ?></label>
  <div class="controls"> <?php echo form_input($cf1);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="cf2"><?php echo $this->lang->line("bcf2"); ?></label>
  <div class="controls"> <?php echo form_input($cf2);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="cf3"><?php echo $this->lang->line("bcf3"); ?></label>
  <div class="controls"> <?php echo form_input($cf3);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="cf4"><?php echo $this->lang->line("bcf4"); ?></label>
  <div class="controls"> <?php echo form_input($cf4);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="cf5"><?php echo $this->lang->line("bcf5"); ?></label>
  <div class="controls"> <?php echo form_input($cf5);?>
  </div>
</div> 
<div class="control-group">
  <label class="control-label" for="cf6"><?php echo $this->lang->line("bcf6"); ?></label>
  <div class="controls"> <?php echo form_input($cf6);?>
  </div>
</div> 
<div class="control-group">
<label class="control-label" for="note"><?php echo $this->lang->line("note"); ?></label>
  <div class="controls"> <?php echo form_textarea('invoice_footer', html_entity_decode($biller->invoice_footer), 'class="input-block-level" id="note" style="margin-top: 10px; height: 100px;"');?> </div>
</div>
<div class="control-group">
  <div class="controls"> <?php echo form_submit('submit', $this->lang->line("update_biller"), 'class="btn btn-primary"');?> </div>
</div>
<?php echo form_close();?> 
 