<?php foreach ($errors as $error) : ?>
    <ul class="mt-3 text-danger">
        <li>
            <?php echo $error; ?>
        </li>
    </ul>
<?php endforeach; ?>
<form action="register.php" method="post">
    <input type="text" id="name" name="name"><br>
    <button class="btn btn-primary mt-1 mb-4">登録する</button>
    <p>社員一覧</p>
    <ul class="d-flex flex-wrap">
            <?php foreach ($userNames as $userName) : ?>
            <li class="mr-5">
                <?php echo $userName['name']; ?>
            </li>
            <?php endforeach; ?>
        </ul>
</form>
