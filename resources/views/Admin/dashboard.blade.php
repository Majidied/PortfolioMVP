<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navigation -->
    <header class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <a href="#" class="text-xl font-bold text-gray-800">Admin Dashboard</a>
                <ul class="flex space-x-4">
                    <!-- Add logout button or user profile link here -->
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Sidebar -->
            <aside class="md:col-span-1 bg-gray-200 p-4">
                <ul class="space-y-2">
                    <li><a href="#add-skill" class="block px-2 py-1 rounded-md hover:bg-gray-300">Add Skill</a></li>
                    <li><a href="#add-project" class="block px-2 py-1 rounded-md hover:bg-gray-300">Add Project</a></li>
                    <li><a href="#add-client" class="block px-2 py-1 rounded-md hover:bg-gray-300">Add Client</a></li>
                    <li><a href="#view-messages" class="block px-2 py-1 rounded-md hover:bg-gray-300">View Messages</a>
                    </li>
                </ul>
            </aside>

            <!-- Main Content Area -->
            <div class="md:col-span-3 bg-white p-4">
                @include('options._message')
                <!-- Add Skill Form -->
                <section id="add-skill" class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Add Skill</h2>
                    <form action="{{ route('add-skill') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="title" class="block font-semibold">Skill Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <div>
                            <label for="url" class="block font-semibold">Skill Image URL</label>
                            <input type="text" id="url" name="url"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <div>
                            <label for="category" class="block font-semibold">Category</label>
                            <select id="category" name="category"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                                <option value="Back-end">Backend</option>
                                <option value="Front-end">Frontend</option>
                                <option value="Desktop">Desktop</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Add
                            Skill</button>
                    </form>

                </section>

                <!-- Add Project Form -->
                <section id="add-project" class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Add Project</h2>
                    <form action="{{route('add-project')}}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="title" class="block font-semibold">Project Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <div>
                            <label for="description" class="block font-semibold">Project Description</label>
                            <textarea id="description" name="description" rows="4"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2"></textarea>
                        </div>
                        <div>
                            <label for="image" class="block font-semibold">Project Image URL</label>
                            <input type="text" id="image" name="image"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <div>
                            <label for="githubLink" class="block font-semibold">GitHub Link</label>
                            <input type="text" id="githubLink" name="githubLink"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Add
                            Project</button>
                    </form>
                </section>

                <!-- Add Client Form -->
                <section id="add-client" class="mb-8">
                    <h2 class="text-lg font-semibold mb-4">Add Client</h2>
                    <form action="{{ route('add-client') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="title" class="block font-semibold">Client Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <div>
                            <label for="url" class="block font-semibold">Client Image URL</label>
                            <input type="text" id="url" name="url"
                                class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2">
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Add
                            Client</button>
                    </form>

                </section>

                <!-- View Messages -->
                <section id="view-messages">
                    <h2 class="text-lg font-semibold mb-4">View Messages</h2>
                    <section id="messages" class="py-10">
                        <div class="container mx-auto">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Received Messages</h2>
                            <div class="grid grid-cols-1 gap-4">
                                @foreach ($messages as $message)
                                    <div class="bg-white shadow-md rounded-md p-4">
                                        <p class="text-gray-800"><strong>Name:</strong> {{ $message->name }}</p>
                                        <p class="text-gray-800"><strong>Email:</strong> {{ $message->email }}</p>
                                        <p class="text-gray-800"><strong>Message:</strong> {{ $message->message }}</p>
                                        <p class="text-gray-500"><strong>Received At:</strong>
                                            {{ $message->created_at->format('Y-m-d H:i:s') }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </main>

</body>

</html>
