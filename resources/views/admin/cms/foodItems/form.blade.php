<!-- Name -->
<div class="mb-3">
    <label for="name" class="form-label required">Item Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $record->name ?? ' ' }}" required>
</div>

<!-- Category -->
<div class="mb-3">
    <label for="category_id" class="form-label required">Select Category</label>
    <select class="form-select" id="category_id" name="category_id" required>
        <option value="">-- Select Category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ optional($record)->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- Description -->
<div class="mb-3">
    <label for="description" class="form-label required">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $record->description ?? ' ' }}</textarea>
</div>


<!-- Avatar -->
<div class="mb-3">
    <label for="avatar" class="form-label @if (Route::is('admin.fooditem.create')) required @endif>">Avatar (Image)</label>
    <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*"
        @if (Route::is('admin.fooditem.create')) required @endif>
</div>

<!-- Full Price -->
<div class="mb-3">
    <label for="full_price" class="form-label required">Full Price</label>
    <input type="number" step="0.01" class="form-control" id="full_price" name="full_price"
        value="{{ $record->full_price ?? ' '  }}" required>
</div>

<!-- Half Price -->
<div class="mb-3">
    <label for="half_price" class="form-label required">Half Price</label>
    <input type="number" step="0.01" class="form-control" id="half_price" name="half_price"
        value="{{ $record->half_price ?? ' '  }}" required>
</div>

<!-- Allergens -->
<div class="mb-3">
    <label for="allergens" class="form-label required">Allergens</label>
    <input type="text" class="form-control" id="allergens" name="allergens"
        value="{{ $record->allergens ?? ' '  }}" required>
</div>

<!-- Is Featured -->
<div class="form-check mb-2">
    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1"
        {{ !empty($record->is_featured) && $record->is_featured ? 'checked' : '' }}>
    <label class="form-check-label" for="is_featured">
        Mark as Featured
    </label>
</div>

<!-- Is Starter -->
<div class="form-check mb-2">
    <input class="form-check-input" type="checkbox" id="is_starter" name="is_starter" value="1"
        {{ !empty($record->is_starter) && $record->is_starter ? 'checked' : '' }}>
    <label class="form-check-label" for="is_starter">
        Mark as Starter
    </label>
</div>
