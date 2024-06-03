{include "htmlStart.tpl"}

{foreach $product as $item}
<div>
      <ul class="containerList">
        <li class="list-group-item articles">{$item->tipo}</li>
        <li class="list-group-item articles">{$item->descripcion}</li>
        <li class="list-group-item articles">Talle:{$item->talle}</li>
        <li class="list-group-item articles">${$item->precio}</li>
        <li class="list-group-item articles">{$item->id_tienda}</li>
      </ul>
    </div>
{/foreach}
{include "htmlEnd.tpl"}