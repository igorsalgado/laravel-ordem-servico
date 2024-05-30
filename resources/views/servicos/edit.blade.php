<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Serviço: ') }} {{ $servico->descricao }}
        </h2>
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Valor: R$ ') }} {{ $servico->valor }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('servicos.update', $servico->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="descricao" class="block text-sm font-medium text-white">Descrição</label>
                            <input type="text" name="descricao" id="descricao"
                                class="block w-full mt-1 text-gray-900" value="{{ $servico->descricao }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="valor" class="block text-sm font-medium text-white">Valor</label>
                            <input type="number" name="valor" id="valor" class="block w-full mt-1 text-gray-900"
                                value="{{ $servico->valor }}" required>
                        </div>
                        <button type="submit"
                            class="inline-block px-3 py-1 font-bold text-white bg-green-500 rounded hover:bg-green-700">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
