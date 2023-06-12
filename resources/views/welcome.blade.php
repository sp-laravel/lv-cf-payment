<x-app-layout>
  <div class="px-4 py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="grid grid-cols-3 gap-6">
      @foreach ($products as $product)
        <div class="relative overflow-hidden bg-white rounded shadow-lg">
          <span
            class="bg-blue-100 text-blue-800 text-xs font-semibold absolute top-4 left-4 mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
            S/. {{ $product->price }}
          </span>
          <img class="object-cover w-full h-56" src="{{ $product->image }}" alt="">
          <div class="px-6 py-4">
            <h1 class="text-xl font-semibold text-gray-900 uppercase">
              {{ $product->title }}
            </h1>
            <p>
              {{ Str::limit($product->description, 150, '...') }}
            </p>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-8">
      {{ $products->links() }}
    </div>
  </div>
</x-app-layout>
