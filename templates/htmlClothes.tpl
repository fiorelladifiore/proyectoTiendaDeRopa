{include "htmlStart.tpl"}


{if $admin == true}
{include 'htmlAddProdForm.tpl'}
{/if}

<div class="containerFlex">

  {foreach $products as $item}

    <div>
      <ul class="containerList">
        <li class="list-group-item articles">{$item->tipo}</li>
        <li class="list-group-item articles">{$item->descripcion}</li>
        <li class="list-group-item articles">Talle:{$item->talle}</li>
        <li class="list-group-item articles">${$item->precio}</li>
        <li class="list-group-item articles" value="{$item->id_tienda}">{$item->nombre}</li>
        <a href='product/{$item->id_ropa}' class='btn btn-secondary'>Ver</a>
      </ul>
      {if $admin == true}
        <a href='deleteProd/{$item->id_ropa}'><button>Eliminar</button></a>
        {* <button>Editar</button> *}
      {/if}
      </div>
  {/foreach}
</div>

{include "htmlEnd.tpl"}

