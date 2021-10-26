{{---------Props to change styles based on attribute-------}}
@props([
    'type' => 'success',
    'colors1' => [
        'success' => 'bg-green-100 border-green-500 text-green-900',
        'error' => 'bg-red-100 border-red-500 text-red-900',
        'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-900'
    ],
    'colors2' => [
        'success' => 'text-green-500',
        'error' => 'text-red-500',
        'warning' => 'text-yellow-500'
    ]
])

{{---------Flash Prompt---------}}
<div {{ $attributes->merge(['class'=>"{$colors1[$type]} border-t-4 rounded-b px-4 py-3 shadow-md mb-12"]) }} role="alert">
    <div class="flex">
        <div class="py-1"><svg {{ $attributes->merge(['class'=>"{$colors2[$type]} fill-current h-6 w-6 mr-4"]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
