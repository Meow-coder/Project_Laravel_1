<div class = "navbar">
    <div class = "flex items-center justify-between">
        <div>
            <i class = "fa-solid fa-user me-2"></i>
            <span class ="username">{{ $user_name }}</span>
        </div>
        <div>
            <button wire:click="showModal = true" class = "border border-gray-300 px-6 py-3 rounded-2xl hoverexit">
                <span>ออกจากระบบ</span>
                <i class = "fa-solid fa-sign-out-alt"></i>
            </button>
        </div>
    </div>

    <x-modal wire:model="showModal" maxWidth="sm" title="ออกจากระบบ">
        <div class = "text-center">
           <div><i class = "fa-solid fa-question text-red-500 text-5xl"></i></div>
            <div class = "text-3xl font-bold text-gray-700 mt-3 ">ออกจากระบบ</div>
            <div class = "text-gray-500 mt-2 text-2xl">คุณจะต้องการออกจากระบบหรือไม่</div>
        </div>
        <div class = "flex justify-center mt-6  pb-4">
            <button class = "btn-danger mr-2" wire:click="logout">
            <i class = "fa-solid fa-check"></i>
            ยืนยัน
        </button>

            <button class = "btn-secondary" wire:click="showModal = false">
            <i class = "fa-solid fa-xmark"></i>
            ยกเลิก
        </button>
        
        </div>
    </x-modal>
</div>