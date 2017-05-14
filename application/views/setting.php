<?php

if($admin==1){?>
	<select name="logs"  >
	<?php
 foreach ($log as $value) {?>
	<option value=""><?php echo $value->user.'-'.$value->time; ?></option><br>
<?php 
} ?>
</select><br><br><br>
<label>خذف</label>
<?php echo form_open('common/delete');?>
<select name="users"  >
	<?php
 foreach ($users as $value) {?>
	<option value="<?php echo $value->user; ?>"><?php echo $value->name.'-'.$value->position; ?></option><br>
<?php 
} ?>
</select>
<input type="submit" value="حذف" name="submit">
 <?php echo form_close();?>
<?php
}?>

<?php echo form_open('common/updatepass');?>
<label>تغییر رمز</label>
<input type="password" name="password">
<input type="submit" value="انجام" name="submit">
 <?php echo form_close();?>
