<?php 
$error = '';
$bill = '';
$totalbill = '';

if(isset($_POST['submit'])){ 
    $unit = $_POST['unit'];


    if(empty($unit) || $unit < 50 ){ 
        $error = "units cannot be below 50!";
    }elseif ($unit == 50 || $unit < 100 ) {
        $bill = $unit * 3.50;
        $totalbill = "total amount of units purchased is NGN$bill";
    }
    
    
    if ($unit >= 100 &&  $unit < 200 ) {
        $bill =$unit * 4.00;
       $totalbill = "total amount of units purchased is NGN$bill";
    }elseif ($unit >= 200 && $unit  >= 250) {
        $bill =$unit * 6.50;
        $totalbill = "total amount of units purchased is NGN$bill";
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> a Program to calculate the electric bill.</title>
</head>
<body>

<div class="shadow-sm p-3 mb-5 bg-body rounded">
<div class="container text-uppercase text-primary text-center pt-5">
<h1> a Program to calculate the electric bill.</h1>
</div>
</div>


<div class="container">
    <form action="" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label text-success fs-2 fw-bold lh-1 text-capitalize pb-3">side hustle electricity distribution company</label>
  <input type="number" class="form-control" name="unit" placeholder="enter unit" value="<?php echo $unit ?>">
</div>
<div class="mb-3">
    <button class="btn-secondary btn" name="submit" type="submit">Purchase</button>
</div>
    </form>
    <div class="alert alert-white text-danger text-uppercase" role="alert">
    <?php echo $error ?>
     </div>
     <div class="container-fluid bg-success text-black">
         <h1><?php echo $totalbill;?></h1>
    </div>
</div>

<

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>