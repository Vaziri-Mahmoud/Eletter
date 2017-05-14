<style type="text/css">
    .text{
width:500px;/*use according to your need*/
height:300px;/*use according to your need*/
}
.inp{
width:500px;/*use according to your need*/
/*height:50px;/*use according to your need*/
}
</style>

<div class="main">
            <div id="content">

                <div id="form_input">
                <?php
                echo "<br>";
                date_default_timezone_set("iran");
                $date=date("Y-m-d h:i:sa");
                echo form_open('Main/composerecivers');

                echo form_label('تاریخ :', 'date');
                echo form_input(array('name'=>'date','value'=>$date,'size'=>'20','readonly'=>'true','class'=>'inp'));echo "<br/><br/>";
              echo form_label('شناسه :', 'id');
                echo form_input(array('name'=>'id','value'=>$id,'size'=>'20','readonly'=>'true','class'=>'inp'));echo "<br/><br/>";

                echo form_label('فرستنده :', 'sender');
                echo form_input(array('name'=>'sender','value'=>$user[0]->name.' - '.$user[0]->position,'size'=>'20','readonly'=>'true','class'=>'inp'));echo "<br/><br/>";

                echo form_label('موضوع :', 'subject');
                echo form_input(array('name'=>'subject','value'=>'','size'=>'100','class'=>'inp'));echo "<br/><br/>";

                echo form_label('متن :', 'text');
                echo  form_textarea(array('name'=>'text','value'=>'','size'=>'1500','class'=>'text'));echo "<br/><br/>";
                echo form_label('فایل (در صورت وجود) :', 'uploadfile');
                ?>




                <input type = "file" name = "userfile" size = "20" />
         <br /><br />

                    <div id="form_button">
                        <?php echo form_submit('submit', 'ادامه', "class='submit'"); ?>
                    </div>
               <?php echo form_close();?>







            </div>
        </div>
        </div>
