{include "htmlStart.tpl"}



<div class="product">
{foreach $storePS as $storeP}

  <div>
  <ul class="containerList" style="width: 20rem";>
    <h5 class='indu'>Indumentaria</h5>
      <li class="list-group-item articles">{$storeP->tipo}</li>
      <li class="list-group-item articles">{$storeP->descripcion}</li>
      <li class="list-group-item articles">Talle:{$storeP->talle}</li>
      <img src="img/{$storeP->imagen}" alt="{$storeP->tipo}" class="imgProd">
      <li class="list-group-item articles">${$storeP->precio}</li>
      </ul>
    </div>
{/foreach}
</div>

{include "htmlEnd.tpl"}