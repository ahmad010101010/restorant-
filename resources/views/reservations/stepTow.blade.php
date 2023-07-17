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
                        <h3 class="mb-4 text-xl font-bold text-blue-600">make reservations</h3>
                        <div class=" w-full bg-gray-200 rounded-full">
                            <div class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600">step2</div>
                        </div>
                            <form method="POST" action="{{route('reservations.store.step.one')}}" >
                                @csrf
                                    <div class="sm:col-span-6 pt-5">
                                        <label for="status" class="block mb-3 text-sm font-medium text-gray-900 dark:text-blak">Table</label>
                                    <div class="mt-1">
                                        <select id="status" name="table_id" class="form-multiselesct block w-full mt-1" >
                                            @foreach ($tables as $table )
                                                <option value="{{$table->id}}">{{$table->name}} ({{$table->guest_number}}) Guests</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('table_id')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                </div>


                                    <div class="py-12">
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                            <div class="flex justify-between m-2 p-2 ">
                                                <a  href="{{route('reservation.step.one')}}"  class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                                                Previous</a>
                                                    <button type="submit"
                                            class=" px-5 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >Make </button>
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
