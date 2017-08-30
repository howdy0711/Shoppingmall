<?php
class BoxingmallController extends Controller{
  const PURCHASE = 'purchase';

   function indexAction(){ // /views/Boxingmall/index.php
     $product_list = $this->_connect_model->get('Product')->productAllList();
     $index_view = $this->render(array('product_list'=>$product_list));
    return $index_view;
  }


  function mypageViewAction(){ // 마이페이지
    if(isset($_SESSION['userINFO'])){
   $index_view = $this->render();
   return $index_view;
 }
 else{
   $this->redirect('/');
 }
  }

  function mypageAction(){ ///상품페이지
    if(isset($_SESSION['userINFO'])){
    if(!$this->_request->isPost()){ ////post 값 들어있는지 확인
        $this->httpNotFound();
      }

       $product_category = $this->_request->getPost('product_category');
       $product_name = $this->_request->getPost('product_name');
       $product_price = $this->_request ->getPost('product_price');
       $product_stock = $this->_request ->getPost('product_stock');
       $product_size = $this->_request ->getPost('product_size');
       $product_detail = $this->_request ->getPost('product_detail');

      $save_dir = "public/img/";
      $dest = $save_dir. basename($_FILES["product_image_location"]["name"]);

      if(!move_uploaded_file($_FILES["product_image_location"]["tmp_name"],$dest)){
      echo "업로드 실패";
    }

   $dir = "http://weblog.localhost/public/img/";
    $product_image_location = $dir . $_FILES["product_image_location"]["name"];
       $this->_connect_model->get('Product')->insert($product_category,$product_name
       ,$product_price,$product_stock,$product_size,$product_image_location,$product_detail);
       $this->redirect("/product".'/'.$product_category);
     }
     else {
       $this->redirect('/');
     }
  }


  function basketAction(){ // 장바구니
    if(isset($_SESSION['userINFO'])){

   $index_view = $this->render();
   return $index_view;
 }
 else{
 $this->redirect('/');
 }
  }


  function productAction($param){ // 상품
    $p_category = $param['category'];
    $product_list = $this->_connect_model->get('Product')->productList($p_category);
    $index_view = $this->render(array('product_list'=>$product_list)
    );
    return $index_view;
    }

  function productDetailViewAction($param){ //상품 상세페이지
    $p_name = $param['p_name'];
    $product = $this->_connect_model->get('Product')->productDetail($p_name);
    $index_view = $this->render(array('product'=>$product,'_token' => $this->getToken(self::PURCHASE)));
    return $index_view;
  }


  function purchaseAction($param){ // 구매액션

    if(isset($_SESSION['userINFO'])){
    $p_name = $param['p_name'];
    $p_price = $param['p_price'];
    $user_name = $_SESSION['userINFO']->user_name;
    $this->_connect_model->get('Product')->purchase($p_name,$p_price,$user_name);
    $this->redirect('/');
  }
  else {
    $this->redirect('/');
  }
    }


  function purchaseListAction(){ // 구매내역
    if(isset($_SESSION['userINFO'])){
      $user_name = $_SESSION['userINFO']->user_name;
      $purchaseList =  $this->_connect_model->get('Product')->purchaseHistory($user_name);
      $index_view = $this->render(array('purchaseList'=>$purchaseList));
      return $index_view;
    }
    else{
      $this->redirect('/');
    }
      }
}
 ?>
