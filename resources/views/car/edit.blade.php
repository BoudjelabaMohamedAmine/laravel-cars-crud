<x-app-layout>
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Edit Car</h1>
        <form action="{{ route('car.update', $car->id) }}" method="POST" class="max-w-md mx-auto" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-bold">Make:</label>
                <input type="text" name="name" id="name" value="{{ $car->name }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="model" class="block font-bold">Model:</label>
                <input type="text" name="model" id="model" value="{{ $car->model }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="year" class="block font-bold">Year:</label>
                <input type="number" name="year" id="year" value="{{ $car->year }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="color" class="block font-bold">Color:</label>
                <input type="text" name="color" id="color" value="{{ $car->color }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="price" class="block font-bold">Price:</label>
                <input type="number" name="price" id="price" value="{{ $car->price }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            

            <input type="hidden" name="image" id="image" value="{{ $car->image }}" required>

            <div class="mb-4">
                <label for="image" class="block font-bold">Image:</label>
                <input type="file" name="image" id="image" 
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-bold">Description:</label>
                <input type="text" name="description" id="description" value="{{ $car->description }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="status" class="block font-bold">Status:</label>
                <input type="text" name="status" id="status" value="{{ $car->status }}" required
                    class="border border-gray-300 rounded-md px-3 py-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">
                Update
            </button>
        </form>
    </div>
</x-app-layout>