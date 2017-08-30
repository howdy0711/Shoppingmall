<?php
class AccountController extends Controller{
  const PURCHASE = 'purchase';

function logoutAction(){
  session_start();
  session_destroy();
  $this->redirect('/');
}

  function loginAction(){
    if(!$this->_request->isPost()){ ////post 값 들어있는지 확인
        $this->httpNotFound();
      }

  $user_name = $this->_request->getPost('user_name');
  $user_password = $this->_request->getPost('user_password');
  $userINFO = $this->_connect_model->get('Customer')->getUserRecord($user_name);

if($user_password == $userINFO->user_password){
  $_SESSION['userINFO'] = $userINFO;
  $this->redirect('/');
}
else {
  echo"$user_INFO->user_password";
  echo "비밀번호가 틀렸습니다";
}


  }

  function registerAction(){ // 회원가입  views/Boxingmall/register.php

    if(!$this->_request->isPost()){
    $this->httpNotFound();
  }
   $user_name = $this->_request->getPost('user_name');
   $user_password = $this->_request->getPost('user_password');
   $user_gender = $this->_request->getPost('user_gender');
   $user_address = $this->_request->getPost('user_address');
   $user_age = $this->_request->getPost('user_age');

   $this->_connect_model->get('Customer')->insert($user_name,$user_password,$user_gender,$user_address,$user_age);
   $this->redirect('/');
  }

  function registerViewAction(){
    $index_view = $this->render();
    return $index_view;
  }
}
?>
