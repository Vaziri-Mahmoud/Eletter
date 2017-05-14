<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html dir="rtl">
    <head>		
        <title>ورود</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>script/script.js"></script>
    </head>
    <body> 
        <div class="main">
            <div id="content">
                <h3 id='form_head'>سلام لطفا نام کاربری و رمز ورود خود را وارد نمایید</h3><br/>
                <hr>
                <div id="form_input">

                <?php
               /* if (session is set ')
                {
						?>
							<script>
							<alert>رمز عبور اشتباه است.</alert>
							</script>
						<?php
               }*/
                echo form_open('Login/data_submitted');
                echo form_label('نام کاربری :', 'u_name');
                $input1_data = array(
                    'name' => 'u_name',
                    'placeholder' => 'نام کاربری خود را وارد نمایید',
                    'class' => 'input_box'
                );
                echo form_input($input1_data);
                echo "<br/><br/>";
                echo form_label('کله عبور&nbsp;&nbsp;:', 'u_pass');
                $input2_data = array(
                    'type' => 'password',
                    'name' => 'u_pass',
                    'placeholder' => 'کلمه عبور خود را وارد نمایید',
                    'class' => 'input_box'
                );
                echo form_input($input2_data);
                ?>
                    </div>
                    <div id="form_button">
                        <?php echo form_submit('submit', 'ورود', "class='submit'"); ?>
                    </div>                   
               <?php echo form_close();?>
               <h2 dir="ltr">

               Design By : <br></h2>
               <h3 dir="ltr">
               Mahmoud Z vaziri<br>
               Hossein Torki<br>
               Abbas Shahmandi<br>
               Shahab adin alabeygi<br>
               </h3>
            </div> 
        </div>
    </body>
</html>



</html>