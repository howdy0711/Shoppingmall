
<html>

<head>

  <meta charset="utf-8">
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://weblog.localhost/css/shopping.css">
</link>
</head>


<body>
<div class="productBack">
<form action="<?php print $base_url; ?>/mypage" method="post" enctype="multipart/form-data">
<table  width = "60%" cellpadding="0" cellspacing="20" rules = none>
 <tr align="center" >
    <td colspan="5"><div style="width: 360px; height: 360px; overflow: hidden">
    <img src="<?php print $product->product_image_location;?>"
    style="width: 360px; height: 360px; ">
  </div></td>
 </tr>
 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>
 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>


 <tr>
    <td style="font-family:돋음; font-size:15" height="16">
       <div align="left">상품명 : <?php print $product->product_name;?></div>
    </td>
 </tr>

 <tr>
    <td style="font-family:돋음; font-size:15" height="16">
       <div align="left">가격: <?php print $product->product_price;?></div>
    </td>
 </tr>

 <tr>
    <td style="font-family:돋음; font-size:15" height="16">
       <div align="left">재고: <?php print $product->product_stock;?></div>
    </td>
 </tr>


 <tr>
    <td style="font-family:돋음; font-size:15">
       <div align="left">제품설명: <?php print $product->product_detail;?></div>
 </tr>

 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>
 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>
 <tr>
    <td style="font-family:돋음; font-size:20">
       <div align="center"> <a style="color: black"href="<?php print $base_url; ?>
         /purchase/<?php print $product->product_name;?>/<?php print $product->product_price;?>/">구매하기</a>
         <a style="color: black"href="<?php print $base_url; ?>/purchase">장바구니</a></div>
 </tr>

</table>
</form>

</div>


</body>



</html>
