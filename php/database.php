  <?php
      session_start();
      require("../lib/libs/Smarty.class.php");
      define ( 'APP_PATH' , '../'  );

      $smarty = new Smarty() ;
      $smarty ->template_dir = APP_PATH . "templates" ;
      $smarty ->compile_dir = APP_PATH . "templates_c" ;
      $smarty ->config_dir = APP_PATH . "configs" ;
      $smarty ->cache_dir = APP_PATH . "cache" ;

      for ($j=0; $j < 60; $j++) {
        $number[$j] = $j;
      }
      $smarty->assign( "number" ,$number );
      //帳號密碼變數 直接用post會有風險存在
      if( ! ( isset( $_SESSION['acc'] ) && isset( $_SESSION['pwd'] ) ) ){
        $account = $_POST['username'] ;
        $password = $_POST['password'] ;
        //session
        $_SESSION['acc'] = $account ;
        $_SESSION['pwd'] = $password ;
      }


      //連接mysql
      //$mysqli = new mysqli('120.101.8.109' , 'test1' , '' ,'test1') ;
      $mysqli = new mysqli('localhost',"root","",'test1') ;
      //連接是否失敗 true 錯誤訊息
      if($mysqli->connect_error){

        die('登入失敗 <br> 連結錯誤訊息:'.$mysqli->connect_error."<br>") ;

      }

      //sql查詢語法
      $sql1 = "select MONTH,DAY,HOUR,MINS,SEC,MEMBER from test2" ;
      $sql2 = "select member from member" ;
      $mysqli->query('set names utf8') ;

      $sql3 = $mysqli->query($sql1) ;
      $sql4 = $mysqli->query($sql2) ;

      //刪除語法
      $sqldel = "delete from test1 where ";

      //取資料
      $i = 0 ;
      while ($list = $sql3->fetch_object() ) {
          $all_list[$i] = $list ;
          $i++ ;
      }
      $i = 0 ;

      while ($list = $sql4->fetch_object() ) {
        $member_list[$i] = $list->member ;
        $i++ ;
      }


      $smarty ->assign( "sqlmeb" , $member_list);
      $smarty ->assign( "sqldb" ,$all_list );
      $imgid = 1 ;
      $smarty->assign("imgid",$imgid);

      $smarty->display('../html/record.html');

      $sql3->close() ;
      $sql4->close() ;
      $mysqli->close() ;

   ?>
