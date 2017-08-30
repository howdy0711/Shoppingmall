
<html>

<head>

  <meta charset="utf-8">
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://weblog.localhost/css/shopping.css">
</link>
</head>

<body>
<div class="productBack">

  <?php foreach ($product_list as $value){ ?>
<div style= "float:left">
  <div > <a href="<?php print $base_url; ?>/productDetailView/<?php print $value->product_name; ?>">
        <div style="width: 180px; height: 180px; overflow: hidden">
    <img src=<?php print $value->product_image_location; ?>
    style="width: 180px; height: 180px; ">
</div>

             <p><?php print $value->product_name; ?></p> </div>
            <div > <p><?php print $value->product_price; ?>원</p></div>
            <div > <p>재고 <?php print $value->product_stock; ?></p></div>
</a>
</div>
  <?php } ?>
</div>


</body>



</html>
