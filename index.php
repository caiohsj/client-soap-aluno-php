<?php 
  require_once("Service.php");
  session_start();
  $service = new Service();
  $alunos = $service->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Client Soap Aluno</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <!-- Cabeçalho -->
      <header id="menu">
          <nav class="navbar navbar-dark fixed-top bg-dark">
            <div class="container">
              <div class="navbar-brand">
                  <h1>CLIENT SOAP ALUNO</h1>
              </div>

              
            </div>
          </nav>
        </div>
      </header>
    <!-- Fim do Cabeçalho -->

    <!-- Home -->
    <section id="home" class="d-flex" style="margin-top: 150px;">
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-4 text-center">
              <form method="POST" action="insert.php" enctype="multipart/form-data">
                  <div class="form-group">
                      <label>Nome</label>
                      <input name="nome" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Média</label>
                      <input name="media" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Faltas</label>
                      <input name="faltas" class="form-control">
                  </div>
                  <button class="btn btn-success">CADASTRAR</button>
              </form>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Média</th>
                  <th>Faltas</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($alunos as $aluno): ?>
                  <tr>
                    <td><?= $aluno->id; ?></td>
                    <td><?= $aluno->nome; ?></td>
                    <td><?= $aluno->media; ?></td>
                    <td><?= $aluno->faltas; ?></td>
                    <td>
                      <a href="edit.php?id=<?= $aluno->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                      <a href="delete.php?id=<?= $aluno->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- Fim Home -->
    
  </body>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>