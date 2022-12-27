<div>
<div class="bg-white dark:bg-dark w-full">
        <div class="navbar z-50">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box dark:bg-dark w-52">
                        <li><a class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('dashboard') ? 'font-bold text-primary dark:text-mode' : '' }}"
                                href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        @if (Auth::user()->level === 2)
                        <li><a href="{{ route('admin.order') }}"
                            class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.product') ? 'font-bold text-primary dark:text-mode' : '' }}">Pesan</a>
                        </li>
                        @endif
                        <li><a href="{{ route('admin.report') }}"
                            class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.report') ? 'font-bold text-primary dark:text-mode' : '' }}">Laporan</a>
                        </li>
                        <li><a href="{{ route('admin.customer') }}"
                                class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.customer') ? 'font-bold text-primary dark:text-mode' : '' }}">Pelanggan</a>
                        </li>
                        <li tabindex="0">
                            <a class="text-lg justify-between focus:bg-secondary focus:text-red-500">
                                Pengaturan
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                                </svg>
                            </a>
                            <ul class="p-2 bg-white dark:bg-dark shadow-md rounded-md">
                                @if (Auth::user()->level === 1 ||Auth::user()->level == 2)
                                <li><a href="{{ route('admin.user') }}" class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.user') ? 'font-bold text-primary dark:text-mode' : '' }}">Pengguna</a></li>
                                @endif
                                @if (Auth::user()->level === 2)
                                    <li><a href="{{ route('admin.product') }}" class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.product') ? 'font-bold text-primary dark:text-mode' : '' }}">Pesan</a></li>
                                @endif
                                <li><a class="text-lg hover:rounded-md">Instansi</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-2xl font-bold text-priry"><img src="https://izkey.com/wp-content/uploads/2017/06/sari-roti.png" alt="" class="w-24"></a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal p-0">
                    <li><a class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('dashboard') ? 'font-bold text-primary dark:text-mode' : '' }} {{ Route::is('/') ? 'font-bold text-primary' : '' }}"
                            href="{{ route('admin.dashboard') }}">Beranda</a></li>
                    @if (Auth::user()->level == 2)
                    <li><a class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.order') ? 'font-bold text-primary dark:text-mode' : '' }}"
                        href="{{ route('admin.order') }}">Pesan</a>
                    </li>
                    @endif
                    <li><a class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.report') ? 'font-bold text-primary dark:text-mode' : '' }}"
                            href="{{ route('admin.report') }}">Laporan</a>
                    </li>
                    @if (Auth::user()->level === 2)
                    <li><a class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.customer') ? 'font-bold text-primary dark:text-mode' : '' }}"
                        href="{{ route('admin.customer') }}">Pelanggan</a>
                    </li>
                    @endif
                    <li tabindex="0">
                        <a class="text-lg hover:rounded-md focus:bg-secondary focus:text-red-500 rounded-md">
                            Pengaturan
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-white dark:bg-dark shadow-md z-50 rounded-md">
                            {{-- @if (Auth::user()->level === 1 || Auth::user()->level == 2)
                            <li><a href="{{ route('admin.user') }}" class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.user') ? 'font-bold text-primary dark:text-mode' : '' }}">Pengguna</a></li>
                            @endif
                            @if (Auth::user()->level == 2)

                            <li><a href="{{ route('admin.product') }}" class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('admin.product') ? 'font-bold text-primary dark:text-mode' : '' }}">Pesan</a></li>
                            @endif --}}
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="navbar-end">
                @auth
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                 {{-- @if (!empty(Auth::user()->image))
                                    <img src="{{ asset('storage/' . Auth::user()->image) }}" class="w-24" />
                                @else
                                    <img src="{{ asset('image/avatar.png') }}"  class="w-24"/>
                                @endif --}}
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-compact z-50  dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 dark:bg-dark">
                            <li>
                                {{-- @if (Auth::user()->level === 1 || Auth::user()->level === 2)
                                    <a href="{{ route('admin.profile', Auth::user()->id) }}" class="justify-between text-lg active:bg-transparent">
                                        Profil
                                    </a>
                                @else
                                    <a href="{{ route('profile', Auth::user()->id) }}" class="justify-between text-lg active:bg-transparent">
                                        Profil
                                    </a>
                                @endif --}}
                            </li>
                            {{-- @if (Auth::user()->level === 1 || Auth::user()->level === 2)
                                <li><a href="{{ route('/') }}" class="text-lg active:bg-transparent">Home</a></li>
                            @endif --}}
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit text-lg" class="text-lg active:bg-transparent focus:bg-transparent">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="text-lg hover:rounded-md active:bg-transparent {{ Route::is('/') ? 'font-bold text-primary' : '' }}"
                        href="{{ route('login') }}"><span class="hidden md:block">Daftar/Masuk</span><svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-login block md:hidden text-primary" width="28"
                            height="28" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                            </path>
                            <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                        </svg></a>
                @endauth
            </div>
        </div>
    </div>
</div>
