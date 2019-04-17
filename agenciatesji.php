<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documenthe</title>
</head>
<body>
    <?php
    if(isset($_POST["txtPrecioCompra"]) && isset($_POST["rbOrigen"]) && isset($_POST["cmdMarca"])){
    $precioCompra = $_POST["txtPrecioCompra"];
    $origen = $_POST["rbOrigen"];
    $marca = $_POST["cmdMarca"];
    //echo "$precioCompra $origen $marca";
    $impuesto = 0.0;
    $total;
    switch($origen){
        case "alemania":
            $impuesto = $precioCompra * 0.25;
            break;
        case "japon":
            $impuesto = $precioCompra * 0.30;
            break;
        case "usa":
            $impuesto = $precioCompra * 0.15;
            break;
        case "italia":
            $impuesto = $precioCompra * 0.20;
            break;
    }
    $total = $precioCompra + $impuesto; 
    }else{
        echo "No haz echo nada";
    }
    /* el presicdente de la republica a decidido estimular a todos los estudiantes de una universidad
       mediante la asignacion de becas mensuales SUBES 
       para eso se tomara a consideracion los siguientes criterios: 
       para alumnos mañores a 18 años 
       con prmedio mayor 0 = 9 
       la beca sera de 2000
       con promedio mañor o igual a 7.5
       la beca sera de 1000
       para los promedios menores a 7.5
       pero mayores o iguales a 6 de 500 pesos

       a los demas se les enviara una carta de intacion 
       inscitandolos a que estudien mas en el proximo ciclo escolar 
       a los alumnos de 18 años o menores de esta edad,
       con promedios mayores o iguales a 9
       seles dara 3000 pesos
       con promedio menores a 9 pero mayores o iguales a 8  
       seles dera  2000 pesos
       para alumnos con promedios a 8 pero mayores o iguales a 6
       seles dara 1000 pesos
       y los promedio menores de 6 
       se les enviara la misma carta de invitacion

       desarrollen una web que solucione este problema 
    */
    ?>

    <header>
    <h1>Agencia Tesji</h1>
    </header>
    <main>
        <section>
        <form method="post" action="agenciatesji.php">
        <label>precio compra</label>
        <input type="text" name="txtPrecioCompra"> 
        <br>
        <label>Seleccione Origen</label>    
        <br>
        <input type="radio" name="rbOrigen" value="alemania" checked>Alemania
        <br>
        <input type="radio" name="rbOrigen" value="japon">Japon
        <br>
        <input type="radio" name="rbOrigen" value="usa">USA
        <br>
        <input type="radio" name="rbOrigen" value="italia">Italia
        <br>
        <label>Marca</label>
        <select name="cmdMarca" size="1">
            <option value="selecione ">..seleccione</option>
            <option value="mercedes">Mercedes Benz</option>
            <option value="audi">Audi</option>
            <option value="bmw">BMW</option>        
        </select>
        <br>
        <input type="submit" value="Calcular Venta">
        </form>
        </section>
        <section>
        <h2>Factura</h2>
        <?php
            if($marca == "selecione "){
                echo "No Ingreso Marca";
            }else{
                echo "<p> Precio Compra: $precioCompra <br>
                  Origen: $origen <br>
                  Marca: $marca <br>
                  Total de compra: $total <p>";
            }      
        ?>
        </section>
    </main>
</body>
</html>


