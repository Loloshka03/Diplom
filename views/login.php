<?php include '/newView/templates/header.php';?>
<form action="/login/auth" method="post">

    <div style="margin-top: 20%; margin-left: 35%;">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Логин" name="login"/>
    </div>

    <div class="input-group">
        <input type="password" class="form-control" placeholder="********" name="password"/>
    </div>
    <input type="submit" value="Войти" name="sumbit" href="" />
    </div>

</form>
</body>
</html>
<?php include '/newView/templates/footer.php';?>