<?
    extract($values);
    $section = Section::find((int)$section_id);
    $seccion = Seccion::find(2);
    $actividades = Actividad::where('section_id', $section->id)->get();
    $actividad = ($actividades->count()) ? $actividades->first() : null;
    $status = (!empty($actividad)) ? $actividad->status : 0;
?>
<input type="hidden" id="actividad-status" name="status" class="input-editor-form" data-column="status" data-type="integer" value="<?= $status ?>">
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="actividad-maintag" class="control-label">Etiqueta principal:</label>
            <select id="actividad-maintag" name="maintag" class="form-control">
                <option value="">- Seleccionar opción -</option>
                <? $etiquetas = explode(',', $section->tags) ?>
                <? foreach ($etiquetas as $etiqueta): ?>
                    <option value="<?= $etiqueta ?>" <? if($etiqueta === $seccion->maintag): ?>selected<? endif ?>><?= $etiqueta ?></option>
                <? endforeach; ?>
            </select>
            <br>
            <p>
                <strong>Etiqueta seleccionada</strong>
                <em id="actividad-maintag-text"> <? if(!empty($seccion->maintag)): echo $seccion->maintag; else: echo "N/A"; endif; ?></em>
            </p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="actividad-acceso">Acceso</label>
            <? $accesos = json_decode($acceso, true) ?>
            <select class="form-control select-editor-form p-0" multiple="multiple" id="actividad-acceso" name="acceso[]" data-column="acceso" data-type="json" data-key="id">
                <option value="">- Seleccionar una opción -</option>
                <option value="Actividad gratuita con tu boleto del Museo Amparo" <? if(in_array('Actividad gratuita con tu boleto del Museo Amparo', array_column($accesos, 'id'))): ?>selected<? endif ?>>Actividad gratuita con tu boleto del Museo Amparo</option>
                <option value="Entrada gratuita" <? if(in_array('Entrada gratuita', array_column($accesos, 'id'))): ?>selected<? endif ?>>Entrada libre</option>
                <option value="Entrada gratuita con boleto de cortesía" <? if(in_array('Entrada gratuita con boleto de cortesía', array_column($accesos, 'id'))): ?>selected<? endif ?>>Entrada gratuita con boleto de cortesía</option>
                <option value="Acceso con boleto del Museo Amparo" <? if(in_array('Acceso con boleto del Museo Amparo', array_column($accesos, 'id'))): ?>selected<? endif ?>>Acceso con boleto del Museo Amparo</option>
                <option value="Inscripciones en Taquilla" <? if(in_array('Inscripciones en Taquilla', array_column($accesos, 'id'))): ?>selected<? endif ?>>Inscripciones en Taquilla</option>
                <option value="Tarjeta de Cliente frecuente del Café del Museo" <? if(in_array('Tarjeta de Cliente frecuente del Café del Museo', array_column($accesos, 'id'))): ?>selected<? endif ?>>Tarjeta de Cliente frecuente del Café del Museo</option>
                <option value="Cortesías disponibles en la Taquilla del Museo Amparo" <? if(in_array('Cortesías disponibles en la Taquilla del Museo Amparo', array_column($accesos, 'id'))): ?>selected<? endif ?>>Cortesías disponibles en la Taquilla del Museo Amparo</option>
            </select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="actividad-lugar">Lugar</label>
            <input type="text" id="actividad-lugar" name="lugar" class="form-control input-editor-form" data-column="lugar" data-type="string" value="<?= $lugar ?>" style="width: 100%;">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label">Días</label>
            <? $dias = json_decode($dias, true) ?>
            <select class="form-control select-editor-form p-0" name="dias[]" id="actividad-dias" multiple="multiple" data-column="dias" data-type="json" data-key="dia">
                <option value="">- Seleccionar una opción -</option>
                <option value="Lunes" <? if(in_array('Lunes', array_column($dias, 'dia'))): ?>selected<? endif ?>>Lunes</option>
                <option value="Martes" <? if(in_array('Martes', array_column($dias, 'dia'))): ?>selected<? endif ?>>Martes</option>
                <option value="Miércoles" <? if(in_array('Miércoles', array_column($dias, 'dia'))): ?>selected<? endif ?>>Miércoles</option>
                <option value="Jueves" <? if(in_array('Jueves', array_column($dias, 'dia'))): ?>selected<? endif ?>>Jueves</option>
                <option value="Viernes" <? if(in_array('Viernes', array_column($dias, 'dia'))): ?>selected<? endif ?>>Viernes</option>
                <option value="Sábado" <? if(in_array('Sábado', array_column($dias, 'dia'))): ?>selected<? endif ?>>Sábado</option>
                <option value="Domingo" <? if(in_array('Domingo', array_column($dias, 'dia'))): ?>selected<? endif ?>>Domingo</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input type="checkbox" id="disable-fechas" <? if(empty($fecha_inicio)): ?>checked<? endif ?>>
        <label>Deshabilitar fecha</label>
    </div>
</div>
<div id="evento-fechas" class="row">
    <div class="col-sm-3">
        <label class="control-label">Fecha de inicio</label>
        <input type="text" id="fecha-inicio" class="date start form-control col-sm-3 input-editor-form" value="<? if(!empty($fecha_inicio)): echo Carbon::parse($fecha_inicio)->format('d/m/Y'); endif; ?>">
    </div>
    <div class="col-sm-3">
        <label class="control-label">Hora de inicio</label>
        <input type="text" id="hora-inicio" class="time start form-control col-sm-3 input-editor-form" value="<? if(!empty($fecha_inicio)): echo Carbon::parse($fecha_inicio)->format('H:i'); endif; ?>">
    </div>
    <div class="col-sm-3">
        <label class="control-label">Hora de fin</label>
        <input type="text" id="hora-fin" class="time end form-control col-sm-3 input-editor-form" value="<? if(!empty($fecha_fin)): echo Carbon::parse($fecha_fin)->format('H:i'); endif; ?>">
    </div>
    <div class="col-sm-3">
        <label class="control-label">Fecha de fin</label>
        <input type="text" id="fecha-fin" class="date end form-control col-sm-3 input-editor-form" value="<? if(!empty($fecha_fin)): echo Carbon::parse($fecha_fin)->format('d/m/Y'); endif; ?>">
    </div>
    <input type="hidden" id="fecha-inicio-datetime" class="input-editor-form" data-column="fecha_inicio" data-type="datetime" value="<? if(!empty($fecha_inicio)): echo Carbon::parse($fecha_inicio)->format('d/m/Y H:i'); endif; ?>">
    <input type="hidden" id="fecha-fin-datetime" class="input-editor-form" data-column="fecha_fin" data-type="datetime" value="<? if(!empty($fecha_fin)): echo Carbon::parse($fecha_fin)->format('d/m/Y H:i'); endif; ?>">
</div>
