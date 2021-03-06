@extends('layouts.app')
@section('content')
<h1>New Project</h1>

@include('errors')
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name">{{ __('text.name') }}</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="description">{{ __('text.description') }}</label>
            <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="save project" class="btn btn-primary" >
        </div>
    </form>


@endsection
