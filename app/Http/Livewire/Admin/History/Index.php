<?php

namespace App\Http\Livewire\Admin\History;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        if (Auth::user()->level === 1) {
            $order = Order::where('status', 1)->with('user')->latest()->get();
        } else {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 1)->with('user')->latest()->get();
        }

        return view('livewire.admin.history.index', [
            "orders" => $order
        ]);
    }
}
