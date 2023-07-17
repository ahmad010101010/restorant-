<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
          <h3 class="text-2xl font-bold">make your resrevations</h3>

        </div>
<div class="container w-full px-5 py-6 mx-auto">
    <div class="flex item-center min-h-screen bg-fray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="https://cnd.poxabay.com/photo/2021/01/15/17/01/green-5919790__340.jpg" alt="image">
                </div>
                <div class="flex item-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-xl font-bold text-blue-600">make reservation</h3>
                        <div class=" w-full bg-gray-200 rounded-full">
                            <div class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600">step1</div>
                        </div>
                            <form method="POST" action="{{route('reservations.store.step.one')}}" >
                                @csrf

                                    <div class="mb-6">
                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Firest name</label>
                                        <input type="text" value="{{$reservation->first_name?? ""}}" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    @error('first_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                    <div class="mb-6">
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Last name</label>
                                        <input type="text" value="{{$reservation->last_name?? ""}}" id="last_name" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    @error('last_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                    <div class="mb-6">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Email</label>
                                        <input type="email" value="{{$reservation->email?? ""}}" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    @error('email')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                    <div class="mb-6">
                                        <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">tel number</label>
                                        <input type="text" value="{{$reservation->tel_number?? ""}}" id="tel_number" name="tel_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    @error('tel_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                    <div class="mb-6">
                                        <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blak">Reservation date</label>
                                        <input type="datetime-local"
                                        value="{{$reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : ""}}" id="res_date" name="res_date"
                                        min="{{$min_date->format('Y-m-d\TH:i:s')}}"
                                        max="{{$max_date->format('Y-m-d\TH:i:s')}}" class="bg-gray-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    @error('res_date')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                    <div class="mb-5">
                                        <label for="guest_number" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">guest_number</label>
                                        <input type="number" value="{{$reservation->guest_number?? ""}}" id="guest_number" name="guest_number" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blak dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    @error('guest_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror



                                    <div class="py-12">
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                                            <div class="flex justify-end m-2 p-2 ">
                                            <button type="submit" class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >Next step</button>
                                            </div>

                                        </div>



                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       </section>
</x-guest-layout>
