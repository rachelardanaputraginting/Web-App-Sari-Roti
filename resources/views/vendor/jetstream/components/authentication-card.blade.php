<div class="min-h-screen flex flex-col sm:justify-center bg-primary items-center pt-6 sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden shadow bg-secondary sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
