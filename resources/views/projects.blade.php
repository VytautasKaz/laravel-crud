@extends('layouts.app')

@section('content')
    <?php $counter = 0; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="my_table">
                    <tr>
                        <th>#</th>
                        <th>Project</th>
                        <th>Employee(s)</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $project['title'] }}</td>
                            <td>
                                @foreach ($project->employees as $employee)
                                    {{ $employee['name'] }}
                                    {{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            </td>
                            <td>
                                <form action="{{ route('projects.destroy', $project['id']) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" value="DELETE"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="current_project" value="" />
                                    <button type="submit" name="update" value="">Update</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <form class="new-entry" action="/projects" method="POST">
                    @csrf
                    <label for="new_project">Create a new project:</label><br>
                    <input type="text" name="new_project" placeholder="Enter project title" />
                    <button type="submit" name="create">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
