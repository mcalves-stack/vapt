<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Vapt</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="dashboard-pedidos">
    <div class="page">
      <div class="side-bar-menu">
        <div class="section-painel">
        </div>
        <div class="logo-2">
        </div>
      </div>
      <div class="body">
        <div class="linha">
          <div class="coluna">
            <div class="card">
              <div>
                <div class="text-wrapper-2">Bem-vindo novamente, Erik!</div>
                <p class="p">
                  Confira os principais indicadores de performance das suas entregas ou navegue pela barra de buscas.
                </p>
              </div>
              <button class="btn btn-warning">PEDIDOS</button>
            </div>
            <div class="linha-2">
              <div class="buttons-2 pedido-btn">
                <div class="title-4">PEDIDOS ENVIADOS</div>
                <div class="element-2">3</div>
              </div>
              <div class="buttons-2 pedido-btn">
                <div class="title-4">PEDIDOS ACEITOS</div>
                <div class="element-2">3</div>
              </div>
              <div class="buttons-2 pedido-btn">
                <div class="title-4">PEDIDOS EM SEPARAÇÃO</div>
                <div class="element-2">3</div>
              </div>
              <div class="buttons-2 pedido-btn">
                <div class="title-4">PEDIDOS EM EXPEDIÇÃO</div>
                <div class="element-2">3</div>
              </div>
              <div class="buttons-2 pedido-btn">
                <div class="title-4">PEDIDOS EM ROTA</div>
                <div class="element-2">3</div>
              </div>
              <div class="buttons-2 pedido-btn">
                <div class="title-4">PEDIDOS ENTREGUES</div>
                <div class="element-2">13</div>
              </div>
            </div>
          </div>
          <div class="coluna-2">
            <div class="linha-banners">
              <div class="banner">
                <img class="img" src="img/feather-icons-alert-triangle-1.svg" />
                <p class="h-pedidos">
                  <span class="span">Há pedidos relacionados, sem estoque,</span>
                  <a href="/" class="text-wrapper-3">verificar agora!</a>
                </p>
              </div>
            </div>
            <div class="bar-graph">
              <canvas id="salesChart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
        <div class="card-2">
          <div class="text-wrapperfilter">Filtros</div>
          <div class="frame-3">
            <div class="input">
              <div class="text-wrapper-9">Data inicio:</div>
              <div class="select">
                <input class="select-wrapper datepicker" id="date-start" type="text" placeholder="DD/MM/AA">
                <button class="datepicker-button"><img class="caret-down" src="img/caretdown-2.svg" /></button>
              </div>
            </div>
            <div class="input">
              <div class="text-wrapper-9">Data fim:</div>
              <div class="select">
                <input class="select-wrapper datepicker" id="date-end" type="text" placeholder="DD/MM/AA">
                <button class="datepicker-button"><img class="caret-down" src="img/caretdown-2.svg" /></button>
              </div>
            </div>
            <div class="input">
              <div class="text-wrapper-9">NF-e:</div>
              <div class="select">
                <input class="select-wrapper" type="text" placeholder="Digite aqui">
                <button class="datepicker-button"></button>
              </div>
            </div>
            <div class="frame-4">
              <button class="button-3"><img class="img-2" src="img/feather-icons-rotate-ccw-3.svg" /></button>
              <button class="button-4"><img class="img-2" src="img/feather-icons-search-1.svg" /></button>
            </div>
          </div>
        </div>
        <div class="dashboard-pedidos">
          <div class="text-pedidos">Pedidos Enviados</div>
          <div class="table-responsive">
            <table class="table tabela">
              <thead class="cabecalho">
                <tr>
                  <th>DATA / HORA</th>
                  <th>PEDIDO</th>
                  <th>NF-E</th>
                  <th>STATUS</th>
                  <th>PRAZO</th>
                  <th>QTD.</th>
                  <th>UF</th>
                  <th>CIDADE</th>
                  <th>ENDEREÇO</th>
                  <th>NOME</th>
                  <th>TELEFONE</th>
                </tr>
              </thead>
              <tbody id="pedidos-tbody">
              </tbody>
            </table>
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
  <script src="script.js"></script>
</body>
</html>
