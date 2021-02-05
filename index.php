
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <form action="admin.php" method="POST">
            <div class="container-fluid">
                <div class="row mt-2">
                    <h1>Connexion</h1>
                    <div class="col-2"></div>
                    <div class="col-8 shadow p-3 mb-5 bg-white rounded">
                        <div class="mb-3">
                            <label for="user" class="form-label">Pseudo
                                <input type="text" class="form-control" id="user" aria-describedby="userHelp" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password
                                <input type="password" class="form-control" id="password" required>
                            </label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
