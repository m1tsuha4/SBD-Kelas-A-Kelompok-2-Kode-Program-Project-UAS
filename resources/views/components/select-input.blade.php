<select id="{{ $name }}" name="{{ $name }}">
    @foreach ($options as $optionValue => $optionLabel)
        <option value="{{ $optionValue }}" {{ $value == $optionValue ? 'selected' : '' }}>
            {{ $optionLabel }}
        </option>
    @endforeach
</select>
