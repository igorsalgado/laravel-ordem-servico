
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
                <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Campos do formulário para editar os dados do cliente -->
                    <div class="mb-4">
                        <label for="nome_cliente" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" name="nome_cliente" id="nome_cliente" class="mt-1 block w-full" value="{{ $cliente->nome_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="email_cliente" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email_cliente" id="email_cliente" class="mt-1 block w-full" value="{{ $cliente->email_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="telefone_cliente" class="block text-sm font-medium text-gray-700">Telefone</label>
                        <input type="text" name="telefone_cliente" id="telefone_cliente" class="mt-1 block w-full" value="{{ $cliente->telefone_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="logradouro_cliente" class="block text-sm font-medium text-gray-700">Logradouro</label>
                        <input type="text" name="logradouro_cliente" id="logradouro_cliente" class="mt-1 block w-full" value="{{ $cliente->logradouro_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="numero_endereco_cliente" class="block text-sm font-medium text-gray-700">Número</label>
                        <input type="text" name="numero_endereco_cliente" id="numero_endereco_cliente" class="mt-1 block w-full" value="{{ $cliente->numero_endereco_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="bairro_cliente" class="block text-sm font-medium text-gray-700">Bairro</label>
                        <input type="text" name="bairro_cliente" id="bairro_cliente" class="mt-1 block w-full" value="{{ $cliente->bairro_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="cidade_cliente" class="block text-sm font-medium text-gray-700">Cidade</label>
                        <input type="text" name="cidade_cliente" id="cidade_cliente" class="mt-1 block w-full" value="{{ $cliente->cidade_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="estado_cliente" class="block text-sm font-medium text-gray-700">Estado</label>
                        <input type="text" name="estado_cliente" id="estado_cliente" class="mt-1 block w-full" value="{{ $cliente->estado_cliente }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="cep_cliente" class="block text-sm font-medium text-gray-700">CEP</label>
                        <input type="text" name="cep_cliente" id="cep_cliente" class="mt-1 block w-full" value="{{ $cliente->nome_cliente }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
