<x-layouts.app>
  <x-slot name="title">
    お問い合わせ内容確認
  </x-slot>

  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
          お問い合わせ内容確認
        </h2>
      </div>

      <!-- alert -->
      @if (session('errors'))
        <div class="flex justify-center">
          <x-common.error_alert :message="session('errors')" />
        </div>
      @endif


      <div class="mx-auto max-w-screen-md">
        @foreach ($request_data as $key => $value)
        <div class="sm:col-span-2">
          <p class="mb-2 inline-block text-sm text-gray-800 sm:text-base">{{ $value['label'] }}</p>
          @if ($value['name'] === 'contact_message')
            <textarea
              disabled
              class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800"
            >{{ $value['value'] }}</textarea>
          @else
            <input
              class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800"
              disabled
              value="{{ $value['value'] }}"
            />
          @endif
        </div>
        @endforeach

        <div class="flex justify-between mt-10">
          <div>
            <a
              class="inline-block rounded-lg bg-gray-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-600 focus-visible:ring active:bg-gray-700 md:text-base"
              href="{{ url('/contact') }}"
            >
              戻る
            </a>
          </div>
          <div>
            <form
              class="flex items-center"
              action="{{ url('/contact/confirm') }}"
              method="post"
            >
              @csrf
              <button
                class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
                type="submit"
              >
                送信
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>