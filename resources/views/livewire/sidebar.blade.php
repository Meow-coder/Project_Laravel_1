<div class = "sidebar">
    <div class = "sidebar-header">
        <div class = "text-center">JAapartmen 1.0</div>
    </div>
    <div class = "sidebar-body">
        <ul class = "menu">
            <li wire:click = "changeMenu('dashboard')" @if ($currentMenu == 'dashboard') class = "active" @endif>
                    <i class = "fa-solid fa-house me-2">Daahboard</i>
            </li>
            <li wire:click = "changeMenu('expense/index')" @if ($currentMenu == 'expense/index') class = "active" @endif>
                    <i class = "fa-solid fa-building me-2"></i>
                    บันทึกค่าใช้จ่าย             
            </li>
            <li wire:click = "changeMenu('room')" @if ($currentMenu == 'room') class = "active" @endif>             
                    <i class = "fa-solid fa-home me-2"></i>
                    ห้องพัก                
            </li>
            <li wire:click = "changeMenu('user/index')" @if ($currentMenu == 'user/index') class = "active" @endif>
                    <i class = "fa-solid fa-user me-2"></i>
                    ผู้เข้าพัก              
            </li>
            </li>
            <li wire:click = "changeMenu('company/index')" @if ($currentMenu == 'company/index') class = "active" @endif>
                    <i class = "fa-solid fa-building me-2"></i>
                    ข้อมูลสถานประกอบการ
                </a>
            </li>
        </ul>
    </div>
</div>