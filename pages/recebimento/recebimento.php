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
  <link rel="stylesheet" href="../../lib/datables/dataTables.css" />
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
            <a href="#" class="div collapse-toggle" data-toggle="collapse" data-target="#cadastrosSubmenu" aria-expanded="false" aria-controls="cadastrosSubmenu">Cadastros</a>
            <img class="img collapse-icon" src="../../img/feather-icons-chevron-down-1.svg" id="cadastros-icon" />
          </div>
          <div class="collapse" id="cadastrosSubmenu">
            <div class="sub-menu">
              <a class="div" href="#" data-toggle="modal" data-target="#createUserModal">Alterar Senha</a>
              <a class="div" href="/vapt/pages/cadastro/cadastro.php">Usuário</a>
            </div>
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
            <a href="#" class="div collapse-toggle" data-toggle="collapse" data-target="#relatoriosSubmenu" aria-expanded="false" aria-controls="relatoriosSubmenu">Relatórios</a>
            <img class="img collapse-icon" src="../../img/feather-icons-chevron-down-1.svg" />
          </div>
          <div class="collapse" id="relatoriosSubmenu">
            <div class="sub-menu">
              <a class="div" href="/vapt/pages/relatorios/PedidoDetalhes/pedidodetalhes.php">Pedido Detalhes</a>
              <a class="div" href="/vapt/pages/relatorios/estoque/estoque.php">Estoque</a>
            </div>
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
          <button class="salvarbutton btn btn-outline-primary">Salvar <img id="save" src="../../img/save.svg" alt=""></button>
        </div>
        <div class="">
          <div class="frame-4">
            <button class="button-exportar">EXPORTAR EXCEL</button>
          </div>
          <div class="table-responsive">
            <table id="example" class="table" style="width:100%" class="mt-2">
              <thead class="cabecalho">
                <tr>
                  <th></th>
                  <th>REC</th>
                  <th>HUB</th>
                  <th>CNPJ HUB</th>
                  <th>CLIENTE</th>
                  <th>CNPJ</th>
                  <th>TIPO VEÍCULO</th>
                  <th>TIPO ENTRADA</th>
                  <th>STATUS</th>
                  <th>TRANSPORTADORA</th>
                  <th>PLACA CAVALO</th>
                  <th>PLACA CARRETA</th>
                  <th>MOTORISTA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="plus-icon">+</span></td>
                  <td>117</td>
                  <td>1</td>
                  <td>00.000.000/0000-00</td>
                  <td>CENTRO DE TECNOLOGIA ELEMENTS</td>
                  <td>00.000.000/0000-00</td>
                  <td>Texto</td>
                  <td>FULFILLMENT</td>
                  <td>PENDENTE</td>
                  <td>-</td>
                  <td>N/A</td>
                  <td class="placa-carreta">-</td>
                  <td>N/A</td>
                </tr>
              </tbody>
            </table>
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
    <script src="../../scripts/filter.js"></script>

    <script src="../../pages/dashboard/dados.php"></script>
    <script src="../../scripts/input-file.js"></script>

    <script src="../../scripts/tables.js"></script>
    <script src="../../lib/datables/dataTables.js"></script>

</body>

</html>