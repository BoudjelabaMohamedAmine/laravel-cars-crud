
    <h1>Car Index Page</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->price }}</td>
                    <td>
                        <a href="{{ route('cars.show', $car->id) }}">Show</a>
                        <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                        
                    </td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
