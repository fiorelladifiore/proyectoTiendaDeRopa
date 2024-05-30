{include "htmlStart.tpl"}

{foreach $stores as $store }
         <div class='card' style='width: 65rem;'>
               
                <div class='card-body'>
                    <h5 class='card-title'>{$store->nombre}</h5>
                    <p class='card-text'>Dirección: {$store->direccion}</p>
                    <p class='card-text'>Teléfono: {$store->telefono}</p>
                    <p class='card-text'>Email: {$store->email}</p>
                    <a href='stores/$store->id' class='btn btn-secondary'>Ver productos</a>
                </div>
                </div>
{/foreach}

{include "htmlEnd.tpl"}
