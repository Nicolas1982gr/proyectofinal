bashCopy code<head> 
  <link rel="stylesheet" type="text/css" href="./estilos.css"> 
</head> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licitaciones</title>
    <link rel="stylesheet" href="../Public/css/estilos.css">
    <link rel="icon" href="../img/icono.png" type="image/png">
</head>
<body>
<!-- header -->

    <header>
        <div>
        <h1>LICITACIONES</h1>
        <p>REGISTRO Y OFERTAS</p>  
        </div>
            </header>
   
<!-- nabvar-->

    <nav class="nabvar">
        <a href="#">INICIO</a>
        <a href="../../index.html">PAG. PRINCIPAL</a>
        <a href="./Obrasenejecucion.html">OBRAS EN EJECUCION</a>
        <a href="./obrasaejecutarce.html">OBRAS A EJECUTARCE</a>
        <a href="./LOGIN_LICITADORES.html">INGRESO LICITADORES</a>
    </nav> 
   

    
<!-- PRINCIPAL LICITACION-->  
 
<!-- LISTADO DE LICITACIONES-->  
<Form method = "post" action="./USUARIO.html">
                <div class="Formu2">
                    <Fieldset>
                    <legend>LICITACIONES</legend>
                    <h4>OFERTAR POR Nº DE LICITACION, DENTRO DEL CUADRO HORARIO DE LAS MISMAS SI NO SE ENCONTRARA DESAFECTADA</h4>              
                        
                        <fieldset>
                            <table>
                                <thead class="thead-primary">
                                    <tr>
                                    <th> Imagen </th>
                                    <th> Detalle Licitacion </th>
                                    <th> Pres. Oficial</th>
                                    <th> Fecha de licitacion </th>
                                    <th> Numero Licitacion </th>
                                    <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                    <!--producto-->
                                <?php
                                
                                $conexion = mysqli_connect("127.0.0.1:3306","root","","login");

                                if ($conexion === false){
                                    echo "NO SE CONECTO";
                                    echo "<br>";
                                }
                                 else{
                                    echo "SI SE CONECTO";
                                    echo "<br>";
                                 }

                                $query = "SELECT * FROM licitaciones";
                                $resul = mysqli_query($conexion, $query);
                                while ($unafila = mysqli_fetch_assoc($resul)){
                                    
                                    echo '<tr class="alert" role="alert">       
                                    <td>
                                    <div class="imgproducto">
                                    <img src="../img/images (1).jpg" class="d-block w-100" alt="...">
                                    </div>
                                    </td>
                                            <td class="border-bottom-0">
                                            <div class="email">
                                            <span>'.$unafila["Nombre_obra"].'</span>
                                            <span>'.$unafila["Detalle_lic"].'</span>
                                            </div>
                                            </td>                                                 
                                <td class="border-bottom-0" text align="center">'.$unafila["Monto"].'</td>
                                <td class="border-bottom-0" text align="center">'.$unafila["Fecha"].'</td>
                                </td>
                                            <td class="border-bottom-0"text align="center">'.$unafila["Num_lic"].'</td>
                                            <td class="border-bottom-0">
                                            <button class="w-100 btn btn-lg" type="submit">EDITAR</button>
                                            </td>
                                            </tr>';

                                }

                            

                                 mysqli_close($conexion);
                                ?>

                                <tbody>  
                                    
                             
                            </tbody>
                            </table>       
                            </Fieldset>
                            </Fieldset>
                            </div>
</Form>        


<div class="Principal"> 
    <aside>
            <form method = "post" action="./Registro_usuarios.php">
                <fieldset class="form1">
                <legend>Registro licitadores</legend>
                Nombre:<br>
                    <input type="text" name="Nombre" required><br>
                Apellido:<br>
                    <input type="text" name="Apellido" required><br>
                Correo electronico:<br>
                    <input type="email" name="Correo" required><br>
                CUIT:<br>
                    <input type="number" name="CUIT" required><br>
                Password:<br>
                    <input type="password" name="Password" required><br>
                
                    <button class="w-100 btn btn-lg" type="submit">Registrar</button>

                 </fieldset>    
                    </form>
                        </aside>

        <main>
            <Form method = "post" action="./OFERTAS.php">
                <div class="Formu2">
                    <Fieldset>
                    <legend> PROCESO LICITATORIO</legend>
                    <h4>OFERTAR POR Nº DE LICITACION, DENTRO DEL CUADRO HORARIO DE LAS MISMAS SI NO SE ENCONTRARA DESAFECTADA</h4>              
                        <fieldset>
                             <input type="radio" name="Licitar" value="YES" required>
                             <label for="radio"> Licitar</label>
 
                                </fieldset>
                        <fieldset>
                            <label for="N_LICITACION">LIC. N°:</label>
                            <input type="number" name="N_licitacion" id="N_licitacion" required>
                            <label for="Monto">Monto a licitar:</label>
                            <input type="number" name="Monto" id="Monto" required>
                            <label for="Fecha"> fecha de licitacon:</label>
                            <input type="datetime-local" 
                            name="Hora" 
                            id="Hora"
                            min="2024/06/22T10:00"
                            max="2024/06/22T11:00"
                            required><br>
                            <br>
                            <label for="text">DOCUMENTACION REQUERIDA PDF</label>
                            <input type="file" id="uploads" name="uploads" accept=".PDF">
                             </fieldset><br>
                        <input type="submit" value=" Ofertar ">
                        <input type="reset" value="Cancelar"><br>
                    <br><br>
                    </Fieldset>
                   
                    </Fieldset>
            </div>
                </Form>        
                    </main>
</div>
                    
<!-- footer-->
<footer>
    <h4>Nicolas Yarza, potrero digital 2024</h4>
        </footer>
</body>
</html>



