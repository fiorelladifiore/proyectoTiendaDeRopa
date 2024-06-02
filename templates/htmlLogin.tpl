{include 'htmlStart.tpl'}

      <form class="login" action="verify" method="POST">
      <legend class="text-center">Iniciar sesión</legend>
      <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="text" name="username" class="form-control" placeholder="Ingrese su nombre de usuario">
      </div>
      <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <input type="text" name="password" class="form-control" placeholder="Ingrese su contraseña">
      </div>
    {if $msg}
        <div class='alert alert-warning'>
            {$msg}
        </div>
    {/if}

   <button type="submit" class="btn-login col-5">Ingresar</button>
  </form>

{include 'htmlEnd.tpl'}