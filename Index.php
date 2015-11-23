<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <title>Paint</title>
    <link href="style_nextmeeting.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
$id = 0;
//Connect the Database
require_once "connectDB.php";
$pdo = connectDB();
//Sql query
$sql = "select * from meet_info";
foreach ($pdo->query($sql) as $row) {
    $id++;
}
$count = 0;
$sql = "select * from meet_info";
foreach ($pdo->query($sql) as $row) {
    $count++;
    if ($count == $id) {
        echo "
        <div class=\"container col-md-4\" style=\"background-color: #ee7733; border:none; padding:0; margin:0;border-radius: 0\">
    <div class=\"card card-inverse\" style=\"background-color: #ee7733; border:none; padding:0; margin:0;border-radius: 0\">
        <div class=\"card-block\">
            <h3 class=\"card-title\">{$row['title']}</h3>
            <h7>{$row['location']}</h7><br>
            <h7>{$row['date']}</h7>
            <p></p><br>
            <p class=\"card-text\">{$row['comment']}</p>

            <form action=\"RSVP.php\" method=\"POST\">

            <button type=\"submit\" name=\"eventID\" value=\"$id\" class=\"btn btn-primary\">Register</button>     </form>

        </div>
    </div>
    </div>";
    }
}
$sql = "SELECT * FROM `members` WHERE eventID=$id";
$members = 0;
foreach ($pdo->query($sql) as $row) {
    $members++;
}
echo "
         <div class=\"container col-md-4\">
  <ul class=\"list-group\">
             <li class=\"list-group-item\"> $members members are going</li>";
foreach ($pdo->query($sql) as $row) {
    echo "
     <li class=\"list-group-item\"> {$row['Name']}</li>
     ";
}
echo "
           </ul>
    </div>";

?>
</body>
</html>