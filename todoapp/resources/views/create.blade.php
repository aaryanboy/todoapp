@extends('\layouts.main')
@push('head')
<title>Add Todo </title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
        <div class="h2">Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.store")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Task Name</label><!-- mt-4 = margin 4 -->
                <input type="text" name="name" class = "form-control" id="">
                    <div class="text-danger">
                        @error('name')
                            {{$message}}
                        @enderror
                    </div>
                <label for="" class="form-label mt-4">Description</label>
                <input type="text" name="work" class = "form-control" id="">
                <div class="text-danger">
                        @error('work')
                            {{$message}}
                        @enderror
                    </div>
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="duedate" class = "form-control" id="">
                <div class="text-danger">
                        @error('duedate')
                            {{$message}}
                        @enderror
                    </div>
                <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
            </form>
        </div>
    </div>
</div>

@endsection