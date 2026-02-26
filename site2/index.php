<?php
    include("header.php")
?>



  <section id="home" class="hero">
    <h1>حمل آسان و مطمئن با امیر جهانگیر</h1>
    <p>باربری درون‌شهری و بین‌شهری در مبارکه، نجف‌آباد و فولادشهر</p>
    <a href="#contact" class="btn">درخواست سرویس</a>
  </section>

  <section id="services" class="services">
    <h2>خدمات ما</h2>
    <div class="service-box">
      <div class="card">
        <h3>حمل درون‌شهری</h3>
        <p>جابجایی سریع بار و اثاث داخل شهر با وانت و کامیونت کوچک</p>
      </div>
      <div class="card">
        <h3>حمل بین‌شهری</h3>
        <p>ارسال بار از یک شهر به شهر دیگر با بیمه کامل بار</p>
      </div>
      <div class="card">
        <h3>کارگر اثاث‌کشی</h3>
        <p>تیم حرفه‌ای برای جابجایی اثاث، بسته‌بندی و چیدمان</p>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>تماس با ما</h2>
    <p>برای رزرو سرویس با ما تماس بگیرید:</p>
    <p>📞 8271 231 0913</p>
    <form action="crud.page.asli.php" method="post" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="نام شما">
      <input type="tel" name="call" placeholder="شماره تماس">
      <input type="tel" name="city" placeholder="شهر">
      <textarea name="Description" placeholder="توضیحات"></textarea>
      <button type="submit">ارسال درخواست</button>
    </form>
  </section>




<?php
    include("footer.html")
?>