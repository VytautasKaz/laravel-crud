@extends('layouts.app')

@section('content')
    <?php $counter = 0; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table>
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
                            <td>Employee(s)</td>
                            <td>
                                <form action="" method="POST">
                                    <button type="submit" name="delete" value=""
                                        onclick="return confirm(' Are you sure?')">Delete</button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="current_project" value="' . $row['title'] . '" />
                                    <button type="submit" name="update" value="">Update</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
