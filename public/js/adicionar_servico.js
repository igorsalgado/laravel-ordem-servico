document.addEventListener('DOMContentLoaded', function () {
    var servicoSelect = document.getElementById('servico_select');
    var servicosBody = document.getElementById('servicos_body');
    var valorTotal = document.getElementById('valor_total');

    servicoSelect.addEventListener('change', function() {
        var selectedOption = servicoSelect.options[servicoSelect.selectedIndex];
        var servicoId = selectedOption.value;
        var servicoDescricao = selectedOption.textContent;
        var servicoValor = parseInt(selectedOption.dataset.valor); // Convertendo para número

        if (!servicoId) {
            return;
        }

        var newRow = servicosBody.insertRow();
        newRow.dataset.servicoId = servicoId;
        newRow.dataset.valor = servicoValor;

        var cell = newRow.insertCell(0);
        cell.classList.add('border', 'border-gray-300', 'p-2');
        cell.textContent = servicoDescricao;

        var removerButton = document.createElement('button');
        removerButton.type = 'button';
        removerButton.classList.add('remover_servico', 'bg-red-500', 'hover:bg-red-700', 'text-white', 'font-bold', 'py-2', 'px-4', 'rounded', 'ml-2');
        removerButton.textContent = 'X';
        removerButton.addEventListener('click', function() {
            newRow.remove();
            calcularValorTotal();
        });
        cell.appendChild(removerButton);

        // Limpar o select após adicionar o serviço à tabela
        servicoSelect.selectedIndex = 0;

        calcularValorTotal();
    });

    function calcularValorTotal() {
        var total = 0;
        var rows = servicosBody.querySelectorAll('tr');
        rows.forEach(function(row) {
            var valor = parseInt(row.dataset.valor);
            if (!isNaN(valor)) {
                total += valor;
            }
        });
        valorTotal.value = total.toFixed(2);
    }

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remover_servico')) {
            var row = event.target.parentElement.parentElement;
            row.remove();
            calcularValorTotal();
        }
    });
});
