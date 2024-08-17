<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Limbert Maceiros</title>
    <style>
        .pie{
            background: #566573;
            border-radius: 15px;
            color: white;
            font-size: 13px;
        }
        .barra{
            background: rgb(0, 0, 0);
        }
        .color{
            background: #34495E;
            color: white; 
        }
        .color:hover{
            background:#99A3A4;
            color: white;
        }
        .colordos{
            background: #0E6251;
            color: white;
        }
        .colordos:hover{
            background: #1ABC9C;
            color: white;
        }
        .btn{
            width: 100%;
            margin: 5px;
            color: white;
        }
        .fondo-presentacion{
            background:#5F6A6A;
            background-size: cover;
            height: 100%;
            border-radius: 20px;
        }
        .container{
            
        }
        body{
            background:url("img/fondo.jpg");
            /*background:#5F6A6A;*/
            background-size:cover;
            color:white;
            animation: mover 10s linear infinite;
        }
        .imagen{
            border-radius: 10px;
        }
        .imagen-movimiento {
            position: absolute;
            animation: mover 10s linear infinite;
            width: 100%;
            height: auto;
        }
    
        @keyframes mover {
            0% {
                left: -100%;
            }
            100% {
                left: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <img src="imagenes/banner.png" class="imagen img-responsive">
        </div>
        <div class="row">
            <div class="col-md-2 d-grid gap-2">
                <a href="#" class="btn btn-warning">MENÚ</a><br>
                <a href="#" class="btn btn-danger">Primer Bimestre</a><br>
                <a href="noticias/" class="btn btn-info" target="_blank">Noticias</a><br>
                <a href="CRUD/" class="btn btn-info" target="_blank">CRUD PHP</a><br>
                <a href="#" class="btn btn-danger">Segundo Bimestre</a><br>
                <a href="jquery/" class="btn color" target="_blank">JQUERY</a><br>
                <a href="calculadora/" class="btn color" target="_blank">Calculadora</a><br>
                <a href="facebook/" class="btn color" target="_blank">Facebook</a><br>
                <a href="crudS/" class="btn color" target="_blank">NUEVO CRUD</a><br>
                <a href="POO/" class="btn color" target="_blank">Modelo MVC</a><br>
                <a href="#" class="btn btn-danger">Tercer Bimestre</a><br>
                <a href="POO2/" class="btn colordos" target="_blank">Modelo MVC 2</a><br>
                <a href="ventas/" class="btn colordos" target="_blank">Ventas</a><br>
            </div>
            <br><br><br>
            <div class="col-md-8 fondo-presentacion">
                <div class="">
                <center><h3>Presentacion: </h3><p>
                    Bienvenidos en este apartado estare publicando a lo largo del año las practicas de Diseño web del Licenciado Alejandro Guzman
                </p>
                <p>
                    Por dar ejemplos puede hacer click en las diferentes opciones brindadas.<br>
                    Usted pucra ver diferentes opciones durante el transcurso del año.
                </p></center>
                </div>
            </div>
            <div class="col-md-2">
                <h3>Otros</h3>
            </div>
        </div>
        <br>
        <div class="row pie">
            <br>
            <center>Desarrollado por un Técnico Medio del Área de Sistemas<br>
            &copy; LFMV(2024)</center>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>