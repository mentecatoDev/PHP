<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08-01</title>
  </head>
  <body>
    if (!isset($_POST['oportunidades'])) {
        Por favor, introduzca un número del 0 al 10:
        <form action="08.php" method="post">
          <input type="number" name="n" min="0" max="10"><br>
          <input type="submit" value="Aceptar">
        </form>
     } else {
            print_r($_POST);
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }
        Por favor, introduzca un número del 0 al 10:
        <form action="08-02.php" method="post">
          <input type="number" name="n" min="0" max="10"><br>
          <input type="submit" value="Aceptar">
        </form>
  </body>
</html>
