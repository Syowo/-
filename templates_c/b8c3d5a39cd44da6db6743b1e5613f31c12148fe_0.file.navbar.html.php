<?php
/* Smarty version 3.1.32, created on 2018-12-20 12:35:58
  from 'E:\xampp\htdocs\html\navbar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1b7e9e3a57d0_23872364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c3d5a39cd44da6db6743b1e5613f31c12148fe' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\navbar.html',
      1 => 1545305756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1b7e9e3a57d0_23872364 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!----->
<html lang="zh">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/web.css">
  <link rel="stylesheet" href="css/test.css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" ><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"><?php echo '</script'; ?>
>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>智慧監視系統</title>
  <?php echo '<script'; ?>
 type="text/javascript">
    $( function() {
      $("#index").mouseover(function(){
        $("#index").css( "color" , "black" ) ;
      });
      //檢查登入 顯示按鈕
      if (<?php echo $_smarty_tpl->tpl_vars['user_check']->value;?>
 == 1 ){
        $("#login_btn").hide();
        $("#signup_btn").hide();
        $("#dropbtn").show();
      }
      else if( <?php echo $_smarty_tpl->tpl_vars['user_check']->value;?>
 == 2 ){
        $("#user_wrong").fadeIn(300).delay(800).fadeOut(300);
      }
      else if( <?php echo $_smarty_tpl->tpl_vars['user_check']->value;?>
 == 3 ){
        $("#pwd_wrong").fadeIn(300).delay(800).fadeOut(300);
      };
      if( <?php echo $_smarty_tpl->tpl_vars['sign_up']->value;?>
 == 1){
        $("#sign_success").fadeIn(300).delay(500).fadeOut(300);
      }
      else if( <?php echo $_smarty_tpl->tpl_vars['sign_up']->value;?>
 == 2){
        $("#user_exist").fadeIn(300).delay(800).fadeOut(300);
      }
      else if ( <?php echo $_smarty_tpl->tpl_vars['sign_up']->value;?>
 == 3) {
        $("#mail_exist").fadeIn(300).delay(800).fadeOut(300);
      };
      //下拉選單
      $("#dropbtn").click(function(){
        $("#dropmenu").toggle();
      });
      $("#dropbtn").mouseover(function(){
        $("#dropmenu").show();
      });
      $("#dropbtn").mouseleave(function(){
        $("#dropmenu").hide();
      });
      $("#dropmenu").mouseover(function(){
        $("#dropmenu").show();
      });
      $("#dropmenu").mouseleave(function(){
        $("#dropmenu").hide();
      });
      $("#outbtn").mouseover(function(){
        $("#outbtn").css("background-color","red");
      });
      $("#outbtn").mouseleave(function(){
        $("#outbtn").css("background-color","#00000000");
      });
      $("div a:nth(1)").mouseover(function(){
        $("div a:nth(1)").css("background-color","#00a3f3");
      });
      $("div a:nth(1)").mouseleave(function(){
        $("div a:nth(1)").css("background-color","#00000000");
      });
      $("div a:nth(2)").mouseover(function(){
        $("div a:nth(2)").css("background-color","#a5ffb0");
      });
      $("div a:nth(2)").mouseleave(function(){
        $("div a:nth(2)").css("background-color","#00000000");
      });
      $("div a:nth(3)").mouseover(function(){
        $("div a:nth(3)").css("background-color","orange");
      });
      $("div a:nth(3)").mouseleave(function(){
        $("div a:nth(3)").css("background-color","#00000000");
      });
      $("div a:nth(4)").mouseover(function(){
        $("div a:nth(4)").css("background-color","#f300c3");
      });
      $("div a:nth(4)").mouseleave(function(){
        $("div a:nth(4)").css("background-color","#00000000");
      });
      //登出
      $("#outbtn").click(function(){
        $("#logout").show();
      });
      //取消
      $("#outcan").click(function(){
        $("#logout").hide();
      });
    });
  <?php echo '</script'; ?>
>
</head>

<body>
  <!---網頁navbar-->
  <div class="webnav container col-sm-12 col-xs-12" style="height:10%">
    <nav class="nav-tabs navbar-sticky-top">
      <div class="row" style="height:60px" >
        <div class="col-sm-10 col-xs-10">
          <div class="col-sm-3 col-xs-3">
            <div class="anima">
            </div>
            <a id="index" href="../web/index.php" class="h3" style="text-decoration:none;" >
              智慧監視系統
            </a>
            <div class="anima2">
            </div>
          </div>
        </div>
        <!---登入 登出 紀錄 按鈕-->
        <div id="login_btn" class="col-sm-1 col-xs-1 "  >
          <button  type="submit" class="bg-white btn" data-toggle="modal" data-target="#login"  >
            登入
          </button>
        </div>
        <div id="signup_btn" class=" justify-content-end col-sm-1 col-xs-1 " >
          <button  type="submit" class="btn bg-white rounded mx-auto d-block" data-toggle="modal" data-target="#signup"  >
            註冊
          </button>
        </div>
        <div class="dropdown align-item-end col-sm-1.5 col-xs-1.5 " >
          <button class="bg-white btn btn dropdown-toggle" id="dropbtn" type="button" style=" display:none;">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->user;?>

          </button>
          <div class="dropdown dropdown-menu-right" id="dropmenu" aria-labelledby="dropbtn" style="z-index:999; display:none;">
            <a class="dropdown-item text" href="../web/index.php">首頁</a>
            <a class="dropdown-item text" href="../web/record.php">紀錄</a>
            <a class="dropdown-item text" href="../web/stream.php">即時影像</a>
            <a class="dropdown-item text" href="../web/user.php">設定</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text"  id="outbtn">登出</a>
          </div>
        </div>
      </div>
      </nav>
    </div>



  <!--首頁內容
  <div class="container col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-sm-12 col-xs-12 text-center" >
          <iframe id="body_frame" src="web/index.php" frameborder="0" width="1200px" height="400px">
          </iframe>
        </div>
    </div>
  </div>
  --->

  <!--按鈕觸發dialog 來登入-->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center">
            登入
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="" action="../web/index.php" method="post">
          <div class="modal-body text-center">
            <div class="form-group col-md-12">
              <input id="user" type="text" class="form-control" name="user" placeholder="帳號">
              <span class="help-block"></span>
            </div>
            <div class="form-group col-md-12">
              <input id="pwd" type="password" class="form-control" name="pwd" placeholder="密碼">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="modal-footer">
            <div class="col-sm-9 ">
              <button id="dia-login-btn" type="submit" class="text-light btn btn-block rounded mx-auto d-block bg_blue1">
                登入
              </button>
            </div>
            <div class="col-sm-3">
              <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" aria-label="Close">
                取消
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!---登出提醒-->
  <div class="modal" id="logout" role="dialog" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-label="Close">
          </button>
        </div>
        <div class="modal-body text-center">
            確定要登出嗎?
        </div>
        <div class="modal-footer">
          <form class="" action="../index.php" method="post">
            <button type="submit" name="dia-logout-btn">
              確定
            </button>
          </form>
          <button type="button" id="outcan" >
            取消
          </button>
        </div>
      </div>
    </div>
  </div>

  <div id="user_wrong" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          帳號錯誤
        </div>
      </div>
    </div>
  </div>
  <div id="sign_success" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          註冊成功
        </div>
      </div>
    </div>
  </div>
  <div id="pwd_wrong"  class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          密碼錯誤
        </div>
      </div>
    </div>
  </div>
  <div id="user_exist" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          帳號已存在
        </div>
      </div>
    </div>
  </div>
  <div id="mail_exist" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          信箱已存在
        </div>
      </div>
    </div>
  </div>

  <!--註冊-->
  <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <div class="">
            註冊
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="" action="../web/index.php" method="post">
          <div class="modal-body text-center">
            <div class="form-group col-md-12">
              <input type="text" class="form-control" maxlength="12" name="sign_user" required="required" placeholder="帳號(限長12)">
              <span class="help-block"></span>
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" maxlength="12" name="sign_pwd" required="required" placeholder="密碼(限長12)">
              <span class="help-block"></span>
            </div>
            <div class="form-group col-md-12">
              <input type="password" class="form-control" required="required" placeholder="再次輸入密碼">
              <span class="help-block"></span>
            </div>
            <div class="form-group col-md-12">
              <input type="email" class="form-control" name="sign_email" required="required" placeholder="電子信箱">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="modal-footer">
              <button  type="submit" class="btn btn-success rounded mx-auto d-block">
                註冊
              </button>
            <button type="button" class="btn btn-danger " data-dismiss="modal" aria-label="Close">
              取消
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
<?php }
}
