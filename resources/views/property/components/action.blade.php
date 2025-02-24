<div>
    <button type="button" class="viewBtn btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal"
        data-property="{{ $property->id }}">
        <i class="fas fa-eye fa-fw"></i>
    </button>

    <button type="button" class="editBtn btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"
        data-property="{{ $property->id }}">
        <i class="fas fa-pen fa-fw"></i>
    </button>

    <button type="button" class="deleteBtn btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
        data-property="{{ $property->id }}">
        <i class="fas fa-trash"></i>
    </button>
</div>
