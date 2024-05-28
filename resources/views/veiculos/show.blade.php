<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Veículo: ') }} {{ $veiculo->modelo_veiculo }}
            {{ __('Cliente: ') }} {{ $veiculo->cliente->nome_cliente }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Informações do veiculo</h3>
                    <div class="mt-4">
                        <p><strong>Nome:</strong> {{ $veiculo->nome_veiculo }}</p>
                        <p><strong>Email:</strong> {{ $veiculo->email_veiculo }}</p>
                        <p><strong>Telefone:</strong> {{ $veiculo->telefone_veiculo }}</p>
                        <p><strong>Logradouro:</strong> {{ $veiculo->logradouro_veiculo }}</p>
                        <p><strong>Número:</strong> {{ $veiculo->numero_endereco_veiculo }}</p>
                        <p><strong>Bairro:</strong> {{ $veiculo->bairro_veiculo }}</p>
                        <p><strong>Cidade:</strong> {{ $veiculo->cidade_veiculo }}</p>
                        <p><strong>Estado:</strong> {{ $veiculo->estado_veiculo }}</p>
                        <p><strong>CEP:</strong> {{ $veiculo->cep_veiculo }}</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('veiculos.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded inline-block mb-1 sm:mb-0">Voltar</a>
                        <a href="{{ route('veiculos.edit', $veiculo->id) }}"
                            class= "bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded inline-block mb-1 sm:mb-0 background">Editar</a>
                        <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded inline-block">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
