<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
            <title></title>
    <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap');
    </style>
    <body class="bg-dark" style="font-family: 'Josefin Sans'; color: #e6e3df;">

        <nav class=" navbar navbar-inverse navbar-static-top">
            <a  href="index.php" class="mt-2 h3 navbar-brand bg-dark text-light title m-2" style="text-align: center;">BUDGETO</a>
        </nav>

        <span class=" mr-5 ml-5 mb-3 mt-2 p-3  card el-bg-dark text-light  m-2" style="text-align: center;">Installment Payment Calculator</span>

        <form method="POST" action="IPCR.php">
        <div id="categories" class="container center" style="  margin:30px auto ;">
             <div class="row">


                <div class= "container shadow m-2 col card bg-dark category ">
                    <div class="top-buffer row"><label class="col">Product Price</label><input class="col" name="product-price" type="number" required ></div>
                    <div class="top-buffer row"><label class="col">Paying period (in months)</label><input class="col" name="paying-period" type="number" required></div>

                    <div class="top-buffer row"><label class="col">may there be dallying in paying?</label>
                    <input class="mr-3 ml-3" type="radio" 
                        name = "delay"
                        value="true"
                        checked>
                                Yes
                    </input>

                    <input class="mr-3 ml-3" type="radio" 
                        name = "delay"
                        value="false">
                                No
                    </input></div>

                    <div class="top-buffer row"><label class="col">Current havings</label><input class="col" name="current-havings" type="number" required></div>
                    <div class="top-buffer row"><label class="col">Savings per month</label><input class="col" name="savings" type="number" required></div>
                    <div class="top-buffer row"><label class="col">Willing to pay from savings?</label>
                    <input class="mr-3 ml-3" type="radio" 
                        name = "pay-from-savings"
                        value="true"
                        checked>
                                Yes
                    </input>

                    <input class="mr-3 ml-3" type="radio" 
                        name = "pay-from-savings"
                        value="false">
                                No
                    </input></div>
                </div>

                <div  class= "container shadow m-2 col card bg-dark category">
                    <div class="top-buffer row"><label class="col">First pay date</label><input class="col" name="pay-date" type="date" required></div>
                    <div class="top-buffer row"><label class="col">Monthly salary date</label><input class="col" name="salary-date" type="date" required></div>
                    <div class="top-buffer row"><label class="col">Monthly income</label><input class="col" name="salary" type="number" required></div>
                    <div class="top-buffer row"><label class="col">Maximum monthly spendings</label><input class="col" name="max-spendings" type="number" required></div>
                    <div class="top-buffer row"><label class="col">Minimum monthly spendings</label><input class="col" name="min-spendings" type="number" required></div>
                </div>


            </div>    
            <div class="top-buffer row" style="width: 200px; margin: auto auto;"><input id="calc" type="submit" name="submit" class="col card m-2 p-3  el-bg-dark border-0 "  value="calculate"></div>
   
        </div>
        </form>

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