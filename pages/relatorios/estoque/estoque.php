<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatórios - Estoque</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>

  <link rel="stylesheet" href="../../../globals.css" />
  <link rel="stylesheet" href="../../../lib/datables/dataTables.css" />
  <link rel="stylesheet" href="estoque.css" />
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
          <a href="#" class="div" data-toggle="collapse" data-target="#cadastrosSubmenu" aria-expanded="false" aria-controls="cadastrosSubmenu">Cadastros</a>
          <img class="img toggle-submenu" src="../../../img/feather-icons-chevron-down-1.svg" id="cadastros-icon" />
        </div>
        <div class="collapse" id="cadastrosSubmenu">
          <div class="sub-menu">
            <a class="div" href="#">Alterar Senha</a>
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
          <a href="#" class="div" data-toggle="collapse" data-target="#relatoriosSubmenu" aria-expanded="false" aria-controls="relatoriosSubmenu">Relatórios</a>
          <img class="img toggle-submenu" src="../../../img/feather-icons-chevron-down-1.svg" id="cadastros-icon" />
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
      <h1 id="user-cadastro">Estoque</h1>
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
                <th>SKU</th>
                <th class="descricao-table">Descrição</th>
                <th>Tipo</th>
                <th>EAN</th>
                <th>Estoque</th>
                <th>Piking</th>
                <th>Expedição</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>70001</td>
                <td>Cadeira Gamer Elements Magna | Cor: Silver</td>
                <td>Fulfillment</td>
                <td>7898971359240</td>
                <td>1.00</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>1.00</td>
              </tr>
              <tr>
                <td>70038</td>
                <td>Cadeira de Escritório Elements Astra | Cor: Preta</td>
                <td>Fulfillment</td>
                <td>7898971359035</td>
                <td>388.00</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>388.00</td>
              </tr>
              <tr>
                <td>70039</td>
                <td>Cadeira de Escritório Elements Astra | Cor: Laranja/Branca</td>
                <td>Fulfillment</td>
                <td>7898971359059</td>
                <td>1.00</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>1.00</td>
              </tr>
              <tr>
                <td>70041</td>
                <td>Cadeira de Escritório Elements Astra | Cor: Azul/Branca</td>
                <td>Fulfillment</td>
                <td>7898971359042</td>
                <td>8.00</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>8.00</td>
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