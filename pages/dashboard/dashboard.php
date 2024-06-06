<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Vapt</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../globals.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="dashboard-pedidos">
    <div class="page">
    <div class="side-bar-menu">
          <div class="logo"><img class="logo-branco" src="../../img/logo-branco-1.png" /></div>
          <div class="line-sidebar"></div>
          <div class="section-painel">
            <div class="title"><div class="text-wrapper">PAINEL</div></div>
            <div class="menu-button-group active">
              <img class="img" src="../../img/feather-icons-settings-7.svg" />
              <a class="div">Dashboard</a>
            </div>
            <div class="title"><div class="text-wrapper">APLICAÇÃO</div></div>
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
            <a class="title"><div class="text-wrapper">RELATÓRIOS</div></a>
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
                <img class="img" src="../../img/feather-icons-alert-triangle-1.svg" />
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
                <button class="datepicker-button"><img class="caret-down" src="../../img/caretdown-2.svg" /></button>
              </div>
            </div>
            <div class="input">
              <div class="text-wrapper-9">Data fim:</div>
              <div class="select">
                <input class="select-wrapper datepicker" id="date-end" type="text" placeholder="DD/MM/AA">
                <button class="datepicker-button"><img class="caret-down" src="../../img/caretdown-2.svg" /></button>
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
              <button class="button-3"><img class="img-2" src="../../img/feather-icons-rotate-ccw-3.svg" /></button>
              <button class="button-4"><img class="img-2" src="../../img/feather-icons-search-1.svg" /></button>
            </div>
          </div>
        </div>
        <div class="dashboard-pedidos">
          <div class="text-pedidos" id="nome-pedido-titulo">Pedidos Enviados</div>
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
                  <th id="endereco-head">ENDEREÇO</th>
                  <th id="nome-head">NOME</th>
                  <th id="tel-head">TELEFONE</th>
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
  <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-body p-5">
          <div class="d-flex flex-row justify-content-between">
            <h2 class="pedido-id">Pedido 001</h2>
            <div class="div-rota d-flex justify-content-center"><h1 class="text-wrapper">Rota de Entrega</h1></div>
          </div>
          <div class="d-flex flex-row pt-4">
            <div>
              <p class="p-modal"><strong>NF-E:</strong><span id="modal-span">00011</span></p>
              <p class="p-modal"><strong>Valor:</strong> <span id="modal-span">R$1.000,00</span></p>
              <p class="p-modal"><strong>Tipo de Entrega:</strong><span id="modal-span">VAPT HOJE</span></p>
              <p class="p-modal"><strong>Endereço:</strong><span id="modal-span">50829 Rosario Valleys Suite 955</span></p>
            </div>
            <div>
              <p class="p-modal"><strong>Cliente:</strong><span id="modal-span">Cliente 01</span></p>
              <p class="p-modal"><strong>Quantidade:</strong><span id="modal-span"></span></p>
              <p class="p-modal"><strong>Entrega prevista:</strong><span id="modal-span">xx/xx/xxxx</spa></p>
            </div>
          </div>
          <div class="custom-line"></div>
          <p class="p-modal"><strong>Importado:</strong> <span id="modal-span">16/05/2024 03:42:06</span></p>
          <p class="p-modal"><strong>Aceite:</strong> <span id="modal-span">17/05/2024 03:43:05</span></p>
          <p class="p-modal"><strong>Picking:</strong> <span id="modal-span">19/05/2024 07:15:50</span></p>
          <p class="p-modal"><strong>Conferencia::</strong><span id="modal-span">22/05/2024 20:10:51</span></p>
          <p class="p-modal"><strong>expedição:</strong><span id="modal-span">xxxxxxxx</span></p>
          <p class="p-modal"><strong>entrega:</strong><span id="modal-span">xx/xx/xxxx</span></p>
          <div class="custom-line"></div>
          <div class="div-title-map"><img src="../../img/map-pin.svg" class="map-pin" alt="map pin"><p class="p-map-modal"><strong class="strong-pin">Latitude / Longitude:</strong><span>3254851/526546</span></p></div>
          <div class="map"></div>
          <p class="p-modal"><strong>Recebedor:</strong><span id="modal-span">Darrin Rempel</span></p>
          <p class="p-modal"><strong>Documento:</strong><span id="modal-span">254.457.703-57</span></p>
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
</body>

</html>