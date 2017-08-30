<html>
<head>
  <title>구매내역</title>
</head>
<table>
</table>

<body>
  <center>구매내역</center>
<table width = "80%" border="0.5" align = "center" cellpadding
="5"rules ="cols,rows" frame = "hsides">
<br><br>

<tbody> <tr>
  <td width= "10%" align = "center">번호</td>
  <td width= "40%" align = "center">상품이름</td>
  <td width= "20%" align = "center">구매가격</td>
  <td width= "20%" align = "center">구매날짜</td>
  <td width= "10%" align = "center">비고</td>
</tr>
</tbody>

<?php $num = 0?>
<?php foreach ($purchaseList as $value){ ?>
  <tr>
   <td align = "center"><?php print $num = $num+1;?></td>
   <td align = "center"><?php print $value->product_name; ?></td>
   <td align = "center"><?php print $value->product_price; ?></td>
   <td align = "center"><?php print $value->time_stamp; ?></td>
   <td align = "center"></td>
 </tr>

<?php }?>


</table>
</body>
</html>
