<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuidado con el Perro - Camisas</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        .top-bar { background: #000; color: #fff; text-align: center; padding: 5px; font-size: 12px; font-weight: bold; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; border-bottom: 2px solid #000; }
        .logo { font-size: 18px; font-weight: bold; text-decoration: none; color: #000; }
        nav { text-align: center; background: #eee; padding: 10px; }
        nav a { padding: 8px 15px; font-weight: bold; border: 1px solid #000; background: #fff; text-decoration: none; color: #000; margin: 0 5px; display: inline-block; }
        nav a.active { background: #000; color: #fff; }
        .productos { display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin: 20px auto; max-width: 1000px; }
        .tarjeta { border: 1px solid #ccc; width: 180px; text-align: center; padding: 10px; margin-bottom: 15px; }
        .tarjeta img { width: 100%; height: 160px; object-fit: cover; }
        .tarjeta h4 { font-size: 13px; margin: 8px 0 4px; }
        .tarjeta p { font-size: 14px; margin-bottom: 8px; }
        .tarjeta button { width: 100%; padding: 6px; background: #000; color: #fff; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="top-bar">3 MESES DE CLUB DE FORNITE CON LAS COMPRAS</div>

    <header>
        <a href="index.php" class="logo">CUIDADO CON EL PERRO</a>
        <form action="#" method="GET">
            <input type="text" placeholder="Buscar camisa...">
            <button type="submit">Buscar</button>
        </form>
    </header>

    <nav>
        <a href="index.php">INICIO</a>
        <a href="camisas.php" class="active">CAMISAS</a>
        <a href="pantalones.php">PANTALONES</a>
    </nav>

    <h2 style="text-align:center; margin-top:20px;">CATALOGO DE CAMISAS (10 PRODUCTOS)</h2>

    <div class="productos">
        <?php
        $sql = "SELECT * FROM productos WHERE categoria = 'camisas'";
        $resultado = $conexion->query($sql);
        while ($prod = $resultado->fetch_assoc()) {
            echo '<div class="tarjeta">';
            echo '<img src="' . $prod['imagen'] . '" alt="' . $prod['nombre'] . '">';
            echo '<h4>' . $prod['nombre'] . '</h4>';
            echo '<p><b>$' . $prod['precio'] . '</b></p>';
            echo '<button>Ver detalle</button>';
            echo '</div>';
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>