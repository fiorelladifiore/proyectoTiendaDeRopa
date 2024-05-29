
{include "htmlStart.tpl"}


{foreach $clothes as $clothing}

<div class="containerFlex">
  <div class="card mt-3 containerProducts" style="width: 20rem;" >
    <ul class="list-group list-group-flush containerList">
      <li class="list-group-item articles">{$clothing->tipo}</li>
      <li class="list-group-item articles">{$clothing->descripcion}</li>
      <li class="list-group-item articles">Talle:{$clothing->talle}</li>
      <li class="list-group-item articles">${$clothing->precio}</li>
    </ul>
  <button class="buttonVermas">Ver mas</button>
  </div>
</div>
{/foreach}

{include "htmlEnd.tpl"}
