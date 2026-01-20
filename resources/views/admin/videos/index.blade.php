@extends('admin.layouts.admin')

@section('title', 'Admin - Videos')
@section('header', 'Videos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="mb-0">All Videos</h6>
    <a href="{{ route('admin.videos.create') }}" class="btn btn-sm btn-primary">+ Add Video</a>
</div>

<div class="card admin-card">
    <div class="table-responsive">
        <table class="table table-sm table-striped table-modern mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Video ID</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($videos as $video)
                <tr>
                    <td>{{ $video->id }}</td>
                    <td><code>{{ $video->video_id }}</code></td>
                    <td>{{ $video->type }}</td>
                    <td>
                        <a href="{{ route('admin.videos.edit', $video) }}" class="btn btn-xs btn-outline-primary">Edit</a>
                        <form action="{{ route('admin.videos.destroy', $video) }}" method="POST" style="display: inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-outline-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center text-muted py-4">No videos. <a href="{{ route('admin.videos.create') }}">Create one</a></td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($videos->hasPages())
    <div class="mt-3">{{ $videos->links() }}</div>
@endif
@endsection
