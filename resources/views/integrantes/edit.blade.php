<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Integrante</title>
</head>
<body>

    <h1>Editar Integrante</h1>

    <form action="<?php echo route('integrantes.update', $integrante->id); ?>" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="_method" value="PUT">

        <label for="nameteam">Equipo:</label>
        <select name="nameteam" id="nameteam" required>
            <?php foreach ($equipos as $equipo): ?>
                <option value="<?php echo htmlspecialchars($equipo->name); ?>" <?php if ($equipo->name == $integrante->nameteam) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($equipo->name); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="number">Número:</label>
        <input type="number" name="number" id="number" value="<?php echo htmlspecialchars($integrante->number); ?>" required>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($integrante->name); ?>" required>

        <label for="sex">Sexo:</label>
        <input type="text" name="sex" id="sex" value="<?php echo htmlspecialchars($integrante->sex); ?>" required>

        <label for="age">Edad:</label>
        <input type="number" name="age" id="age" value="<?php echo htmlspecialchars($integrante->age); ?>" required>

        <label for="place">Lugar:</label>
        <input type="text" name="place" id="place" value="<?php echo htmlspecialchars($integrante->place); ?>" required>

        <label for="phone">Teléfono:</label>
        <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($integrante->phone); ?>" required>

        <button type="submit">Actualizar</button>
    </form>

    <a href="<?php echo route('integrantes.index'); ?>">Volver a la lista de integrantes</a>

</body>
</html>
