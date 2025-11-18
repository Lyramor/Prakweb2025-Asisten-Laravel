<x-layout>
    <x-slot:title>
        All Categories
    </x-slot:title>

    <div class="max-w-6xl mx-auto">
        <header class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">All Categories</h1>
            <p class="text-gray-600">Browse posts by category</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($categories as $category)
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6">
                    <div class="flex flex-col h-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $category->name }}</h2>

                        <div class="mt-auto">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">
                                    {{ $category->posts_count }} {{ Str::plural('post', $category->posts_count) }}
                                </span>

                                @if($category->posts_count > 0)
                                    <a href="{{ route('posts.index') }}?category={{ $category->id }}"
                                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm">
                                        View posts →
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">No categories found.</p>
                </div>
            @endforelse
        </div>

        <footer class="mt-8 pt-8 border-t border-gray-200">
            <a href="{{ route('posts.index') }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                ← Back to all posts
            </a>
        </footer>
    </div>
</x-layout>
