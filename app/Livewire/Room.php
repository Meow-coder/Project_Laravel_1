<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RoomModal;

class Room extends Component {
    public $rooms = [];
    public $showModal = false;
    public $showModalEdit = false;
    public $showModalDelete = false;
    public $id;
    public $name;
    public $price_day;
    public $price_month;
    public $from_number;
    public $to_number;
    public $status;
    public $price_per_day;
    public $price_per_month;

    public function mount() {
        $this->fetchData();
    }

    public function openModal(){
        $this->showModal = true;
    }

    public function openModalEdit($id){
        $this->showModalEdit = true;
        $this->id = $id;

        $room = RoomModal::find($id);
        $this->name = $room->name;
        $this->price_day = $room->price_day;
        $this->price_month = $room->price_month;
    }

    public function updateRoom(){
        $room = RoomModal::find($this->id);
        $room->name = $this->name;
        $room->price_day = $this->price_day;
        $room->price_month = $this->price_month;
        $room->save();
    }

    public function deleteRoom($id){
        $room = RoomModal::find($id);
        $room->status = 'delete';
        $room->save();

        $this->showModalDelete = false;
        $this->fetchData();
    }



    public function fetchData(){
        $this->rooms = RoomModal::where('status', 'use')
        ->orderBy('id', 'desc')
        ->get();
    }

    public function createRoom(){
        $this->validate([
            'from_number' => 'required',
            'to_number' => 'required',
            'price_per_day' => 'required',
            'price_per_month' => 'required',
        ]);

        if ($this->from_number > $this->to_number) {
            $this->addError('from_number', 'ห้องต้องมีค่าน้อยกว่าห้องสุดท้าย');
            return;
        }

        if ($this->to_number > 1000) {
        $this->addError('to_number', 'ห้องสุดท้ายต้องมีค่าน้อยกว่า 1000');
            return;
        }

        for ($i = $this->from_number; $i <= $this->to_number; $i++) {
            $room = new RoomModal();
            $room->name = $i;
            $room->price_day = $this->price_per_day;
            $room->price_month = $this->price_per_month;
            $room->status = 'use';
            $room->save();
        }

        $this->showModal = false;
        $this->fetchData();
    }

    public function render() {
        return view('livewire.room');
    }
}