<!DOCTYPE html>
<link href="formulario.css" rel="stylesheet">
<html>

    
        <title>Aerolineas La Leche</title>
<center>
<br>
<article class="articulo">
        <script type="text/javascript">


            numeroasientosseleccionados = 0;
            numeroasientosporfila = 8;

            nombresdelasfilas = ['A','B','C','D'];

            var statusPics = new Array();

            statusPics['libre'] = new Image();

            statusPics['seleccionado'] = new Image();

            statusPics['ocupado'] = new Image();


            // ASIGNAR LAS IMAGENES A LOS VALORES 
            statusPics['libre'].src = 'imagenes/asiento_libre.png';
            statusPics['seleccionado'].src = 'imagenes/asiento_seleccionado.png';
            statusPics['ocupado'].src = 'imagenes/asiento_ocupado.png';




            function crearasientos(asientos,asientosfila,nombrefilas){

                for(i=0; i < nombrefilas.length; i++){


                    var filas = document.createElement('tr');
                    var columnas = document.createElement('td');

                    columnas.innerHTML = nombrefilas[i];

                    filas.appendChild(columnas);

                    for(j=0; j < asientosfila; j++){

                        columnas = document.createElement('td');

                        var imagenbutaca = document.createElement('img');

                        imagenbutaca.src = statusPics['libre'].src;

                        imagenbutaca.status = 'libre';

                        imagenbutaca.onclick=function(){

                            this.status = (this.status == 'libre')? 'seleccionado' : 'libre';

                            this.src = (this.status == 'libre')? statusPics['libre'].src : statusPics['seleccionado'].src;

                        }

                        columnas.appendChild(imagenbutaca);

                        filas.appendChild(columnas);

                    }

                    asientos.appendChild(filas);

                }

            }

            

            function confirmarsitios(){

            

                for(i=0; i < butacas.length; i++){

                    if(butacas[i].status == 'seleccionado'){

                        ++numeroasientosseleccionados;

                        butacas[i].src=statusPics['ocupado'].src

                    
                        
                        }
                 }

                function metodo(){

                    document.getElementById("link").href='http://google.com'+Metadata;

                        return Metadata;


                }
                //Mensae final de confirmacion

                //alert(Nombre+"," + "ha comprado " +numeroasientosseleccionados + " boletos");

            }

            window.onload=function(){

                butacascrear = document.getElementById('crear');

                butacas = butacascrear.getElementsByTagName('img');

                crearasientos(butacascrear,numeroasientosporfila,nombresdelasfilas);

                document.getElementById('confirmar').onclick=confirmarsitios;

                document.getElementById('resetear').onclick=function(){

                    for(i=0; i < butacas.length; i++){

                        butacas[i].src = statusPics['libre'].src;

                        butacas[i].status = 'libre';

                    }

                }

            }

        </script>

    </head>

    <body background="imagenes/sayagata-400px.png">

        <div id="header"></div>

        <div id="wrapper">

            <div id="myTickets">

                <h1><center><b> Aerolineas La Leche </b></center></h1>

                <div id="myTicket">

                    <h3><center><b> DESTINO: MUNICH, ALEMANIA</b></center></h3>

                </div>

            </div>

            <div id="seating" class="cont1">

               

                <table id="crear"></table>

 

                <div style="clear:both">

                </div>

                <br />

                <div id="theButtons">

                    <input 
                        type="button" 
                        value="Confirmar Asientos" 
                        id="confirmar" 
                        onclick="confirmarsitios()" />
                        &nbsp;

                     
                    <input type="submit" value="Siguiente" onclick = "location='pago.php'"/> &nbsp;
                    <input type="reset" id="resetear" value="Borrar" /> &nbsp;
                    <input type="submit" value="Regresar" onclick = "location='menu.php'"/>
                    
                    
                    
                </div>

            </div>

        </div>

    </body>
</article>
</center>
</html>