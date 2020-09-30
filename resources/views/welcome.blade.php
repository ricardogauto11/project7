@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Last Entries</h1>
            @foreach ($entries as $entry)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $entry->title }}
                </div>
                <div class="card-body">
                    <p>{{ $entry->content }}</p>
                </div>
                <div class="card-footer">
                     Author: {{ $entry->user_id }}
                </div>
            </div>
            @endforeach
            {{ $entries->links() }}
        </div>
    </div>
</div>
@endsection
