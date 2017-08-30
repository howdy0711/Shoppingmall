<html>

<head>
<?php if (isset($title)): print $this->escape($this).'-'; endif; ?>
  <meta charset="utf-8">
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://weblog.localhost/css/shopping.css">
</link>

</head>
<body>
  <header>
    <br>
  <h3>Boxing Mall</h3>
</header>
<header>
<h2>
<a href="<?php print $base_url; ?>/">HOME&nbsp;</a>

<?php if(isset($_SESSION['userINFO']->user_name)){?>
<?php }else {?>
<a href="<?php print $base_url; ?>/registerView">회원가입</a>
<?php }?>

<?php if(isset($_SESSION['userINFO']->user_name)){
  $name = $_SESSION['userINFO']->user_name;
  if($name == 'admin'){?>
  <a href="<?php print $base_url; ?>/mypageView">마이페이지</a>
<?php  }
}?>



<?php if(isset($_SESSION['userINFO']->user_name)){
  ?>
  <a href="<?php print $base_url; ?>/board">자유게시판</a>
  <a href="<?php print $base_url; ?>/basket">장바구니</a>
  <a href="<?php print $base_url; ?>/purchaseList">구매내역</a>
  <a href="<?php print $base_url; ?>/logout">로그아웃</a>
<?php }?>


</h2>
<!-- 로그인 ///////////////// -->
<?php if(isset($_SESSION['userINFO']->user_name)){?>
<h3> <?php echo $_SESSION['userINFO']->user_name?>님 환영합니다 </h3>

<?php }else{?>
<form name = "loginForm" action = "/login" method="post">
<table>

      <tr>
        <td><h2>아이디&nbsp;</h2></td><td><input type="text" name="user_name"  /></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td><h2>패스워드&nbsp;</h2></td><td><input type="password" name="user_password" /></td>
        <td>&nbsp;&nbsp;</td>
        <td><input type="submit" name="login" value="로그인"/></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
       </tr>
   </table>
 </form>
 <?php } ?>
 <!-- //////////////////////////////// -->


</header>
  <nav>
    <ul >
      <br>
      <p>CATEGORY</p>
      <br>
    <li><a href="<?php print $base_url; ?>/product/shoes">신발</a></li>
     <li><a href="<?php print $base_url; ?>/product/clothes">의류</a></li>
      <li ><a href="<?php print $base_url; ?>/product/glove">글러브</a></li>
      <li ><a href="<?php print $base_url; ?>/product/sandback">펀치볼/미트</a></li>
      <li ><a href="<?php print $base_url; ?>/product/bag">가방</a></li>
      <li ><a href="<?php print $base_url; ?>/product/protectiveEquipment">보호용품</a></li>
      <li ><a href="<?php print $base_url; ?>/product/etc">기타용품</a></li>
      <li ><a href="<?php print $base_url; ?>/product/fitnessEquipment">체력단련</a></li>
    </ul>
  </nav>
  <div id="main">
    <br>
      <?php print $_content; ?>
  </div>

 <footer>
<br>
<br>
<br>

<h2>Korean Boxing</h2>
      <h2>howdy0711@naver.com</h2>
      <h2>Copyright ⓒ. All rights reserved.</h2>
  </footer>
</body>
</html>
