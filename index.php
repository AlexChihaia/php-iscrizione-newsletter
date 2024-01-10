<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- /bootstrap -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php
                if (isset($_GET['email'])) {
                    $email = $_GET['email'];
                    #funzione validate_email
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<div class="alert alert-success" role="alert">Success: The email contains a dot and an at sign.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error: The email does not contain a dot and an at sign.</div>';
                    }
                }
                ?>
                <form action="index.php" method="get">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>