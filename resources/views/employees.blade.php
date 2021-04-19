@extends('layouts.app')

@section('content')
    <?php $counter = 0; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status_success'))
                    <p style="color: green"><b>{{ session('status_success') }}</b></p>
                @else
                    <p style="color: red"><b>{{ session('status_error') }}</b></p>
                @endif
                <table class="my_table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Projects</th>
                        @if (auth()->check())
                            <th>Actions</th>
                        @endif
                    </tr>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $employee['name'] }}</td>
                            <td>{{ $employee->project['title'] }}</td>
                            @if (auth()->check())
                                <td>
                                    <form action="{{ route('employees.destroy', $employee['id']) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" value="DELETE"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <form action="{{ route('employees.show', $employee['id']) }}" method="GET">
                                        @csrf
                                        <button type="submit" name="update" value="">Update</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
                @if (auth()->check())
                    <form class="new-entry" action="/employees" method="POST">
                        @csrf
                        <label for="">Add a new employee:</label><br>
                        <input type="text" name="fname" placeholder="Enter employee name" /><br>
                        @error('fname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select style="margin-top: 10px; width: 190px;" name="assign_proj">
                            <label for=""></label>
                            <option value="" selected disabled>Select a project</option>
                            @foreach (App\Models\Project::all() as $project)
                                <option value="{{ $project['id'] }}"> {{ $project['title'] }} </option>
                            @endforeach
                        </select><br>
                        <button style="margin-top: 10px;" type="submit" name="create">Add</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
