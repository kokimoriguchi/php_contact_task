@extends('layouts.app')

@section('title')
  Contact
@endsection

@section('content')
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
      <!-- text -->

      <!-- form -->
      <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2">
        <div class="sm:col-span-2">
          <label
            for="contact_name"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            お名前
          </label>
          <input
            name="contact_name"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="contact_company"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            会社名
          </label>
          <input
            name="contact_company"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="email"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            メールアドレス
          </label>
          <input
            name="email"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="tel_number"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            電話番号
          </label>
          <input
            name="tel_number"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="address_number"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            郵便番号
          </label>
          <input
            name="address_number"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="prefecture"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            都道府県
          </label>
          <select
            name="prefecture"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          >
            <option disabled selected>選択してください</option>
            @foreach ($prefectures_data as $prefecture)
              <option value="{{ $prefecture->id }}">{{ $prefecture->pref_name }}</option>
            @endforeach
          </select>
        </div>

        <div class="sm:col-span-2">
          <label
            for="city_name"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            市区町村
          </label>
          <input
            name="city_name"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="street_name"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            番地・マンション名
          </label>
          <input
            name="street_name"
            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          />
        </div>

        <div class="sm:col-span-2">
          <label
            for="message"
            class="mb-2 inline-block text-sm text-gray-800 sm:text-base"
          >
            お問い合わせ内容
          </label>
          <textarea
            name="message"
            class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
          ></textarea>
        </div>

        <div class="flex items-center justify-between sm:col-span-2">
          <button
            class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
          >
            Send
          </button>
        </div>
      </form>
      <!-- form -->
    </div>
  </div>
@endsection