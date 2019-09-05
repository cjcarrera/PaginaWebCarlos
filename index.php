<?php
    // con este ejemplo se denota el uso de funciones y uso de listas y json
    function datosPersonales(){
        $nombre = "Carlos";
        $apellido = "Carrera";
        $direccion = "Mauelita Saenz";
        $telefono = "0996012515";
        $email = "carlosjc1993@hotmail.com";

        return $nombre." ".$apellido;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        color:blue;
        background: gray;
    }
    h1 {
        color:aqua;
        font-family:"Times New Roman";
        font-size: 1.4em;
        background: #ccc;
    }
    p {
        color:brown; background: white;
    }
    ul {
        list-style-type: none;
        margin:0;
        padding:white;
        display:flex;
        flex-direction:row; flex-direction:column;
    }
    li{
        flex-grow:1;
    }
    a{
        display:block;
        padding:skyblue;
        background-color: blue;
        text-align: center;
        margin-right: 0.2;
        margin-bottom: 0.2em;
        text-decoration:none;
        color:#000000;
    }
    </style>
    

</head>
<body>
        <center><h1>Cuerpo de Agentes de Control <br> Metropolitano Quito</h1></center>
        <center><img src="\practica\images\pmq1.png" alt="Logo"></center>
        <br>
        <br>
        <nav>
        <ul>
        <li><a target="_blank" href="practica\clases\inicio.php">Inicio</a></li>
        <li>Noticias</li>
        <li>Contacto</li>
        <li>Quienes somos</li>
        </ul>
        
        </nav>
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Eum similique, praesentium exercitationem placeat
         numquam doloremque et, corporis ipsam voluptas alias soluta?
          Delectus molestiae eius, itaque mollitia
          repellendus est voluptatibus ratione?</p>
          <br>
          <center><table>

            <tr>
            <th></th>            
            <th>Columna 1</th>            
            <th>Columna 2</th>            
            <th>Columna 3</th>            
            <th>Columna 4</th>            
            </tr>
            <tr>
            <th>Alemania</th>
            <td>123456</td>
            <td>123456</td>
            <td>123456</td>
            <td>123456</td>
            </tr>
            <tr>
            <th>Ecuador</th>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            </tr>
            <tr>
            <th>Colombia</th>
            <td>C1</td>
            <td>C2</td>
            <td>C3</td>
            <td>C4</td>
            </tr>

          
          </table></center>
          <br>
          


        <script type= "text/javascript"> document.write(new Date());</document></script>
    <?php
     
       echo (datosPersonales());
    ?>

</body>
</html>