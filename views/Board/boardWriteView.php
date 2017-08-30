
 <div align=center>
 <form action="<?php print $base_url; ?>/boardRegister" method="post"
    enctype="multipart/form-data" name="boardform">
 <table  width = "60%" cellpadding="0" cellspacing="0" rules = none>
    <tr align="center" >
       <td colspan="5">게시판</td>
    </tr>
    <tr>
      <td colspan="5"> &nbsp &nbsp </td>
    </tr>
    <tr>
      <td colspan="5"> &nbsp &nbsp </td>
    </tr>

    <tr>
       <td style="font-family:돋음; font-size:13" height="16">
          <div align="center">제 목</div>
       </td>
       <td>
          <input name="board_title" type="text" size="25" maxlength="100"
             value=""/>
       </td>
    </tr>
    <tr>
       <td style="font-family:돋음; font-size:13" height="16">
        <div align="center">파일등록</div>
       </td>
       <td><input type="file" name="file"></td>
    </tr>

    <tr>
       <td style="font-family:돋음; font-size:13">
          <div align="center">내 용</div>
       </td>
       <td>
          <textarea name="board_content" cols="100" rows="30"></textarea>
       </td>

       <tr>
         <td colspan="5"> &nbsp &nbsp </td>
       </tr>
    <tr align="left">
       <td>
         <div align="left">
   <td><input type="submit" name="fillOut" value="글 등록"/></td></div>
       </td>
    </tr>

 </table>
 </form>
