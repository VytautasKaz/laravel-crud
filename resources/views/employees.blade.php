@extends('layouts.app')

@section('content')
    <?php $counter = 0; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="my_table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Projects</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $employee['name'] }}</td>
                            <td>{{ $employee->project['title'] }}</td>
                            <td>
                                <form action="{{ route('employees.destroy', $employee['id']) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" value="DELETE"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="current_name" value="" />
                                    <button type="submit" name="update" value="">Update</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <form class="new-entry" action="/employees" method="POST">
                    @csrf
                    <label for="">Add a new employee:</label><br>
                    <input type="text" name="fname" placeholder="Enter employee name" />
                    <select name="assign_proj">
                        <label for=""></label>
                        <option value=""></option>
                        @foreach (App\Models\Project::all() as $project)
                            <option value="{{ $project['id'] }}"> {{ $project['title'] }} </option>
                        @endforeach
                    </select>
                    <button type="submit" name="create">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
