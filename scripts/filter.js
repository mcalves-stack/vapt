$(document).ready(function() {
  // Inicializa o datepicker
  $('.datepicker').datepicker({
    autoclose: true,
    orientation: "bottom auto",
    language: 'pt-BR',
    format: 'dd/mm/yyyy'
  });

  $('.icon-password-eyes').on('click', function() {
    var input = $(this).prev('input');
    var icon = $(this);
    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      icon.attr('src', '../../img/eyes-olhoaberto.svg'); 
    } else {
      input.attr('type', 'password');
      icon.attr('src', '../../img/visible-fechado.png'); 
    }
  });

  $('.datepicker').on('show', function() {
    $('.datepicker-dropdown').css({
      'margin-top': '10px',
      'margin-left': '3px'
    });
  });

  $('.datepicker-button').click(function() {
    $(this).siblings('.datepicker').datepicker('show');
  });

  function convertDate(dateStr) {
    const [day, month, year] = dateStr.split('/');
    return new Date(`${year}-${month}-${day}`);
  }

  function filterTable() {
    const dateStart = $('#date-start').val();
    const dateEnd = $('#date-end').val();
    const nfInput = $('#nf-input').val().toLowerCase();
    const pedidoInput = $('#pedido-input').val().toLowerCase();

    $('#pedidosTable tbody tr').each(function() {
      const row = $(this);
      const dateCell = row.find('td:nth-child(14)').text().trim();
      const nfCell = row.find('td:nth-child(2)').text().toLowerCase();
      const pedidoCell = row.find('td:nth-child(1)').text().toLowerCase();

      let showRow = true;

      if (dateStart && !isDateInRange(dateStart, dateEnd, dateCell)) {
        showRow = false;
      }

      if (nfInput && !nfCell.includes(nfInput)) {
        showRow = false;
      }

      if (pedidoInput && !pedidoCell.includes(pedidoInput)) {
        showRow = false;
      }

      row.toggle(showRow);
    });
  }

  function isDateInRange(startDate, endDate, date) {
    const start = convertDate(startDate);
    const end = endDate ? convertDate(endDate) : new Date();
    const checkDate = convertDate(date);
    return checkDate >= start && checkDate <= end;
  }

  $('#apply-filters').on('click', function() {
    filterTable();
  });

  $('#reset-filters').on('click', function() {
    $('#date-start').val('');
    $('#date-end').val('');
    $('#nf-input').val('');
    $('#pedido-input').val('');
    filterTable();
  });

  function fetchData() {
    $.getJSON('dados.php', function(data) {
      let pedidosHtml = '';
      data.pedidos.forEach(pedido => {
        pedidosHtml += `
          <tr class="linha-3" data-toggle="modal" data-target="#detailsModal" data-pedido='${JSON.stringify(pedido)}'>
            <td class="element-wrapper">${pedido.data_hora.replace(' ', '<br />')}</td>
            <td>${pedido.pedido}</td>
            <td>${pedido.nf_e}</td>
            <td>${pedido.status}</td>
            <td>${pedido.prazo}</td>
            <td>${pedido.qtd}</td>
            <td>${pedido.uf}</td>
            <td>${pedido.cidade}</td>
            <td id="endereco">${pedido.endereco}</td>
            <td id="nome">${pedido.nome}</td>
            <td id="telefone">${pedido.telefone}</td>
          </tr>
        `;
      });
      $('#pedidosTable tbody').html(pedidosHtml);
    });
  }
  fetchData();

  function searchTable() {
    const searchTerm = $('#searchInput').val().toLowerCase();
    $('#pedidosTable tbody tr').each(function() {
      const row = $(this);
      const rowText = row.text().toLowerCase();
      row.toggle(rowText.indexOf(searchTerm) !== -1);
    });
  }

  // buscar na tabela
  $('#searchInput').on('keyup', function() {
    searchTable();
  });

  // exportar a tabela para Excel
  function exportTableToExcel(tableID, filename = '') {
    const tableSelect = document.getElementById(tableID);
    const worksheet = XLSX.utils.table_to_sheet(tableSelect);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");

    filename = filename ? filename + '.xlsx' : 'excel_data.xlsx';
    XLSX.writeFile(workbook, filename);
  }

  //  exportar a tabela ao clicar no botão
  $('.button-exportar').on('click', function() {
    exportTableToExcel('pedidosTable', 'Relatorios');
  });

  $('#alterar-senha-link').on('click', function(event) {
    event.preventDefault();
    $('#modal-container').load('alterarsenha.php', function() {
      $('#alterarSenhaModal').modal('show');
    });
  });  
});