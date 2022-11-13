<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Animals API</title>

</head>

<body>



    <?php

    $response = file_get_contents('https://zoo-animal-api.herokuapp.com/animals/rand/10');
    $response  = json_decode($response);
    // var_dump($response);
    ?>
    <div class="container">
        <div class="row d-flex">
            <?php
            foreach ($response as $key => $value) { ?>
                <div class="card-wrapper" style="width: 18rem;">
                    <img src="<?php echo $value->image_link ?>" class="card-img-top img-responsive img-rounded w-100 h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value->name ?></h5>
                        <p class="card-text"><?php echo $value->diet ?></p>
                        <a href="<?php echo $value->image_link ?>" class="btn btn-primary">Go To Link</a>
                    </div>
                </div>
            <?php }
            ?>
        </div>

        <?php

        $response2 = file_get_contents('https://zoo-animal-api.herokuapp.com/animals/rand/10');
        $response2  = json_decode($response2);
        // var_dump($response);
        ?>
        <div class="row d-flex">
            <?php
            foreach ($response2 as $key => $value) { ?>
                <div class="card-wrapper col-6" style="width: 18rem;">
                    <img src="<?php echo $value->image_link ?>" class="card-img-top img-responsive img-rounded w-100 h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value->name ?></h5>
                        <p class="card-text"><?php echo $value->diet ?></p>
                        <a href="<?php echo $value->image_link ?>" class="btn btn-primary">Go To Link</a>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>