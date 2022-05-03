<?php if (isset($_SESSION['identity'])) : ?>
    <h1>Tramitar pedido</h1>
    <p>
        <a href="<?= base_url ?>carrito/index">Ver productos / precio</a>
    </p>

    <h3>Dirección para envío</h3>
    <form action="<?= base_url.'pedido/add' ?>" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required>

        <label for="ciudad">Ciudad</label>
        <input type="text" name="localidad" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required>

        <input type="submit" value="Tramitar pedido">
    </form>


<?php else : ?>
    <h1>No estas identificado</h1>
    <p>Necesitas estar registrado en la web para poder realizar tú pedido</p>
<?php endif; ?>