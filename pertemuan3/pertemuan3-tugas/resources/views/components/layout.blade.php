<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex gap-6">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
                <a href="/blog" class="text-gray-700 hover:text-blue-600 font-medium transition">Blog</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
                <a href="/posts" class="text-gray-700 hover:text-blue-600 font-medium transition">Posts</a>
                <a href="/categories" class="text-gray-700 hover:text-blue-600 font-medium transition">Categories</a>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 text-gray-300 py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="mb-4">
                <p>&copy; 2025. All rights reserved.</p>
            </div>
            <div class="text-sm text-gray-400 flex justify-center gap-4">
                <a href="/about" class="hover:text-gray-200 transition">About</a>
                <span>·</span>
                <a href="/" class="hover:text-gray-200 transition">Home</a>
                <span>·</span>
                <a href="/contact" class="hover:text-gray-200 transition">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>