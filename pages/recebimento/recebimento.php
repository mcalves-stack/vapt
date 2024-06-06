<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recebimento</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../globals.css" />
  <link rel="stylesheet" href="./recebimento.css" />
</head>

<body>
  <div class="transporte-agendar">
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
          <div class="div-2 active">
            <img class="img" src="../../img/feather-icons-box-2.svg" />
            <a href="/vapt/pages/recebimento/recebimento.php" class="div">Recebimento</a>
            <img class="img" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="div-2">
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
      <div class="container-fluid body">
        <div class="text-wrapper-2">Agendar Entrega</div>
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
            <img class="icone-baixo" src="../../img/caretdown-2.svg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="input">
            <label class="text-wrapper-4">DATA ENTRADA:</label>
            <input class="select datepicker" type="text" placeholder="DD/MM/AAAA" name="" id="">
            <button class="datepicker-button"><img class="calender" src="../../img/calendar.svg" alt="" srcset=""></button>
          </div>
          <div class="input">
            <label class="text-wrapper-4">TRANSPORTADORA</label>
            <input type="text" class="select" name="" id="">
          </div>
          <div class="input">
            <label class="text-wrapper-4">TIPO VEÍCULO:</label>
            <input type="text" placeholder="Selecione" class="select" name="" id="">
            <img class="icone-baixo" src="../../img/caretdown-2.svg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="input-2">
            <label class="text-wrapper-4">DOCUMENTO:</label>
            <input type="text" class="select" name="" id="">
          </div>
          <div class="input">
            <label class="text-wrapper-4">MOTORISTA:</label>
            <input type="text" class="select" name="" id="">
          </div>
          <div class="input-2">
            <label class="text-wrapper-4">TELEFONE MOTORISTA:</label>
            <input type="text" class="select" name="" id="">
          </div>
          <div class="input-2">
            <label class="text-wrapper-4">PLACA CAVALO:</label>
            <input type="text" class="select" name="" id="">
          </div>
          <div class="input-2">
            <label class="text-wrapper-4">PLACA CARRETA:</label>
            <input type="text" class="select" name="" id="">
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
        <textarea class="textearea"></textarea>
        <div class="frame-3">
          <button class="salvarbutton">Salvar <img id="save" src="../../img/save.svg" alt=""></button>
          <div class="buttons-save "><img class="feather-icons-corner" src="../../img/corner-up-left.svg" /></div>
        </div>
        <div class="table">
          <div class="frame-4">
            <button class="div-wrapper">EXPORTAR EXCEL</button>
            <div class="input-3">
              <label class="text-wrapper-6">NF-e:</labv>
                <input class="select" placeholder="Digite aqui">
            </div>
          </div>
          <div class="tabela">
            <div class="cabecalho">
              <div class="frame-6">
                <div class="text-wrapper-7">REC</div>
              </div>
              <div class="frame-6">
                <div class="text-wrapper-7">HUB</div>
              </div>
              <div class="frame-7">
                <div class="text-wrapper-7">CNPJ HUB</div>
              </div>
              <div class="frame-8">
                <div class="text-wrapper-8">CLIENTE</div>
              </div>
              <div class="frame-7">
                <div class="text-wrapper-7">CNPJ</div>
              </div>
              <div class="frame-9">
                <div class="text-wrapper-7">TIPO VEÍCULO</div>
              </div>
              <div class="frame-9">
                <div class="text-wrapper-7">TIPO ENTRADA</div>
              </div>
              <div class="status-wrapper">
                <div class="text-wrapper-7">STATUS</div>
              </div>
              <div class="frame-8">
                <div class="text-wrapper-8">TRANSPORTADORA</div>
              </div>
              <div class="frame-10">
                <div class="text-wrapper-7">PLACA CAVALO</div>
              </div>
              <div class="placa-carreta-wrapper">
                <div class="text-wrapper-7">PLACA CARRETA</div>
              </div>
              <div class="frame-10">
                <div class="text-wrapper-7">MOTORISTA</div>
              </div>
            </div>
            <div class="linha">
              <div class="feather-icons-plus-wrapper"><img class="img-2" src="../../img/plus.svg" /></div>
              <div class="element-wrapper">
                <div class="text-wrapper-9">117</div>
              </div>
              <div class="element-wrapper">
                <div class="element">1</div>
              </div>
              <div class="frame-11">
                <div class="text-wrapper-9">00.000.000/0000-00</div>
              </div>
              <div class="frame-12">
                <div class="text-wrapper-10">CENTRO DE TECNOLOGIA ELEMENTS</div>
              </div>
              <div class="frame-11">
                <div class="text-wrapper-9">00.000.000/0000-00</div>
              </div>
              <div class="frame-13">
                <div class="text-wrapper-9">-</div>
              </div>
              <div class="frame-13">
                <div class="text-wrapper-9">FULFILLMENT</div>
              </div>
              <div class="frame-14">
                <div class="text-wrapper-9">PENDENTE</div>
              </div>
              <div class="frame-12">
                <div class="text-wrapper-10">-</div>
              </div>
              <div class="frame-15">
                <div class="text-wrapper-9">N/A</div>
              </div>
              <div class="frame-15">
                <div class="text-wrapper-9">-</div>
              </div>
              <div class="frame-15">
                <div class="text-wrapper-9">N/A</div>
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
  <script src="../../pages/dashboard/dados.php"></script>
  <script src="../../scripts/input-file.js"></script>
</body>

</html>