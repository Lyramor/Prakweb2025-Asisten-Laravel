<x-layout>
    <x-slot:title>
        Posts
    </x-slot:title>
    <h1 class="text-4xl font-bold text-gray-800 mb-8">All Posts</h1>
    
    <div class="grid gap-6">
        @forelse($posts as $post)
            <article class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-md mb-4">
                @endif
                
                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>
                
                <div class="flex items-center text-sm text-gray-600 mb-3">
                    <span class="mr-4">By {{ $post->user->name ?? 'Unknown' }}</span>
                    <span class="mr-4">Category: {{ $post->category->name ?? 'Uncategorized' }}</span>
                    <span>{{ $post->created_at->format('d M Y') }}</span>
                </div>
                
                <p class="text-gray-700 mb-4">{{ $post->excerpt }}</p>
                
                <div class="prose max-w-none">
                    <p class="text-gray-600">{{ Str::limit($post->body, 200) }}</p>
                </div>
                
                <a href="#" class="inline-block mt-4 text-blue-600 hover:text-blue-800 font-medium">Read full post →</a>
            </article>
        @empty
            <div class="bg-gray-100 rounded-lg p-8 text-center">
                <p class="text-gray-600 text-lg">Belum ada post yang tersedia.</p>
            </div>
        @endforelse
    </div>
</x-layout>
