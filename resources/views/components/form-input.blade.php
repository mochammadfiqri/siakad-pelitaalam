@php
    $validation = $model;
@endphp

<label class="form-label">{{ $label }}</label>
<div class="input-group input-group-outline mt-n2">
    <input wire:model="{{ $model }}" type="{{ $type }}" class="form-control" value="{{ old($validation) }}"
        placeholder="{{ $placeholder }}">
</div>

@error($validation)
    <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
@enderror