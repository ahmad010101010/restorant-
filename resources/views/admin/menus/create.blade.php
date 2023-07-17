<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Name</label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                @error('name')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="mb-6">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Price</label>
                    <input type="number" id="price" name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                @error('price')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak" for="image">Upload
                        Image</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="image" type="file" name="image">
                    <p class="mt-1 text-sm text-gray-500 dark:text-blak-300" id="file_input_help">SVG, PNG, JPG or GIF
                        (MAX. 800x400px).</p>

                </div>
                @error('image')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="mb-5 ">
                    <label for="description"
                        class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">Catrgories</label>
                    <div class="mt-1">
                        <select id="categories" name="categories[]" class="form-multiselesct block w-full mt-1" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('categories')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="mb-4 py-6">
                    <label for="description"
                        class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">Description</label>
                    <input type="text" id="description" name="description"
                        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                @error('description')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex justify-end m-2 p-2 ">
                            <button type="submit"
                                class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">SAVE
                                CATEGORY</button>
                        </div>



                    </div>



                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
