<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit Data Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('post.simpan') }}" class="">
                        @csrf
                        <div class="gird gap-6 mb-6">
                            <div>
                                <label for="title" class="black mb-2 text-sm font-medium text-gray-900">Title</label>
                                <input type="text" name="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full">
                            </div>
                            <div>
                                <label for="deskripsi"
                                    class="black mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
