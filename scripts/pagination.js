$(document).ready(function() {
  const data = [
    { id: 1, nome: 'Erik vapt', email: 'erikvapt@teste.com', empresa: 'Empresa A' },
    { id: 2, nome: 'Maria Silva', email: 'maria@teste.com', empresa: 'Empresa B' },
    { id: 3, nome: 'João Santos', email: 'joao@teste.com', empresa: 'Empresa C' },
    { id: 4, nome: 'Ana Clara', email: 'ana@teste.com', empresa: 'Empresa D' },
    { id: 5, nome: 'Pedro Lima', email: 'pedro@teste.com', empresa: 'Empresa E' },
    { id: 6, nome: 'Lucas Costa', email: 'lucas@teste.com', empresa: 'Empresa F' },
    { id: 7, nome: 'Juliana Souza', email: 'juliana@teste.com', empresa: 'Empresa G' },
    { id: 8, nome: 'Carlos Pereira', email: 'carlos@teste.com', empresa: 'Empresa H' },
    { id: 9, nome: 'Fernanda Rocha', email: 'fernanda@teste.com', empresa: 'Empresa I' },
    { id: 10, nome: 'Gabriel Almeida', email: 'gabriel@teste.com', empresa: 'Empresa J' },
    { id: 11, nome: 'Patrícia Mendes', email: 'patricia@teste.com', empresa: 'Empresa K' },
    { id: 12, nome: 'Roberto Nunes', email: 'roberto@teste.com', empresa: 'Empresa L' },
  ];

  const rowsPerPage = 5;
  let currentPage = 1;

  function displayTable(page) {
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedData = data.slice(start, end);

    $('#table-body').empty();

    paginatedData.forEach(item => {
      $('#table-body').append(`
        <tr>
          <td>${item.id}</td>
          <td>${item.nome}</td>
          <td>${item.email}</td>
          <td>${item.empresa}</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#EditUserModal" class="btn btn-warning btn-addpage">
              <i class="fas fa-plus"></i>
            </button>
          </td>
        </tr>
      `);
    });

    $('#start-record').text(start + 1);
    $('#end-record').text(end > data.length ? data.length : end);
    $('#total-records').text(data.length);

    $('.page-item').removeClass('active');
    $(`#page-${page}`).addClass('active');
  }

  displayTable(currentPage);

  $('#previous-page').on('click', function(event) {
    event.preventDefault();
    if (currentPage > 1) {
      currentPage--;
      displayTable(currentPage);
    }
  });

  $('#next-page').on('click', function(event) {
    event.preventDefault();
    if (currentPage * rowsPerPage < data.length) {
      currentPage++;
      displayTable(currentPage);
    }
  });

  $('.page-link').on('click', function(event) {
    event.preventDefault();
    const page = parseInt($(this).text());
    if (page !== currentPage) {
      currentPage = page;
      displayTable(currentPage);
    }
  });

});