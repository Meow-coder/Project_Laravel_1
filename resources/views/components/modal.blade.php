@props(['id', 'maxWidth', 'title'])

@php
    $id = $id ?? md5($attributes->wire('model'));
    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth] ?? 'sm:max-w-2xl';
@endphp

<div x-data="{ show: @entangle($attributes->wire('model')) }"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    
    class="fixed inset-0 z-50 px-4 py-6 overflow-y-auto sm:px-0 flex items-start justify-center"
    style="display: none;">
    
    <!-- Background Overlay -->
    <div class="fixed inset-0 transform transition-all" 
         x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
    </div>

    <!-- Modal Content -->
    <div class="relative bg-white rounded-lg overflow-hidden shadow-xl 
                transform transition-all w-full {{ $maxWidth }}" 
         x-show="show" 
         x-trap="show">
        
        <!-- Header -->
        <div class="px-6 py-4 bg-blue-500 text-white">
            <div class="text-lg font-medium">{{ $title }}</div>
        </div>

        <!-- Body -->
        <div class="px-6 py-4 text-gray-800">
            {{ $slot }}
        </div>
    </div>
</div>
