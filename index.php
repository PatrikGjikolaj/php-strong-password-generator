<?php 
function rand_string( $length ) {
    $result = "";
    $length = 0;
    $length = $_GET['long'];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789\!?$%&/()^=";
    $result = substr(str_shuffle($chars),0,$length);

    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
</head>
<body style="height: 100vh;" class="bg-dark">
    <header>
        <div class="container-fluid">
            <div class="container">
                <div class="col-12 text-center py-5">
                    <h1 class="text-primary">Strong Password Generator</h1>
                    <h3 class="text-white">Genera una password sicura</h3>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="container bg-white py-5">
                <!-- Form -->
                <form action="index.php" method="get">
                    <div class="row g-3 align-items-center px-5">
                        <div class="col-4">
                            <label for="inputPassword6" class="col-form-label">Lunghezza password:</label>
                        </div>
                        <div class="col-8 ms-auto">
                            <input id="inputPassword6" name="long" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <input class="btn btn-success" type="submit" value="Submit">
                            <input class="btn btn-warning" type="reset" value="Reset">
                        </div>
                    </div>
                </form>
                <div class="row p-5">
                    <div class="col-12">
                        <h5> La tua password è: <?php echo rand_string($length); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>