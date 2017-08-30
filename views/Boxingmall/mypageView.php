<html>
<head>
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://weblog.localhost/css/shopping.css">
</link>
<meta charset="utf-8">

</head>

<body>

<div align=center>
  <form action="<?php print $base_url; ?>/mypage" method="post" enctype="multipart/form-data">
  <table  width = "60%" cellpadding="0" cellspacing="0" rules = none>
   <tr align="center" >
      <td colspan="5">상품 등록</td>
   </tr>
   <tr>
     <td colspan="5"> &nbsp &nbsp </td>
   </tr>
   <tr>
     <td colspan="5"> &nbsp &nbsp </td>
   </tr>


   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">상품종류</div>
      </td>
      <td>
        <select name ="product_category">
          <option>상품종류를 선택하세요
          <option>-------------------------------
          <option value ='shoes' selected>신발
          <option value ='clothes' >의류
          <option value ='glove' >글러브
          <option value ='sandback' >펀치볼/미트
          <option value ='bag' >가방
          <option value ='protectiveEquipment' >보호용품
          <option value ='etc' >기타용품
          <option value ='fitnessEquipment' >체력단련
        </select>
      </td>
   </tr>

   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">상품명</div>
      </td>
      <td>
         <input name="product_name" type="text" size="15" maxlength="10"
             />
      </td>
   </tr>
   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">가격</div>
      </td>
      <td>
         <input name="product_price" type="text" size="10" maxlength="10"
             />
      </td>
   </tr>




   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">재고</div>
      </td>
      <td>
         <input name="product_stock" type="text" size="10" maxlength="100"
             />
      </td>
   </tr>


      <tr>
         <td style="font-family:돋음; font-size:13" height="16">
            <div align="center">사이즈</div>
         </td>
         <td>
            <input name="product_size" type="text" size="10" maxlength="100"
                />
         </td>
      </tr>

   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">상품사진 등록</div>
      </td>
      <td>
        <input type="file" name="product_image_location" id="fileToUpload">
      </td>
   </tr>



   <tr>
      <td style="font-family:돋음; font-size:13">
         <div align="center">상세내용</div>
      </td>
      <td>
         <textarea name="product_detail" cols="100" rows="30"></textarea>
      </td>
   </tr>

   <tr><td>&nbsp;</td></tr>

   <tr align="left">
      <td>
        <div align="left">
  <td><input type="submit" name="login" value="상품등록"/></td></div>
      </td>
   </tr>

</table>
</form>
</body>
</html>
