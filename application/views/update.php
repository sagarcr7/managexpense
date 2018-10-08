<?php include_once('header.php');?>
<div class="container">
    <?php echo form_open("welcome/change/{$post->SN}",['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend class="header">Update Record</legend>
    <div class="form-group">
      <label> <b>Day </b></label>
      <?php echo form_input(['name'=>'day', 'placeholder'=>'Enter day of month', 'class'=>'form-control', 'value'=>set_value('day', $post->Day)]);?>
        <?php echo form_error('day', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
      <label> <b>Amount </b></label>
      <?php echo form_input(['name'=>'amount', 'placeholder'=>'Enter Amount of expense', 'class'=>'form-control', 'value'=>set_value('amount', $post->Amount)]);?>
      <?php echo form_error('amount', '<div class="text-danger">', '</div>'); ?>
    </div>
    <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-primary btn-lg',]); ?>
    <?php echo anchor('welcome', 'Cancel', ['class'=>'btn btn-primary']); ?>
  </fieldset>
<?php echo form_close(); ?>
</div>
<?php include_once('footer.php');?>