{include "htmlStart.tpl"}

<div class="containerFlex">

  {foreach $clothes as $clothing}

    <div>
      <ul class="containerList">
        <li class="list-group-item articles">{$clothing->tipo}</li>
        <li class="list-group-item articles">{$clothing->descripcion}</li>
        <li class="list-group-item articles">Talle:{$clothing->talle}</li>
        <li class="list-group-item articles">${$clothing->precio}</li>
        <button class="buttonVermas">Ver</button>
      </ul>
    </div>
  {/foreach}
</div>

{include "htmlEnd.tpl"}