<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <style>
        .container {
            padding: auto;
            text-align: center;
        }

        a {
            padding: 20px 40px;
            color: #000;
            text-decoration: none;
        }

        .img img {
            max-width: 100%;
            height: auto;
        }

        .goals-container a:hover {
            color: crimson;
        }
    </style>
</head>
<body>
    <div class="card" style="width: fit-content; margin:auto; margin-top: 10%;">
        <div class="card-body">
            <div class="container">
                <div class="img">
                    <img src="https://img.freepik.com/premium-photo/reading-books-concept-mixed-media_641298-10411.jpg?w=1060" alt="Library Image">
                </div>
                <div class="login-container">
                    <br><br>
                    <h2>SELAMAT DATANG DI PERPUS</h2>
                    <div class="goals-container">
                        <button type="button" class="btn btn-primary"><a href="Buku.php">BUKU</a></button>
                        <button type="button" class="btn btn-primary"><a href="Member.php">MEMBER</a></button>
                        <button type="button" class="btn btn-primary"><a href="Peminjaman.php">PINJAM</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
