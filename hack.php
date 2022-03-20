<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <label>Email :</label>
            <br>
            <input type="email" name="email">
        </div>
        <div>
            <label>Comment :</label>
            <br>
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
        </div>
        <?php
            @$email = @$_POST['email'];
            @$comment = @$_POST['comment'];
        ?>
        <div>
            <span>From :</span>
            <?php
                echo @$email;
            ?>
        </div>
        <div>
            <span>What he says is :</span>
            <?php
                echo @$comment;
            ?>
        </div>
        <div>
            <button type="submit">Send :</button>
        </div>
    </form>
</body>
</html>