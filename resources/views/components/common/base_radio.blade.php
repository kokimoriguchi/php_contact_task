<div class="sm:col-span-2">
  <label
    for="{{ $name }}"
    class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
  >
    {{ $label }}
  </label>
  <div class="flex flex-row">
    @foreach ($data as $key => $value)
      <div
        class="flex flex-grow items-center justify-center border w border-gray-200 rounded"
        onclick="toggleRadio(this)"
        data-radio-for="{{ $key }}"
      >
          <input
            id="{{ $key }}"
            type="radio"
            value="{{ $key }}"
            name="{{ $name }}"
            class="h-4 w-8 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
          >
          <label
            for="{{ $name }}"
            class="w-full py-4 ms-2 text-sm font-medium text-gray-900"
          >
            {{ $value}}
          </label>
      </div>
    @endforeach
  </div>
</div>

<!-- 下記のJavaScriptでdivタグをクリックしてもラジオボタンが選択されるようにしている -->
<script>
  function toggleRadio(target) {
    const radioFor = target.getAttribute('data-radio-for');
    const radio = document.getElementById(radioFor);
    radio.checked = true;
  }
</script>
