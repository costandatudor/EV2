@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1><i class="fas fa-edit"></i> Edit Event</h1>
        <a href="{{ route('events.index') }}" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Edit "{{ $event->title }}"
                </div>
                <div class="card-body">
                    <form action="{{ route('events.update', $event->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">
                                <i class="fas fa-heading"></i> Event Title
                            </label>
                            <input 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                id="title" 
                                name="title" 
                                value="{{ old('title', $event->title) }}"
                                required
                            >
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">
                                <i class="fas fa-align-left"></i> Description
                            </label>
                            <textarea 
                                class="form-control @error('description') is-invalid @enderror" 
                                id="description" 
                                name="description" 
                                rows="4"
                                required
                            >{{ old('description', $event->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label">
                                    <i class="fas fa-calendar"></i> Event Date
                                </label>
                                <input 
                                    type="date" 
                                    class="form-control @error('date') is-invalid @enderror" 
                                    id="date" 
                                    name="date" 
                                    value="{{ old('date', $event->date) }}"
                                    required
                                >
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="location" class="form-label">
                                    <i class="fas fa-map-marker-alt"></i> Location
                                </label>
                                <input 
                                    type="text" 
                                    class="form-control @error('location') is-invalid @enderror" 
                                    id="location" 
                                    name="location" 
                                    value="{{ old('location', $event->location) }}"
                                    required
                                >
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('events.index') }}" class="btn btn-secondary btn-lg">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
