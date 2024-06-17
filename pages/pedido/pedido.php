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
  <link rel="stylesheet" href="../../lib/datables/dataTables.css" />
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
            <a href="#" class="div collapse-toggle" data-toggle="collapse" data-target="#cadastrosSubmenu" aria-expanded="false" aria-controls="cadastrosSubmenu">Cadastros</a>
            <img class="img collapse-icon" src="../../img/feather-icons-chevron-down-1.svg" id="cadastros-icon" />
          </div>
          <div class="collapse" id="cadastrosSubmenu">
            <div class="sub-menu">
              <a class="div" href="#" data-toggle="modal" data-target="#createUserModal">Alterar Senha</a>
              <a class="div" href="/vapt/pages/cadastro/cadastro.php">Usuário</a>
            </div>
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
      <div class="container-fluid  body">
        <div class="text-wrapper-2">Novo Pedido</div>
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
        <div class="title-registro"><span class="text-title-register">Pedidos Registrados</span></div>
        <div class="table">
          <div class="frame-2">
            <button class="button-exportar">EXPORTAR EXCEL</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="example" class="display" style="width:100%">
            <thead class="cabecalho">
              <tr>
                <th>PEDIDO</th>
                <th>NF-E</th>
                <th>STATUS</th>
                <th>DATA</th>
                <th>UF</th>
                <th>CIDADE</th>
                <th>ENDEREÇO</th>
                <th>NOME</th>
                <th>QTD.</th>
                <th>QTD.</th>
              </tr>
            </thead>
            <tbody clas="">
              <tr>
                <td>12345</td>
                <td>67890</td>
                <td>Entregue</td>
                <td>2024-06-01</td>
                <td>SP</td>
                <td>São Paulo</td>
                <td>Rua das Flores, 123</td>
                <td>João Silva</td>
                <td>10</td>
                <td>10</td>
              </tr>
              <tr>
                <td>23456</td>
                <td>78901</td>
                <td>Pendente</td>
                <td>2024-06-05</td>
                <td>RJ</td>
                <td>Rio de Janeiro</td>
                <td>Avenida Atlântica, 456</td>
                <td>Maria Oliveira</td>
                <td>5</td>
                <td>5</td>
              </tr>
              <tr>
                <td>34567</td>
                <td>89012</td>
                <td>Cancelado</td>
                <td>2024-06-10</td>
                <td>MG</td>
                <td>Belo Horizonte</td>
                <td>Rua da Paz, 789</td>
                <td>Carlos Pereira</td>
                <td>8</td>
                <td>8</td>
              </tr>
              <tr>
                <td>45678</td>
                <td>90123</td>
                <td>Entregue</td>
                <td>2024-06-15</td>
                <td>BA</td>
                <td>Salvador</td>
                <td>Ladeira da Barra, 321</td>
                <td>Ana Costa</td>
                <td>15</td>
                <td>15</td>
              </tr>
              <tr>
                <td>56789</td>
                <td>01234</td>
                <td>Pendente</td>
                <td>2024-06-20</td>
                <td>RS</td>
                <td>Porto Alegre</td>
                <td>Av. Ipiranga, 654</td>
                <td>Paulo Santos</td>
                <td>20</td>
                <td>20</td>
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

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../../scripts/script.js"></script>
  <script src="../../scripts/input-file.js"></script>

  <script src="../../scripts/tables.js"></script>
  <script src="../../lib/datables/dataTables.js"></script>
</body>

</html>