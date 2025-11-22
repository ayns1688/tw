    <!-- header -->
<?php
include("header.html")
?>
 
 
 <section style="padding: 40px;text-align: center;">
    <h2>تماس با ما</h2>
    <form
    style="
    max-width: 400px;
    margin: auto;
    display: flex;
    flex-direction: column;
    "
    >
      <label>نام:</label>
      <input type="text" style=" margin: 10px 0;padding: 10px;" required>
      <label>ایمیل:</label>
      <input type="email" style=" margin: 10px 0;padding: 10px;" required>
      <label>پیام:</label>
      <textarea required></textarea>
      <button type="submit" style="background: #004080;color: white;padding: 10px; border: none;cursor: pointer;">ارسال</button>
    </form>
  </section>

      <!-- footer -->
<?php
include("footer.html")
?>