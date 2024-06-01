<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Lista de Serviços') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full text-gray-900 dark:text-gray-100">
                        <a href="{{ route('servicos.create') }}"
                            class="inline-block px-4 py-2 mb-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 sm:mr-2">
                            Novo</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="px-2 py-2 text-center border border-gray-300">ID</th>
                                    <th class="px-2 py-2 border border-gray-300">Descrição</th>
                                    <th class="px-2 py-2 border border-gray-300">Valor</th>
                                    <th class="px-2 py-2 border border-gray-300">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicos as $servico)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="px-2 py-2 text-center border border-gray-300">
                                            {{ $servico->id }}</td>
                                        <td class="px-2 py-2 text-center border border-gray-300">
                                            {{ $servico->descricao }}</td>
                                        <td class="px-2 py-2 text-center border border-gray-300">
                                            R$ {{ $servico->valor }}</td>

                                        <td class="px-4 py-2 text-center border border-gray-300">

                                            <a href="{{ route('servicos.show', $servico->id) }}"
                                                class="inline-block px-4 py-1 mb-1 font-bold text-white bg-green-500 rounded hover:bg-green-700 sm:mb-0">Ver</a>

                                            <a href="{{ route('servicos.edit', $servico->id) }}"
                                                class= "inline-block px-4 py-1 mb-1 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-700 sm:mb-0 background">Editar</a>

                                            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-block px-4 py-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">Excluir</button>
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
