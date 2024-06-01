{include "htmlStart.tpl"}
  
<form class="form col-4 m-auto" action="updateStore" method="POST">   
<legend class="text-center">Editar tienda</legend>
<div class="mb-3">
<label class="form-label">Nombre de tienda</label>
<input type="text" name="nombre_e" class="form-control" value="{$store->nombre}">
</div>
<div class="mb-3">
<label class="form-label">Dirección de la tienda</label>
<input type="text" name="direccion_e" class="form-control" value="{$store->direccion}">
</div>
<div class="mb-3">
<label class="form-label">Teléfono de la tienda</label>
<input type="text" name="telefono_e" class="form-control" value="{$store->telefono}">
</div>
<div class="mb-3">
<label class="form-label">Email de la tienda</label>
<input type="text" name="email_e" class="form-control" value="{$store->email}">
</div>

<input type="text" name="id_tienda" class="form-control" value="{$store->id_tienda}" hidden>

<button type="submit" class="btnAdd col-12">Enviar</button>
</form>

{include "htmlEnd.tpl"}