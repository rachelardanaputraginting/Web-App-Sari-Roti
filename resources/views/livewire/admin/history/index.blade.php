<div>
    {{-- breadcumbs --}}
    <section id="breadcumbs" class="pt-6">
        <x-container>
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="text-sm breadcrumbs">
                        <ul>
                            <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                            <li class="font-semibold">Riwayat Pemesanan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    {{-- Akhir breadcumbs --}}

    @if (!empty($orders))
        {{-- cart --}}
        <section id="cart" class="py-12">
            <x-container>
                <div class="flex flex-wrap px-4 mb-8">
                    <div
                        class="w-full flex items-center bg-white py-2 px-4 shadow-md rounded-md text-primary dark:bg-dark">
                        <div class="flex flex-wrap w-full items-center">
                            <div class="w-full md:w-1/2 mb-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-shopping-cart dark:text-secondary"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="6" cy="19" r="2"></circle>
                                    <circle cx="17" cy="19" r="2"></circle>
                                    <path d="M17 17h-11v-14h-2"></path>
                                    <path d="M6 5l14 1l-1 7h-13"></path>
                                </svg>
                                <h2 class="px-4 font-semibold py-4 text-2xl dark:text-secondary">Riwayat Pemesanan</h2>
                            </div>
                            <div class="w-full md:w-1/2 float-right">
                                <div class="form-control">
                                    <form method="get">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" placeholder="Search…" name="search"
                                                class="input input-bordered w-full dark:text-white"
                                                value="{{ request('search') }}" />
                                            <button type="submit"
                                                class="btn px-6 bg-secondary border-none hover:bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-white"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex overflow-x-scroll scrolling-wrapper">
                    <div class="flex w-full px-4 rounded-md">
                        <table class="table w-full pt-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pembeli</th>
                                    <th>Pegawai</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Total Harga</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $order->customer->name }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ Carbon\Carbon::parse($order->order_date)->translatedFormat('d F Y') }}
                                        </td>
                                        <td>
                                            @if ($order->status == 1)
                                                <div class="badge badge-success text-white">Sudah Bayar</div>
                                            @else
                                                <div class="badge badge-warning text-white">Belum Membayar</div>
                                            @endif
                                        </td>
                                        <td>Rp. {{ number_format($order->total_order_price) }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success text-white mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
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
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" align="center">Belum ada Riwayat Pemesanan!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </x-container>
        </section>
        {{-- akhir cart --}}
    @else
        <h3 class="text-center">Tidak ada riwayat pemesanan Produk!</h3>
    @endif
</div>
