@props([
    'type' => 'success',
    'colors1' => [
        'success' => 'bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-12',
        'error' => 'bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md mb-12',
        'warning' => 'bg-yellow-100 border-t-4 border-yellow-500 rounded-b text-yellow-900 px-4 py-3 shadow-md mb-12'
    ],
    'colors2' => [
        'success' => 'fill-current h-6 w-6 text-green-500 mr-4',
        'error' => 'fill-current h-6 w-6 text-red-500 mr-4',
        'warning' => 'fill-current h-6 w-6 text-yellow-500 mr-4'
    ]
])

{{---------Flash Prompt---------}}
<div class="{{ $colors1[$type] }}" role="alert">
    <div class="flex">
        <div class="py-1"><svg class="{{ $colors2[$type] }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
