<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Serviço: ') }} {{ $servico->descricao }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Informações do Serviço</h3>
                    <div class="mt-4">
                        <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                        <p><strong>Valor:</strong> R$ {{ $servico->valor }}</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('servicos.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded inline-block mb-1 sm:mb-0">Voltar</a>
                        <a href="{{ route('servicos.edit', $servico->id) }}"
                            class= "bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded inline-block mb-1 sm:mb-0 background">Editar</a>
                        <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded inline-block">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
