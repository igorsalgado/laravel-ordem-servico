document.getElementById('adicionar_servico').addEventListener('click', function() {
    var servicoSelect = document.getElementById('servico_select');
    var servicoId = servicoSelect.value;
    var servicoDescricao = servicoSelect.options[servicoSelect.selectedIndex].text;
    var servicoValor = parseFloat(servicoSelect.options[servicoSelect.selectedIndex].getAttribute('data-valor'));

    if (!servicoId) return;

    var tabelaServicos = document.getElementById('servicos_body');
    var novaLinha = tabelaServicos.insertRow();
    var cellDescricao = novaLinha.insertCell(0);
    var cellValor = novaLinha.insertCell(1);
    var cellRemover = novaLinha.insertCell(2);

    cellDescricao.innerText = servicoDescricao;
    cellValor.innerText = `R$ ${servicoValor.toFixed(2)}`;
    cellRemover.innerHTML = '<button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded remover_servico">Remover</button>';

    // Adiciona um input hidden para enviar o ID do serviço selecionado
    var inputHidden = document.createElement('input');
    inputHidden.type = 'hidden';
    inputHidden.name = 'servicos[]';
    inputHidden.value = servicoId;
    novaLinha.appendChild(inputHidden);

    atualizarValorTotal();

    document.querySelectorAll('.remover_servico').forEach(button => {
        button.addEventListener('click', function() {
            this.closest('tr').remove();
            atualizarValorTotal();
        });
    });

    // Reseta o select de serviços
    servicoSelect.value = '';
});

function atualizarValorTotal() {
    var valorTotal = 0;
    document.querySelectorAll('#servicos_body tr').forEach(tr => {
        var valorServico = parseFloat(tr.cells[1].innerText.replace('R$', '').trim());
        valorTotal += valorServico;
    });
    document.getElementById('valor_total').value = valorTotal.toFixed(2);
}
