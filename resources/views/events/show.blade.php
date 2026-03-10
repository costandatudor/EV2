@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1><i class="fas fa-eye"></i> Event Details</h1>
        <a href="{{ route('events.index') }}" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2 style="margin: 0; color: white;">{{ $event->title }}</h2>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <label class="text-muted" style="font-weight: 600; font-size: 0.9rem;">
                            <i class="fas fa-align-left"></i> Description
                        </label>
                        <p style="font-size: 1.1rem; color: #333; margin-top: 0.5rem;">{{ $event->description }}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label class="text-muted" style="font-weight: 600; font-size: 0.9rem;">
                                <i class="fas fa-calendar"></i> Date
                            </label>
                            <p style="font-size: 1.1rem; color: #333; margin-top: 0.5rem;">
                                {{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="text-muted" style="font-weight: 600; font-size: 0.9rem;">
                                <i class="fas fa-map-marker-alt"></i> Location
                            </label>
                            <p style="font-size: 1.1rem; color: #333; margin-top: 0.5rem;">{{ $event->location }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="text-muted" style="font-weight: 600; font-size: 0.9rem;">
                                <i class="fas fa-plus-circle"></i> Created
                            </label>
                            <p style="font-size: 1rem; color: #666; margin-top: 0.5rem;">
                                {{ $event->created_at ? $event->created_at->format('M d, Y') : 'N/A' }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted" style="font-weight: 600; font-size: 0.9rem;">
                                <i class="fas fa-sync-alt"></i> Updated
                            </label>
                            <p style="font-size: 1rem; color: #666; margin-top: 0.5rem;">
                                {{ $event->updated_at ? $event->updated_at->format('M d, Y') : 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Actions
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-success btn-lg">
                            <i class="fas fa-edit"></i> Edit Event
                        </a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg w-100">
                                <i class="fas fa-trash"></i> Delete Event
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
