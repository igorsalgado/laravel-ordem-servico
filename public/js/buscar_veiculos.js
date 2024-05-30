document.getElementById('cliente_id').addEventListener('change', function() {
    var clienteId = this.value;
    var veiculosDiv = document.getElementById('veiculos_div');
    var selectVeiculos = veiculosDiv.querySelector('select');

    if (clienteId) {
        axios.get('/buscar-veiculos/' + clienteId)
            .then(function(response) {
                selectVeiculos.innerHTML = '<option value="">Selecione um Veículo</option>';
                response.data.forEach(function(veiculo) {
                    var option = document.createElement('option');
                    option.value = veiculo.id;
                    option.text = veiculo.modelo_veiculo;
                    selectVeiculos.appendChild(option);
                });
            })
            .catch(function(error) {
                console.error('Erro ao buscar veículos: ' + error);
            });
    } else {
        selectVeiculos.innerHTML = '<option value="">Selecione um Veículo</option>';
    }
});
