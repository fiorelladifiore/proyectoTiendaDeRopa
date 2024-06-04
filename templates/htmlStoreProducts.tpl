{include "htmlStart.tpl"}


{foreach $storePS as $storeP}

<div class="containerFlex">
  <div class="card mt-3 containerProducts" style="width: 20rem;" >
    <ul class="list-group list-group-flush containerList">
      <li class="list-group-item articles">{$storeP->tipo}</li>
      <li class="list-group-item articles">{$storeP->descripcion}</li>
      <li class="list-group-item articles">Talle:{$storeP->talle}</li>
      <li class="list-group-item articles">${$storeP->precio}</li>
    </ul>
  </div>
</div>
{/foreach}

{include "htmlEnd.tpl"}