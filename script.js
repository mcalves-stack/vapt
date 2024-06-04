$(document).ready(function() {
  $('.datepicker').datepicker({
    autoclose: true,
    orientation: "bottom auto", 
    language: 'pt-BR'
  });

  $('.datepicker').on('show', function() {
    $('.datepicker-dropdown').css('margin-top', '15px', 'margin-left', '3px');
  });

  $('.datepicker-button').click(function() {
    $(this).siblings('.datepicker').datepicker('show');
  });

  const pedidoButtons = document.querySelectorAll('.pedido-btn');

  pedidoButtons.forEach(button => {
    button.addEventListener('click', function() {
      if (this.classList.contains('active')) {
        this.classList.remove('active', 'disabled');
        this.disabled = false;
      } else {
        pedidoButtons.forEach(btn => {
          btn.classList.remove('active', 'disabled');
          btn.disabled = false;
        });
        this.classList.add('active', 'disabled');
        this.disabled = true;
      }
    });
  });
  
  $('.pedido-btn').click(function() {
    var titulo = $(this).find('.title-4').text().toLowerCase();
    $('#nome-pedido-titulo').text(toTitleCase(titulo));
  });

  function toTitleCase(str) {
    return str.replace(
      /\w\S*/g,
      function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      }
    );
  }

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
    $('#pedidos-tbody').html(pedidosHtml);

    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: data.vendas.labels,
        datasets: [{
          label: 'Resumo semestral de vendas',
          data: data.vendas.data,
          backgroundColor: 'rgba(153, 102, 255, 0.6)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 100,
              font: {
                size: 14,
                style: 'normal',
                weight: 'bold',
              },
              color: '#3E2255'
            }
          },
          x: {
            ticks: {
              font: {
                size: 14,
                style: 'normal',
                weight: 'bold',
              },
              color: '#3E2255'
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
              color: '#3E2255'
            },
          }
        }
      }
    });
  });

  $('#detailsModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget); 
    var pedido = button.data('pedido'); 
    var modal = $(this);    
    modal.find('.pedido-id').text('Pedido ' + pedido.pedido);
    modal.find('#modal-nf-e').text(pedido.nf_e);
    modal.find('#modal-cliente').text('CLIENTE 01'); 
    modal.find('#modal-valor').text('R$1.000,00'); 
    modal.find('#modal-tipo-entrega').text('VAPT HOJE'); 
    modal.find('#modal-endereco').text(pedido.endereco);
    modal.find('#modal-importado').text('16/05/2024 03:42:06');
    modal.find('#modal-aceite').text('17/05/2024 03:43:05'); 
    modal.find('#modal-picking').text('19/05/2024 07:15:50'); 
    modal.find('#modal-conferencia').text('22/05/2024 20:10:51'); 
    modal.find('#modal-expedicao').text('XX/XX/XXXX'); 
    modal.find('#modal-entrega').text('XX/XX/XXXX'); 
    modal.find('#modal-lat-lon').text('325485/1526546');  
    modal.find('#modal-recebedor').text(pedido.nome);
    modal.find('#modal-documento').text('254.457.703-57'); 
  });
});