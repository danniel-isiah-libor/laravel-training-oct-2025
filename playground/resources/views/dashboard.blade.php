<x-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-900 text-white">
        <h1 class="text-3xl font-bold mb-4">Welcome to your Dashboard!</h1>
        <p class="text-gray-300 mb-8">This is static dashboard content.</p>

        <form action="{{ route('user.logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white font-semibold">
                Logout
            </button>
        </form>
    </div>
</x-layout>