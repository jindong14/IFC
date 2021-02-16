@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <form action="{{ route('histories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="url">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                    <input type="file" name="mydata" class="form-control-file border">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
