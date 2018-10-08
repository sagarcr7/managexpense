<?php include_once('header.php');?>
<div class="container">
    <?php echo form_open('welcome/save',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend class="header">Add Expense</legend>
    <div class="form-group">
      <label> <b>Day </b></label>
      <?php echo form_input(['name'=>'day', 'placeholder'=>'Enter day of month', 'class'=>'form-control']);?>
        <?php echo form_error('day', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
      <label> <b>Amount </b></label>
      <?php echo form_input(['name'=>'amount', 'placeholder'=>'Enter Amount of expense', 'class'=>'form-control']);?>
      <?php echo form_error('amount', '<div class="text-danger">', '</div>'); ?>
    </div>
    <?php echo form_submit(['name'=>'submit', 'value'=>'Add', 'class'=>'btn btn-primary btn-lg']); ?>
    <?php echo anchor('welcome', 'Cancel', ['class'=>'btn btn-primary']); ?>
  </fieldset>
<?php echo form_close(); ?>
</div>
<?php include_once('footer.php');?>