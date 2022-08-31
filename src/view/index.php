<h2 class="mt-4"><a href="new.php">社員を登録する</a></h2><br>
<form action="index.php">
    <a href="index.php"><input class="btn btn-primary" type="button" value="シャッフルする"></a><br>
</form>
<div class="d-flex flex-row mt-4">
    <div class="mr-4">
        <p>シャッフルグループ１</p>
            <?php for ($i = 0; $i < count($userNames); $i += 2): ?>
                <ul>
                    <li>
                        <?php echo $userNames[$i]["name"]; ?>
                    </li>
                </ul>
            <?php endfor; ?>
    </div>
    <div>
        <p>シャッフルグループ２</p>
            <?php for ($i = 1; $i < count($userNames); $i += 2): ?>
                <ul>
                    <li>
                        <?php echo $userNames[$i]["name"]; ?>
                    </li>
                </ul>
            <?php endfor; ?>
    </div>
</div>
