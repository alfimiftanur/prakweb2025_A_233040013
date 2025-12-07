<x-layout title="Register">
    
    <x-slot>
        
    <form action="/register" method="post">
        @csrf
        <p class="font-bold text-2xl text-gray-400">Name</p>
        <input type="text" name="name" id="" class="bg-gray-200 text-black">
        <p class="font-bold text-2xl text-gray-400">Username</p>
        <input type="text" name="username" id="" class="bg-gray-200 text-black">
        <p class="font-bold text-2xl text-gray-400">Email</p>
        <input type="email" name="email" id="" class="bg-gray-200 text-black">
        <p class="font-bold text-2xl text-gray-400">Masukkan Password</p>
        <input type="password" name="password1" id="" class="bg-gray-200 text-black">
        <p class="font-bold text-2xl text-gray-400">Masukkan Ulang Password</p>
        <input type="password" name="password2" id="" class="bg-gray-200 text-black ">
        <br>
        <button type="submit" class="bg-blue-500 mt-4 text-2xl p-2 text-white">Register</button>
    </form>
    </x-slot>

</x-layout>