<h1>Gestionar categorias</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
  <strong class="alert_green">Categoría creada correctamente</strong><br><br>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
  <strong class="alert_red">Categoría fallida, introduce bien los datos</strong><br><br>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<a href="<?=base_url?>categoria/crear" class="button button-small">
  Crear categoria
</a>

<table>
  <tr>
    <th>ID</th>
    <th>NOMBRE</th>
  </tr>
  <?php while ($cat = $categorias->fetch_object()): ?>
    <tr>
      <td><?= $cat->id; ?></td>
      <td><?= $cat->nombre; ?></td>
    </tr>

  <?php endwhile; ?>
</table>
