<!DOCTYPE html>
<html lang=ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/customstyle.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light " aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Фильмы на вечер</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation" wfd-invisible="true">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse " id="navbarsExample05" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главна</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about/">О проекте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/random">Случайный фильм</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/add">Добавить фильм</a>
                    </li>

                

                </ul>

            </div>
        </div>
    </nav>


    <div class=" py-5 bg-light">
        <div class="container">
                @yield('main_content')
        
        </div>
    </div>


    
        <footer class="text-center text-white" style="background-color: #345">
           

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">khisamov22@gmail.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>