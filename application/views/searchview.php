<?php
$id=null;/*
echo form_open('Main/<?php echo base_url()?>index.php/main/showmessage?id=<?php echo $value->id; ?>');

echo form_label('شناسه :', 'id');
echo form_input(array('name'=>'id','value'=>'','size'=>'20','class'=>'inp'));echo "<br/><br/>";
*/
?>
<br>
<form action=" <?php echo site_url('main/searchbyid') ?>">
  شناسه: <input type="text" name="id">
  <br><br>

      <input type="submit" value="جست و جو">
</form>
