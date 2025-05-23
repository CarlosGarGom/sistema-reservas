<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestión de Reservas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container my-5">

    <h2 class="mb-4 text-center">Reservar Actividad</h2>

    <form method="post" action="<?= base_url('guardar') ?>" class="mx-auto p-4 border rounded bg-light" style="max-width: 600px;">
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" type="text" name="nombre" class="form-control" value="<?= old('nombre') ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="<?= old('email') ?>" required>
        </div>

        <div class="mb-3">
            <label for="actividad" class="form-label">Actividad</label>
            <input id="actividad" type="text" name="actividad" class="form-control" value="<?= old('actividad') ?>" required>
        </div>

        <div class="mb-3">
            <label for="fecha_reserva" class="form-label">Fecha de Reserva</label>
            <input id="fecha_reserva" type="date" name="fecha_reserva" class="form-control" value="<?= old('fecha_reserva') ?>" required>
        </div>

        <div class="mb-3">
            <label for="personas" class="form-label">Personas</label>
            <input id="personas" type="number" min="1" name="personas" class="form-control" value="<?= old('personas') ?? 1 ?>" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Reservar</button>
    </form>

    <h2 class="mt-5 mb-3 text-center">Reservas Realizadas</h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered mx-auto" style="max-width: 900px;">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Actividad</th>
                    <th>Fecha</th>
                    <th>Personas</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($reservas)): ?>
                <?php foreach ($reservas as $reserva): ?>
                <tr>
                    <td><?= esc($reserva['nombre']) ?></td>
                    <td><?= esc($reserva['email']) ?></td>
                    <td><?= esc($reserva['actividad']) ?></td>
                    <td><?= esc($reserva['fecha_reserva']) ?></td>
                    <td><?= esc($reserva['personas']) ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">No hay reservas realizadas aún.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>



</body>
</html>
