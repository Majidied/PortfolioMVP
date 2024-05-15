<div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="code" class="block text-gray-700 font-bold mb-2">Enter Code:</label>
                <input type="text" name="code" id="code" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</div>
