<?php
// require_once "sql_tasks.php";
require_once "templates/htmlStart.php";
// require_once "templates/htmlForm.php";
require_once "templates/htmlEnd.php";

class clothesView {

  function showClothing($clothing){
    htmlStart();    
    
    foreach ($clothing as $clothes){
    

    echo '
    <div class="containerFlex">
      <div class="card mt-3 containerProducts" style="width: 20rem;" >
        <ul class="list-group list-group-flush containerList">
          <li class="list-group-item articles">'.$clothes->tipo.'</li>
          <li class="list-group-item articles">'.$clothes->descripcion.'</li>
          <li class="list-group-item articles">Talle:'.$clothes->talle.'</li>
          <li class="list-group-item articles">$'.$clothes->precio.'</li>
        </ul>
      <button class="buttonVermas">Ver mas</button>
      </div>
    </div>
    ';}
    htmlEnd();
  }
}

