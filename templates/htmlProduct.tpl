{include "htmlStart.tpl"}


<div class="product">
{foreach $product as $item}
<div>
      <ul class="containerList" style="width: 20rem";>
        <h5 class='indu'>Indumentaria</h5>
        <li class="list-group-item articles">{$item->tipo}</li>
        <li class="list-group-item articles">{$item->descripcion}</li>
        <li class="list-group-item articles">Talle:{$item->talle}</li>
        <li class="list-group-item articles">${$item->precio}</li>
        <li class="list-group-item articles" value="{$item->id_tienda}">{$item->nombre}</li>
      </ul>
    </div>
{/foreach}
</div>

{include "htmlEnd.tpl"}