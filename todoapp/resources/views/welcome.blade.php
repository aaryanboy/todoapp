@extends('\layouts.main') <!-- Extending layout\main -->

@push('head')<!—we have created a stack and pushing this header information-->
<title>Todo List App</title>
<style>/* Table styles */
.table {
    margin: 20px auto; /* Center the table */
    max-width: 90%; /* Limit the width */
    border-collapse: collapse; /* Remove gaps between cells */
}

.table thead {
    background-color: #343a40; /* Dark header background */
    color: #ffffff; /* White text for header */
    text-transform: uppercase; /* Capitalize header text */
    font-size: 1rem; /* Slightly larger text */
}

.table-striped tbody tr:nth-child(odd) {
    background-color: #444; /* Alternate row color */
}

.table-hover tbody tr:hover {
    background-color: #555; /* Highlight row on hover */
    transition: background-color 0.3s ease; /* Smooth transition */
}

/* Button styles */
.btn {
    padding: 5px 10px; /* Adjust button padding */
    font-size: 0.875rem; /* Smaller font size for buttons */
    border-radius: 5px; /* Rounded corners */
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth hover effects */
}

.btn-outline-success:hover {
    background-color: #28a745; /* Green background on hover */
    color: #ffffff; /* White text on hover */
}

.btn-outline-danger:hover {
    background-color: #dc3545; /* Red background on hover */
    color: #ffffff; /* White text on hover */
}

/* Table cell alignment */
.table td, .table th {
    vertical-align: middle; /* Center-align text */
    padding: 10px; /* Add padding for better spacing */
}
</style>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> 
<!—flex-direction view with Margin 5-->
        <div class="h2">All Todos</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Add Todo</a>
    </div>
    <!-- {{print_r($todos)}} -->
    <table class="table table-striped table-dark table-hover">
    <thead>
        <tr class="table-primary">
            <th>Task Name</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($todos as $todo)
            <tr>
                <td>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>{{$todo->duedate}}</td>
                <td>
                    <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-outline-success btn-sm">Update</a>
                    <a href="{{route('todo.delete', $todo->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>

@endsection