<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Criar Ordem de Serviço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
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
                            <select name="cliente_id" id="cliente_id" class="block w-full mt-1 text-gray-900" required>
                                <option value="">Selecione um Cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nome_cliente }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4" id="veiculos_div">
                            <label for="veiculo_id" class="block text-sm font-medium text-white">Veículo</label>
                            <select name="veiculo_id" id="veiculo_id" class="block w-full mt-1 text-gray-900" required>
                                <option value="">Selecione um Veículo</option>
                                @foreach ($veiculos as $veiculo)
                                    <option value="{{ $veiculo->id }}">{{ $veiculo->modelo_veiculo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-white">Serviços</label>
                            <div>
                                <select id="servico_select" class="block w-full mt-1 text-gray-900">
                                    <option value="">Selecione um Serviço</option>
                                    @foreach ($servicos as $servico)
                                        <option value="{{ $servico->id }}" data-valor="{{ $servico->valor }}">
                                            {{ $servico->descricao }} - R$ {{ $servico->valor }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="button" id="adicionar_servico"
                                class="px-4 py-2 mt-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                Adicionar Serviço
                            </button>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-white">Valor Total</label>
                            <input type="number" name="valor_total" id="valor_total"
                                class="block w-full mt-1 text-gray-900" readonly>
                        </div>

                        <div class="mb-4">
                            <label for="data_criacao" class="block text-sm font-medium text-white">Data</label>
                            <input type="date" name="data_criacao" id="data_criacao"
                                class="block w-full mt-1 text-gray-900" required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium text-white">Serviços Adicionados</label>
                            <div id="servicos_container">
                                <table class="w-full border border-collapse border-gray-300">
                                    <tbody id="servicos_body">
                                        <!-- Serviços adicionados serão inseridos aqui -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
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
