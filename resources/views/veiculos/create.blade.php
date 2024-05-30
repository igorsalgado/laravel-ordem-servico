<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Adicionar Veículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('veiculos.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="cliente_id" class="block text-sm font-medium text-white">Cliente</label>
                            <select name="cliente_id" id="cliente_id" class="mt-1 block w-full text-gray-900" required>
                                <option value="">Selecione um Cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nome_cliente }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="modelo_veiculo" class="block text-sm font-medium text-white">Modelo</label>
                            <input type="text" name="modelo_veiculo" id="modelo_veiculo"
                                class="mt-1 block w-full text-gray-900" required>
                        </div>

                        <div class="mb-4">
                            <label for="placa_veiculo" class="block text-sm font-medium text-white">Placa</label>
                            <input type="text" name="placa_veiculo" id="placa_veiculo"
                                class="mt-1 block w-full text-gray-900" required>
                        </div>

                        <div class="mb-4">
                            <label for="ano_veiculo" class="block text-sm font-medium text-white">Ano</label>
                            <input type="text" name="ano_veiculo" id="ano_veiculo"
                                class="mt-1 block w-full text-gray-900" required>
                        </div>

                        <div class="mb-4">
                            <label for="cor_veiculo" class="block text-sm font-medium text-white">Cor</label>
                            <input type="text" name="cor_veiculo" id="cor_veiculo"
                                class="mt-1 block w-full text-gray-900" required>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Adicionar Veículo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
