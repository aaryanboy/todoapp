@extends('\layouts.main')
@push('head')
<title>Add Todo </title>
<style>/* General body styles */
body {
    background-color: #f8f9fa; /* Light background for contrast */
    font-family: 'Roboto', Arial, sans-serif; /* Clean and modern font */
    padding: 2rem;
}

/* Card styles */
.card {
    max-width: 500px; /* Centered and limited width */
    margin: 20px auto;
    border-radius: 12px; /* Rounded corners */
    background: #ffffff; /* White background */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); /* Soft shadow */
    overflow: hidden;
    padding: 20px;
}

/* Form styles */
.form-control {
    border: 1px solid #ced4da; /* Subtle border */
    border-radius: 8px; /* Rounded input fields */
    padding: 0.8rem 1rem; /* Comfortable padding */
    font-size: 1rem; /* Readable font size */
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    border-color: #17a2b8; /* Primary focus color */
    box-shadow: 0 0 8px rgba(23, 162, 184, 0.4); /* Subtle glow on focus */
    outline: none; /* Remove default focus outline */
}

/* Button styles */
.btn-primary {
    background-color: #17a2b8; /* Primary button color */
    border: none;
    border-radius: 8px; /* Rounded corners */
    padding: 0.8rem;
    font-size: 1.2rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary:hover {
    background-color: #138496; /* Darker color on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
}

/* Label styles */
.form-label {
    font-weight: 600; /* Bold text for labels */
    color: #495057; /* Neutral dark gray */
}

/* Error messages */
.text-danger {
    font-size: 0.9rem; /* Slightly smaller text */
    margin-top: 0.25rem;
    color: #e63946; /* Eye-catching red for errors */
}

/* Card title */
.card-title {
    font-size: 1.5rem; /* Larger font for title */
    font-weight: bold;
    color: #343a40; /* Dark gray */
}
</style>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
        <div class="h2">Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card shadow">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">Add a New Todo</h2>
        <form action="{{route('todo.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Task Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter task name">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="work" class="form-label">Description</label>
                <input type="text" name="work" class="form-control" id="work" placeholder="Enter task description">
                <div class="text-danger">
                    @error('work')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="duedate" class="form-label">Due Date</label>
                <input type="date" name="duedate" class="form-control" id="duedate">
                <div class="text-danger">
                    @error('duedate')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary btn-lg w-100 mt-4">Add Todo</button>
        </form>
    </div>
</div>

</div>

@endsection