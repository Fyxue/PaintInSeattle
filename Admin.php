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
    <form action="action.php?action=add" method="post">
        <fieldset class="form-group">

            <label for="formGroupExampleInput">Event</label>
            <input type="text" class="form-control" name="title" placeholder="Event">

            <label for="formGroupExampleInput2">Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location">

            <label for="formGroupExampleInput2">Date & Time</label>
            <input type="text" class="form-control" name="date" placeholder="Date & Time">

            <label for="formGroupExampleInput2">Description</label>
            <textarea type="text" class="form-control" rows=5 name="comment" placeholder="Description"></textarea>

        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>