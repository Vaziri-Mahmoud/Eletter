
        
        


			<style>
			ul.c {
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    width: 200px;
			    background-color: #f1f1f1;
			}

			li a.c {
			    display: block;
			    color: #000;
			    padding: 8px 16px;
			    text-decoration: none;
			}

			/* Change the link color on hover */
			li a:hover {
			    background-color: #555;
			    color: white;
			}
			
			</style>
			<br>
			 <div style="position: static; height:200px;width:200px;float:right;">

     <ul class="c ">
			  <li class="c "><a class="c" href="<?php echo site_url('main/composeletter') ?>">ارسال</a></li>
			  <li class="c "><a class="c" href="<?php echo site_url('main/search') ?>">جست و جو</a></li>
			</ul>
  </div>
			 <div style="position: static; height:200px;width:450px;float:right;">
 <a class="" href=" <?php echo site_url('main/inbox') ?>">شما <?php echo $countletter; ?> نامه خوانده نشده دارید.</a>
        <br>
       <h2> <a class="" href=" <?php echo site_url('main/inbox') ?>">شما <?php echo $countletterimp; ?> نامه مهم خوانده نشده دارید.</a></h2>
  </div>
        <center>
       
  </center>
    


