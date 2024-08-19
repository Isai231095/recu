<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Integrante</title>
</head>
<body>

    <h1>Crear un Nuevo Integrante</h1>

    <form action="<?php echo route('integrantes.store'); ?>" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <label for="nameteam">Equipo:</label>
        <select name="nameteam" id="nameteam" required>
            <?php foreach ($equipos as $equipo): ?>
                <option value="<?php echo htmlspecialchars($equipo->name); ?>"><?php echo htmlspecialchars($equipo->name); ?></option>
            <?php endforeach; ?>
        </select>

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

        <button type="submit">Crear</button>
    </form>

    <a href="<?php echo route('integrantes.index'); ?>">Volver a la lista de integrantes</a>

</body>
</html>
