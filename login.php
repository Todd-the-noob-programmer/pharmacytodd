<?php
?>
<form action="succesfull.html" style=" border:
2px dotted blue; text-align: center; width: 400px;">

        <input class="username"  type="email" name="username" placeholder="username" value="<?php if(isset($_COOKIE["username"]))  {echo
    $_COOKIE["username"]; } ?>"
        <input class="pass" type="password" name="password"  value="<?php if(isset($_COOKIE["password"]))  {echo
        $_COOKIE["password"]; } ?>">
        <p><input class="check" type="checkbox" name="remember" />
        Remember me
        </p>
    <input type="submit" value="ورود">
    <p>حساب کاربری ندارید؟</p><a href="sign-up.php">ثبت نام</a>
</form>
