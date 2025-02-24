@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div>{{ $tenant->full_name }}</div>
            </div>
        </div>
    </div>
@endsection
