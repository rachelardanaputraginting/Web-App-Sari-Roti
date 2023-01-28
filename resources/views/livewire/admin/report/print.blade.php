<x-app-layout>
    <div>
        @if ($orders)
            {{-- tampilam-laporan --}}
            <section id="akhir-tampilan-laporan">
                <x-container>
                    <div class="flex flex-wrap items-center">
                        <div class="w-full text-center py-4">
                            <h3 class="text-2xl font-semibold py-4">Laporan Penjualan {{ $title }}</h3>
                        </div>
                        <div class="w-full mb-3">
                            <table class="table w-full table-zebra">
                                <tbody>
                                    <tr>
                                        <td width="2px">Nama</td>
                                        <td width="2px">:</td>
                                        <td> {{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td width="2px">Tanggal</td>
                                        <td width="2px">:</td>
                                        <td>{{ Carbon\Carbon::parse(now())->translatedFormat('d F Y') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-full">
                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Pegawai</th>
                                    <th>Produk</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Jumlah</th>
                                    <th>Jumlah Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->customer_name }}</td>
                                        <td>{{ $order->user_name }}</td>
                                        <td>{{ $order->product_name }}</td>
                                        <td>{{ Carbon\Carbon::parse($order->order_date)->translatedFormat('d F Y') }}
                                        </td>
                                        <td>{{ $order->order_quantity }}</td>
                                        <td>Rp. {{ number_format($order->total_price) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" align="center">Tidak ada laporan penjualan!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
    </div>
    </x-container>
    </section>
    {{-- akhir-tampilam-laporan --}}
    @endif

    <script>
        window.print();
        window.onafterprint = window.close;
    </script>
    </div>
</x-app-layout>
