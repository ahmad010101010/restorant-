<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.categories.update', $category->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input value="{{ $category->name }}" type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                @error('name')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                        Image</label>
                    <div>
                        <img class="w-23 h-23" src="{{ Storage::url($category->image) }}">
                    </div>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="image" type="file" name="image">
                    <p class="mt-1 text-sm text-gray-500 dark:text-white-300" id="file_input_help">SVG, PNG, JPG or GIF
                        (MAX. 800x400px).</p>
                    @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="description"
                        class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input value="{{ $category->description }}" type="text" id="description" name="description"
                        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                @error('description')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex justify-end m-2 p-2 ">
                            <button type="submit"
                                class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">EDITE
                                CATEGORY</button>
                        </div>



                    </div>



                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
