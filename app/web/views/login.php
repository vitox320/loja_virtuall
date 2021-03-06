<?php
require_once '../views/layout/topo.php';

?>
<link rel="stylesheet" href="../assets/css/login.css">   

  <div class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="../assets/img/login/lock.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-outline-dark btn-block" type="submit">Sign in</button>
  <small> Ainda não possui conta?  <a href="cadastro.php" class="text-primary">Inscreva-se</a> </small>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
</div>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<?php require_once '../views/layout/rodape.php';?>