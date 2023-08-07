    <div class="container">
        <h1 class="text-center">Formulario de registro de aplicaciones</h1>
        <div class="row justify-content-center">
            <form class="col-lg-8 border bg-light p-3" id="formularioAplicacion">
                <div class="row mb-3">
                    <div class="col">
                        <label for="aplicacion_nombre">Nombre de la aplicacion</label>
                        <input type="text" name="aplicacion_nombre" id="aplicacion_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="aplicacion_fecha_inicio">fecha de inicio de la aplicacion</label>
                        <input type="date" name="aplicacion_fecha_inicio" id="aplicacion_fecha_inicio" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioProgramador" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
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
    </div>
    
    </form>
</div>
<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-8">
        <h2>Listado de Las Tareas</h2>
        <table class="table table-bordered table-hover" id="tablaTareas">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>ID APLICACION</th>
                    <th>DESCRIPCION</th>
                    <th>ESTADO</th>
                    <th>FECHA</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    
</div>
    <script src="<?= asset('./build/js/aplicaciones/index.js')  ?>"></script>
