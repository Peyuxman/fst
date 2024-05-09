<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="Public/AssetsExterno/Css/style.css">
</head>



<body>
  <section id="login">
    <div class="cont-general">
     
      <div class="container cont-inicio-sesion">
        <div class="cont-info-sena">
          <a href="./"><img src="Public/AssetsExterno/Img/logoSena.png" alt="logo sena"></a>
            <h2>Centro de Diseño y Metrología</h2>               
        </div>
        <div class="heading"><h1>Iniciar Sesión</h1></div>
        <form class="form" action="loginAdmin" method="POST">
          <!-- <input  type="radio" name="action" id="" value ="Administrador"></input>
          <input type="radio" name="action" id="" value ="Administrador"></input> -->
          <input placeholder="Correo" id="correo" name="correo" type="correo" class="input" required="" />
          <input placeholder="Contraseña" id="contraseña" name="clave" type="password" class="input"
            required="" />
          <br><br>
          <span class="forgot-contraseña"><a href="recuperarPass">¿Olvido Contraseña?</a></span>
          <button type="submit" class="login-button">INGRESAR</button>
        </form>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>