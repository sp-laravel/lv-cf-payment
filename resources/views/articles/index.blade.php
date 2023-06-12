<x-app-layout>
  <div class="px-4 py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="space-y-6">
      @foreach ($articles as $article)
        <div class="overflow-hidden bg-white rounded shadow-lg">
          <img class="object-cover object-center w-full h-72" src="{{ $article->image }}" alt="">
          <div class="px-6 py-4">
            <h1 class="mb-2 text-xl font-semibold">
              <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            </h1>
            <div class="text-gray-700">
              {{ Str::limit($article->description, 150, '...') }}
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-8">
      {{ $articles->links() }}
    </div>

  </div>
</x-app-layout>
