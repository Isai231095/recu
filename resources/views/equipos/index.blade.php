<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Equipos</title>
</head>
<body>

    <h1>Lista de Equipos</h1>

    <?php if (session('success')): ?>
        <div><?php echo session('success'); ?></div>
    <?php endif; ?>

    <ul>
        <?php foreach ($equipos as $equipo): ?>
            <li>
                <?php echo htmlspecialchars($equipo->name); ?>
                <form action="<?php echo route('equipos.destroy', $equipo->id); ?>" method="POST" style="display:inline">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Eliminar</button>
                </form>
                <a href="<?php echo route('integrantes.equipo', $equipo->name); ?>">Ver Integrantes</a>
                <a href="<?php echo route('equipos.edit', $equipo->id); ?>">Editar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="<?php echo route('equipos.create'); ?>">Agregar nuevo equipo</a>

</body>
</html>
