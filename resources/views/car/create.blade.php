
    <div class="container">
        <h1>Create Car</h1>

        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
       
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" name="model" id="model" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" name="year" id="year" class="form-control" required>
            </div>

            

            <div class="form-group">
                <label for="color">Choose Color:</label>
                <select name="color" id="color" class="form-control" required>
                    <option name="color" value="red">Red</option>
                    <option name="color" value="blue">Blue</option>
                    <option name="color" value="green">Green</option>
                    <option name="color" value="yellow">Yellow</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="user_id">User:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}" readonly required>
            </div>

            <button type="submit" value="Save" class="btn btn-primary">Create</button>
        </form>
    </div>
