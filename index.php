<?php include 'tramites.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PUTextra | Tracking de Licencias</title>
    <style>
        .step-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
        }

        .step-active {
            background-color: #0d6efd;
            color: white;
        }

        .step-complete {
            background-color: #198754;
            color: white;
        }

        .step-pending {
            background-color: #e9ecef;
            color: #6c757d;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container py-5">
        <?php
        $id = "1"; // tramite a buscar
        if (isset($tramites[$id])): 
        $t = $tramites[$id];?>

            <div class="card shadow-sm border-0">
                <div class="card-header bg-secondary text-white p-4">
                    <h3 class="mb-0">Seguimiento y control: <?php echo $t['tipo']; ?></h3>
                    <p class="mb-0 opacity-75">Solicitud: <?php echo $t['tramite']; ?> | Oficina: <?php echo $t['oficina']; ?>
                    </p>
                </div>

                <div class="card-body p-4">
                    <div class="row text-center mb-5">
                        <?php foreach ($t['pasos'] as $num => $paso):
                            $clase = ($num < $t['paso_actual']) ? 'step-complete' : (($num == $t['paso_actual']) ? 'step-active' : 'step-pending');
                            ?>
                            <div class="col">
                                <div class="step-icon <?php echo $clase; ?> shadow-sm">
                                    <?php echo ($num < $t['paso_actual']) ? '✓' : $num; ?>
                                </div>
                                <small class="fw-bold d-block"><?php echo $paso['titulo']; ?></small>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <hr>

                    <div class="table-responsive mt-4">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Etapa</th>
                                    <th>Descripción</th>
                                    <th>Comprobación</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($t['pasos'] as $paso): ?>
                                    <tr>
                                        <td><strong><?php echo $paso['titulo']; ?></strong></td>
                                        <td><?php echo $paso['desc']; ?></td>
                                        <td><span class="badge bg-light text-dark border"><?php echo $paso['check']; ?></span>
                                        </td>
                                        <td>
                                            <?php
                                            $badgeColor = ($paso['status'] == 'Completado') ? 'success' : (($paso['status'] == 'En Progreso') ? 'primary' : 'secondary');
                                            ?>
                                            <span
                                                class="badge bg-<?php echo $badgeColor; ?>"><?php echo $paso['status']; ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <div class="alert alert-warning text-center">No se encontró información del trámite.</div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>