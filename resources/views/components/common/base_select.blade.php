<div class="sm:col-span-2">
  <label
    for="{{ $name }}"
    class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
  >
    {{ $label }}
  </label>
  <select
    name="{{ $name }}"
    class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
  >
    <option disabled selected>選択してください</option>
    @foreach ($data as $key => $optionValue)
      <option value="{{ $key }}" {{ $key == $value ? 'selected' : '' }}>{{ $optionValue }}</option>
    @endforeach
  </select>
</div>
