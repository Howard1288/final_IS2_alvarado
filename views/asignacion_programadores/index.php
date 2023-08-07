
<div class="container">
    <h1 class="text-center">Formulario de ingreso de programadores y aplicaciones</h1>
    <div class="row justify-content-center">
        <form action="/final_IS2_alvarado/controladores/asignacion_programadores/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="asignacion_id_aplicacion">Aplicación</label>
                    <select name="asignacion_id_aplicacion" id="asignacion_id_aplicacion" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($aplicaciones as $key => $aplicacion) : ?>
                            <option value="<?= $aplicacion['APLICACION_ID'] ?>"><?= $aplicacion['APLICACION_NOMBRE'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="asignacion_id_programador">Programador</label>
                    <select name="asignacion_id_programador" id="asignacion_id_programador" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($programadores as $key => $programador) : ?>
                            <option value="<?= $programador['PROGRAMADOR_ID'] ?>"><?= $programador['PROGRAMADOR_NOMBRE'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-info w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
