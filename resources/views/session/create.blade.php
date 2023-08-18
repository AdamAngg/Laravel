<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <x-panel>

                <h1 class="text-center font-bold uppercase text-xs text-gray-700">Log In</h1>
                <form method="POST" action="/sessions">
                    @csrf
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" />
                    <x-form.submit-button>Log in</x-form.submit-button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
