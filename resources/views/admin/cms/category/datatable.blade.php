@forelse ($records as $record)
    <tr>


        <td>
            <div class="d-flex align-items-center">

                <img class="avatar avatar-md me-2"
                    src="{{ asset($record->avatar ?? 'admin/assets/images/avatar/1.png') }}" alt="{{ $record->name }}">

                <span class="text-dark fw-bold">{{ $record->name ?? ''}}</span>

            </div>
        </td>

        <td>
            {{ $record->subtitle ?? '' }}
        </td>


        <td>
            <button class="badge badge-xs actionHandler bg-{{ $record->status == '1' ? 'success' : 'danger' }}"
                data-action="togglestatus"
                data-url="{{ route('admin.category.toggleStatus', [
                    'uuid' => $record->uuid,
                    'column' => 'status',
                    'status' => $record->status == '1' ? 'active' : 'inactive',
                ]) }}">
                {{ $record->status == '1' ? 'Active' : 'Inactive' }}</button>
        </td>

        <td>
            <button class="badge badge-xs actionHandler bg-{{ $record->is_featured == '1' ? 'success' : 'danger' }}"
                data-action="togglestatus"
                data-url="{{ route('admin.category.toggleStatus', [
                    'uuid' => $record->uuid,
                    'column' => 'is_featured',
                    'status' => $record->is_featured == '1' ? 'active' : 'inactive',
                ]) }}">
                {{ $record->is_featured == '1' ? 'Active' : 'Inactive' }}</button>
        </td>

        <td>{{ $record->created_at->format('d-M-Y, h:i') }}</td>


        <td>
            <div class="btn-group">


                <button class="btn btn-sm btn-secondary btn-label actionHandler"
                    data-url="{{ route('admin.category.edit', $record->uuid) }}">
                    <i class="ri-edit-box-line"></i>
                </button>

                <button class="btn btn-sm btn-danger actionHandler" data-action="delete"
                    data-url="{{ route('admin.category.destroy', $record->uuid) }}"> <i
                        class="ri-delete-bin-line"></i></button>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="p-4 text-center">No Data Available !</td>
    </tr>
@endforelse
