<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> products </title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <nav  class="navbar navbar-darl bg-dark">
        <a  class="navbar-brand" href="card.php">Mycard</a>

    </nav>
    <center>
    <div class="main">
    <h3>ِAll Available Products</h3>
</div> 
    </center>

    <?php
    include('config.php');
    $result = mysqli_query($con,"SELECT* FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo 
        "
        <center>
                <main>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card-img-top' >
                    <div class='card-body'>
                        <h5 class='card-title'>$row[name]</h5>
                        <p class='card-text'>$row[price]</p>
                        <a href='val.php?id=$row[id]' class='btn btn-success'>Add product to cart</a>
                    </div>
                </div>
                </main>
        <center>
        
        ";
    }

    ?>


</body>
</html>