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
                                <form action="" method="POST">
                                    <button type="submit" name="delete" value=""
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
            </div>
        </div>
    </div>
@endsection
