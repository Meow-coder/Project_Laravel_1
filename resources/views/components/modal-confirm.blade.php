@props(['title', 'text', 'clickConfirm', 'clickCancel'])

<x-modal wire:model="showModalDelete" maxWidth="xl" title="{{ $title }}">

    <div class = "text-center text-xl p-5">
        <div class = "text-8xl text-yellow-500 mb-5">
            <i class = "fa-solid fa-question"></i>
        </div>
        <div class = "text-4xl font-bold">{{ $title }}</div>
        <div class = "text-2xl mt-3">{{ $text }}</div>
    </div>

    <div class = "mt-5 text-center pb-5">
        <button class = "btn-success mr-2" wire:click="{{ $clickConfirm }}">
            <i class = "fa-solid fa-check"></i>
            ยืนยัน
        </button>
        <button class = "btn-secondary" wire:click="{{ $clickCancel }}">
            <i class = "fa-solid fa-xmark"></i>
            ยกเลิก
        </button>
    </div>
</x-modal>