<?php
/* Smarty version 3.1.32, created on 2018-09-19 14:39:44
  from 'E:\xampp\htdocs\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba2439076ece3_23979138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a8d1b2a315e8320d2e81fb915334647494f72ec' => 
    array (
      0 => 'E:\\xampp\\htdocs\\index.html',
      1 => 1537360709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba2439076ece3_23979138 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh" style="background:gray">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/css/video.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧型監視器</title>

  <!---[if lt IE 9]-->
<?php echo '<script'; ?>
 src="https://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <!--[endif]-->

  <?php echo '<script'; ?>
 type="text/javascript">

    var i = 2 ;
    function imgchange(){
      if(i === 2){
        i -- ;
        img1.src = "img/img" + i + ".jpg" ;
      }
      else {
        i ++ ;
        img1.src = "img/img" + i + ".jpg" ;
      }
    }

  <?php echo '</script'; ?>
>

</head>
<body class="bg-info">

  <dev class="form">
    <label class="text-center font-weight-bold display-3 col-sm-12">
      智慧監視器
    </label>
  </dev>
  <?php echo $_smarty_tpl->tpl_vars['sqldb']->value;?>


  <!---表單-->
  <form name="form1" action="html/login.html" method="post">

    <button type="submit" class="btn btn-success rounded mx-auto d-block">
      登入
    </button>
  </form>



  <br>
  <img id="img1" src = "img/img2.jpg"  class="rounded mx-auto d-block" onclick="imgchange()"  >
  <br>
  <input id="pic1" type="button"  value="換圖" onclick="imgchange()">
  <br>

  <video id="vid1"height="700px" width="900px" preload="none" controls controlsList="nodownload">
    <source src="video/test.mp4" type="video/mp4">

    你的瀏覽器不支援mp4檔案格式
  </video>


</body>
</html>
<?php }
}
