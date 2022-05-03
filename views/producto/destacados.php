<h1>Productos destacados</h1>

<!-- <div class="product">
  <img src="assets/img/camiseta.png">
  <h2>Camiseta azul ancha</h2>
  <p>30 €</p>
  <a href="#" class="button">Comprar</a>
</div>-->

<?php while ($product = $destacados->fetch_object()) : ?>
  <div class="product">
    <a href="<?= base_url ?>producto/ver&id=<?=$product->id?>">
      <?php if ($product->imagen != null) : ?>
        <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>">
      <?php else : ?>
        <img src="<?= base_url ?>assets/img/camiseta.png">
      <?php endif; ?>
      <h2><?= $product->nombre ?></h2>
    </a>
    <p><?= $product->precio ?></p>
    <a href="<?= base_url ?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
  </div>
<?php endwhile; ?>

