@extends('admin.layout')

@section('content')
<h4>Create Announcement</h4>

<!-- Success message popup -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<form method="POST" action="/admin/announcements" enctype="multipart/form-data">
    @csrf

    <input class="form-control mb-2" name="title" placeholder="Title">
    <textarea class="form-control mb-2" name="content" placeholder="Content"></textarea>

    <input type="file" name="file" class="form-control mb-2">

    <button class="btn btn-success">Save</button>
</form>
@endsection
