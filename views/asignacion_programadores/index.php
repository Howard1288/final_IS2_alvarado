<h1 class="text-center">Formulario de Aplicaciones</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioAsignacion_programadores">
        <input type="hidden" name="asignacion_id" id="asignacion_id">
        <div class="row mb-3">
            <div class="col">
                <label for="asignacion_id_aplicacion">ID APLICACION</label>
                <input type="text" name="asignacion_id_aplicacion" id="asignacion_id_aplicacion" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="asignacion_id_programador">ID PROGRAMDOR</label>
                <input type="number" step="0.01" min="0" name="asignacion_id_programador" id="asignacion_id_programador" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioAsignacion_programadores" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-8">
        <h2>Listado </h2>
        <table class="table table-bordered table-hover" id="tablaAsignacion_programadores">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>ID APLICACION</th>
                    <th>ID PROGRAMADOR</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/asignacion_programadores/index.js')  ?>"></script>

