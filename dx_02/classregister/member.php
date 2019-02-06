<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>受講生登録</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="text-center container">
        <h1 class="text-center logo"><img src="images/logo.png" alt=""></h1>
        <p>授業日程登録</p>
        <div class="row">
            <form action="./member_register.php" method="POST" class="text-left col-6 offset-3">
                <div class="form-group">
                    受講生<input type="text" class="form-control" name="member_name">
                </div>
                <div class="form-group">
                    コース名<input type="text" class="form-control" max="50" min="1" name="classname">
                </div>

                <input type="submit" value="送信する" class="btn btn-primary">
            </form>
        </div>
    </div>





</body>
</html>