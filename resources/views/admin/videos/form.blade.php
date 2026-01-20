@extends('admin.layouts.admin')

@section('title', isset($video) ? 'Edit Video' : 'Add Video')
@section('header', isset($video) ? 'Edit Video' : 'Add Video')

@section('content')
<div class="card admin-card" style="max-width: 700px;">
    <div class="card-body">
        <form action="{{ isset($video) ? route('admin.videos.update', $video) : route('admin.videos.store') }}" method="POST" class="admin-form">
            @csrf
            @if(isset($video))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label">Video ID <span class="text-danger">*</span></label>
                <input type="text" name="video_id" class="form-control @error('video_id') is-invalid @enderror" value="{{ $video->video_id ?? old('video_id') }}" required>
                <small class="text-muted">YouTube video ID (e.g., dQw4w9WgXcQ)</small>
                @error('video_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ $video->type ?? 'youtube' }}" placeholder="youtube">
                @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
