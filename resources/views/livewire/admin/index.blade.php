<div>

        {{-- breadcumbs --}}
        <section id="breadcumbs" class="pt-6  px-4">
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="text-sm breadcrumbs">
                            <ul>
                                <li><a href="{{ route('admin.dashboard') }}">Sari Roti</a></li>
                                <li class="font-semibold">Beranda</li>
                            </ul>
                        </div>
                    </div>
                </div>

        </section>
        {{-- Akhir breadcumbs --}}

        {{-- Card --}}
        <section id="card" class="py-12">
                <div class="flex px-4 mb-8">
                    <div class="w-full flex items-center bg-white py-2 px-4 shadow-md rounded-md dark:bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-file-analytics text-primary dark:text-secondary" width="40" height="40"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <line x1="9" y1="17" x2="9" y2="12"></line>
                            <line x1="12" y1="17" x2="12" y2="16"></line>
                            <line x1="15" y1="17" x2="15" y2="14"></line>
                        </svg>
                        <h2 class="px-4 font-semibold py-4 text-2xl text-primary dark:text-secondary"> Data Sari Roti</h2>
                    </div>
                </div>

                <div class="flex flex-wrap justify-end items-center">
                    <div class="w-full md:w-1/4 px-4 mb-8 flex items-center ">
                        <img src="https://upload.wikimedia.org/wikipedia/id/6/67/Sari_Roti-Rotinya_Indonesia.png"
                            alt="" class="w-64 hidden md:block">
                    </div>
                    <div class="w-full md:w-3/4 px-4">
                        <div class="flex justify-start bg-white dark:bg-dark shadow-md rounded-md items-center mb-8">
                            <div class="w-1/4 flex justify-center items-center px-4 py-6">
                                <div
                                    class="badge badge-gray w-20 h-20 bg-green-600 border-0 opacity-50 text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-businessplan" width="40" height="40"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <ellipse cx="16" cy="6" rx="5" ry="3"></ellipse>
                                        <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                        <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                        <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                        <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                        <path d="M5 15v1m0 -8v1"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-3/4 flex justify-start">
                                <div class="px-4">
                                    <h3 class="text-xl mb-1 text-gray">Jumlah <strong> Pendapatan</strong></h3>
                                    <span class="text-primary font-bold text-4xl  dark:text-secondary">Rp.
                                        {{ number_format($total_order) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap items-center">

                    <div class="w-full md:w-1/3 px-4">
                        <div class="flex bg-white shadow-md dark:bg-dark rounded-md items-center mb-8  ">
                            <div class="w-1/3 flex justify-center items-center px-4 py-6">
                                <div
                                    class="badge badge-gray w-20 h-20 bg-yellow-500 border-0 opacity-50 text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class=" text-white icon icon-tabler icon-tabler-bread" width="40" height="40"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M17 5a3 3 0 0 1 2 5.235v6.765a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6.764a3 3 0 0 1 1.824 -5.231l.176 -.005h10z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-2/3">
                                <div class="px-4">
                                    <h3 class="text-base mb-1 text-gray">Jumlah <strong> Produk</strong></h3>
                                    <span class="text-primary font-bold text-4xl dark:text-secondary">{{ $total_product }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <div class="flex bg-white shadow-md dark:bg-dark rounded-md items-center mb-8  ">
                            <div class="w-1/3 flex justify-center items-center px-4 py-6">
                                <div
                                    class="badge badge-gray w-20 h-20 bg-sky-500 border-0 opacity-50 text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                        width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-2/3">
                                <div class="px-4">
                                    <h3 class="text-base mb-1 text-gray">Jumlah <strong> Pelanggan</strong></h3>
                                    <span class="text-primary font-bold text-4xl dark:text-secondary">{{ $total_customer }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <div class="flex bg-white shadow-md dark:bg-dark rounded-md items-center mb-8  ">
                            <div class="w-1/3 flex justify-center items-center px-4 py-6">
                                <div
                                    class="badge badge-gray w-20 h-20 bg-green-500 border-0 opacity-50 text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user-circle" width="40" height="40"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-2/3">
                                <div class="px-4">
                                    <h3 class="text-base mb-1 text-gray">Jumlah <strong> Pengguna</strong></h3>
                                    <span class="text-primary font-bold text-4xl dark:text-secondary">{{ $total_user }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user()->level === 2)
                        <div class="w-full md:w-1/3 px-4">
                            <div class="flex bg-white shadow-md dark:bg-dark rounded-md items-center mb-8">
                                <div class="w-1/3 flex justify-center items-center px-4 py-6">
                                    <div
                                        class="badge badge-gray w-20 h-20 bg-purple-500 border-0 opacity-50 text-white rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-shopping-cart" width="40"
                                            height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="6" cy="19" r="2"></circle>
                                            <circle cx="17" cy="19" r="2"></circle>
                                            <path d="M17 17h-11v-14h-2"></path>
                                            <path d="M6 5l14 1l-1 7h-13"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-2/3">
                                    <div class="px-4">
                                        <h3 class="text-base mb-1 text-gray">Jumlah <strong> Keranjang</strong></h3>

                                        <span class="text-primary font-bold text-4xl dark:text-secondary">{{ $total_cart }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-4">
                            <div class="flex bg-white shadow-md dark:bg-dark rounded-md items-center mb-8">
                                <div class="w-1/3 flex justify-center items-center px-4 py-6">
                                    <div
                                        class="badge badge-gray w-20 h-20 bg-orange-500 border-0 opacity-50 text-white rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-history" width="40" height="40"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h024v24H0z" fill="none"></path>
                                            <polyline points="12 8 12 12 14 14"></polyline>
                                            <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-2/3">
                                    <div class="px-4">
                                        <h3 class="text-base mb-1 text-gray">Jumlah <strong> Riwayat</strong></h3>
                                        <span class="text-primary font-bold text-4xl dark:text-secondary">{{ $total_history }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>



                <div class="flex px-4 mb-8 pt-12">
                    <div class="w-full flex items-center bg-white dark:bg-dark py-2 px-4 shadow-md rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-chart-area text-primary dark:text-secondary" width="40" height="40"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="4" y1="19" x2="20" y2="19"></line>
                            <polyline points="4 15 8 9 12 11 16 6 20 10 20 15 4 15"></polyline>
                        </svg>
                        <h2 class="px-4 font-semibold py-4 text-2xl text-primary dark:text-secondary">Statistik Penjualan</h2>
                    </div>
                </div>
                <div class="flex dark:bg-dark">
                    <div class="w-full px-4 shadow-md dark:bg-dark" id="grapic">
                    </div>
                </div>


            <script src="https://code.highcharts.com/highcharts.js"></script>


            <script type="text/javascript">
                var Pendapatan = {!! json_encode($grapicChart) !!}
                var Month = {!! json_encode($month) !!}

                Highcharts.chart('grapic', {
                    chart: {
                        type: 'column',
                    },
                    title: {
                        text: 'Data Pendapatan Bulanan'
                    },
                    xAxis: {
                        categories: Month,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Data Pendapatan'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px;">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>Rp. {point.y:.2f} Rupiah</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Nominal Pendapatan',
                        data: Pendapatan,
                    }]
                });
            </script>

        </section>
        {{-- Akhir Card --}}



    </div>
