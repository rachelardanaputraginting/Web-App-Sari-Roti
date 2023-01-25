<div>

    {{-- breadcumbs --}}
    <section id="breadcumbs" class="pt-6  px-4">
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="font-semibold">Laporan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir breadcumbs --}}

    {{-- cari-laporan --}}
    <section id="cari-laporan" class="py-12">
        <div class="flex flex-wrap px-4 mb-8">
            <div class="w-full flex items-center bg-white py-2 px-4 shadow-md dark:bg-dark rounded-md text-primary">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-clipboard-text dark:text-secondary" width="40"
                    height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                    </path>
                    <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                    <path d="M9 12h6"></path>
                    <path d="M9 16h6"></path>
                </svg>
                <h2 class="px-4 font-semibold py-5 text-2xl dark:text-secondary">Laporan</h2>
            </div>
        </div>
        <div class="flex flex-wrap justify-start items-center">
            <div class="w-3/4 md:w-1/4 px-4">
                <div class="form-group">
                    <label for="report">Pilih Jenis Laporan</label>
                    <select wire:model="report" id="report" class="select w-full select-bordered" onchange="tes()">
                        <option value="day">Harian</option>
                        <option value="week" id="week">Mingguan</option>
                        <option value="month">Bulanan</option>
                        <option value="year" id="year">Tahunan</option>
                    </select>
                </div>
            </div>
            <div class="md:w-1/12 w-2/12 hidden" id="inWeek">
                <div class="form-group">
                    <label for="for">Ke-</label>
                    <select wire:model="for" class="select w-full select-bordered" onchange="tes()">
                        <option value="1" id="satu" class="disabled">1</option>
                        <option value="2" id="dua" class="disabled">2</option>
                        <option value="3" id="tiga" class="disabled">3</option>
                        <option value="4" id="empat" class="disabled">4</option>
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <button type="submit" class="px-4 py-2.5 rounded-md text-white bg-secondary mt-6">Tampilkan</button>
            </div>
        </div>
    </section>
    {{-- akhir-cari-laporan --}}


    @if ($orders)
        {{-- tampilam-laporan --}}
        <section id="akhir-tampilan-laporan">
            <div class="w-full px-4 md:text-center py-4">
                <h3 class="text-2xl font-semibold">Laporan Penjualan {{ $title }}</h3>
            </div>
            <div class="w-full px-4 flex my-2">
                {{-- @if ($orders->count() > 0)
                    <a href="{{ route('admin.report.print', [request('report'), request('for')]) }}" target="_blank"
                        class="py-2 px-3 bg-yellow-500 text-white rounded-md flex gap-2"><svg
                            xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                            </path>
                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                            <rect x="7" y="13" width="10" height="8" rx="2"></rect>
                        </svg> Cetak Laporan </a>
                @endif --}}
            </div>
            <div class="flex overflow-x-scroll scrolling-wrapper">
                <div class="w-full flex flex-wrap items-center">
                    <div class="w-full px-4">
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
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $order->customer_id }}</td>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->id }}</td>
                                        <td> {{ Carbon\Carbon::parse($order->order_date)->translatedFormat('d F Y') }}
                                        </td>
                                        <td>{{ $order->total_order_price }}</td>
                                        <td>Rp. {{ number_format($order->total_order_price) }}</td>
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
            </div>
        </section>
        {{-- akhir-tampilam-laporan --}}
    @endif

    <script>
        function tes() {
            var tes = document.getElementById("report").value;
            var parent = document.getElementById("inWeek");
            if (tes == "week") {
                document.getElementById("inWeek").classList.add('block');
                document.getElementById("inWeek").classList.remove('hidden');
            } else {
                document.getElementById("inWeek").classList.add('hidden');
                document.getElementById("inWeek").classList.remove('block');
                parent.removeChild(parent.lastChild);
            }
        }
    </script>


</div>
