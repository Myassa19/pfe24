<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <!-- Bootstrap JS and Popper.js -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body btn-dark">
                            <div class="text-center">
                               <img src="images/Picsart_24-02-10_18-59-45-578.png" width="80" height="80">
                            </div>
                            <h1 class="text-center mt-3">LOG-IN</h1>
                            <br>
                            <form action="login.php" method="post">
                                <label for="Email">Email:</label>
                                <input type="email" name="Email" class="form-control border-dark" required>
                                
                                <label for="Password">Password:</label>
                                <input type="password" name="Password" class="form-control border-dark" required>
                                <br>
                                <a href="login.php">
                                <button type="submit" class="btn btn-warning">Log in</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
