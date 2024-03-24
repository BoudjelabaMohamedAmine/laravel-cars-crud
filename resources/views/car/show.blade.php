
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $car->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p>Make: {{ $car->name }}</p>
                        <p>Model: {{ $car->model }}</p>
                        <p>Year: {{ $car->year }}</p>
                        <p>Color: {{ $car->color }}</p>
                        <p>Price: {{ $car->price }}</p>

                        <!-- Add more details here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
