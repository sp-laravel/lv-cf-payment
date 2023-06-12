<x-app-layout>
  <div class="max-w-5xl px-4 py-10 mx-auto sm:px-6 lg:px-8">
    <h1 class="text-4xl font-semibold text-gray-600">
      {{ $article->title }}
    </h1>
    <div class="mb-2 text-lg text-gray-500">
      {{ $article->extract }}
    </div>

    <figure class="mb-4">
      <img class="object-cover object-center w-full h-80" src="{{ $article->image }}" alt="">
    </figure>

    <div class="text-gray-500">
      <div class="">{!! $article->body !!}</div>
    </div>
  </div>
</x-app-layout>
