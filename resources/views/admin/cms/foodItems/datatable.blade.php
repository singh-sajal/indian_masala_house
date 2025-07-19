@forelse ($records as $record)
    <tr>


        <td>
            <div class="d-flex align-items-center">

                <img class="avatar avatar-md me-2"
                    src="{{ asset($record->avatar ?? 'admin/assets/images/avatar/1.png') }}" alt="{{ $record->name }}">

                {{-- Add the name and username into flex column the username a slight smaller --}}
                {{-- <a class="d-flex flex-column" href="{{ route('admin.profile', $record->uuid) }}"> --}}
                <span class="text-dark fw-bold">{{ $record->name }}</span>
                {{-- <span class="text-muted">{{ $record->username ?? '---' }}</span> --}}
                {{-- </a> --}}

            </div>
        </td>

        <td>
            {{ $record->category->name ?? '' }}
        </td>

        <td>
            {{ $record->allergens ?? '' }}
        </td>





        <td>
            <button class="badge badge-xs actionHandler bg-{{ $record->status == '1' ? 'success' : 'danger' }}"
                data-action="togglestatus"
                data-url="{{ route('admin.food.toggleStatus', [
                    'uuid' => $record->uuid,
                    'column' => 'status',
                    'status' => $record->status == '1' ? 'active' : 'inactive',
                ]) }}">
                {{ $record->status == '1' ? 'Active' : 'Inactive' }}</button>
        </td>

        <td>
            <button class="badge badge-xs actionHandler bg-{{ $record->is_featured == '1' ? 'success' : 'danger' }}"
                data-action="togglestatus"
                data-url="{{ route('admin.food.toggleStatus', [
                    'uuid' => $record->uuid,
                    'column' => 'is_featured',
                    'status' => $record->is_featured == '1' ? 'active' : 'inactive',
                ]) }}">
                {{ $record->is_featured == '1' ? 'Active' : 'Inactive' }}</button>
        </td>

        <td>
            <button class="badge badge-m actionHandler bg-{{ $record->is_starter == '1' ? 'success' : 'danger' }}"
                data-action="togglestatus"
                data-url="{{ route('admin.food.toggleStatus', [
                    'uuid' => $record->uuid,
                    'column' => 'is_starter',
                    'status' => $record->is_starter == '1' ? 'active' : 'inactive',
                ]) }}">
                {{ $record->is_starter == '1' ? 'Yes' : 'No' }}</button>
        </td>


        <td class="d-flex justify-space-between align-items-center">
            <span class="d-block ">
                <span class="badge bg-success">₹{{ number_format($record->full_price, 2) }}</span>
            </span>
            <span class="d-block ms-3">

                @if ($record->half_price)
                    <span class="badge bg-primary">₹{{ number_format($record->half_price, 2) }}</span>
                @else
                    <span class="badge bg-secondary">N/A</span>
                @endif
            </span>
        </td>

        <td>{{ $record->created_at->format('d-M-Y, h:i') }}</td>


        <td>
            <div class="btn-group">


                <button class="btn btn-sm btn-secondary btn-label actionHandler"
                    data-url="{{ route('admin.fooditem.edit', $record->uuid) }}">
                    <i class="ri-edit-box-line"></i>
                </button>

                <button class="btn btn-sm btn-danger actionHandler" data-action="delete"
                    data-url="{{ route('admin.fooditem.destroy', $record->uuid) }}"> <i
                        class="ri-delete-bin-line"></i></button>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="p-4 text-center">No Data Available !</td>
    </tr>
@endforelse
