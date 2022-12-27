<div>
    {{-- breadcumbs --}}
    <section id="breadcumbs" class="pt-6 px-4">
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="font-semibold">Pelanggan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir breadcumbs --}}


    {{-- semua pelanggan --}}
    <section id="semua-pelanggan" class="py-12">
        <div class="flex flex-wrap px-4 mb-8">
            <div class="w-full flex items-center bg-white py-2 px-4 shadow-md rounded-md dark:bg-dark text-primary">
                <div class="flex flex-wrap w-full items-center">
                    <div class="w-full md:w-1/2 mb-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-shopping-cart dark:text-secondary" width="40"
                            height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="6" cy="19" r="2"></circle>
                            <circle cx="17" cy="19" r="2"></circle>
                            <path d="M17 17h-11v-14h-2"></path>
                            <path d="M6 5l14 1l-1 7h-13"></path>
                        </svg>
                        <h2 class="px-4 font-semibold py-4 text-2xl dark:text-secondary">Pelanggan</h2>
                    </div>
                    <div class="w-full md:w-1/2 float-right">
                        <div class="form-control">
                            <label class="input-group">
                                <input type="search" placeholder="Cari..."
                                    class="input input-bordered w-full dark:text-white" wire:model="search" />
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-white"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div wire:loading>
                            Mencari pelanggan..
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full px-4">
            <div class="pt-2 pb-4 ">
                <a href="{{ route('admin.customer.create') }}"
                    class="px-3 py-2.5 text-white bg-green-500 rounded-md">Tambah Data</a>
            </div>
        </div>
        <div class="flex overflow-x-auto">
            <div class="w-full flex flex-wrap">
                <div class="w-full px-4">

                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Total Pembelian</th>
                                <th>Level</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $customer)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $customer->name }}</td>
                                    {{-- @php
                                        $order = App\Models\Order::where('customer_id', $customer->id)
                                            ->where('status', 1)
                                            ->sum('total_order_price');
                                    @endphp --}}
                                    {{-- <td><strong> Rp. {{ $order }}</strong></td> --}}
                                    <td>
                                        @if ($customer->member === 2)
                                            <span class="bg-purple-500 rounded-full text-white  px-4 py-2">Anggur</span>
                                        @elseif ($customer->member === 3)
                                            <span class="bg-red-900 rounded-full text-white  px-4 py-2">Cokelat</span>
                                        @else
                                            <span class="bg-green-500 rounded-full text-white  px-4 py-2">Pandan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.customers.show', $customer->id) }}"
                                            class="btn btn-sm btn-success text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-eye-check" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="2"></circle>
                                                <path
                                                    d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033">
                                                </path>
                                                <path d="M15 19l2 2l4 -4"></path>
                                            </svg></a>
                                        @if ($customer->member === 3)
                                            <label for="my-modal-3" class="btn btn-sm btn-warning text-white"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit-circle" width="22"
                                                    height="22" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                    </path>
                                                    <path
                                                        d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                    <path
                                                        d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999">
                                                    </path>
                                                </svg></label>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" align="center">Belum ada pelanggan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="px-4">
                    {{ $customers->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </section>

    @if (!empty($customer))
        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative">
                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-semibold mb-5">Ubah Level Pelanggan!</h3>
                <div class="form-group">
                    <form action="" method="post">
                        @csrf
                        <input type="text" name="member" class="input input-bordered w-full" placeholder="Panda"
                            hidden>
                        <button class="btn btn-success text-white">Pandan</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- akhir semua pelanggan --}}
    @endif
</div>
