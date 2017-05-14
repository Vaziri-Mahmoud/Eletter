
<?php echo form_open('Main/composecomplete');?>
 <?php echo form_label('شناسه :', 'letterid');
 echo form_input(array('name'=>'letterid','value'=>$letterid,'size'=>'20','readonly'=>'true','class'=>'inp'));echo "<br/><br/>";?>
 <?php echo form_label('گیرندگان :', 'recivers'); ?>
<select name="recivers[]"  multiple>
<?php foreach ($userlist as $selecteduser) {?>
<option value="<?php echo $selecteduser->user; ?>"><?php echo $selecteduser->name.'-'.$selecteduser->position; ?></option>
<?php
} ?>
  
</select>
<?php echo form_label('رونوشت گیرندگان :', 'recivers'); ?>
<select name="coprecivers[]"  multiple>
<?php foreach ($userlist as $selecteduser) {?>
<option value="<?php echo $selecteduser->user; ?>"><?php echo $selecteduser->name.'-'.$selecteduser->position; ?></option><br>
<?php 
} ?>
<input type="submit" value="ارسال">
 <?php echo form_close();?>
