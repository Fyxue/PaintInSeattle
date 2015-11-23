<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <title>Paint</title>
    <link href="style_nextmeeting.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container col-md-4">
    <?php
    $eventID=$_POST['eventID'];
    echo "$eventID";
    echo "
        <form action=\"action.php?action=rsvp\" method=\"post\">
        <fieldset class=\"form-group\">
            <label for=\"formGroupExampleInput\">Your Name: *</label>
            <input type=\"text\" class=\"form-control\" name=\"name\">
        </fieldset>
        <button type=\"submit\" name=\"eventID\" value=\"$eventID\" class=\"btn btn-primary\">Register</button>
    </form>
    "
    ?>

</div>
</body>
</html>
