<?php
    session_start();
    require("../lib/libs/Smarty.class.php");
    define ( 'APP_PATH' , '../'  );

    $smarty = new Smarty() ;
    $smarty ->template_dir = APP_PATH . "templates" ;
    $smarty ->compile_dir = APP_PATH . "templates_c" ;
    $smarty ->config_dir = APP_PATH . "configs" ;
    $smarty ->cache_dir = APP_PATH . "cache" ;

    //連接mysql
    //$mysqliuser = new mysqli('120.101.8.38' , 'root' , '' ,'user') ;
    //$mysqli = new mysqli('120.101.8.140' , 'root' , '' ,'record') ;
    $mysqli = new mysqli('localhost' , 'root' , '' ,'record') ;
    $mysqli = new mysqli('localhost','root','','user') ;
    //連接是否失敗 true 錯誤訊息
    if($mysqli->connect_error){

      die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

    }
    // 帳號檢查
    $idcheck = 0 ;
    $sql = "select id,password from users" ;
    $mysqli->query('set names utf8') ;
    $sql3 = $mysqli->query($sql) ;
    while ( $user = $sql3->fetch_object() ){
      if ( $user->id === $_SESSION['acc'] and $user->password === $_SESSION['pwd'] ) {
        $idcheck = 1 ;
        break ;
      }
    }

    //sql查詢語法
    $sql1 = "select id,month,day,hour,min,sec,member from test2" ;
    $mysqli->query('set names utf8') ;

    $sql2 = $mysqli->query($sql1) ;

    //刪除語法
    $sqldel = "delete from test2 where id =";

    //刪資料
    $i = 0 ;
    if($idcheck){
      while ($list = $sql2->fetch_object() ) {
        $i++ ;
        if ( isset($_POST['id'.$i])  ) {
          $sqlde = $mysqli->query( $sqldel . $list->id  ) ;
        }
      }
    }



    $smarty->display('../html/test.html');

    $sql2->close() ;
    $mysqli->close() ;
 ?>
