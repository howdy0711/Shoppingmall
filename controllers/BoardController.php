<?php
class BoardController extends Controller{

    function boardViewAction(){
      if(isset($_SESSION['userINFO'])){
      $boardList = $this->_connect_model->get('Board')->boardList();
      $index_view = $this->render(array('boardList'=>$boardList));
      return $index_view;
    }
    else {
      $this->redirect('/');
    }
    }

    function boardDetailViewAction($param){
      if(isset($_SESSION['userINFO'])){
      $board_title = $param['board_title'];
      $boardData = $this->_connect_model->get('Board')->boardDetailView($board_title);
      $index_view = $this->render(array('boardData'=>$boardData));
      return $index_view;
    }
    else{
      $this->redirect('/');

    }
    }

    function boardWriteViewAction(){
      if(isset($_SESSION['userINFO'])){
      $index_view = $this->render();
      return $index_view;
    }
    else{
      $this->redirect('/');
    }
    }

    function boardFileDownAction(){
      $board_file = $this->_request->getPost('fileName');

      $filepath = "public/file/".$board_file;
      $filesize = filesize($filepath);
      $path_parts = pathinfo($filepath);
      $filename = $path_parts['basename'];
      $extension = $path_parts['extension'];

      header("Pragma: public");
      header("Expires: 0");
      header("Content-Type: application/octet-stream");
      header("Content-Disposition: attachment; filename=\"$filename\"");
      header("Content-Transfer-Encoding: binary");
      header("Content-Length: $filesize");
      //
       ob_clean();
       flush();
      readfile($filepath);
    }

    function boardRegisterAction(){
      if(isset($_SESSION['userINFO'])){

      if(!$this->_request->isPost()){ ////post 값 들어있는지 확인
          $this->httpNotFound();
        }

         $now = new DateTime();
         $user_name = $_SESSION['userINFO']->user_name;
         $board_title = $this->_request->getPost('board_title');
         $board_content = $this->_request ->getPost('board_content');
         $time_stamp = $now->format('Y-m-d H:i:s');

        $save_dir = "public/file/";
        $dest = $save_dir. basename($_FILES["file"]["name"]);

        if(!move_uploaded_file($_FILES["file"]["tmp_name"],$dest)){
        echo "업로드 실패";
      }

     $dir = "http://weblog.localhost/public/file/";
         $board_file_name = $_FILES["file"]["name"];
         $board_file = $dir . $_FILES["file"]["name"];
         $this->_connect_model->get('Board')->insert($user_name,$board_title
         ,$board_content,$time_stamp,$board_file,$board_file_name);
         $this->redirect('/');
    }
    else{
      $this->redirect('/');
    }

  }



}



?>
