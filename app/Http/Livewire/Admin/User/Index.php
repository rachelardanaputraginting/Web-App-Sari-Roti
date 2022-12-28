<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        if (isset($request)) {
            if (Auth::user()->level === 1) {
                $user = User::with(['orders', 'customer_orders'])->where('name', 'LIKE', '%' . $request->search . '%')->paginate(8);
            } elseif (Auth::user()->level === 2) {
                $user = User::with(['orders', 'customer_orders'])->where('name', 'LIKE', '%' . $request->search . '%')->where('level', '!=', 1)->paginate(8);
            }
        } else {
            if (Auth::user()->level === 1) {
                $user = User::with(['orders', 'customer_orders'])->paginate(8);
            } elseif (Auth::user()->level == 2) {
                $user = User::with(['orders', 'customer_orders'])->where('level', '!=', 1)->paginate(8);
            }
        }

        return view('livewire.admin.user.index', [
            "users" => $user
        ]);

    }
}
