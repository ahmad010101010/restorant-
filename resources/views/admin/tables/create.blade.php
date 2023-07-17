
    <x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<form method="POST" action="{{route('admin.tables.store')}}" >
    @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>


        <div class="mb-5">
            <label for="description" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">guest_number</label>
            <input type="number" id="guest_number" name="guest_number" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="sm:col-span-6 pt-5">
            <label for="status" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">location</label>
        <div class="mt-1">
            <select id="location" name="location" class="form-multiselesct block w-full mt-1" >
                @foreach (App\Enums\TableLocation::cases() as $location )
                    <option value="{{$location->value}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="sm:col-span-6 pt-5">
            <label for="status" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">status</label>
        <div class="mt-1">
            <select id="status" name="status" class="form-multiselesct block w-full mt-1" >
                @foreach (App\Enums\TableStatus::cases() as $status )
                    <option value="{{$status->value}}">{{$status->name}}</option>
                @endforeach
            </select>
        </div>
    </div>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2 ">
                <button type="submit" class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >SAVE TABLE</button>
                </div>

            </div>



    </div>
    </form>
    </div>
      </div>
    </x-admin-layout>
