<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo</title>
</head>
<body>

    <h1>Editar Equipo</h1>

    <?php if ($errors->any()): ?>
        <div>
            <ul>
                <?php foreach ($errors->all() as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo route('equipos.update', $equipo->id); ?>" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="_method" value="PUT">

        <label for="name">Nombre del equipo:</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($equipo->name); ?>" required>

        <button type="submit">Actualizar</button>
    </form>

    <a href="<?php echo route('equipos.index'); ?>">Volver a la lista de equipos</a>

</body>
</html>
