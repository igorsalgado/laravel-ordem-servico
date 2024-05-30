<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criar Ordem de Serviço') }}
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

                    <form action="{{ route('ordens.store') }}" method="POST">
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

                        <div class="mb-4" id="veiculos_div">
                            <label for="veiculo_id" class="block text-sm font-medium text-white">Veículo</label>
                            <select name="veiculo_id" id="veiculo_id" class="mt-1 block w-full text-gray-900" required>
                                <option value="">Selecione um Veículo</option>
                                @foreach ($veiculos as $veiculo)
                                    <option value="{{ $veiculo->id }}">{{ $veiculo->modelo_veiculo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-white">Serviços</label>
                            <div>
                                <select id="servico_select" class="mt-1 block w-full text-gray-900">
                                    <option value="">Selecione um Serviço</option>
                                    @foreach ($servicos as $servico)
                                        <option value="{{ $servico->id }}" data-valor="{{ $servico->valor }}">
                                            {{ $servico->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-white">Valor Total</label>
                            <input type="number" name="valor_total" id="valor_total"
                                class="mt-1 block w-full text-gray-900" readonly>
                        </div>

                        <div class="mb-4">
                            <label for="data_criacao" class="block text-sm font-medium text-white">Data</label>
                            <input type="date" name="data_criacao" id="data_criacao"
                                class="mt-1 block w-full text-gray-900" required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium text-white">Serviços Adicionados</label>
                            <div id="servicos_container">
                                <table class="w-full border-collapse border border-gray-300">
                                    <tbody id="servicos_body">
                                        <!-- Serviços adicionados serão inseridos aqui -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Registrar Ordem de Serviço
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/adicionar_servico.js') }}"></script>
    <script src="{{ asset('js/buscar_veiculos.js') }}"></script>

</x-app-layout>
