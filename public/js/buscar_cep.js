document.getElementById('cep_cliente').addEventListener('blur', function() {
    var cep = this.value.replace(/\D/g, '');
    if (cep.length === 8) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                if (!data.erro) {
                    document.getElementById('logradouro_cliente').value = data.logradouro;
                    document.getElementById('bairro_cliente').value = data.bairro;
                    document.getElementById('cidade_cliente').value = data.localidade;
                    document.getElementById('estado_cliente').value = data.uf;
                } else {
                    alert('CEP não encontrado.');
                }
            })
            .catch(error => console.error('Erro ao buscar o CEP:', error));
    } else {
        alert('CEP inválido.');
    }
});
