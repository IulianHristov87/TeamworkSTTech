<?php

class HomeModel extends BaseModel
{
    function getLatestPosts(int $maxCount){
        $statement = self::$db->query("SELECT posts.id, title, content, date, category, fullname ".
            "FROM posts JOIN users ON posts.id = users.id ".
            "ORDER BY date DESC LIMIT". $maxCount);
        $statement->fetch_all(MYSQLI_ASSOC);
    }
}
