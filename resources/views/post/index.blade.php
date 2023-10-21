<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fitur Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('post.simpan') }}" method="POST">
                @csrf
                <div class="gird gap-6 mb-6">
                    <div>
                        <label for="title" class="black mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full">
                    </div>
                    <div>
                        <label for="deskripsi" class="black mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                        <input type="text" name="deskripsi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full">
                    </div>
                </div>
                <button
                    class="text-white bg-blue-700 hover:bg-blue-500 rounded-lg text-center focus:ring-blue-300 rounded-lg sm:w-auto px-5 py-2.5 mb-3"
                    type="submit">
                    Simpan
                </button>
            </form>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-3 px-6 text-center">No</th>
                                <th class="py-3 px-6 text-center">title</th>
                                <th class="py-3 px-6 text-center">Deskripsi</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="border-b border-gray-200">
                                    <td class="py-3 px-6 text-center">{{ $item->id }}</td>
                                    <td class="py-3 px-6 text-center">{{ $item->title }}</td>
                                    <td class="py-3 px-6 text-center">{{ $item->deskripsi }}</td>
                                    <td class="py-3 px-6 text-center">
                                        <!--Edit-->
                                        <a href="{{route('post.edit', $item->id)}}">
                                            <button
                                                class="group relative h-8 w-28 overflow-hidden rounded-lg bg-white text-lg shadow">
                                                <div
                                                    class="absolute inset-0 w-1 bg-amber-400 transition-all duration-250 ease-out group-hover:w-full">
                                                </div>
                                                <span class="relative text-black group-hover:text-white">Edit</span>
                                            </button>
                                        </a>
                                        <!--Delete-->
                                        <a href="">
                                            <button
                                                class="group relative h-8 w-28 overflow-hidden rounded-lg bg-white text-lg shadow">
                                                <div
                                                    class="absolute inset-0 w-1 bg-red-400 transition-all duration-250 ease-out group-hover:w-full">
                                                </div>
                                                <span class="relative text-black group-hover:text-white">Delete</span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
