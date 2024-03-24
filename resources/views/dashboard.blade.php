<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <a href="{{ route('car.create') }}" class="text-center bg-black-700 block hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                    {{ __('Create Car') }}
                </a>

                @if ($cars->isEmpty())
                    <p>{{ __("You don't have any cars.") }}</p>
                @else
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Img
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Model
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Year
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                @if ($car->email === auth()->user()->email)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $car->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('/storage/images/'.$car->image) }}" width="50px" class="img-fluid" alt="{{ $car->title }}">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $car->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $car->model }}
                                    </td>
                                    <td class="text-center px-6 py-4">
                                        {{ $car->year }}
                                    </td>
                                    <td class="text-center px-6 py-4">
                                        ${{ $car->price }}
                                    </td>
                                    <td class="text-center px-6 py-4">
                                        <a href="{{ route('car.show', $car->id) }}" class="px-1 font-medium text-green-600 dark:text-blue-500 hover:underline">show</a>
                                        <a href="{{ route('car.edit', $car->id) }}" class="px-1 font-medium text-yellow-600 dark:text-blue-500 hover:underline">edit</a>
                                    </td>
                                    <td class="text-center px-6 py-4">
                                        <form action="{{ route('car.destroy', $car->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-center bg-red-600 text-white p-2 ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
                @endif

                



        
                
            </div>
        </div>
    </div>
</x-app-layout>
