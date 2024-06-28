{include "htmlStart.tpl"}



<div class="product">
{if !empty($storePS)}
{foreach $storePS as $storeP}

  <div>
  <ul class="containerList" style="width: 20rem";>
    <h5 class='indu'>Indumentaria:</h5>
      <li class="list-group-item articles">{$storeP->tipo}</li>
      <li class="list-group-item articles">{$storeP->descripcion}</li>
      <li class="list-group-item articles">Talle:{$storeP->talle}</li>
      {if $storeP->imagen}
      <img src="img/{$storeP->imagen}" alt="{$storeP->tipo}" class="imgProd">
      {else}
        <li class="imgcontainer">Urban clothing ™</li>
      {/if}
      <li class="list-group-item articles">${$storeP->precio}</li>
      </ul>
    </div>
{/foreach}
{else}
  <h1 class="nodata">No hay productos disponibles</h1>
{/if}
</div>


{include "htmlEnd.tpl"}