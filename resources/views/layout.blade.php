<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estoque</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/bfd55040ca.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="w3-sidebar w3-black w3-bar-block" style="width:5%;">            
            <a href="#" class="w3-bar-item w3-button icone"><i class="fas fa-home fa-2x"></i></a>
            <a href="#" class="w3-bar-item w3-button icone"><i class="far fa-user fa-2x"></i></a>
            <a href="#" class="w3-bar-item w3-button icone"><i class="far fa-address-book fa-2x"></i></a>
            <a href="#" class="w3-bar-item w3-button icone"><i class="far fa fa-globe fa-2x"></i></a>
            <a href="#" class="w3-bar-item w3-button icone"><i class="fa fa-envelope fa-2x"></i></a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-left:5%">
            <a class="navbar-brand" href="/produtos">Home</a>
        </nav>        
        <div class="jumbotron jumbotron-fluid photo" style="margin-left:5%">
            <h1 class="font">@yield('cabecalho')</h1>
        </div>
        <div class="container" style="margin-left:5%; heigth:100%;">
        @yield('conteudo')
        </div>
        <footer style="margin-top:10%;background-color:#a7adb2;">
            <nav class="navbar navbar-expand-lg bg">
                <a class="navbar-brand" href="#"></a>
            </nav>        
        </footer>
    </body>
</html>

