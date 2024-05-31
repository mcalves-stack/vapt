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

$.getJSON('dados.php', function(data) {
  let pedidosHtml = '';
  data.pedidos.forEach(pedido => {
    pedidosHtml += `
      <tr class="linha-3">
        <td class="element-wrapper">${pedido.data_hora.replace(' ', '<br />')}</td>
        <td>${pedido.pedido}</td>
        <td>${pedido.nf_e}</td>
        <td>${pedido.status}</td>
        <td>${pedido.prazo}</td>
        <td>${pedido.qtd}</td>
        <td>${pedido.uf}</td>
        <td>${pedido.cidade}</td>
        <td>${pedido.endereco}</td>
        <td>${pedido.nome}</td>
        <td>${pedido.telefone}</td>
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