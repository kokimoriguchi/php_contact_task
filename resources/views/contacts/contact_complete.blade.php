<x-layouts.app>
  <x-slot name="title">
    お問い合わせ送信完了
  </x-slot>

  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
          お問い合わせ送信完了
        </h2>
      </div>

      <div class="mx-auto max-w-screen-md">
        <div class="flex justify-between mt-40">
          <div>
            <a
              class="inline-block rounded-lg border-2 border-black bg-gray-500 px-8 py-3 text-center text-sm font-semibold text-black outline-none ring-gray-300 transition duration-100 hover:bg-gray-900 focus-visible:ring active:bg-gray-700 md:text-base"
              href="{{ url('/contact') }}"
            >
              問い合わせに戻る
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>