<form class="form col-4" action="addProd" method="POST">   
    <legend class="text-center">Agregar producto</legend>
 <div class="mb-3">
   <label class="form-label">Tipo de producto</label>
   <input type="text" name="tipo" class="form-control" placeholder="Ingrese el tipo del producto">
 </div>
 <div class="mb-3">
   <label class="form-label">Descripción del producto</label>
   <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripción">
 </div>
 <div class="mb-3">
   <label class="form-label">Talle del producto</label>
   <input type="text" name="talle" class="form-control" placeholder="Ingrese el talle">
 </div>
 <div class="mb-3">
   <label class="form-label">Precio del producto</label>
   <input type="text" name="precio" class="form-control" placeholder="Ingrese el precio">
 </div>
 <div class="mb-3">
 <label class="form-label">Tiendas a la que pertenece</label>
 <select  name="id_tienda" class="form-select">
    {foreach $stores as $store}
      <option value="{$store->id_tienda}">{$store->nombre}</option>
    {/foreach}
  </select>
</div>
 <button type="submit" class="btnAdd col-12">Añadir</button>
</form>
