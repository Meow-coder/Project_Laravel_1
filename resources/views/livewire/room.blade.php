<div>
    <div class = "content-header">
        <div class = "flex justify-between">
            <div>ห้องพัก</div>
            <div>ทั้งหมด <strong>{{ $rooms->count() }}</strong> ห้อง</div>
        </div>
    </div>
    <div class = "content-body">
        <button class = "btn-success hovercreate" wire:click="openModal">
            <i class = "fa-solid fa-plus mr-2"></i>เพิ่มห้องพัก
        </button>

        <table class = "table table-bordered mt-4">
            <thead>
                <tr>
                    <th class = "text-left">ห้อง</th>
                    <th class = "text-left" width = "150px">ค่าเช่าต่อวัน</th>
                    <th class = "text-left" width = "150px">ค่าเช่าต่อเดือน</th>
                    <th width = "130px">จัดการ</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->name }}</td>
                        <td class = "text-left">{{ number_format($room->price_day, 2) }}</td>
                        <td class = "text-left">{{ number_format($room->price_month, 2) }}</td>
                        <td>
                            <button class = "btn-warning mr-2 hoveredit" wire:click="openModalEdit({{ $room->id }})">
                                <i class = "fa-solid fa-pencil"></i>
                            </button>
                            <button class = "btn-danger hoverdelete" wire:click="openModalDelete({{ $room->id }})">
                                <i class = "fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>

<x-modal wire:model="showModal" maxWidth="xl" title="เพิ่มห้องพัก">
    @if ($errors->any())
        <div class = "alert alert-danger">
            <div class = "alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif

    <div>
        <h1 class = "text-xl text-red-500">สร้างห้องพักแบบจำนวณมากในครั้งเดียว</h1>
    </div>

    <div class = "flex gap-5 mt-3">
        <div class = "w-1/2">
            <label>จากหมายเลข</label>
            <input type = "text" class = "form-control" wire:model="from_number">
        </div>
        <div class = "w-1/2">
            <label>ถึงหมายเลข</label>
            <input type = "text" class = "form-control" wire:model="to_number">
        </div>
    </div>
</x-modal>