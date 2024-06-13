$(document).ready(function () {
  $('.collapse-toggle').each(function() {
    var target = $(this).data('target');
    var icon = $(this).next('.collapse-icon');
    
    $(target).on('show.bs.collapse', function () {
      icon.addClass('rotate');
    }).on('hide.bs.collapse', function () {
      icon.removeClass('rotate');
    });
  });

  function filterTableByStatus(status) {
    $("#pedidos-tbody tr").each(function () {
      var row = $(this);
      var pedidoStatus = row.find("td:nth-child(4)").text();
      if (status === "TODOS" || pedidoStatus === status) {
        row.show();
      } else {
        row.hide();
      }
    });
  }

  $(".pedido-btn").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      filterTableByStatus("TODOS");
    } else {
      $(".pedido-btn").removeClass("active");
      $(this).addClass("active");
      var status = $(this).find(".title-4").text().toUpperCase();
      filterTableByStatus(status);
    }
  });

  $(".pedido-btn").click(function () {
    var titulo = $(this).find(".title-4").text().toLowerCase();
    $("#nome-pedido-titulo").text(toTitleCase(titulo));
  });

  function toTitleCase(str) {
    return str.replace(/\w\S*/g, function (txt) {
      return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
  }

  $.getJSON("dados.php", function (data) {
    let pedidosHtml = "";
    data.pedidos.forEach((pedido) => {
      pedidosHtml += `
        <tr class="linha-3" data-toggle="modal" data-target="#detailsModal" data-pedido='${JSON.stringify(
          pedido
        )}'>
          <td class="element-wrapper">${pedido.data_hora.replace(
            " ",
            "<br />"
          )}</td>
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
    $("#pedidos-tbody").html(pedidosHtml);

    var ctx = document.getElementById("salesChart").getContext("2d");
    var salesChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: data.vendas.labels,
        datasets: [
          {
            label: "Resumo semestral de vendas",
            data: data.vendas.data,
            backgroundColor: "rgba(153, 102, 255, 0.6)",
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 100,
              font: {
                size: 14,
                style: "normal",
                weight: "bold",
              },
              color: "#3E2255",
            },
          },
          x: {
            ticks: {
              font: {
                size: 14,
                style: "normal",
                weight: "bold",
              },
              color: "#3E2255",
            },
          },
        },
        plugins: {
          legend: {
            labels: {
              display: true,
              font: {
                size: 20,
                style: "italic",
                weight: "bold",
              },
              usePointStyle: true,
              boxWidth: 0,
              color: "#3E2255",
            },
          },
        },
      },
    });
  });

  $("#detailsModal").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var pedido = button.data("pedido");
    var modal = $(this);
    modal.find(".pedido-id").text("Pedido " + pedido.pedido);
    modal.find("#modal-nf-e").text(pedido.nf_e);
    modal.find("#modal-cliente").text("CLIENTE 01");
    modal.find("#modal-valor").text("R$1.000,00");
    modal.find("#modal-tipo-entrega").text("VAPT HOJE");
    modal.find("#modal-endereco").text(pedido.endereco);
    modal.find("#modal-importado").text("16/05/2024 03:42:06");
    modal.find("#modal-aceite").text("17/05/2024 03:43:05");
    modal.find("#modal-picking").text("19/05/2024 07:15:50");
    modal.find("#modal-conferencia").text("22/05/2024 20:10:51");
    modal.find("#modal-expedicao").text("XX/XX/XXXX");
    modal.find("#modal-entrega").text("XX/XX/XXXX");
    modal.find("#modal-lat-lon").text("325485/1526546");
    modal.find("#modal-recebedor").text(pedido.nome);
    modal.find("#modal-documento").text("254.457.703-57");
  });

  document.addEventListener("DOMContentLoaded", function() {
    const sidebarButtons = document.querySelectorAll(".div-2, .menu-button-group");
  
    sidebarButtons.forEach((button) => {
      button.addEventListener("click", function() {
        // Remove a classe 'active' de todos os botões
        sidebarButtons.forEach((btn) => btn.classList.remove("active"));
        // Adiciona a classe 'active' ao botão clicado
        this.classList.add("active");
      });
    });
  });

  const menuButton = document.querySelector(".menu-button-single");
  const sideBarMenu = document.querySelector(".side-bar-menu");
  const engrenagemButton = document.querySelector(".engrenagem-icon");
  const dashboardButton = document.querySelector("#dashboard-button");
  const pedidoButton = document.querySelector("#pedido-button");

  menuButton.addEventListener("click", function () {
    sideBarMenu.classList.toggle("collapsed");
  });

  engrenagemButton.addEventListener("click", function () {
    sideBarMenu.classList.remove("collapsed");
  });

  dashboardButton.addEventListener("click", function () {
    dashboardButton.classList.add("active");
    pedidoButton.classList.remove("active");
  });

  pedidoButton.addEventListener("click", function () {
    pedidoButton.classList.add("active");
    dashboardButton.classList.remove("active");
  });

  if (window.location.pathname.includes("dashboard.php")) {
    dashboardButton.classList.add("active");
  } else if (window.location.pathname.includes("pedido.php")) {
    pedidoButton.classList.add("active");
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-submenu").forEach(function (icon) {
      icon.addEventListener("click", function () {
        const parentDiv = this.closest(".div-2");
        parentDiv.classList.toggle("active");
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
      document
        .getElementById("cadastros-toggle")
        .addEventListener("click", function (event) {
          event.preventDefault();
          document
            .getElementById("cadastros-submenu")
            .classList.toggle("visible");
        });
    });

    document.querySelectorAll(".submenu-item").forEach(function (item) {
      item.addEventListener("click", function () {
        const targetModal = this.getAttribute("data-target");
        $(targetModal).modal("show");
      });
    });
  });

  $(document).ready(function () {
    $("#createUserModal").on("show.bs.modal", function () {
      $(this).find(".modal-title").text("Editar Usuário");
      $(this).find(".modal-body").show();
    });

    $("#createUserModal").on("hide.bs.modal", function () {
      $(this).find(".modal-title").text("Adicionar Usuário");
      $(this).find(".modal-body").hide();
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const addPageButtons = document.querySelectorAll('.btn-addpage');
  
    addPageButtons.forEach(button => {
      button.addEventListener('click', function () {
        const userId = this.getAttribute('data-id');
        const userName = this.getAttribute('data-nome');
  
        const modal = document.getElementById('EditUserModal');
        const modalUserId = modal.querySelector('#modalUserId');
        const modalUserName = modal.querySelector('#modalUserName');
  
        modalUserId.value = userId;
        modalUserName.value = userName;
      });
    });
  });

});
