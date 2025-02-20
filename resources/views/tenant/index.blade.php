@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>Tenants</div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    Add Tenant
                </button>
            </div>
            <div class="card card-body border-0 shadow table-wrapper table-responsive">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    {{-- CREATE --}}
    @include('tenant.modals.create')
    {{-- VIEW --}}
    @include('tenant.modals.view')
    {{-- EDIT --}}
    @include('tenant.modals.edit')
    {{-- DELETE --}}
    @include('tenant.modals.delete')
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script type="module">
        const tableInstance = window.LaravelDataTables['address_dataTable'] = $('#address_dataTable')
            .DataTable()

        tableInstance.on('draw.dt', function() {
            $('.viewBtn').on('click', function() {
                fetch('/tenant/' + $(this).data('tenant'))
                    .then(response => response.json())
                    .then(tenant => {

                    });
            })
        });
    </script>
@endpush
