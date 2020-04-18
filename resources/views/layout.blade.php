<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estoque</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/produtos">Home</a>
        </nav>        
        <div class="jumbotron jumbotron-fluid">
            <h1 class="text-center" style="font-size:60px;">@yield('cabecalho')</h1>
        </div>
        <div class="container">
        @yield('conteudo')
        </div>
        <footer style="margin-top:10%;background-color:#a7adb2;">
            <nav class="navbar navbar-expand-lg bg">
                <a class="navbar-brand" href="#"></a>
            </nav>        
        </footer>
    </body>
</html>

