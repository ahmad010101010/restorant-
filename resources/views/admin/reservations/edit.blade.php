
<x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<form method="POST" action="{{route('admin.reservations.update',$Reservation->id)}}" >
    @csrf
    @method('PUT')
        <div class="mb-6">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Firest name</label>
            <input type="text" value="{{$Reservation->first_name}}" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        @error('first_name')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
        <div class="mb-6">
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Last name</label>
            <input type="text" value="{{$Reservation->last_name}}" id="last_name" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        @error('last_name')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Email</label>
            <input type="email" value="{{$Reservation->email}}" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        @error('email')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
        <div class="mb-6">
            <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">tel number</label>
            <input type="text" value="{{$Reservation->tel_number}}" id="tel_number" name="tel_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        @error('tel_number')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
        <div class="mb-6">
            <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Reservation date</label>
            <input type="datetime-local" value="{{$Reservation->res_date->format('Y-m-d\TH:i:s')}}" id="res_date" name="res_date" class="bg-gray-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        @error('res_date')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
        <div class="mb-5">
            <label for="guest_number" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">guest_number</label>
            <input type="number" value="{{$Reservation->guest_number}}" id="guest_number" name="guest_number" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        @error('guest_number')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
        <div class="sm:col-span-6 pt-5">
            <label for="status" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">Table</label>
        <div class="mt-1">
            <select id="status" name="table_id" class="form-multiselesct block w-full mt-1" >
                @foreach ($tables as $table )
                    <option value="{{$table->id}}" @selected($table->id == $Reservation->table->id)>{{$table->name}}</option>
                @endforeach
            </select>
        </div>
        @error('table_id')
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
    </div>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2 ">
                <button type="submit" class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >update</button>
                </div>

            </div>



    </div>
    </form>
    </div>
      </div>
    </x-admin-layout>
