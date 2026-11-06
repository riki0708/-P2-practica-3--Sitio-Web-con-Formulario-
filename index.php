<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuidado con el Perro - Inicio</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        .top-bar { background: #000; color: #fff; text-align: center; padding: 5px; font-size: 12px; font-weight: bold; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 2px solid #000; }
        .logo { font-size: 18px; font-weight: bold; text-decoration: none; color: #000; }
        nav { text-align: center; background: #eee; padding: 10px; }
        nav a { padding: 8px 15px; font-weight: bold; border: 1px solid #000; background: #fff; text-decoration: none; color: #000; margin: 0 5px; display: inline-block; }
        nav a.active { background: #000; color: #fff; }
        .intro { max-width: 800px; margin: 30px auto; text-align: center; padding: 0 20px; }
        .intro h1 { font-size: 28px; margin-bottom: 10px; }
        .intro p { color: #444; line-height: 1.6; }
        .formularios { display: flex; justify-content: center; gap: 20px; margin: 30px 20px; background: #f9f9f9; padding: 20px; }
        .form-box { border: 1px solid #000; padding: 15px; background: #fff; width: 240px; }
        .form-box input { width: 100%; margin: 5px 0 10px; padding: 5px; border: 1px solid #000; }
        .form-box button { width: 100%; padding: 6px; background: #000; color: #fff; border: none; font-weight: bold; cursor: pointer; }
        footer { background: #000; color: #fff; text-align: center; padding: 15px; font-size: 13px; margin-top: 40px; }
    </style>
</head>
<body>
    <div class="top-bar">3 MESES DE CLUB DE FORNITE CON LAS COMPRAS</div>

    <header>
        <a href="index.php" class="logo">CUIDADO CON EL PERRO</a>
        <form action="#" method="GET">
            <input type="text" placeholder="Buscar producto...">
            <button type="submit">Buscar</button>
        </form>
    </header>

    <nav>
        <a href="index.php" class="active">INICIO</a>
        <a href="camisas.php">CAMISAS</a>
        <a href="pantalones.php">PANTALONES</a>
    </nav>

    <section class="intro">
        <h1>BIENVENIDO A CUIDADO CON EL PERRO</h1>
        <p>Somos una marca mexicana inspirada en el estilo urbano y juvenil. Explora nuestra nueva coleccion con los mejores disenos en ropa formal y casual. Registrate para obtener promociones exclusivas.</p>
    </section>

    <div class="formularios" id="auth">
        <form class="form-box" action="login.php" method="POST">
            <h3>Ingresar</h3>
            <label>Correo:</label><input type="email" name="email" required>
            <label>Contrasena:</label><input type="password" name="password" required>
            <button type="submit">ENTRAR</button>
        </form>
        
        <form class="form-box" action="registro.php" method="POST">
            <h3>Registrarse</h3>
            <label>Nombre:</label><input type="text" name="nombre" required>
            <label>Correo:</label><input type="email" name="email" required>
            <label>Contrasena:</label><input type="password" name="password" required>
            <button type="submit">GUARDAR</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>