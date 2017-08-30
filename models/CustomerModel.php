<?php
	class CustomerModel extends ExecuteModel {

		public function getUserRecord($user_id) {
			$sql = "SELECT * FROM user WHERE user_name = :user_name";
			$userData = $this->getRecord($sql,array(':user_name' => $user_id));
			return $userData;
		}

		public function insert($user_name, $user_password, $user_gender, $user_address, $user_age) {

	    $sql = "INSERT INTO user (user_name, user_password, user_gender, user_address, user_age)VALUES (:user_name,:user_password,:user_gender,:user_address,:user_age)";
	    $this->execute($sql, array(
        ':user_name' => $user_name,
	      ':user_password' => $user_password,
				':user_gender' => $user_gender,
				':user_address' => $user_address,
				':user_age' => $user_age
	    ));
		}




    public function login($user_name,$user_password){
      $sql ="SELECT user_password FROM user where user_name = $user_name";
    }
	}
?>
