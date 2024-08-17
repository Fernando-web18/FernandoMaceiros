<?php include("cabecera.php"); ?>
<div class="row">
    <div class="col-md-12 color">
        <h1>Registro de Ventas</h1>
        <?php 
        session_start(); 
        echo "<h3>Codigo de Venta: <font color=blue> ".$_SESSION["codven"]."</font></h3>";
        echo "<h4 class='mt-3'>Seleccione Producto:</h4>";
        ?>
        <div class="form-inline">
            <?php include("pro_lista.php"); ?>
            <label for="cantv" class="ml-3">Cantidad: </label>
            <input type="text" id="cantv" class="form-control">
            <button id="venta" class="btn btn-success ml-3"><i class="bi bi-cart-check"></i>&nbsp;Comprar</button>
        </div>
        <div id="salida"></div>
<br>
        <div class="form-inline">
            <label>C.I Cliente:</label>
            <input type="text" class="form-control" id="cicli">
            <button id="buscarcli" class="btn btn-success" title="Buscar"><i class="bi bi-search"></i></button>
            <input type="text" class="form-control" id="nomcli">
            <button id="regcli" class="btn btn-success" title="Guardar"><i class="glyphicon glyphicon-floppy-disk"></i></button>
            <button id="actualcli" class="btn btn-info" title="Actualizar"><i class="glyphicon glyphicon-ok"></i></button>
        </div><br>
        <div>
            <center><button id="finventa" class="btn btn-lg btn-danger"> Finalizar Venta </button></center>
        </div>
<br>
<br>
<br>
    </div>

</div>
    <div class=" row pie">
            <br>
            <center>Desarrollado por un Estudiante <br>
            &copy; LFMV(2024)</center><br>
    </div>
</div> <!-- container -->
<script src="jquery-3.7.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>  
<script>
    $(document).ready(function(){
        $("#venta").click(function(){
			var idprod=$("#idprod").val();
			var cantv=$("#cantv").val();
			if(cantv==""){
				alert("Debe completar la Cantidad de le Venta");
			}
			else{
			//alert(idprod+" - "+cantv);
			$.get("ven_guardardet.php",{idprod:idprod,cantv:cantv},function(recibe){
				$("#salida").html(recibe);
				$("#cantv").val("");
			});
			}
		});
        $("#buscarcli").click(function(){
            // alert("Buscando");
                var ci=$("#cicli").val();
                $.get("cli_buscar.php",{ci:ci},function(recibe){
                $("#nomcli").val(recibe);
            });
        });

        $("#regcli").click(function(){
            // alert("Buscando");
                var ci=$("#cicli").val();
                var nom=$("#nomcli").val();
                $.get("cli_registra.php",{ci:ci,nom:nom},function(recibe){
                    alert("Registro Exitoso");
            });
        });

        $("#actualcli").click(function(){
            var ci=$("#cicli").val();
            var nom=$("#nomcli").val();
            $.get("cli_actualizar.php",{ci:ci,nom:nom},function(recibe){
                alert("Actualizacion Exitosa");
            });
        });
        $("#finventa").click(function(){
            resp=confirm("Esta seguro de finalizar");
            if(resp){
                var ci=$("#cicli").val();
                var total=$("#total").val();
                //alert(ci+" - "+total);
                $.get("ven_fin.php",{ci:ci,total:total},function(recibe){
                    alert("Venta Finalizada");
                    //window.location.href="http://localhost:8080/Misitio/ventas";
                    $(location).attr("href","http://localhost:8080/Misitio/ventas");
            });
            }
        });
    });
</script>
</body>
</html>


