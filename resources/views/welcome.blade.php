@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Last Entries') }}</div>

                <div class="card-body">
                    @foreach ($entries as $entry)
                        <p>{{ $entry->title }}</p>
                        <p>{{ $entry->content }}</p>
                        <p>{{ $entry->user_id }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
