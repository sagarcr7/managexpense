<?php include_once('header.php');?>
<div class="container">
  <div class ="header">
    <h3 style="align:center"> <b> 
    <?php $amount=0; ?> 
    <?php if(count($posts)): ?>
    <?php foreach($posts as $post):?>
    <?php $amount= $amount + $post->Amount; ?>
    <?php endforeach;?>
    <?php else: ?>
    <?php endif;?>
  <ul>
<span class="badge badge-primary">Total Expense: <?php echo $amount; ?> </span> 
</ul>
 </b> </h3>
	</div>
  <div class= "message">
    <?php if($msg= $this->session->flashdata('msg')); ?>
      <?php echo $msg; ?>
  </div>
  <div class = add_button>
    <?php echo anchor('welcome/create', 'Add Expense',['class'=>'btn btn-primary']);?>
  </div>

  <div class= "table_content">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Day</th>
        <th scope="col">Amount</th>
      <th scope="col">Added Date</th>
      <th scope="col"> <th>
      </tr>
    </thead>
    <tbody>
    <?php if(count($posts)): ?>
    <?php foreach($posts as $post):?>
    <tr>
      <td><?php echo $post->Day;?></td>
      <td><?php echo $post->Amount;?></td>
      <td><?php echo $post->Date_created;?></td>
      <td> <?php echo anchor("welcome/update/{$post->SN}", 'Update', ['class'=>'btn btn-secondary btn-sm']);?>
      <?php echo anchor("welcome/delete/{$post->SN}", 'Delete', ['class'=>'btn btn-danger btn-sm']);?> </td>
    </tr>

    <?php endforeach;?>
    <?php else: ?>
      <tr>
        <td> No Expense record </td>
      </tr>
    <?php endif;?>
      </tbody>
    </table>

  </div>
</div>

    <?php include_once('footer.php');?>