<?php
                if (isset($_POST['submit'])) {
                    if(
                        isset($_POST['product-price']) && isset($_POST['paying-period']) && 
                        isset($_POST['delay']) && isset($_POST['savings']) &&                         
                        isset($_POST['pay-from-savings']) && isset($_POST['pay-date']) && 
                        isset($_POST['salary-date']) && isset($_POST['salary']) &&                         
                        isset($_POST['max-spendings']) && isset($_POST['min-spendings'])                      
                        ){
                           $productprice = $_POST['product-price'];  $payingperiod = $_POST['paying-period'];
                           $delay = $_POST['delay']; $savings = $_POST['savings'];
                           $payfromsavings = $_POST['pay-from-savings']; $paydate = $_POST['pay-date'];
                           $salarydate = $_POST['salary-date']; $salary =  $_POST['salary'];
                           $maxspendings= $_POST['max-spendings'];  $minspendings = $_POST['min-spendings'];

                        }


                        
                }


                
?>
        
<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
            <title>Installment Payment Calculator Result</title>
    <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap');
    </style>
    <body class="bg-dark" style="font-family: 'Josefin Sans'; color: #e6e3df;">

        <nav class=" navbar navbar-inverse navbar-static-top">
            <a  href="index.php" class="mt-2 h3 navbar-brand bg-dark text-light title m-2" style="text-align: center;">BUDGETO</a>
        </nav>

        <span class=" mr-5 ml-5 mb-3 mt-2 p-3  card el-bg-dark text-light  m-2" style="text-align: center;">Installment Payment Calculator Result</span>


        <div>
            <?= $productprice?>
            <?= $payingperiod?>
            <?= $delay?>
            <?= $savings?>            
            <?= $paydate?>
            <?= $salarydate?>
            <?= $salary?>
            <?= $payfromsavings?>
            <?= $maxspendings?>
            <?= $minspendings?>

        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>


                $("#calc").mouseover(function(){
                    $(this).css({"background-color": "#e6e3df", "color": "#262626",     "cursor": "pointer"});

                });
                $("#calc").mouseleave(function() {
                    $(this).css({"background-color": "#262626", "color": "#f8f9fa"});
                });
        </script>
        
    </body>
</html>