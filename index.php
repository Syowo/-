<?php
  //設定
  session_start();
  require("lib/libs/Smarty.class.php") ;
  define ( 'APP_PATH' , '../'  ) ;
  $smarty = new Smarty() ;
  $smarty ->template_dir = APP_PATH . "templates" ;
  $smarty ->compile_dir = APP_PATH . "templates_c" ;
  $smarty ->config_dir = APP_PATH . "configs" ;
  $smarty ->cache_dir = APP_PATH . "cache" ;


  $idcheck = 0 ;
  if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
    $mysqli = new mysqli('120.101.8.116','root','','user') ;
    //連接是否失敗 true 錯誤訊息
    if($mysqli->connect_error){

      die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

    }
    //連線成功 檢查帳密
    else {
      $sql = "select user,pwd from data" ;
      $mysqli->query('set names utf8') ;
      $sql2 = $mysqli->query($sql) ;
      while ( $user = $sql2->fetch_object() ){
        if ( $user->user === $_POST['username'] and $user->pwd === $_POST['password'] ) {
          //連線成功 建立session
          $_SESSION['acc'] =  $user->user ;
          $_SESSION['pwd'] =  $user->pwd ;
          $idcheck = 1 ;
          $smarty->assign( 'userid' , $user->user ) ;
          break ;
        }
      }
    }
    $usercheck = $idcheck ;
  }
  //登出
  if( isset($_POST['dia-logout-btn'] ) ){
    session_destroy();
  }
  $smarty->assign( 'idcheck' , $idcheck ) ;
  $smarty->assign( 'usercheck' , $usercheck ) ;

  $smarty->display( "html/index.html" ) ;
?>