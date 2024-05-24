<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cliente: ') }} {{ $cliente->nome_cliente }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Informações do Cliente</h3>
                    <div class="mt-4">
                        <p><strong>Nome:</strong> {{ $cliente->nome_cliente }}</p>
                        <p><strong>Email:</strong> {{ $cliente->email_cliente }}</p>
                        <p><strong>Telefone:</strong> {{ $cliente->telefone_cliente }}</p>
                        <p><strong>Logradouro:</strong> {{ $cliente->logradouro_cliente }}</p>
                        <p><strong>Número:</strong> {{ $cliente->numero_endereco_cliente }}</p>
                        <p><strong>Bairro:</strong> {{ $cliente->bairro_cliente }}</p>
                        <p><strong>Cidade:</strong> {{ $cliente->cidade_cliente }}</p>
                        <p><strong>Estado:</strong> {{ $cliente->estado_cliente }}</p>
                        <p><strong>CEP:</strong> {{ $cliente->cep_cliente }}</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                            Voltar
                        </a>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">
                            Editar
                        </a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este cliente?')">
                                Deletar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
