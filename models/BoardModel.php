<?php
	class BoardModel extends ExecuteModel {


          public function insert($user_name,$board_title,$board_content,$time_stamp,$board_file,$board_file_name){

          $sql ="INSERT INTO
          board (
            user_name,
            board_title,
            board_content,
            time_stamp,
            board_file,
						board_file_name,
            board_count
          )
            VALUES (
              :user_name,
              :board_title,
              :board_content,
              :time_stamp,
              :board_file,
							:board_file_name,
              :board_count
              )";
          $this->execute($sql, array(
            ':user_name' =>$user_name,
            ':board_title' => $board_title,
            ':board_content' => $board_content,
            ':time_stamp' =>$time_stamp,
            ':board_file'=>$board_file,
						':board_file_name'=>$board_file_name,
            ':board_count'=> $board_count
          ));
          }

          public function boardList(){
            $sql = "SELECT * from board";
            $boardList = $this->getAllRecord($sql);
            return $boardList;
          }

					public function boardDetailView($board_title){
            $sql = "SELECT * from board where board_title = '$board_title'";
            $boardData = $this->getRecord($sql);
            return $boardData;
          }

	}
?>
