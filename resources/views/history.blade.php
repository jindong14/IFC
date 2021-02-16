@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-12">
        <form action="{{ route('histories.create') }}" method="get">
            <button type="submit" class="btn-info btn btn-secondary add-btn">Add</button>
        </form>
        <table class="table table-bordered table-striped mt-3">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>URL</th>
                <th>Date</th>
                <th>User</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $history->name }}</td>
                        <td>{{ $history->url }}</td>
                        <td>{{ $history->time }}</td>
                        <td>{{ $history->user->name }}</td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
</div>
@endsection
