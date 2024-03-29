<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Tienda Online</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
  </head>
  <body>
    <div class="container">

      <!--CABECERA -->
      <header id="header">
        <div id="logo">
          <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta Logo">
          <a href="<?=base_url?>">Tienda de ropa</a>
        </div>
      </header>

      <!--MENU -->
      <?php $categorias = Utils::showCategorias();?>
      <nav id="menu">
        <ul>
          <li>
            <a href="<?=base_url?>">Inicio</a>
          </li>
          <?php while ($cat = $categorias->fetch_object()): ?>
            <li>
              <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?= $cat->nombre?></a>
            </li>
          <?php endwhile;?>  
        </ul>
      </nav>

      <div id="content">
