<form action="register.php" method="post">
    <input type="text" id="name" name="name"><br>
    <button>登録する</button>
    <p>社員一覧</p>
    <?php foreach ($userNames as $userName): ?>
    <ul>
        <li>
            <?php echo $userName['name']; ?>
        </li>
    </ul>
    <?php
endforeach; ?>
</form>
