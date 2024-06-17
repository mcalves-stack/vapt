<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatórios - Pedidos</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../globals.css" />
  <link rel="stylesheet" href="../../../lib/datables/dataTables.css" />
  <link rel="stylesheet" href="pedidodetalhes.css" />
</head>

<body>
  <div class="wrapper">
    <div class="side-bar-menu">
      <div class="logo"><img class="logo-branco" src="../../../img/logo-branco-1.png" /></div>
      <div class="line-sidebar"></div>
      <div class="section-painel">
        <div class="title">
          <div class="text-wrapper">PAINEL</div>
        </div>
        <div class="menu-button-group">
          <img class="img" src="../../../img/feather-icons-settings-7.svg" />
          <a href="/vapt/pages/dashboard/dashboard.php" class="div">Dashboard</a>
        </div>
        <div class="title">
          <div class="text-wrapper">APLICAÇÃO</div>
        </div>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-file-1.svg" />
          <a href="#" class="div collapse-toggle" data-toggle="collapse" data-target="#cadastrosSubmenu" aria-expanded="false" aria-controls="cadastrosSubmenu">Cadastros</a>
          <img class="img collapse-icon" src="../../../img/feather-icons-chevron-down-1.svg" id="cadastros-icon" />
        </div>
        <div class="collapse" id="cadastrosSubmenu">
          <div class="sub-menu">
            <a class="div" href="#" data-toggle="modal" data-target="#createUserModal">Alterar Senha</a>
            <a class="div" href="/vapt/pages/cadastro/cadastro.php">Usuário</a>
          </div>
        </div>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-box-2.svg" />
          <a href="/vapt/pages/recebimento/recebimento.php" class="div">Recebimento</a>
          <img class="img" src="../../../img/feather-icons-chevron-down-1.svg" />
        </div>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-shopping-bag-1.svg" />
          <a href="/vapt/pages/pedido/pedido.php" class="div">Pedido</a>
          <img class="img" src="../../../img/feather-icons-chevron-down-1.svg" />
        </div>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-rotate-ccw-2.svg" />
          <a class="div">Reversa</a>
          <img class="img" src="../../../img/feather-icons-chevron-down-1.svg" />
        </div>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-truck-1.svg" />
          <a class="div">Transporte</a>
          <img class="img" src="../../../img/feather-icons-chevron-down-1.svg" />
        </div>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-dollar-sign-1.svg" />
          <a class="div">Financeiro</a>
          <img class="img" src="../../../img/feather-icons-chevron-down-1.svg" />
        </div>
        <a class="title">
          <div class="text-wrapper">RELATÓRIOS</div>
        </a>
        <div class="div-2">
          <img class="img" src="../../../img/feather-icons-pie-chart-2.svg" />
          <a class="div">Powerbi</a>
        </div>
        <div class="div-2 active-b">
          <img class="img" src="../../../img/feather-icons-grid-1.svg" />
          <a href="#" class="div collapse-toggle" data-toggle="collapse" data-target="#relatoriosSubmenu" aria-expanded="false" aria-controls="relatoriosSubmenu">Relatórios</a>
          <img class="img collapse-icon" src="../../../img/feather-icons-chevron-down-1.svg" />
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
          <img class="img engrenagem-icon" src="../../../img/feather-icons-settings-8.svg" />
          <a class="div">Configurações</a>
        </div>
        <div class="menu-button-single">
          <img class="img" src="../../../img/feather-icons-chevrons-left-1.svg" />
          <div class="title-2">Esconder Menu</div>
        </div>
      </div>
    </div>
    <div class="main p-4">
      <h1 id="pedido-title">Pedido</h1>
      <div class="frame">
        <div class="input">
          <label class="text-wrapper-4">DATA Inicio</label>
          <input class="select datepicker" type="text" placeholder="DD/MM/AAAA" id="date-start">
          <button class="datepicker-button"><img class="calender" src="../../../img/calendar.svg" alt="" srcset=""></button>
        </div>
        <div class="input">
          <label class="text-wrapper-4">DATA FIM</label>
          <input class="select datepicker" type="text" placeholder="DD/MM/AAAA" id="date-end">
          <button class="datepicker-button"><img class="calender" src="../../../img/calendar.svg" alt="" srcset=""></button>
        </div>
        <div class="input">
          <label class="text-wrapper-4">NF-E</label>
          <input type="text" class="select" id="nf-input">
        </div>
        <div class="input">
          <label class="text-wrapper-4">Pedido</label>
          <input type="text" class="select" id="pedido-input">
        </div>
        <div class="frame-4">
          <button class="button-3" id="reset-filters"><img class="img-2" src="../../../img/feather-icons-rotate-ccw-3.svg" /></button>
          <button class="button-4" id="apply-filters"><img class="img-2" src="../../../img/feather-icons-search-1.svg" /></button>
        </div>
      </div>
      <div class="table">
        <div class="excel-input">
          <div>
            <button class="button-exportar">EXPORTAR EXCEL</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="example" class="table" style="width:100%" class="mt-2">
            <thead class="cabecalho">
              <tr>
                <th>Pedido</th>
                <th>NF-e</th>
                <th>Tipo Entrega</th>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Qtdd</th>
                <th>Qtdd SKU</th>
                <th>Vapt</th>
                <th>Destinatario</th>
                <th>Nº</th>
                <th>CEP</th>
                <th>UF</th>
                <th>km Total</th>
                <th>Entrada</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12345</td>
                <td>987654321</td>
                <td>Entrega Rápida</td>
                <td>João Silva</td>
                <td>150.00</td>
                <td>3</td>
                <td>5</td>
                <td>Vapt</td>
                <td>Maria Souza</td>
                <td>123</td>
                <td>12345-678</td>
                <td>SP</td>
                <td>10</td>
                <td>10/06/2023</td>
              </tr>
              <tr>
                <td>67890</td>
                <td>123456789</td>
                <td>Entrega Normal</td>
                <td>Pedro Lima</td>
                <td>250.00</td>
                <td>2</td>
                <td>10</td>
                <td>Vapt</td>
                <td>Joaquim Almeida</td>
                <td>456</td>
                <td>87654-321</td>
                <td>RJ</td>
                <td>20</td>
                <td>15/06/2023</td>
              </tr>
              <tr>
                <td>11223</td>
                <td>564738291</td>
                <td>Entrega Econômica</td>
                <td>Ana Clara</td>
                <td>100.00</td>
                <td>1</td>
                <td>3</td>
                <td>Vapt</td>
                <td>Felipe Costa</td>
                <td>789</td>
                <td>13579-246</td>
                <td>MG</td>
                <td>15</td>
                <td>20/06/2023</td>
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
  <script src="../../../scripts/script.js"></script>
  <script src="../../../scripts/filter.js"></script>

  <script src="../../../scripts/tables.js"></script>
  <script src="../../../lib/datables/dataTables.js"></script>
</body>

</html>