@extends('admin.layout')

@section('content')
<div class="container my-4">
    <div class="container my-4">
    <div class="text-center mb-4">
        <h3 class="fw-bold display-6">
            <i class="bi bi-megaphone-fill"></i> All Announcements
        </h3>
        <p class="text-muted">View all student announcements easily.</p>
    </div>
</div>


    <div class="row g-4">
        @foreach($announcements as $announcement)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Title: </strong>{{ $announcement->title }}</h5>
                        <p class="card-text"><strong>Content: </strong>{{ $announcement->content }}</p>

                        <ul class="list-group list-group-flush mb-2">
                            <li class="list-group-item"><strong>ID:</strong> {{ $announcement->id }}</li>
                            <li class="list-group-item"><strong>Status:</strong>
                                @if($announcement->is_archived)
                                    <span class="badge bg-secondary">Archived</span>
                                @else
                                    <span class="badge bg-success">Active</span>
                                @endif
                            </li>
                            <li class="list-group-item"><strong>File:</strong>
                                @if($announcement->file)
                                    <a href="{{ asset('storage/'.$announcement->file) }}" target="_blank">View</a>
                                @endif
                            </li>
                            <li class="list-group-item"><strong>Created At:</strong> {{ $announcement->created_at }}</li>
                            <li class="list-group-item"><strong>Updated At:</strong> {{ $announcement->updated_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
