<x-layouts.app>
  <x-slot name="title">
    お問い合わせ送信完了
  </x-slot>

  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <div class="mb-10 md:mb-16">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
          Complete🎉
        </h2>
      </div>
      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <div class="mx-auto flex max-w-xl flex-col items-center text-center">
            <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">お問い合わせメール送信しました</p>

            <h1 class="mb-8 text-3xl font-bold text-black sm:text-4xl md:mb-12 md:text-5xl">Thanks for Contact!!</h1>

            <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
              <a href="{{ url('/') }}" class="min-w-[200px] inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">HOMEに戻る</a>
              <a href="{{ url('/contact') }}" class="min-w-[200px] inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">お問い合わせに戻る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>