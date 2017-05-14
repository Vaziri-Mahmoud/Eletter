

<body>

<table>
  <tr>
  <th>شناسه</th>
    <th>فرستنده</th>
    <th>موضوع</th>
    <th>تاریخ</th>
  </tr>
  <?php
  $i=0;
  $out='';
  foreach ($rec as  $value) {
    $i++;
  ?>
    <tr>
      <td><a href="<?php echo base_url()?>index.php/main/showmessage?id=<?php echo $value->id; ?>" ><?php echo $value->id; ?></a></td>
        <td><?php echo $value->sender;?></td>
        <td><?php echo $value->subject;?></td>
        <td><?php echo $value->date;?></td>
    </tr><br>
  <?php
  }
  echo $out;
  ?>
</table>
    
   