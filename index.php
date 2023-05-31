<!DOCTYPE html>
<html lang="ja">
  
<head>
    <title>Contact Page</title>
</head>

<body>
  <form id="contact-form" method="post" action="contact-form.php">
      <div class="contact-section">
          <h4>名前（ニックネーム）<span><p>必須</p></span></h4>
          <input type="text" id="Name" name="Name" required>
      </div>
      <div class="contact-section">
          <h4>仕事</h4>
          <input type="text" id="Job" name="Job">
      </div>
      <div class="contact-section">
          <h4>居住地</h4>
          <input type="text" name="Residence" id="Residence">
      </div>
      <div class="contact-section">
          <h4>電話番号<span><p>必須</p></span></h4>
          <input type="text" name="phone" id="phone" required>
      </div>
      <div class="contact-section">
          <h4>メールアドレス<span><p>必須</p></span></h4>
          <input type="email" id="Email" name="Email" required>
      </div>
      <div class="contact-section">
          <h4>何についての相談？<span><p>必須</p></span></h4>
          <textarea id="Message" name="Message" cols="30" rows="8" required></textarea>
      </div>
      <div class="wrap">
          <button type="submit" class="button">送  信</button>
      </div>
  </form>
</body>

</html>
