<?php  include ('header.php'); ?>
<?= form_open('admin/senmail')?>

<div class="container" style="margin-top: 20px">
<h1>Register Form</h1>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="username">Username</label>
<?= form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
</div></div>
<div class='col-lg-6' style='margin-top : 40px'><?= form_error('uname') ?></div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
  <label for="pwd">Password</label>
  <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','name'=>'pass' ]); ?>
</div></div>
<div class='col-lg-6' style='margin-top : 40px'><?= form_error('pass') ?></div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="username">First Name</label>
<?= form_input(['class'=>'form-control','placeholder'=>'First Name','name'=>'first','value'=>set_value('first')]); ?>
</div></div>
<div class='col-lg-6' style='margin-top : 40px'><?= form_error('first') ?></div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="username">Last Name</label>
<?= form_input(['class'=>'form-control','placeholder'=>'Last Name','name'=>'last','value'=>set_value('last')]); ?>
</div></div>
<div class='col-lg-6' style='margin-top : 40px'><?= form_error('last') ?></div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="username">Email</label>
<?= form_input(['class'=>'form-control','placeholder'=>'Email','name'=>'email','value'=>set_value('email')]); ?>
</div></div>
<div class='col-lg-6' style='margin-top : 40px'><?= form_error('email') ?></div>
</div>

<?php echo form_submit(['class'=>'btn btn-default','value'=>'submit']);?>
<?php echo form_reset(['class'=>'btn btn-default','value'=>'Reset']);?>
</div>
<?php  include ('footer.php') ?>