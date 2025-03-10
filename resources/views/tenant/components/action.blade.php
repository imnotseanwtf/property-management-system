<div>
    {{-- <button type="button" class="viewBtn btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal"
        data-tenant="{{ $tenant->id }}">
        <i class="fas fa-eye fa-fw"></i>
    </button> --}}

    <a href="{{ route('tenant.show', $tenant->id) }}" class="btn btn-info">
        <i class="fas fa-eye fa-fw"></i>
    </a>

    <button type="button" class="editBtn btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"
        data-tenant="{{ $tenant->id }}">
        <i class="fas fa-pen fa-fw"></i>
    </button>

    <button type="button" class="deleteBtn btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
        data-tenant="{{ $tenant->id }}">
        <i class="fas fa-trash"></i>
    </button>
</div>
