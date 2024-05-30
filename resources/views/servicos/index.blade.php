<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Serviços') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full text-gray-900 dark:text-gray-100">
                        <a href="{{ route('servicos.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3 inline-block sm:mr-2">
                            Novo</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="border border-gray-300 px-2 py-2 text-center">ID</th>
                                    <th class="border border-gray-300 px-2 py-2">Descrição</th>
                                    <th class="border border-gray-300 px-2 py-2">Valor</th>
                                    <th class="border border-gray-300 px-2 py-2">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicos as $servico)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="border border-gray-300 px-2 py-2 text-center">
                                            {{ $servico->id }}</td>
                                        <td class="border border-gray-300 px-2 py-2 text-left">
                                            {{ $servico->descricao }}</td>
                                        <td class="border border-gray-300 px-2 py-2 text-center">
                                            R$ {{ $servico->valor }}</td>

                                        <td class="border border-gray-300 px-4 py-2 text-center">

                                            <a href="{{ route('servicos.show', $servico->id) }}"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded inline-block mb-1 sm:mb-0">Ver</a>

                                            <a href="{{ route('servicos.edit', $servico->id) }}"
                                                class= "bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-4 rounded inline-block mb-1 sm:mb-0 background">Editar</a>

                                            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded inline-block">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
