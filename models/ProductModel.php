<?php
	class ProductModel extends ExecuteModel {

    public function insert($product_category, $product_name,
    $product_price, $product_stock, $product_size,$product_image_location,$product_detail){

    $sql ="INSERT INTO
    product (
      product_category,
      product_name,
      product_price,
      product_stock,
      product_size,
      product_image_location,
      product_detail)
      VALUES (
        :product_category,
        :product_name,
        :product_price,
        :product_stock,
        :product_size,
        :product_image_location,
        :product_detail)";
    $this->execute($sql, array(
      ':product_category' =>$product_category,
      ':product_name' => $product_name,
      ':product_price' => $product_price,
      ':product_stock'=>$product_stock,
      ':product_size'=> $product_size,
      ':product_image_location' => $product_image_location,
      ':product_detail'=> $product_detail
    ));
    }


		public function purchase($product_name, $product_price, $user_name){
			$sql1 = "UPDATE product set product_stock = product_stock-1  WHERE product_name = '$product_name'";
			$this->execute($sql1);

		$now = new DateTime();
		$sql ="INSERT INTO
		history(
			user_name,
			product_name,
			product_price,
			time_stamp
			)
			VALUES(
				:user_name,
				:product_name,
				:product_price,
				:time_stamp
				)";

		$this->execute($sql, array(
			':user_name' => $user_name,
			':product_name' =>$product_name,
			':product_price' =>$product_price,
			':time_stamp' => $now->format('Y-m-d H:i:s')
		));
		}

		public function productList($product_category){
			$sql = "SELECT * from product WHERE product_category = '$product_category'";
			$productData = $this->getAllRecord($sql);
			return $productData;
		}

		public function productAllList(){
			$sql = "SELECT * FROM product";
			$productData = $this->getAllRecord($sql);
			return $productData;
		}

		public function productDetail($product_name){
			$sql = "SELECT * from product WHERE product_name = '$product_name'";
			$productData = $this->getRecord($sql);
			return $productData;
		}

		public function purchaseHistory($user_name){
			$sql = "SELECT * from history WHERE user_name = '$user_name'";
			$purchaseData = $this->getAllRecord($sql);
			return $purchaseData;
		}


	}
?>
