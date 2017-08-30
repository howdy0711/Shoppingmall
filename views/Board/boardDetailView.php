
<html>

<head>

  <meta charset="utf-8">
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://weblog.localhost/css/shopping.css">
</link>
</head>


<body>
<div align=center>
<table width = "60%"  cellpadding="0" cellspacing="0">


   <tr>
      <td style="font-family:돋음; font-size:12" height="16">
         <div align="center">제 목&nbsp;&nbsp;</div>

      </td>

      <td style="font-family:돋음; font-size:12">
        <?php print $boardData->board_title?>

      </td>
   </tr>

   <tr bgcolor="cccccc">
      <td colspan="2" style="height:2px;">
      </td>
   </tr>

   <tr>
      <td style="font-family:돋음; font-size:12">
         <div align="center">내 용</div>
      </td>
      <td style="font-family:돋음; font-size:12">
         <table border=0 width=250 height=400 style="table-layout:fixed">
            <tr>
               <td valign=top style="font-family:돋음; font-size:12">
                  <?php print $boardData->board_content?>
               </td>
            </tr>
         </table>
      </td>
   </tr>
   <tr>
      <td style="font-family:돋음; font-size:12">
         <div align="center">첨부파일</div>
      </td>
     <td style="font-family:돋음; font-size:12">

      <form action="/boardFileDown" method="post">
         <input type ="submit" name="fileName" value="<?php print $boardData->board_file_name?>">
         </button>
      </form>

   </td>
</tr>
</table>
</body>
</html>
