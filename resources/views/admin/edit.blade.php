@extends('admin.layout')

@section('content')
<h4>Edit Announcement</h4>

<form method="POST" action="/admin/announcements/{{ $announcement->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input class="form-control mb-2" name="title" value="{{ $announcement->title }}">
    <textarea class="form-control mb-2" name="content">{{ $announcement->content }}</textarea>

    <select name="is_archived" class="form-control mb-2">
        <option value="0">Active</option>
        <option value="1" @selected($announcement->is_archived)>Archived</option>
    </select>

    <input type="file" name="file" class="form-control mb-2">

    <button class="btn btn-primary">Update</button>
</form>
@endsection
