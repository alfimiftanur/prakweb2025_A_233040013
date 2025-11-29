<x-layout title="Contact">
    <h1 class="text-4xl font-bold text-center mb-4">Contact Us</h1>
    <p class="text-center text-gray-700 mb-8">Ini adalah contoh contact form</p>

    <div class="max-w-md mx-auto mt-8">
        <form method="POST" action="/contact" class="flex flex-col gap-4">
            @csrf
            
            <div>
                <label for="name" class="block font-bold mb-1 text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block font-bold mb-1 text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="subject" class="block font-bold mb-1 text-gray-700">Subject</label>
                <input type="text" id="subject" name="subject" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="message" class="block font-bold mb-1 text-gray-700">Message</label>
                <textarea id="message" name="message" rows="6" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 font-sans"></textarea>
            </div>

            <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700 transition cursor-pointer">Send Message</button>
        </form>

        @if(session('success'))
            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-md border border-green-300">
                {{ session('success') }}
            </div>
        @endif
    </div>
</x-layout>
