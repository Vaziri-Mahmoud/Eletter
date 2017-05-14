<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html dir="rtl">
    <head><title><?php echo $title?></title><style>
    *{
margin:0;
padding:0;
box-sizing:border-box;
}
ul.m {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li.r {
    float: right;
}
li.l {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    
}

li a.v:hover {
    background-color: #111;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    float:right;
    position: static;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    position: static;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

</style>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>script/script.js"></script>
</head>
<body>
<div>
<ul class="m" >
  <li class="right r"><a class="v" href=" <?php echo site_url('main') ?>">صفحه اصلی</a></li>
  <li class="right r"><a class="v" href=" <?php echo site_url('common/setting') ?>">تنظیمات</a></li>
  <li class="right r"><a class="v" href=" <?php echo site_url('common/logout') ?>">خروج</a></li>
  <li class="left l"><a class="left"><?php echo $user[0]->name.'-'.$user[0]->position; ?></a></li>
</ul>
</div>