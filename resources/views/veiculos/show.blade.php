<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Veículo: ') }} {{ $veiculo->modelo_veiculo }}
        </h2>
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Cliente: ') }} {{ $veiculo->cliente->nome_cliente }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Informações do veiculo</h3>
                    <div class="mt-4">
                        <p><strong>Proprietário:</strong> {{ $veiculo->cliente->nome_cliente }}</p>
                        <p><strong>Contato:</strong> {{ $veiculo->cliente->telefone_cliente }}</p>
                        <p><strong>Modelo:</strong> {{ $veiculo->modelo_veiculo }}</p>
                        <p><strong>Placa:</strong> {{ $veiculo->placa_veiculo }}</p>
                        <p><strong>Ano:</strong> {{ $veiculo->ano_veiculo }}</p>
                        <p><strong>Cor:</strong> {{ $veiculo->cor_veiculo }}</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('veiculos.index') }}"
                            class="inline-block px-3 py-1 mb-1 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 sm:mb-0">Voltar</a>
                        <a href="{{ route('veiculos.edit', $veiculo->id) }}"
                            class= "inline-block px-3 py-1 mb-1 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-700 sm:mb-0 background">Editar</a>
                        <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-block px-3 py-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
