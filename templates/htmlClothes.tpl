{include "htmlStart.tpl"}
{include 'formAdd.tpl'}

<div class="containerFlex">

  {foreach $clothes as $clothing}

    <div>
      <ul class="containerList">
        <li class="list-group-item articles">{$clothing->tipo}</li>
        <li class="list-group-item articles">{$clothing->descripcion}</li>
        <li class="list-group-item articles">Talle:{$clothing->talle}</li>
        <li class="list-group-item articles">${$clothing->precio}</li>
        <a href='product/{$clothing->id_ropa}' class='btn btn-secondary'>Ver</a>
      </ul>
      <div>
        <button>Editar</button>
        <a href='delete/{$clothing->id_ropa}'><button>Eliminar</button></a> 
      </div>
    </div>
    
  {/foreach}
</div>


{include "htmlEnd.tpl"}