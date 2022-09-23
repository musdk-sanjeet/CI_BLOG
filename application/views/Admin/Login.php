<?php 
include('header.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
       	<div class="card">
        <div class="card-header">
            <h4>Login Page</h4>
            <div class="card-body">
            	<div class="col-lg-12" style="margin-top: 30px;">
			   <?php echo form_open('admin/index'); ?>
				<div class="form-group">
				<label for="email">Username:</label>	
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
				</div>
				</div>
				<div class="col-lg-12" style="margin-top: 30px;">
				<?php echo form_error('uname'); ?>
				</div>
				<div>
				<br/>
				<div class="row">
				<div class="col-lg-12">
				<div class="form-group">
				<label for="email">Password:</label>
				<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass']);?>
				</div>
				</div>
				<div class="col-lg-12" style="margin-top: 30px;">
				<?php echo form_error('pass');?>
				</div>
				</div>
				<br/>

				<?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'SUBMIT']) ?>
				<?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']) ?>

				<?php echo form_close() ?>

             </div>
         </div>
     </div>
 </div>
</div>




<?php include('footer.php');?>
