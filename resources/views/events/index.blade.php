@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>
                <i class="fas fa-list"></i> My Events
            </h1>
            <p class="text-muted">Manage and organize your upcoming events</p>
        </div>
        <a href="#" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Event
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    @if($events->isEmpty())
        <div class="text-center py-5">
            <i class="fas fa-inbox" style="font-size: 4rem; color: #d1d5db; margin-bottom: 1rem; display: block;"></i>
            <h3 class="text-muted">No events yet</h3>
            <p class="text-muted">Create your first event to get started</p>
            <a href="#" class="btn btn-primary">
                <i class="fas fa-plus"></i> Create Event
            </a>
        </div>
    @else
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><i class="fas fa-heading"></i> Title</th>
                        <th><i class="fas fa-align-left"></i> Description</th>
                        <th><i class="fas fa-calendar"></i> Date</th>
                        <th><i class="fas fa-map-marker-alt"></i> Location</th>
                        <th style="text-align: center;"><i class="fas fa-cogs"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>
                                <strong>{{ $event->title }}</strong>
                            </td>
                            <td>
                                {{ Str::limit($event->description, 50) }}
                            </td>
                            <td>
                                <i class="fas fa-calendar-check"></i>
                                {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}
                            </td>
                            <td>
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $event->location }}
                            </td>
                            <td style="text-align: center;">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-info" title="View details">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-success" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection