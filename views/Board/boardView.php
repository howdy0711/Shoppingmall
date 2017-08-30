<html>
<head>
  <title>자유게시판</title>
</head>
<table>
</table>

<body>
<center>자유게시판</center>

<table width = "80%" border="0.5" align = "center" cellpadding
="5"rules ="cols,rows" frame = "hsides">
<br><br>
<tbody> <tr>
  <td width= "10%" align = "center">번호</td>
  <td width= "40%" align = "center">제목</td>
  <td width= "20%" align = "center">작성자</td>
  <td width= "20%" align = "center">조회수</td>
  <td width= "10%" align = "center">날짜</td>
</tr>
</tbody>

<?php $num = 0?>
<?php foreach ($boardList as $value){ ?>
  <tr>
   <td align = "center"><?php print $num = $num+1;?></td>
   <td align = "center"><a href ="<?php print $base_url; ?>/boardDetailView/<?php print $value->board_title; ?>" style="color:black"><?php print $value->board_title; ?></ad></td>
   <td align = "center"><?php print $value->user_name; ?></td>
   <td align = "center"><?php print $value->board_count; ?></td>
   <td align = "center"><?php print $value->time_stamp; ?></td>
 </tr>

<?php }?>




</tr>
   <tr align=right>
      <td colspan=5>
            <a style="color: black" href="/boardWriteView">[글쓰기]</a>
      </td>
   </tr>
</table>

</body>
</html>
