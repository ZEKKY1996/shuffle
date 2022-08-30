<?php

class Users
{
    public function __construct()
    {

    }

    public function registerUserName(object $link, string $name): void
    {
        $sql = <<<EOT
                INSERT INTO users ( name )
                VALUES ( '$name' )
        EOT;
        $result = mysqli_query($link, $sql);
        if (!$result) {
            error_log('Error: fail to register name').PHP_EOL;
        }
    }

    public function displayUserName(object $link): array
    {
        $userNames = [];
        $sql = 'SELECT name FROM users';
        $result = mysqli_query($link, $sql);
        if (!$result) {
            error_log('Error: fail to register name').PHP_EOL;
        }
        while($userName = mysqli_fetch_assoc($result)){
            $userNames[] = $userName;
        };
        mysqli_free_result($result);
        return $userNames;
    }
}
