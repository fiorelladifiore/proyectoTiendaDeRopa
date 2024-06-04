{include "htmlStart.tpl"}

{if $admin == true}
{include "htmlAddStoreForm.tpl"}
{/if}

{foreach $stores as $store }
         <div class='card' style='width: 45rem;'>
         <img src=img/UrbanClothing.png class="logo">
               
                <div class='card-body'>
                    <h5 class='card-title'>{$store->nombre}</h5>
                    <p class='card-text'>Dirección: {$store->direccion}</p>
                    <p class='card-text'>Teléfono: {$store->telefono}</p>
                    <p class='card-text'>Email: {$store->email}</p>
                    <a href='storeProd/{$store->id_tienda}' class='btn btn-secondary'>Ver productos</a>
                </div>
                {if $admin == true}
                <a href='deleteStore/{$store->id_tienda}' class='btn btn-secondary'>Eliminar</a>
                <a href='editStore/{$store->id_tienda}' class='btn btn-secondary'>Editar</a>
                {/if}
                </div>
{/foreach}

{include "htmlEnd.tpl"}
