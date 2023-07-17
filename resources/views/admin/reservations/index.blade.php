<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2 ">
                <a href="{{route('admin.reservations.create')}}"class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >ADD NEW MENU</a>
                </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    First name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last name
                </th>
                <th scope="col" class="px-6 py-3">
                    Telephon number
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Reservation date
                </th>
                <th scope="col" class="px-6 py-3">
                    Table
                </th>
                <th scope="col" class="px-6 py-3">
                    Guest number
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
                    @foreach ($Reservations as $Reservation)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$Reservation->first_name}}

                </th>
                <td class="px-6 py-4">
                    {{$Reservation->last_name}}

                </td>
                <td class="px-6 py-4">
                    {{$Reservation->tel_number}}

                </td>
                <td class="px-6 py-4">
                    {{$Reservation->email}}

                </td>
                <td class="px-6 py-4">
                    {{$Reservation->res_date}}

                </td>
                <td class="px-6 py-4">
                    {{$Reservation->guest_number}}

                </td>
                <td class="px-6 py-4">
                    {{$Reservation->table->name}}

                </td>

                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex space-x-2">
                        <a href="{{route('admin.reservations.edit',$Reservation->id)}}" class="py-2 px-4 bg-green-500 hover:bg-green-800 rounded-lg text-white">Eidt</a>
                        <form method="POST" action="{{route('admin.reservations.destroy',$Reservation->id)}}" class="py-2 px-4 bg-red-500 hover:bg-red-800 rounded-lg text-whute"
                            onsubmit="return confirm('are you sure');">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>
