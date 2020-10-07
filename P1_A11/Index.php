<a href="../index.php">inicio</a><br><br>
<?php

include ("Controlers/calculadora.php");
$calculadora =  new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();

//obtener la entrada y la accion
//ejecutar la operacion
//imprimir los resultados

?>
<form>
    <label> <?php echo $calculadora->pantalla ?></label>=
    <input type="hidden" name="pantalla" value="<?php echo $calculadora->pantalla ?>">
    <label> <?php echo $calculadora->resultado ?></label>
    <input type="hidden" name="resultado" value="<?php echo $calculadora->resultado ?>">
    <br><br>
<input type="number" name="entrada" required>
<button name="accion" value="suma">+</button>
<button name="accion" value="resta">-</button>
<button name="accion" value="multplica">*</button>
<button name="accion" value="divide">/</button>
</form>

<form method="POST">
    <button name="accion" value="reset">Reset</button>
</form>
