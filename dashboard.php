<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="styleguide.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="dashboard-pedidos">
    <div class="page">
      <div class="side-bar-menu">
        <div class="logo"><img class="logo-branco" src="img/logo-branco-1.png" /></div>
        <div class="divider"><img class="line" src="img/line-4-1.svg" /></div>
        <div class="section-painel">
          <div class="title">
            <div class="text-wrapper">PAINEL</div>
          </div>
          <div class="menu-button-group">
            <img class="img" src="img/feather-icons-settings-7.svg" />
            <div class="div">Dashboard</div>
          </div>
          <div class="title">
            <div class="text-wrapper">APLICAÇÃO</div>
          </div>
        </div>
        <div class="divider"><img class="line" src="img/line-4-1.svg" /></div>
        <div class="logo-2">
          <div class="div-2">
            <img class="img" src="img/feather-icons-settings-8.svg" />
            <div class="div">Configurações</div>
          </div>
          <div class="menu-button-single">
            <img class="img" src="img/feather-icons-chevrons-left-1.svg" />
            <div class="title-2">Esconder Menu</div>
          </div>
        </div>
      </div>
      <div class="body">
        <div class="linha">
          <div class="coluna">
            <div class="card">
              <div class="frame">
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
                  <span class="span">Há pedidos relacionados, sem estoque, </span>
                  <a class="text-wrapper-3">verificar agora!</a>
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
                <input class="select-wrapper" id="nfe" type="text" placeholder="Digite aqui">
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
              <tbody>
                <tr class="linha-3">
                  <td class="element-wrapper">05/04/24<br />11:53:25</td>
                  <td>011</td>
                  <td>00011</td>
                  <td>ENVIADO</td>
                  <td>15/06/2024</td>
                  <td>1.00</td>
                  <td>SP</td>
                  <td>SAO PAULO</td>
                  <td>50829 Rosario Valleys Suite 955</td>
                  <td>ROBIN WEST</td>
                  <td>(16) 93065-3330</td>
                </tr>
                <tr class="linha-3">
                  <td class="element-wrapper">05/04/24<br />11:53:25</td>
                  <td>011</td>
                  <td>00011</td>
                  <td>ENVIADO</td>
                  <td>15/06/2024</td>
                  <td>1.00</td>
                  <td>SP</td>
                  <td>SAO PAULO</td>
                  <td>158 JAST WAYS SUITE 237</td>
                  <td>ROBIN WEST</td>
                  <td>(16) 93065-3330</td>
                </tr>
                <tr class="linha-3">
                  <td class="element-wrapper">05/04/24<br />11:53:25</td>
                  <td>011</td>
                  <td>00011</td>
                  <td>ENVIADO</td>
                  <td>15/06/2024</td>
                  <td>1.00</td>
                  <td>SP</td>
                  <td>SAO PAULO</td>
                  <td>158 JAST WAYS SUITE 237</td>
                  <td>ROBIN WEST</td>
                  <td>(16) 93065-3330</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        language: 'pt-BR'
      });

      $('.datepicker-button').click(function() {
        $(this).siblings('.datepicker').datepicker('show');
      });

      $('.pedido-btn').click(function() {
        $('.pedido-btn').removeClass('active');
        $(this).addClass('active');
      });

      document.addEventListener('DOMContentLoaded', function() {
        const pedidoButtons = document.querySelectorAll('.pedido-btn');

        pedidoButtons.forEach(button => {
          button.addEventListener('click', function() {
            pedidoButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
          });
        });
      });
    });

    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Março', 'Abril', 'Maio'],
        datasets: [{
          label: 'Resumo semestral de vendas',
          data: [0, 200, 400, 600, 800],
          backgroundColor: 'rgba(153, 102, 255, 0.6)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 200,
              font: {
                size: 14,
                style: 'normal',
                weight: 'bold',
              }
            }
          }
        },
        plugins: {
          legend: {
            labels: {
              display: true,
              font: {
                size: 20,
                style: 'italic',
                weight: 'bold',
              },
              usePointStyle: true,
              boxWidth: 0,
            },
          }
        }
      }
    });
  </script>
</body>

</html>
