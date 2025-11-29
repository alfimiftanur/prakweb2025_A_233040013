<x-layout title="Posts">
    <h1 class="text-4xl font-bold text-center mb-8">Daftar Posts</h1>

    <div class="space-y-6">
        @foreach ($posts as $post)
            <article class="pb-4 border-b border-gray-300">
                <h2 class="text-2xl font-bold my-2">
                    <a href="/posts/{{ $post->slug }}" class="text-blue-600 no-underline hover:text-blue-800 hover:underline transition">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-gray-700 my-2">{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
</x-layout>