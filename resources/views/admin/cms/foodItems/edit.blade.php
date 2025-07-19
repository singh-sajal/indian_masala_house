<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Update Food Item</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card-body">
            <form novalidate action="{{ route('admin.fooditem.update', $record->uuid) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.cms.foodItems.form')

                <!-- Submit -->
                <button type="submit" class="btn btn-success">Save Food Item</button>
            </form>
        </div>
    </div>
</div>
