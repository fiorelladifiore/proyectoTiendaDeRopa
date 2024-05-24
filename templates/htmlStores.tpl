{include "htmlStart.tpl"}

{foreach $stores as $store }
         <div class='card' style='width: 65rem;'>
               
                <div class='card-body'>
                    <h5 class='card-title'>{$store->nombre}</h5>
                    <p class='card-text'>{$store->direccion}</p>
                    <p class='card-text'>{$store->telefono}</p>
                    <p class='card-text'>{$store->email}</p>
                    <a href='vermas/{$store->id}'
                     class='btn btn-primary'>Ver más</a>
                </div>
                </div>
{/foreach}

{include "htmlEnd.tpl"}
