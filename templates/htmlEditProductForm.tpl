{include "htmlStart.tpl"}

<form class="form col-4" action="updateProduct" method="POST">   
<legend class="text-center">Editar producto</legend>
<div class="mb-3">
<label class="form-label">Tipo de producto</label>
<input type="text" name="tipo" class="form-control" value="{$prod->tipo}">
</div>
<div class="mb-3">
<label class="form-label">Descripcion</label>
<input type="text" name="descripcion" class="form-control" value="{$prod->descripcion}">
</div>
<div class="mb-3">
<label class="form-label">Talle</label>
<input type="number" name="talle" class="form-control" value="{$prod->talle}">
</div>
<div class="mb-3">
<label class="form-label">Precio</label>
<input type="number" name="precio" class="form-control" value="{$prod->precio}">
</div>
<div class="mb-3">
<label class="form-label">Tienda a la que pertenece</label>
<select  name="id_tienda" class="form-select">
<option value="{$prod->id_tienda}">{$prod->nombre}</option>
   {foreach $stores as $store}
    {if $store->id_tienda != $prod->id_tienda}
        <option value="{$store->id_tienda}">{$store->nombre}</option>
    {/if}
    {/foreach}
 </select>
</div>

<input type="text" name="id_ropa" class="form-control" value="{$prod->id_ropa}" hidden>

<button type="submit" class="btnAdd col-12">Editar</button>
</form>

{include "htmlEnd.tpl"}