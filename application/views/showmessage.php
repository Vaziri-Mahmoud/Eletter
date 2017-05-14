<?php
                //echo form_open('Main/composerecivers');
                foreach ($rec as  $value) {
                    echo form_label('تاریخ :', 'date');
                echo form_input(array('name'=>'date','value'=>$rec[0]->date,'size'=>'20','readonly'=>'true','class'=>'inp'));echo "<br/><br/>";
              echo form_label('شناسه :', 'id');
                echo form_input(array('name'=>'id','value'=>$rec[0]->id,'size'=>'20','readonly'=>'true','class'=>'inp','readonly'=>'true'));echo "<br/><br/>";

                echo form_label('فرستنده :', 'sender');
                echo form_input(array('name'=>'sender','value'=>$rec[0]->sender,'size'=>'20','readonly'=>'true','class'=>'inp'));echo "<br/><br/>";

                echo form_label('موضوع :', 'subject');
                echo form_input(array('name'=>'subject','value'=>$rec[0]->subject,'size'=>'100','class'=>'inp','readonly'=>'true'));echo "<br/><br/>";

                echo form_label('متن :', 'text');
                echo  form_textarea(array('name'=>'text','value'=>$rec[0]->text,'size'=>'1500','class'=>'text','readonly'=>'true'));echo "<br/><br/>";
                break;
                }
                ?>
                <a href="<?php echo base_url()?>index.php/main/inbox">بازگشت</a><span style="display:inline-block; width: 40;"></span>
		<a href="<?php echo base_url()?>index.php/main/composeletter">پاسخ</a>
                        <?php //echo form_submit('submit', 'ادامه', "class='submit'"); ?>
                    </div>
               <?php //echo form_close();?>

<?php echo form_open('Main/messageref');?>

  <?php echo form_input(array('name'=>'id','value'=>$rec[0]->id,'size'=>'20','class'=>'inp','hidden'=>'true'));?>
 <?php echo form_label('ارجاع گیرندگان :', 'recivers'); ?>
<select name="recivers[]"  multiple>
<?php foreach ($userlist as $selecteduser) {?>
<option value="<?php echo $selecteduser->user; ?>"><?php echo $selecteduser->name.'-'.$selecteduser->position; ?></option>
<?php
} ?>

</select>

<input type="submit" value=" ارسال رو نوشت">
 <?php echo form_close();?>
