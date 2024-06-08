@if ($formElementType == 'input')
    <div class="{{ $margin }}">
        <label for="setting-input-2" class="form-label">
            {{ $labelTitle }}
            @if ($isRequired)
                <span class="text-danger">*</span>
            @endif
        </label>
        <input id="{{ $inputId }}" type="{{ $inputType }}" class="form-control" wire:model="{{ $model }}"
            placeholder="{{ $placeholder }}">
    </div>
@elseif($formElementType == 'file')
    <label class="form-label">
        <code class="highlighter-rouge">
            @error($model)
                {{ $message }}
            @enderror
        </code>
    </label>
    <div>
        <input accept="image/jpeg,image/png,image/jpg" type="file" wire:model.blur="{{ $model }}"
            class="form-control">
        <div class="mt-2">
            @if ($this->$model && !is_string($this->$model))
                <img src="{{ $this->$model->temporaryUrl() }}" width="200" height="170"
                    style="border-radius: 15px">
            @else
                @if ($this->$model)
                    <img src="{{ asset('storage/' . $location . '/images/' . $this->$model) }}" width="200"
                        height="170" style="border-radius: 15px">
                @else
                    <img src="{{ asset($avatar) }}" alt="user-avatar" width="200" height="170"
                        style="border-radius: 15px">
                @endif
            @endif
        </div>
    </div>
@elseif($formElementType == 'select')
    <div class="{{ $width }}">
        <label class="form-label">
            {{ $labelTitle }}
            @if ($isRequired)
                <code class="highlighter-rouge">*</code>
            @endif
            <code class="highlighter-rouge">
                @error($model)
                    {{ $message }}
                @enderror
            </code>
        </label>
        <select wire:model.blur="{{ $model }}" class="form-control form-select">
            <option selected="" value="0">Choose...</option>
            @foreach ($options as $key => $option)
                <option value="{{ $key }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
@elseif($formElementType == 'checkbox')
    <div class="{{ $width }}">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model.blur="{{ $model }}">
            <label class="form-label form-check-label">
                {{ $labelTitle }}
                @if ($isRequired)
                    <code class="highlighter-rouge">*</code>
                @endif
                <code class="highlighter-rouge">
                    @error($model)
                        {{ $message }}
                    @enderror
                </code>
            </label>
        </div>
    </div>
@elseif($formElementType == 'radio')
    <div class="{{ $width }}">
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model.blur="{{ $model }}"
                value="{{ $value }}">
            <label class="form-label form-check-label">
                {{ $labelTitle }}
                @if ($isRequired)
                    <code class="highlighter-rouge">*</code>
                @endif
                <code class="highlighter-rouge">
                    @error($model)
                        {{ $message }}
                    @enderror
                </code>
            </label>
        </div>
    </div>
@else
    <div class="{{ $width }}">
        <label class="form-label">
            {{ $labelTitle }}
            @if ($isRequired)
                <code class="highlighter-rouge">*</code>
            @endif
            <code class="highlighter-rouge">
                @error($model)
                    {{ $message }}
                @enderror
            </code>
        </label>
        <textarea class="form-control" rows="3" wire:model.blur="{{ $model }}" placeholder="{{ $placeholder }}"></textarea>
    </div>
@endif
