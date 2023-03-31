<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
            <title>budgeto</title>
    <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap');
    </style>
    <body class="bg-dark" style="font-family: 'Josefin Sans'; color: #e6e3df;">

        <nav class=" navbar navbar-inverse navbar-static-top">
            <a  href="#" class="mt-2 h3 navbar-brand bg-dark text-light title m-2" style="text-align: center;">BUDGETO</a>
        </nav>
        
        <div id="categories" class="container center" style="  margin-top:120px;">
             <div class="row">
                <div id="IPC"  class= "shadow m-2 col card el-bg-dark category">
                    <p class= "p-5 card-title ">Installment Payment Calculator</p>
                </div>
                <div id="#" class= "shadow m-2 col card el-bg-dark category">
                    <p class= "p-5 card-title ">X</p>
                </div>
                <div id="#" class= "shadow m-2 col card el-bg-dark category">
                    <p class= "p-5 card-title ">X</p>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $("#categories").find(".category").each(function(){
                $(this).click(function(){
                    var to =  $(this).attr('id') + '.php';
                    window.location.href = to;
                });
                $(this).mouseover(function(){
                    $(this).css({"background-color": "#e6e3df", "color": "#262626",     "cursor": "pointer"});

                });
                $(this).mouseleave(function() {
                    $(this).css({"background-color": "#262626", "color": "#f8f9fa"});
                });
            });
        </script>
    </body>
</html>