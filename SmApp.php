<?php
class SmApp extends AppBase {

  protected $_signinAction = array('Boxingmall', 'index');

  //DB접속 실행
  protected function doDbConnection() {
    $a = $this->_connectModel->connect('master', //접속이름
    array(
      'string'    => 'mysql:dbname=shoppingmall;host=localhost;charset=utf8',  //DB이름 - weblog
      'user'      => 'root',                                            //DB사용자명
      'password'  => ''                                             //DB사용자의 패스워드
    ));
    echo("<script>alert {$a};</script>");
  }//doDbConnection - function

  //Root Directory 경로를 반환
  public function getRootDirectory() {
    return dirname(__FILE__); //BlogApp.php가 저장되어 있는 디렉토리 or 호출 디렉토리
    //http://php.net/menual/en/function.dirname.php
  }//getRootDirectory - function


  //Routiong 정의를 반환
  protected function getRouteDefinition() {
    return array(

      //////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////////계정관련
      '/' => array('controller' => 'Boxingmall', 'action'=> 'index'),
      '/registerView' =>array('controller' => 'Account', 'action'=> 'registerView'),
      '/register' =>array('controller' => 'Account', 'action'=> 'register'),
      '/login' =>array('controller' => 'Account', 'action'=> 'login'),
      '/logout' =>array('controller' => 'Account', 'action'=> 'logout'),

      ////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////////////////// 서비스관련
      '/mypageView' =>array('controller' => 'Boxingmall', 'action'=> 'mypageView'),
      '/mypage' =>array('controller' => 'Boxingmall', 'action'=> 'mypage'),
      '/basket' =>array('controller' => 'Boxingmall', 'action'=> 'basket'),
      '/product/:category' =>array('controller' => 'Boxingmall', 'action'=> 'product'),
      '/purchaseList' =>array('controller' => 'Boxingmall', 'action'=> 'purchaseList'),
      '/productDetailView/:p_name' =>array('controller' => 'Boxingmall', 'action'=> 'productDetailView'),
      '/purchase/:p_name/:p_price/' =>array('controller' => 'Boxingmall', 'action'=> 'purchase'),
      '/purchaseList' =>array('controller' => 'Boxingmall', 'action'=> 'purchaseList'),

      /////////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////////// 게시판관련
      '/board' =>array('controller' => 'Board', 'action'=> 'boardView'),
      '/boardWriteView' =>array('controller' => 'Board', 'action' =>'boardWriteView'),
      '/boardRegister' =>array('controller' => 'Board', 'action' =>'boardRegister'),
      '/boardDetailView/:board_title' =>array('controller' => 'Board', 'action' =>'boardDetailView'),
      '/boardFileDown' =>array('controller' => 'Board', 'action' =>'boardFileDown')


    );

  }//getRouteDefinition - function
  //var_dump(getRouteDefinition()); 디버깅 코드

}//BlogApp -class

 ?>
