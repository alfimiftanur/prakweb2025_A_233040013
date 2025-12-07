<x-layout title="Daftar Kategori">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-center mb-4">Daftar Kategori</h1>

        @if ($categories->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($categories as $category)
                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500 hover:shadow-lg transition">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $category->name }}</h2>
                        <p class="text-gray-600 mb-4">
                            <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                                {{ $category->posts_count }} Posts
                            </span>
                        </p>
                        <a href="/posts?category={{ $category->id }}" class="text-blue-600 hover:text-blue-800 font-medium transition">
                            Lihat Posts →
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-xl text-gray-600">Belum ada kategori yang tersedia.</p>
            </div>
        @endif
    </div>
</x-layout>
