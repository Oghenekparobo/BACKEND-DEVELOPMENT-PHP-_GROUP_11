
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP program to create a chessboard.</title>
    <style>
        table{ 
            border: 1px solid  black;
            width: 400px;
        }
        td{ 
            padding: 20px;
            border: 1px solid  black;
            background-color: greenyellow;
        }

        .bgcolor{ 
            background-color: brown;
        }
        .bgdark{ 
            background-color: black;
        }
    </style>
</head>
<body class="bgdark">
    <div class="container text-center">
    <div class="row text-center">
        <div class="col-md-3"></div>
        <div class="col-md-6 pt-5">
            <form action="" method="post">
              
                <input type="number" name="cb" placeholder="input number of rows" class="p-2 fs-5">
                <button type="submit" name="submit" class="btn btn-success px-4 py-3 text-white fs-3 fw-bold">generate chess board</button>

            </form>
            <hr>

            <br>
            <table>
                <?php 
                if(isset($_POST['submit'])){ 
                    $data = $_POST['cb'];
                    

                    for ($row=1; $row <= $data ; $row++) { 
                        echo "<tr>";
                        for($col = 1; $col<= $data; $col++){
                            if(($row + $col) % 2 == 0){ 
                                echo "<td  class='bgcolor'></td>";
                            }else{ 
                                echo "<td></td>";
                            }

                        }
                        echo "</tr>";
                    }
                }
                
                
                
                
                ?>
            </table>
        </div>
    </div>
    </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>