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
                    <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="modelo_veiculo" class="block text-sm font-medium text-white">Modelo</label>
                            <input type="text" name="modelo_veiculo" id="modelo_veiculo"
                                class="block w-full mt-1 text-gray-900" value="{{ $veiculo->modelo_veiculo }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="placa_veiculo" class="block text-sm font-medium text-white">Placa</label>
                            <input type="text" name="placa_veiculo" id="placa_veiculo"
                                class="block w-full mt-1 text-gray-900" value="{{ $veiculo->placa_veiculo }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="ano_veiculo" class="block text-sm font-medium text-white">Ano</label>
                            <input type="text" name="ano_veiculo" id="ano_veiculo"
                                class="block w-full mt-1 text-gray-900" value="{{ $veiculo->ano_veiculo }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="cor_veiculo" class="block text-sm font-medium text-white">Cor</label>
                            <input type="text" name="cor_veiculo" id="cor_veiculo"
                                class="block w-full mt-1 text-gray-900" value="{{ $veiculo->cor_veiculo }}" required>
                        </div>
                        <button type="submit"
                            class="inline-block px-3 py-1 font-bold text-white bg-green-500 rounded hover:bg-green-700">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
