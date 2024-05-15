@if (!empty(session('success')) || !empty(session('error')))
    <div id="message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        @if (!empty(session('success')))
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        @elseif (!empty(session('error')))
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        @endif
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var messageElement = document.getElementById('message');

        if (messageElement) { // Check if the message element exists
            setTimeout(function() {
                messageElement.style.display = 'none';
            }, 5000); // Hide message after 5 seconds
        }
    });
</script>

