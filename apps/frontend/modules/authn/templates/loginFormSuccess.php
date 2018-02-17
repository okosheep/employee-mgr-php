<h1>ログインフォーム</h1>
<form action="<?php echo url_for('authn/login') ?>" method="post">
  <?php echo $form ?>
  <input type="submit" value="ログイン">
</form>
