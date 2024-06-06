<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedido</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../globals.css" />
  <link rel="stylesheet" href="./pedido.css" />
</head>

<body>
  <div class="pedido-novo-pedido">
    <div class="page">
      <div class="side-bar-menu">
        <div class="logo"><img class="logo-branco" src="../../img/logo-branco-1.png" /></div>
        <div class="line-sidebar"></div>
        <div class="section-painel">
          <div class="title">
            <div class="text-wrapper">PAINEL</div>
          </div>
          <div class="menu-button-group">
            <img class="img" src="../../img/feather-icons-settings-7.svg" />
            <a href="/vapt/pages/dashboard/dashboard.php" class="div">Dashboard</a>
          </div>
          <div class="title">
            <div class="text-wrapper">APLICAÇÃO</div>
          </div>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-file-1.svg" />
            <a class="div">Cadastros</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-box-2.svg" />
            <a href="/vapt/pages/recebimento/recebimento.php" class="div">Recebimento</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="div-2 active">
            <img class="img" src="../../img/feather-icons-shopping-bag-1.svg" />
            <a href="/vapt/pages/pedido/pedido.php" class="div">Pedido</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-rotate-ccw-2.svg" />
            <a class="div">Reversa</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-truck-1.svg" />
            <a class="div">Transporte</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-dollar-sign-1.svg" />
            <a class="div">Financeiro</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <a class="title">
            <div class="text-wrapper">RELATÓRIOS</div>
          </a>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-pie-chart-2.svg" />
            <a class="div">Powerbi</a>
          </div>
          <div class="div-2">
            <img class="img" src="../../img/feather-icons-grid-1.svg" />
            <div class="div">Relatórios</div>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
        </div>
        <div class="line-sidebar"></div>
        <div class="logo-2">
          <div class="div-2">
            <img class="img engrenagem-icon" src="../../img/feather-icons-settings-8.svg" />
            <a class="div">Configurações</a>
          </div>
          <div class="menu-button-single">
            <img class="img" src="../../img/feather-icons-chevrons-left-1.svg" />
            <div class="title-2">Esconder Menu</div>
          </div>
        </div>
      </div>
      <div class="container-fluid  body">
        <div class="text-wrapper-2">Novo pedido</div>
        <div class="frame">
          <div class="input">
            <label class="text-wrapper-4">CNPJ</label>
            <input class="select" placeholder="25.098.466/0001-00" name="" id="">
          </div>
          <div class="input">
            <label class="text-wrapper-4">RAZÃO SOCIAL</label>
            <input class="select" placeholder="CENTRO DE TECNOLOGIA ELEMENTS" name="" id="">
          </div>
          <div class="input">
            <label class="text-wrapper-4">HUB</label>
            <input class="select" placeholder="Selecione" name="" id="">
          </div>
        </div>
        <div class="card">
          <div class="frame">
            <div class="input">
              <input type="text" id="file-name-display" class="select-4" placeholder="Escolher arquivo" readonly>
            </div>
            <button id="import-button" class="button"><span class="span-nf">Importar NF-e (xml)</span></button>
            <input type="file" id="file-input" style="display: none;">
          </div>
        </div>
        <div class="text-wrapper-5">Observações</div>
        <textarea class="select-5"></textarea>
        <button class="div-wrapper">EXPORTAR EXCEL</button>
        <div class="table">
          <div class="frame-2">
            <div class="text-wrapper-6">Pedidos já registrados</div>
            <div class="input-2">
              <div class="text-wrapper-7">NF-e:</div>
              <div class="select">
                <input placeholder="Digite aqui" class="select-wrapper">
              </div>
            </div>
          </div>
          <div class="tabela">
            <div class="cabecalho">
              <div class="pedido-wrapper">
                <div class="text-wrapper-8">PEDIDO</div>
              </div>
              <div class="nf-e-wrapper">
                <div class="text-wrapper-8">NF-E</div>
              </div>
              <div class="frame-3">
                <div class="text-wrapper-8">STATUS</div>
              </div>
              <div class="frame-3">
                <div class="text-wrapper-8">DATA</div>
              </div>
              <div class="frame-4">
                <div class="text-wrapper-8">UF</div>
              </div>
              <div class="cidade-wrapper">
                <div class="text-wrapper-9">CIDADE</div>
              </div>
              <div class="frame-5">
                <div class="text-wrapper-9">ENDEREÇO</div>
              </div>
              <div class="frame-5">
                <div class="text-wrapper-9">NOME</div>
              </div>
              <div class="qtd-wrapper">
                <div class="text-wrapper-8">QTD.</div>
              </div>
              <div class="frame-6">
                <div class="text-wrapper-8">QTD.</div>
              </div>
            </div>
            <div class="linha">
              <div class="frame-7">
                <div class="text-wrapper-10">001</div>
              </div>
              <div class="frame-8">
                <div class="text-wrapper-11">00001</div>
              </div>
              <div class="frame-9">
                <div class="text-wrapper-10">ENVIADO</div>
              </div>
              <div class="frame-9">
                <div class="text-wrapper-11">17/05/2024</div>
              </div>
              <div class="sp-wrapper">
                <div class="text-wrapper-10">SP</div>
              </div>
              <div class="sao-paulo-wrapper">
                <div class="text-wrapper-12">SAO PAULO</div>
              </div>
              <div class="frame-10">
                <p class="text-wrapper-12">50829 ROSARIO VALLEYS SUITE 955</p>
              </div>
              <div class="frame-10">
                <div class="text-wrapper-12">DARRIN REMPEL</div>
              </div>
              <div class="frame-11">
                <div class="text-wrapper-10">1.00</div>
              </div>
              <div class="frame-12">
                <div class="text-wrapper-10">1.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../../scripts/script.js"></script>
  <script src="../../scripts/input-file.js"></script>
</body>

</html>