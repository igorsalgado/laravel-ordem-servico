
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
                    <!-- Outros campos do formulário -->

                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
