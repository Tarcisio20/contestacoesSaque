<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contestação | #121232323</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/296b85c354.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="main">
    <h3 class="title-auth">Contestação #123232423</h3>
  <form class="form-add">
  <div class="container-inputs">
    <div class="form-group input-min">
      <label for="inputCode">CODIGO</label>
      <input type="number" class="form-control" id="inputCode" aria-describedby="emailHelp" placeholder="">
    </div>
    <div class="form-group input-med">
      <label for="inputCard">CARTAO</label>
      <input type="number" class="form-control" id="inputCard" placeholder="Numero do cartão">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAtm">ATM</label>
    <select class="form-control">
        <option>Select padrão</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Escolha na lista o ATM que houve a ocorrencia.</small>
  </div>

  <div class="form-group">
    <label for="inputDataSaque">DATA DO SAQUE</label>
    <input type="text" class="form-control" id="inputDataSaque" placeholder="">
  </div>

  <div class="form-group">
    <label for="inputDataSaque">SITUAÇÃO DO ATM </label>
    <select class="form-control">
        <option>Select padrão</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Situação do status do saque.</small>
  </div>

  <div class="form-group">
    <label for="inputDataSaque">SITUAÇAO DO AUTORIZADOR</label>
    <select class="form-control">
        <option>Select padrão</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Resposta do autorizador.</small>
  </div>
  <div class="container-inputs">
    <div class="form-group input-min">
      <label for="inputTipoSaque">TIPO DE SAQUE</label>
      <select class="form-control">
          <option>Select padrão</option>
      </select>
      <small id="emailHelp" class="form-text text-muted">Tipo de saque.</small>
    </div>

    <div class="form-group input-min">
      <label for="inputValorSaque">VL SOLICITADO</label>
      <input type="text" class="form-control" id="inputValorSaque" placeholder="">
    </div>

    <div class="form-group input-min">
      <label for="inputValorRejeicao">VL REJEITADO</label>
      <input type="text" class="form-control" id="inputValorRejeicao" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">OBSERVAÇÕES</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="inputStatus">STATUS DA OCORRENCIA</label>
    <select class="form-control">
        <option>Select padrão</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Aqui altera o Status da ocorrencia.</small>
  </div>

  <div class="form-group">
    <label for="inputDataFinalizacao">DATA FINALZAÇÃO</label>
    <input type="text" class="form-control" id="inputDataSaque" placeholder="" readonly>
    <small id="emailHelp" class="form-text text-muted">Data em que foi finalizada a ultima ocorrencia.</small>
  </div>
  <a type="submit"  class="btn btn-primary btn-internal"><i class="fas fa-arrow-left icon"></i>Voltar</a>
  <a type="submit" class="btn btn-success btn-internal"><i class="far fa-save icon"></i>Salvar</a>
  <a class="btn btn-danger btn-internal"><i class="far fa-window-close icon"></i>Excluir</a>
</form>
  </div>
</body>
</html>