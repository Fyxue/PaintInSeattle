    <?php
    /**
     * Created by PhpStorm.
     * User: xuefeiyang
     * Date: 11/21/15
     * Time: 8:57 PM
     */
    //Connect the database
    require_once "function.php";
        $pdo = connectDB();

    switch($_GET['action']){
        case "add":
            $title = $_POST['title'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            $comment = $_POST['comment'];

            $sql = "INSERT INTO `meet_info`(`date`, `location`, `title`, `comment`)VALUE ('{$title}','{$location}','{$date}','{$comment}')";
            $rw = $pdo->exec($sql);
            if($rw>0){
                echo "<script>alert('Succeed');window.location='index.php'</script>";
            }else{
                echo "<script>alert('Failed');</script>";
            }
        break;
        case "rsvp":
            $name = $_POST['name'];
            $eventID = $_POST['eventID'];
            echo"$name";
            echo"$eventID";
            $sql = "INSERT INTO `paint`.`members`(`eventID`, `Name`) VALUE ('{$eventID}','{$name}')";
            $rw = $pdo->exec($sql);
            if($rw>0){
                echo "<script>alert('Succeed');window.location='index.php'</script>";
            }else{
                echo "<script>alert('Failed');</script>";
            }
        break;
    }
