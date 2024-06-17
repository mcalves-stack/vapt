<?php
header('Content-Type: application/json');

$dadosPedidos = [
    [
        "data_hora" => "17/05/24 11:54:25",
        "pedido" => "011",
        "nf_e" => "00056",
        "status" => "PEDIDOS ENVIADOS",
        "prazo" => "20/06/2024",
        "qtd" => "1.00",
        "uf" => "SP",
        "cidade" => "SAO PAULO",
        "endereco" => "50829 Rosario Valleys Suite 955",
        "nome" => "ROBIN WEST",
        "telefone" => "(16) 93065-3330"
    ],
    [
        "data_hora" => "05/04/24 11:53:25",
        "pedido" => "011",
        "nf_e" => "00011",
        "status" => "PEDIDOS EM SEPARAÇÃO",
        "prazo" => "15/06/2024",
        "qtd" => "1.00",
        "uf" => "SP",
        "cidade" => "SAO PAULO",
        "endereco" => "50829 Rosario Valleys Suite 955",
        "nome" => "ROBIN WEST",
        "telefone" => "(16) 93065-3330"
    ],
    [
        "data_hora" => "05/04/24 12:00:00",
        "pedido" => "012",
        "nf_e" => "00012",
        "status" => "PEDIDOS EM ROTA",
        "prazo" => "16/06/2024",
        "qtd" => "2.00",
        "uf" => "SP",
        "cidade" => "SAO PAULO",
        "endereco" => "123 Example St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(11) 98765-4321"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS ACEITOS",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS ENTREGUES",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS EM EXPEDIÇÃO",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS EM EXPEDIÇÃO",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS EM EXPEDIÇÃO",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS EM EXPEDIÇÃO",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS EM EXPEDIÇÃO",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ],
    [
        "data_hora" => "06/04/24 09:30:00",
        "pedido" => "013",
        "nf_e" => "00013",
        "status" => "PEDIDOS EM EXPEDIÇÃO",
        "prazo" => "20/06/2024",
        "qtd" => "3.00",
        "uf" => "RJ",
        "cidade" => "RIO DE JANEIRO",
        "endereco" => "456 Another St",
        "nome" => "ERIK JOHNSON",
        "telefone" => "(21) 12345-6789"
    ]
];

$dadosVendas = [
    "labels" => ["Março", "Abril", "Maio"],
    "data" => [150, 200, 250]
];

$response = [
    "pedidos" => $dadosPedidos,
    "vendas" => $dadosVendas
];

echo json_encode($response);
