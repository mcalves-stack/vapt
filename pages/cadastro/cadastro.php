<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastros de Usuários</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>

  <link rel="stylesheet" href="../../globals.css" />
  <link rel="stylesheet" href="cadastro.css" />
</head>

<body>
  <div class="wrapper">
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
        <div class="div-2 active-b">
          <img class="img" src="../../img/feather-icons-file-1.svg" />
          <a href="#" class="div collapse-toggle" data-toggle="collapse" data-target="#cadastrosSubmenu" aria-expanded="false" aria-controls="cadastrosSubmenu">Cadastros</a>
          <img class="img collapse-icon" src="../../img/feather-icons-chevron-down-1.svg" id="cadastros-icon" />
        </div>
        <div class="collapse" id="cadastrosSubmenu">
          <div class="sub-menu">
            <a class="div" href="#" data-toggle="modal" data-target="#alterarSenhaModal">Alterar Senha</a>
            <a class="div" href="/vapt/pages/cadastro/cadastro.php">Usuário</a>
          </div>
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
    <div class="main p-4">
      <div class="main p-4">
        <h1 id="user-cadastro">Cadastro de Usuários</h1>
        <div class="table">
          <div class="excel-input">
            <div class="buttons">
              <button class="button-criaruser" data-toggle="modal" data-target="#createUserModal">CRIAR USUÁRIO</button>
              <button class="button-exportar">EXPORTAR EXCEL</button>
            </div>
            <div class="input-3">
              <div class="select">
                <input placeholder="Digite aqui" class="select-wrapper">
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="mt-2" id="pedidosTable">
              <thead class="cabecalho">
                <tr>
                  <th>ID</th>
                  <th>NOME</th>
                  <th>EMAIL</th>
                  <th>EMPRESA</th>
                  <th>ADICIONAR PAGES</th>
                </tr>
              </thead>
              <tbody id="table-body">
              </tbody>
            </table>
            <div class="m-1 mt-4 div-radape">
              <div class="text-rodape">Mostrando de <span id="start-record">1</span> até <span id="end-record">10</span> de <span id="total-records">0</span> registros</div>
              <ul class="pagination-controls pagination">
                <li class="page-item"><a href="#" class="page-link" id="previous-page">Anterior</a></li>
                <li class="page-item active" id="page-1"><a href="#" class="page-link">1</a></li>
                <li class="page-item" id="page-2"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link" id="next-page">Seguinte</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="alterarSenhaModal" tabindex="-1" role="dialog" aria-labelledby="alterarSenhaModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="alterarSenhaModalLabel">Alterar Senha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="senha-atual">Senha Atual</label>
                <div class="div-icon"><img class="icon" src="../../img/password.svg" alt=""></div>
                <input type="password" class="form-control" id="senha-atual" placeholder="Digite sua senha atual">
                <img class="icon-password-eyes" src="../../img/visible-fechado.svg" alt="">
              </div>
              <div class="form-group">
                <label for="nova-senha">Nova Senha</label>
                <div class="div-icon"><img class="icon" src="../../img/password.svg" alt=""></div>
                <input type="password" class="form-control" id="nova-senha" placeholder="Digite sua nova senha">
                <img class="icon-password-eyes" src="../../img/visible-fechado.svg" alt="">
              </div>
              <div class="form-group">
                <label for="repita-nova-senha">Repita a Nova Senha</label>
                <div class="div-icon"><img class="icon" src="../../img/password.svg" alt=""></div>
                <input type="password" class="form-control" id="repita-nova-senha" placeholder="Repita a nova senha">
                <img class="icon-password-eyes" src="../../img/visible-fechado.svg" alt="">
              </div>
              <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="createUserModalLabel">Criar Usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nome">Nome</label>
                <div class="div-icon"><img class="icon" src="../../img/account-icon.svg" alt=""></div>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <div class="div-icon"><img class="icon" src="../../img/email-icon.svg" alt=""></div>
                <input type="email" class="form-control" id="email" placeholder="Seu email">
              </div>
              <div class="form-group">
                <label for="cliente">Cliente</label>
                <div class="div-icon"><img class="icon" src="../../img/client-profile.svg" alt=""></div>
                <select class="form-control" name="" id="">
                  <option value="" class="selectinput">Atribua planta</option>
                  <option value="">25.098.466/0001-00-CENTRO DE TECNOLOGIA ELEMENTS</option>
                </select>
              </div>
              <div class="form-group">
                <label for="senha">Senha</label>
                <div class="div-icon">
                  <img class="icon" src="../../img/password.svg" alt="">
                </div>
                <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                <img class="icon-password-eyes" src="../../img/visible-fechado.svg" alt="">
              </div>
              <div class="form-group">
                <label for="repita-senha">Repita a Senha</label>
                <div class="div-icon"><img class="icon" src="../../img/password.svg" alt=""></div>
                <input type="password" class="form-control" id="repita-senha" placeholder="Repita a senha">
                <img class="icon-password-eyes" src="../../img/visible-fechado.svg" alt="">
              </div>
              <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade editModal" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-contented">
          <div class="modal-body">
            <h4 class="text-center header-modal">Permissões de Navegação</h4>
            <form class="mt-3">
              <div class="container">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" aria-disabled="false" class="form-label">ID</label>
                      <input type="email" class="form-control" value="19" id="exampleFormControlInput1" disabled>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nome</label>
                      <input type="email" class="form-control" value="Erik vapt" id="exampleFormControlInput1" placeholder="Digite seu nome" disabled>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Add páginas</label>
                      <select class="form-control" aria-label="Default select example">
                        <option selected>Adicionar página</option>
                        <option value="1">Alterar Senha</option>
                        <option value="2">Cadastro Usuario</option>
                        <option value="3">Pedido Novo</option>
                        <option value="3">Pedido Detalhe</option>
                        <option value="3">Reversa Pendente de Aprovação</option>
                        <option value="3">Reversa Manual Novo</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table table-mt">
                <div class="table-responsive">
                  <table class="mt-2 tables1">
                    <thead class="cabecalho">
                      <tr>
                        <th>Usuario</th>
                        <th>Página</th>
                        <th>Deletar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <td>45</td>
                      <td>Alterar Senha</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-addpage btn-sm">
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                      </td>
                      </tr>
                      <td>45</td>
                      <td>Usuario</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-addpage btn-sm">
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                      </tr>
                      <td>45</td>
                      <td>Novo</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-addpage btn-sm">
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                      </tr>
                      <td>45</td>
                      <td>Novo</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-addpage btn-sm">
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                      </tr>
                      <td>45</td>
                      <td>Pendente Aprovação</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-addpage btn-sm">
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                      <tr>
                        <td>45</td>
                        <td>Novo</td>
                        <td>
                          <button type="button" class="btn btn-danger btn-addpage btn-sm">
                            <i class="bi bi-trash"></i>
                          </button>
                        </td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="modal-container"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../scripts/script.js"></script>
    <script src="../../scripts/pagination.js"></script>
    <script src="../../scripts/filter.js"></script>
</body>

</html>