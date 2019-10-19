</br>
 <select id=""  class="form-control select2" style="width:250">
</br>
<?php
$x=0;
$x2=0;
 foreach($data as  $key=>$value)
  {

?>
<?php
 foreach($data as  $key=>$value2)
  {

?>

 <?php if ($value->parent_id==0 && $x==0 ){   $x=1; ?>
 <option  value='<?php echo $value->name ?> '> <?php echo $value->name ?></option>


 <?php }

     if(($value2->id)==($value->parent_id)   ) {  ?>
  <option  value='<?php echo $value->name ?> '> <?php echo $value->name ?></option>
  <?php
 foreach($data as  $key=>$value3)
  {

?>

 <?php   if(($value3->id)==($value2->parent_id) && $x2==0 ) {$x2=1; $x=0;?>
  <option  value='<?php echo $value->name ?> '> <?php echo $value->name ?></option>   ?>

 <?php  }?>
 <?php  }?>
 <?php  }?>
 <?php  }?>
 <?php  }?>
</select>
