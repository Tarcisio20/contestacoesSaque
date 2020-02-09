<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistema de Contestaçã de Saques</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/296b85c354.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="main">
      <div class="top-page">
        <form class="form-search" action="">
          <input type="number" name="number" />
          <a href="#" class="btn search">
            <i class="fas fa-search icon"></i>  
            Pesquisar
          </a>
        </form>
        <a class="btn add" href="add_contestacao.php">
          <i class="far fa-save icon"></i>  
          Adicionar
        </a>
      </div>
      <div class="medlle">
        <div class="medlle-one">
          <span>
          <i class="fas fa-circle status-ok" alt="Respondido"></i>
          Devolvido
          </span>

          <span>
          <i class="fas fa-circle status-wait" alt="Respondido"></i>
          Aguardando
          </span>

          <span>
          <i class="fas fa-circle status-not-ok" alt="Respondido"></i>
          Não devolvido
          </span>
        </div>
      </div>
      <div class="bottom-page">
      <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">N°</th>
                <th scope="col">CARTAO</th>
                <th scope="col">DATA</th>
                <th scope="col">RESPOTA</th>
                <th scope="col">VALOR</th>
                <th scope="col">STATUS</th>
                <th scope="col">AÇÕES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1</td>
                <td>1234567</td>
                <td>6363 6363 6363 6363</td>
                <td>10/05/2020 00:00:00</td>
                <td>Time out de retirada</td>
                <td>R$ 250.000,00</td>
                <td> <i class="fas fa-circle status-ok" alt="Respondido"></i> </td>
                <td>
                  <a href="tela_contestacao.php" class="btn btn-info" >
                    <i class="far fa-eye icon"></i>  
                    Ver
                  </a>
                </td>
              </tr>

              <tr>
                <td>#2</td>
                <td>1234567</td>
                <td>6363 6363 6363 6363</td>
                <td>10/05/2020 00:00:00</td>
                <td>Time out de retirada</td>
                <td>R$ 250.000,00</td>
                <td><i class="fas fa-circle status-not-ok"></i></td>
                <td>
                  <a href="tela_contestacao.php" class="btn btn-info" >
                  <i class="far fa-eye icon"></i>
                    Ver
                  </a>
                </td>
              </tr>

              <tr>
                <td>#3</td>
                <td>1234567</td>
                <td>6363 6363 6363 6363</td>
                <td>10/05/2020 00:00:00</td>
                <td>Time out de retirada</td>
                <td>R$ 250.000,00</td>
                <td><i class="fas fa-circle status-wait"></i></td>
                <td>
                  <a href="tela_contestacao.php" class="btn btn-info" >
                  <i class="far fa-eye icon"></i>
                    Ver
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</body>
</html>