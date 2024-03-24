<x-layouts.app>

  <!-- title -->
  <x-slot name="title">
    お問い合わせ
  </x-slot>
  <!-- content -->
  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <!-- text -->
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
          お問い合わせ
        </h2>

        <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
          PHP Framework Laravel 8 によるお問い合わせフォームの実装
        </p>
      </div>

      <!-- alert -->
      @if ($errors -> any())
        <div class="mx-auto max-w-screen-md items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50">
          <p>入力エラーがあります</p>
        </div>
      @endif

      <!-- form -->
      <form
        class="h-adr mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2"
        action="{{ url('/contact') }}"
        method="post"
      >
        <span class="p-country-name" style="display:none;">Japan</span>
        @csrf
        @foreach ($form_content_data as $key => $form_data)
          <x-common.edit_box
            :name="$form_data['name']"
            :label="$form_data['label']"
            :type="$form_data['type']"
            :data="$form_data['data']"
            :value="isset($form_data['value']) ? $form_data['value'] : ''"
          />
          @if ($errors->has($form_data['name']))
            <x-common.error_alert :message="$errors->first($form_data['name'])" />
          @endif
        @endforeach

        <div class="flex items-center justify-between sm:col-span-2">
          <button
            class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
            type="submit"
          >
            確認画面へ
          </button>
        </div>

      </form>

    </div>
  </div>
</x-layouts.app>