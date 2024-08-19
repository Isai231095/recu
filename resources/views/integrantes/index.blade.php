<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrantes de <?php echo htmlspecialchars($name); ?></title>
</head>
<body>

    <h1>Integrantes del equipo <?php echo htmlspecialchars($name); ?></h1>

    <?php if (session('success')): ?>
        <div><?php echo session('success'); ?></div>
    <?php endif; ?>

    <ul>
        <?php foreach ($integrantes as $integrante): ?>
            <li>
                <?php echo htmlspecialchars($integrante->name); ?> - Número: <?php echo htmlspecialchars($integrante->number); ?>
                <form action="<?php echo route('integrantes.destroy', $integrante->id); ?>" method="POST" style="display:inline">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Eliminar</button>
                </form>
                <a href="<?php echo route('integrantes.edit', $integrante->id); ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Agregar un nuevo integrante al equipo <?php echo htmlspecialchars($name); ?></h2>

    <form action="<?php echo route('integrantes.store'); ?>" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="nameteam" value="<?php echo htmlspecialchars($name); ?>">

        <label for="number">Número:</label>
        <input type="number" name="number" id="number" required>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>

        <label for="sex">Sexo:</label>
        <input type="text" name="sex" id="sex" required>

        <label for="age">Edad:</label>
        <input type="number" name="age" id="age" required>

        <label for="place">Lugar:</label>
        <input type="text" name="place" id="place" required>

        <label for="phone">Teléfono:</label>
        <input type="text" name="phone" id="phone" required>

        <button type="submit">Agregar Integrante</button>
    </form>

    <a href="<?php echo route('equipos.index'); ?>">Volver a la lista de equipos</a>

</body>
</html>
