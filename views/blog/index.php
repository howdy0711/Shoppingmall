<?php $this->setPageTitle('title','사용자의 Top Page') ?>
<form action="<?php print $base_url; ?>/status/post" method="post">
  <input type="hidden" name="_token" value="<?php print $this->escape($_token);?>" />
  <?php if (isset($errors) && count($errors) > 0): ?>
  <?php print $this->render('errors',array('errors' => $errors)); ?>
  <?php endif; ?>
    <p> 작성 글 입력 : </p>
    <textarea name="message" rows="4" cols="70"><?php print $this->escape($message); ?></textarea>
    <p><input type="submit" value="글 등록"></p>
</form>
<hr>
<h2>글 목록</h2>
<div id="statuses">
    <?php foreach($statuses as $status): ?>
    <?php print $this->render('blog/status', array('status' => $status)); ?>
    <?php endforeach; ?>
</div>
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
