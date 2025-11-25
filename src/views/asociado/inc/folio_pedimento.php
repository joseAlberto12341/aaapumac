<div class="card card-rounded">
    <div class="card-body">
        <h4 class="card-title card-title-dash"><?php echo $answer['data']['title']; ?></h4>
        <p class="card-subtitle card-subtitle-dash"><?php echo $answer['data']['subtitle']; ?></p>
        
        <form method="POST" action="/Aaapumac/asociado/agregarPedimento">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pedimento">Pedimento</label>
                        <input type="text" class="form-control" id="pedimento" name="pedimento" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo_operacion">Tipo de Operación</label>
                        <select class="form-control" id="tipo_operacion" name="tipo_operacion" required>
                            <option value="">Seleccionar</option>
                            <option value="Importación">Importación</option>
                            <option value="Exportación">Exportación</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="clave_pedimento">Clave de Pedimento</label>
                        <input type="text" class="form-control" id="clave_pedimento" name="clave_pedimento" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="CR">CR</label>
                <input type="text" class="form-control" id="CR" name="CR">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar Pedimento</button>
            <a href="/Aaapumac/asociado/listaPedimentos" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>