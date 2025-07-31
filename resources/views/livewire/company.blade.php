<div>
    <div class = "content-header">ข้อมูลสถานประกอบการ</div>
    <form wire:submit = "save">
        <div class = "flex gap-3">
            <div class = "w-1/3">
                <label for = "name">ชื่อสถานประกอบการ</label>
                <input type = "text" wire:model = "name" class = "form-control bg-white">
            </div>
            <div class = "w-1/3">
                <label for = "address">ที่อยู่</label>
                <input type = "text" wire:model = "address" class = "form-control bg-white">
            </div>
            <div class = "w-1/3">
                <label for = "phone" >เบอร์โทรศัพท์</label>
                <input type = "text" wire:model = "phone" class = "form-control bg-white">
            </div>
        </div>

        <div class = "mt-3">
            <label for = "tax_code">เลขประจำตัวผู้เสียภาษี</label>
            <input type = "text" wire:model = "tax_code" class = "form-control bg-white">
        </div>

        <div class = "mt-3 ">
            @if($logoUrl)
                <img src = "{{ $logoUrl }}" alt = "logo" class = "w-16 h-16 mb-3 rounded-md shadow-2xl shadow-gray-500/50 border border-gray-200" />
            @endif
            <label for = "logo">โลโก้</label>
            <input type = "file" wire:model = "logo" class = "form-control bg-white shadow-lg">
        </div>

        <button type = "submit" class = "btn-primary mt-3">
            <i class = "fa fa-solid fa-check mr-2"></i> บันทึก</button>
        
        @if($flashMessage)
            <div class = "alert alert-success">
                {{ $flashMessage }}
            </div>
        @endif
    </form>
</div>