<?php
include_once 'MySQLDB.php';
require 'db.php';

//  create the database again
$db->createDatabase();
// select the database
$db->selectDatabase();

// drop the tables

// $sql = "drop table if exists user";
$sql = "drop table if exists post";
$result = $db->query($sql);

// create the tables
$sql = "create table user (userID  integer not null, 
                                firstname varchar(30),
                                surname varchar(30),
								userName varchar(30),
                                password varchar(30),
                                primary key(userID)
								)ENGINE=InnoDB";

$result = $db->query($sql);

$sql = "create table post (postID  integer not null auto_increment, 
								userName varchar(30),
                                postTitle varchar(30),
                                content varchar(250),
                                date datetime,
                                primary key(postID)
								)ENGINE=InnoDB";

$result = $db->query($sql);

$sql = "create table comment (commentID  integer not null auto_increment, 
                                parentID integer,
								userName varchar(30),
                                content varchar(250),
                                date datetime,
                                primary key(postID)
								)ENGINE=InnoDB";

$result = $db->query($sql);


if ( $result )
{
    echo 'the customer table was added<br>';
}
else
{
    echo 'the customer table was not added<br>';
}

$sql = "insert into user values (null, 'bob', 'Xu', 'userName', 'a')";
$result = $db->query($sql);
$sql = "insert into user values (null, 'bofb', 'Xuf', 'bob', 'a')";
$result = $db->query($sql);
// $sql = "insert into post values (null, 'userName', 'postTitle', 'BCPR301')";
// $result = $db->query($sql);  
?>
<html>
<body>

</body>
</html>
