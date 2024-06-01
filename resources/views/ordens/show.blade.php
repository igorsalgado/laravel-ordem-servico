<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Ordem N°: ') }} {{ '00' . $ordem->id }}
        </h2>
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Data de criação: ') }} {{ \Carbon\Carbon::parse($ordem->data_criacao)->format('d/m/Y') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Informações da Ordem de Serviço</h3>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <p><strong>Cliente:</strong> {{ $ordem->cliente->nome_cliente }}</p>
                            <p><strong>Endereço:</strong>
                                {{ $ordem->cliente->logradouro_cliente . ', N° ' . $ordem->cliente->numero_endereco_cliente }}
                            </p>
                            <p><strong>Telefone:</strong> {{ $ordem->cliente->telefone_cliente }}</p>
                            <p><strong>Email:</strong> {{ $ordem->cliente->email_cliente }}</p>

                        </div>
                        <div>
                            <p><strong>Veículo:</strong>
                                {{ $ordem->veiculo->modelo_veiculo }}</p>
                            <p><strong>Placa:</strong>
                                {{ $ordem->veiculo->placa_veiculo }}</p>
                            <p><strong>Cor:</strong>
                                {{ $ordem->veiculo->cor_veiculo }}</p>
                            <p><strong>Ano:</strong>
                                {{ $ordem->veiculo->ano_veiculo }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h4 class="mb-3 text-xl font-semibold text-gray-900 dark:text-gray-200">Serviços Associados:
                        </h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-800">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-2 text-sm font-semibold text-left text-gray-900 border-b-2 border-gray-200 dark:border-gray-700 dark:text-gray-200">
                                            Descrição</th>
                                        <th
                                            class="px-4 py-2 text-sm font-semibold text-left text-gray-900 border-b-2 border-gray-200 dark:border-gray-700 dark:text-gray-200">
                                            Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordem->servicos as $servico)
                                        <tr>
                                            <td
                                                class="px-4 py-2 text-sm text-gray-900 border-b border-gray-200 dark:border-gray-700 dark:text-gray-200">
                                                {{ $servico->descricao }}</td>
                                            <td
                                                class="px-4 py-2 text-sm text-gray-900 border-b border-gray-200 dark:border-gray-700 dark:text-gray-200">
                                                R$ {{ number_format($servico->valor, 2, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"
                                            class="px-4 py-2 text-sm font-semibold text-right text-gray-900 border-t-2 border-gray-200 dark:border-gray-700 dark:text-gray-200">
                                            <strong>Valor Total:</strong> R$
                                            {{ number_format($ordem->valor_total, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('ordens.index') }}"
                            class="inline-block px-3 py-1 mb-1 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 sm:mb-0">Voltar</a>

                        <form action="{{ route('ordens.destroy', $ordem->id) }}" method="POST"
                            style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-block px-3 py-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">Excluir</button>
                        </form>

                        <div class="flex justify-end mt-6">
                            <form action="" method="POST">
                                @csrf
                                <button type="submit"
                                    class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                    Gerar PDF
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
