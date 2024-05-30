<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full text-gray-900 dark:text-gray-100">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a href="{{ route('clientes.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3 inline-block sm:mr-2">
                            Novo</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="border border-gray-300 px-2 py-2 text-center">ID</th>
                                    <th class="border border-gray-300 px-2 py-2">Nome</th>
                                    <th class="border border-gray-300 px-2 py-2">Telefone</th>
                                    <th class="border border-gray-300 px-2 py-2">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="border border-gray-300 px-2 py-2 text-center">{{ $cliente->id }}
                                        </td>
                                        <td class="border border-gray-300 px-2 py-2 text-center">
                                            {{ $cliente->nome_cliente }}</td>
                                        <td class="border border-gray-300 px-2 py-2 text-center">
                                            {{ $cliente->telefone_cliente }}
                                        </td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">
                                            <a href="{{ route('clientes.show', $cliente->id) }}"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded inline-block mb-1 sm:mb-0">Ver</a>
                                            <a href="{{ route('clientes.edit', $cliente->id) }}"
                                                class= "bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded inline-block mb-1 sm:mb-0 background">Editar</a>
                                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded inline-block">Excluir</button>
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
