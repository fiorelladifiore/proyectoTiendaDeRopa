{include "htmlStart.tpl"}

{foreach $product as $oneproduct}
<div>
      <ul class="containerList">
        <li class="list-group-item articles">{$oneproduct->tipo}</li>
        <li class="list-group-item articles">{$oneproduct->descripcion}</li>
        <li class="list-group-item articles">Talle:{$oneproduct->talle}</li>
        <li class="list-group-item articles">${$oneproduct->precio}</li>
        <li class="list-group-item articles">${$oneproduct->id_tienda}</li>
      </ul>
    </div>
{/foreach}
{include "htmlEnd.tpl"}