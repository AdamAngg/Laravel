<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">

            <h1 class="text-center font-bold uppercase text-xs text-gray-700">Log In</h1>
            <form method="POST" action="/sessions">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded" type="email" name="email" id="email"
                        value="{{ old('email') }}" required>
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded" type="password" name="password"
                        id="password" required>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror

                ​<div class="mb-6"> <button type=""
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">submit</button> </div>
            </form>
        </main>
    </section>
</x-layout>
