<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQUERY</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body{
            background: #656871;
            color: white;
        }
        .contenedor{
            background: #474B56;
            /*top: 10px;;*/
            padding: 10px;
            border-radius: 20px;
        }
        .imagen{
            border-radius: 40px;
        }
        .aux{
            height: 275px;
        }
        h3{
            text-align: center;
        }
        #entrada{
            color:darkblue;
        }
        #dado1, #dado2, #dado12, #dado22, #dado13, #dado23{
            color: darkblue;
        }
        .contenedorespecial{}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="contenedorespecial">
                <img src="imagenes/bannerof.png" class="img-responsive imagen"><br>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Suma de dos Numeros</h3>
                    <center><img src="imagenes/suma.png" class="img-responsive"></center>
                    <div class="form-group">
                        <label>Primer Valor</label>
                        <input type="text" id="valor1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Segundo Valor</label>
                        <input type="text" id="valor2" class="form-control">
                    </div>
                    <button id="sumar" class="btn btn-info">Sumar</button>
                    <button id="limpiarsuma" class="btn btn-dark">Nueva Suma</button><br>
                    <div id="ressuma">Resultado</div>
                    </div>
                </div>

            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Hallar la Hipotenusa</h3>
                    <center><img src="imagenes/hipotenusa.jpg" class="img-responsive"></center>
                    <div class="form-group">
                        <label>Cateto Opuesto</label>
                        <input type="text" id="co" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Cateto Adyacente</label>
                        <input type="text" id="ca" class="form-control">
                    </div>
                    <button id="calhipotenusa" class="btn btn-info">Calcular</button>
                    <button id="limpiarhipotenusa" class="btn btn-dark">Nuevo Calculo</button><br>
                    <div id="reshipotenusa">Resultado</div>
                    </div>
                </div>

            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Area de un rectangulo</h3>
                    <center><img src="imagenes/rectangulo.png" class="responsive"></center>
                    <div class="form-group">
                        <label>Base: </label>
                        <input type="text" id="base" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Altura: </label>
                        <input type="text" id="altura" class="form-control">
                    </div>
                    <button id="calrectangulo" class="btn btn-info">Calcular</button>
                    <button id="limpiarrectangulo" class="btn btn-dark">Nuevo Calculo</button><br>
                    <div id="resrectangulo">Resultado</div>
                    </div>
                </div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                <div class="contenedor aux">
                    <h3>Manejo de Valores</h3>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" id="valor" class="form-control"><br>
                        <button id="valortras" class="btn btn-primary">Trasladar</button><br>
                        <label id="etiqueta"></label><br>
                        <div id="division"></div>
                        <input type="text" id="entrada"><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contenedor aux">
                    <h3>Evento MouseEnter/MouseLeave</h3>
                    <center><input type="text" id="mouse" value="Limbert Maceiros"></center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contenedor aux">
                    <h3>Metodo Hide</h3><center>
                    <label id="palabra1">Limbert</label><br>
                    <label id="palabra2">Maceiros</label><br>
                    <label id="palabra3">Velasquez</label><br>
                    <label class="palabra">Instituto</label><br>
                    <label class="palabra">Jesus</label><br>
                    <label class="palabra">Maria</label><br></center>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Evento keypress/keyup/keyboard</h3>
                    <div class="form-group">
                        <label>Escriba algo: </label>
                        <input type="text" id="algo" class="form-control">
                    </div>
                    <label id="num">0</label>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Juego de dados</h3>
                    <p>Consiste que los dos tienen que ser iguales</p>
                    <button id="lanzardado" class="btn btn-info">Lanzar</button><br>
                    <label>Dado 1:</label>
                    <input type="text" id="dado1"><br>
                    <label>Dado 2:</label>
                    <input type="text" id="dado2"><br>
                    <div class="resdado">
                        <img src="imagenes/dice0.png" width="50" id="img1">
                        <img src="imagenes/dice0.png" width="50" id="img2">
                    </div>
                    <label id="resjuegodado"></label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Juego de dados 2</h3>
                    <p>Consiste que en la suma de los dos tenga que ser mayor a 10</p>
                    <button id="lanzardado2" class="btn btn-info">Lanzar</button><br>
                    <label>Dado 1:</label>
                    <input type="text" id="dado12"><br>
                    <label>Dado 2:</label>
                    <input type="text" id="dado22"><br>
                    <div class="resdado">
                        <img src="imagenes/dice0.png" width="50" id="img12">
                        <img src="imagenes/dice0.png" width="50" id="img22">
                    </div>
                    <label id="resjuegodado"></label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contenedor">
                    <h3>Juego de dados 2</h3>
                    <p>Consiste que los dos tengan que ser numeros impares</p>
                    <button id="lanzardado3" class="btn btn-info">Lanzar</button><br>
                    <label>Dado 1:</label>
                    <input type="text" id="dado13"><br>
                    <label>Dado 2:</label>
                    <input type="text" id="dado23"><br>
                    <div class="resdado">
                        <img src="imagenes/dice0.png" width="50" id="img13">
                        <img src="imagenes/dice0.png" width="50" id="img23">
                    </div>
                    <label id="resjuegodado"></label>
                </div>
            </div>
        </div>

    </div>


