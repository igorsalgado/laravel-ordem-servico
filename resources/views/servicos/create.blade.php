<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criar Novo Serviço') }}
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
                    <form action="{{ route('servicos.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="descricao" class="block text-sm font-medium text-white">Descrição</label>
                            <input type="text" name="descricao" id="descricao"
                                class="mt-1 block w-full text-gray-900" required>
                        </div>
                        <div class="mb-4">
                            <label for="valor" class="block text-sm font-medium text-white">Valor</label>
                            <input type="number" name="valor" id="valor" class="mt-1 block w-full text-gray-900"
                                required>
                        </div>

                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded inline-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
