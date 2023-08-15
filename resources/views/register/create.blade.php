<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <h1 class="text-center font-bold uppercase text-xs text-gray-700">Register</h1>
            <form method="POST" action="/register">
                @csrf


                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        name
                    </label>


                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="name"
                    id="name"
                    value="{{old('name')}}"
                    required
                    >
                </div>
                @error('name')
                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>   
                @enderror
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        username
                    </label>


                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="username"
                    id="username"
                    value="{{old('username')}}"
                    required
                    >
                </div>
                @error('username')
                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>   
                @enderror
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        email
                    </label>


                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="email"
                    name="email"
                    id="email"
                    value="{{old('email')}}"
                    required
                    >
                </div>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>   
               @enderror
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>


                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="password"
                    name="password"
                    id="password"
                    required
                    >
                </div>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>   
               @enderror
                ​<div class="mb-6"> <button type="" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" >submit</button> </div>
            </form>
        </main>
    </section>
</x-layout>