<?php
include("header.html");
?>

<form action="registeraction.php" method="post" >
  <div class="imgcontainer">
  </div>
  <p id="fotbal5">اسم </p>
  <input type="text" name="firstname" placeholder="اسم">
  <p id="fotbal5">فامیلی</p>
  <input type="text" name="lastname" placeholder=" فامیلی ">
  <p id="fotbal5"> ایمیل</p>
  <input type="text" name="email" placeholder="ایمیل">
    <p id="fotbal5">نام کاربری</p>
    <input type="text" name="username" placeholder="نام کاربری">
    <p id="fotbal5">رمز عبور </p>
    <input type="text" name="password" placeholder="رمز عبور">
    <p id="fotbal5">تکرار رمز عبور </p>
    <input type="text" name="repassword" placeholder="تکرار رمز عبور">
    <p id="fotbal5"> ثبت نام</p>
    <input type="submit" value="ثبت نام">
</form>

<?php
include("footer.html");
?>   