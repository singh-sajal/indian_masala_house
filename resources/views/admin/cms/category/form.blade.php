<!-- Name -->
<div class="mb-3">
    <label for="name" class="form-label required">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $record->name ?? '' }}"
        placeholder="e.g. Starters, Main Course" required>
</div>

<!-- Description -->
<div class="mb-3">
    <label for="description" class="form-label required">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"
        placeholder="Enter a brief description..." required>{{ $record->description ?? '' }}</textarea>
</div>

<!-- Subtitle -->
<div class="mb-3">
    <label for="subtitle" class="form-label required">Subtitle</label>
    <textarea class="form-control" id="subtitle" name="subtitle" rows="3"
        placeholder="Enter a brief subtitle..." required>{{ $record->subtitle ?? '' }}</textarea>
</div>

<!-- Avatar -->
<div class="mb-3">
    <label for="avatar" class="form-label @if (Route::is('admin.category.create')) required @endif>">Avatar (Image)</label>
    <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*"
        @if (Route::is('admin.category.create')) required @endif>
</div>

<!-- Is Featured -->
<div class="form-check mb-4">
    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1"
        {{ !empty($record->is_featured) && $record->is_featured ? 'checked' : '' }}>

    <label class="form-check-label" for="is_featured">
        Mark as Featured Category
    </label>
</div>
