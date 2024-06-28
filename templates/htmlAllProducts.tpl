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
        {if $item->imagen}
        <img src="img/{$item->imagen}" alt="{$item->tipo}" class="imgProd">
        {else}
          <li class="imgcontainer">Urban clothing ™</li>
        {/if}
        <li class="list-group-item articles" value="{$item->id_tienda}">{$item->nombre}</li>
        <a href='product/{$item->id_ropa}' class='btn btn-secondary'>Ver</a>
        {if $admin == true}
          <a href='deleteProd/{$item->id_ropa}' class='btn btn-secondary'><button>Eliminar</button></a>
          <a href='editProduct/{$item->id_ropa}' class='btn btn-secondary'><button>Editar</button></a>
        {/if}
        </ul>
      </div>
  {/foreach}
</div>

{include "htmlEnd.tpl"}

