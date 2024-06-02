<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ordem de Serviço - {{ '00' . $ordem->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
        }

        .info {
            width: 100%;
            margin-bottom: 20px;
        }

        .info .left {
            float: left;
            width: 50%;
        }

        .info .right {
            float: right;
            width: 50%;
        }

        .clear {
            clear: both;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Ordem de Serviço</h2>
        <p><strong>Número:</strong> {{ '00' . $ordem->id }}</p>
    </div>
    <div class="info">
        <div class="left">
            <p><strong>Cliente:</strong> {{ $ordem->cliente->nome_cliente }}</p>
            <p><strong>Telefone:</strong> {{ $ordem->cliente->telefone_cliente }}</p>
        </div>
        <div class="right">
            <p><strong>Veículo:</strong> {{ $ordem->veiculo->modelo_veiculo }} | {{ $ordem->veiculo->placa_veiculo }}
            </p>
            <p><strong>Data de Criação:</strong> {{ \Carbon\Carbon::parse($ordem->data_criacao)->format('d/m/Y') }}</p>
        </div>
        <div class="clear"></div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Valor (R$)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordem->servicos as $servico)
                <tr>
                    <td>{{ $servico->descricao }}</td>
                    <td>{{ number_format($servico->valor, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="total">
        <p><strong>Valor Total:</strong> R$ {{ number_format($ordem->valor_total, 2, ',', '.') }}</p>
    </div>
</body>

</html>