<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#sumar").click(function(){
            var a =$("#valor1").val();
            var b =$("#valor2").val();
            s=parseFloat(a)+parseFloat(b);
            $("#ressuma").html(s);
        });

        $("#limpiarsuma").click(function(){
            $("#valor1").val("").focus();
            $("#valor2").val("");
            $("#ressuma").html("");
        });

        $("#calhipotenusa").click(function(){
            var co =$("#co").val();
            var ca =$("#ca").val();
            h=Math.sqrt(co*co+ca*ca);
            $("#reshipotenusa").html(h);
        });

        $("#calrectangulo").click(function(){
            var base =$("#base").val();
            var altura =$("#altura").val();
            s=parseFloat(base)*parseFloat(altura);
            $("#resrectangulo").html(s);
        });

        $("#limpiarrectangulo").click(function(){
            $("#base").val("").focus();
            $("#altura").val("");
            $("#reshipotenusa").html("");
        });

        $("#valortras").click(function(){
            var v =$("#valor").val();
            $("#etiqueta").html(v);
            $("#division").html(v);
            $("#entrada").val(v);
        });

        $("#mouse").mouseenter(function(){
            $("#mouse").css("background","red");
            $("#mouse").css("color","white");
        });

        $("#mouse").mouseleave(function(){
            $("#mouse").css("background","white");
            $("#mouse").css("color","darkblue");
        });

        $("#palabra1").click(function(){
            $("#palabra1").hide();
        });

        $("#palabra2").click(function(){
            $("#palabra2").hide();
        });

        $("#palabra3").click(function(){
            $("#palabra3").hide();
        });

        $(".palabra").click(function(){
            $(this).hide();
        });

        var n = 0;
 	    $("#algo").keyup(function(){
	        var n=$(this).val().length;
	        $("#num").html(n);
 	    });

 	    $("#algo").keydown(function(){
	        var n=$(this).val().length;
	        $("#num").html(n);
 	    });

        $("#lanzardado").click(function(){
            var d1, d2;
            d1= Math.floor(Math.random()*6+1);
            d2= Math.floor(Math.random()*6+1);
            $("#dado1").val(d1);
            $("#dado2").val(d2);

            $("#img1").attr("src","imagenes/dice"+d1+".png");
            $("#img2").attr("src","imagenes/dice"+d2+".png");

            if(d1==d2){
                alert("GANO");
            }else{
                //alert("PERDIO");
            }
        });

        $("#lanzardado2").click(function(){
            var d1, d2;
            d1= Math.floor(Math.random()*6+1);
            d2= Math.floor(Math.random()*6+1);
            $("#dado12").val(d1);
            $("#dado22").val(d2);

            $("#img12").attr("src","imagenes/dice"+d1+".png");
            $("#img22").attr("src","imagenes/dice"+d2+".png");

            var suma=d1+d2;
            if(suma >= 10){
                alert("GANO")
            }
        });
        $("#lanzardado3").click(function(){
            var d1, d2;
            d1= Math.floor(Math.random()*6+1);
            d2= Math.floor(Math.random()*6+1);
            $("#dado13").val(d1);
            $("#dado23").val(d2);

            $("#img13").attr("src","imagenes/dice"+d1+".png");
            $("#img23").attr("src","imagenes/dice"+d2+".png");

            if(d1 % 2 == 0 and d2 % 2 == 0){
                alert("GANO")
            }
        });
    });
</script>
</body>
</html>