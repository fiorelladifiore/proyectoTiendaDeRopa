    <form class="col-3 m-auto" action="addProduct" method="POST">
    
      <legend class="text-center">Agregar Prenda</legend>
      <div class="mb-3">
        <input type="text" name="tipo" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <input type="number" name="talle" class="form-control" placeholder="Ingrese Talle">
      </div>
      <div class="mb-3">
        <input type="number" name="precio" class="form-control" placeholder="Ingrese Precio">
      </div>
      <div class="mb-3">
        <select name="tienda" class="form-control" placeholder="Ingrese Tienda">

        {foreach $stores as $store}

         <option value = "{$store->id_tienda}"> {$store->nombre}</option>

        {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-primary col-12">Agregar</button> 
    </form>