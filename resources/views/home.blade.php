<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <main class="max-w-6xl mx-auto px-6 pb-20">

        <!-- Berita Utama -->
        <section class="mb-12">
            <div class="grid lg:grid-cols-3 gap-6">

                <!-- Berita Headline (besar) -->
                <div class="lg:col-span-2 bg-white rounded-2xl overflow-hidden border border-slate-200 group cursor-pointer">
                    <div class="bg-gradient-to-br from-slate-800 to-slate-600 h-64 flex items-end p-6">
                        <span class="bg-red-600 text-white text-xs font-semibold uppercase tracking-wider px-3 py-1 rounded-full">Nasional</span>
                    </div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-slate-900 group-hover:text-slate-600 transition leading-tight mb-3">
                            Pemerintah Umumkan Kebijakan Baru Energi Terbarukan untuk 2030
                        </h2>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">
                            Presiden secara resmi meluncurkan peta jalan transisi energi nasional yang menargetkan 50% penggunaan energi bersih pada tahun 2030, dengan investasi senilai ratusan triliun rupiah.
                        </p>
                        <div class="flex items-center gap-3 text-xs text-slate-400">
                            <span class="font-medium text-slate-600">Ahmad Fauzi</span>
                            <span>•</span>
                            <span>2 jam lalu</span>
                            <span>•</span>
                            <span>5 menit baca</span>
                        </div>
                    </div>
                </div>

                <!-- Berita Samping -->
                <div class="flex flex-col gap-4">
                    <div class="bg-white rounded-2xl border border-slate-200 p-5 group cursor-pointer hover:border-slate-300 transition">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Teknologi</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Startup AI Lokal Raih Pendanaan Seri B Senilai $30 Juta
                        </h3>
                        <p class="text-xs text-slate-400">Rina Kartika • 4 jam lalu</p>
                    </div>
                    <div class="bg-white rounded-2xl border border-slate-200 p-5 group cursor-pointer hover:border-slate-300 transition">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Olahraga</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Timnas Indonesia Lolos ke Semifinal Piala Asia U-23
                        </h3>
                        <p class="text-xs text-slate-400">Budi Santoso • 6 jam lalu</p>
                    </div>
                    <div class="bg-white rounded-2xl border border-slate-200 p-5 group cursor-pointer hover:border-slate-300 transition">
                        <span class="bg-amber-100 text-amber-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Ekonomi</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Rupiah Menguat ke Level Terkuat dalam 6 Bulan Terakhir
                        </h3>
                        <p class="text-xs text-slate-400">Dewi Lestari • 7 jam lalu</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Berita Terbaru + Sidebar -->
        <div class="grid lg:grid-cols-3 gap-10">

            <!-- Daftar Berita -->
            <section class="lg:col-span-2">
                <h2 class="text-xl font-bold text-slate-900 mb-6 pb-3 border-b border-slate-200">Berita Terbaru</h2>

                <div class="flex flex-col gap-6">

                    <article class="bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">📰</div>
                        <div class="flex-1">
                            <span class="bg-purple-100 text-purple-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Internasional</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                KTT G20 Sepakati Kerangka Baru Pengurangan Emisi Global
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Para pemimpin dunia mencapai kesepakatan bersejarah untuk mengurangi emisi karbon sebesar 40% pada 2035.
                            </p>
                            <p class="text-xs text-slate-400">Maya Indah • 3 jam lalu • 4 menit baca</p>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">💻</div>
                        <div class="flex-1">
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Teknologi</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                Pemerintah Luncurkan Platform Digital UMKM Nasional
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Platform baru ini akan menghubungkan lebih dari 64 juta UMKM Indonesia dengan pasar global secara langsung.
                            </p>
                            <p class="text-xs text-slate-400">Hendra Wijaya • 5 jam lalu • 3 menit baca</p>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">🏛️</div>
                        <div class="flex-1">
                            <span class="bg-red-100 text-red-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Nasional</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                DPR Sahkan RUU Kesehatan Digital di Sidang Paripurna
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Undang-undang baru mengatur rekam medis elektronik, telemedicine, dan perlindungan data pasien secara menyeluruh.
                            </p>
                            <p class="text-xs text-slate-400">Siti Nurhaliza • 8 jam lalu • 6 menit baca</p>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">⚽</div>
                        <div class="flex-1">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Olahraga</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                Liga 1: Persija Kalahkan Persib 2-1 di Laga Derby Bersejarah
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Dua gol di babak kedua membawa Persija meraih kemenangan dramatis atas rival abadinya di Stadion GBK.
                            </p>
                            <p class="text-xs text-slate-400">Reza Pratama • 10 jam lalu • 3 menit baca</p>
                        </div>
                    </article>

                </div>

                <div class="mt-8 text-center">
                    <a href="/artikel" class="inline-block border border-slate-300 rounded-full px-8 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">
                        Lihat Semua Berita
                    </a>
                </div>
            </section>

            <!-- Sidebar -->
            <aside class="flex flex-col gap-8">

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900 mb-4">Kategori</h3>
                    <ul class="flex flex-col gap-2 text-sm">
                        <li><a href="/nasional" class="flex justify-between items-center text-slate-600 hover:text-slate-900 transition py-1.5 border-b border-slate-100">Nasional <span class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded-full">24</span></a></li>
                        <li><a href="/internasional" class="flex justify-between items-center text-slate-600 hover:text-slate-900 transition py-1.5 border-b border-slate-100">Internasional <span class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded-full">18</span></a></li>
                        <li><a href="/teknologi" class="flex justify-between items-center text-slate-600 hover:text-slate-900 transition py-1.5 border-b border-slate-100">Teknologi <span class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded-full">15</span></a></li>
                        <li><a href="/olahraga" class="flex justify-between items-center text-slate-600 hover:text-slate-900 transition py-1.5 border-b border-slate-100">Olahraga <span class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded-full">12</span></a></li>
                        <li><a href="/ekonomi" class="flex justify-between items-center text-slate-600 hover:text-slate-900 transition py-1.5">Ekonomi <span class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded-full">9</span></a></li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900 mb-4">Paling Banyak Dibaca</h3>
                    <ol class="flex flex-col gap-4">
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">1</span>
                            <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">Pemerintah Umumkan Kebijakan Baru Energi Terbarukan untuk 2030</p>
                        </li>
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">2</span>
                            <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">Timnas Indonesia Lolos ke Semifinal Piala Asia U-23</p>
                        </li>
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">3</span>
                            <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">KTT G20 Sepakati Kerangka Baru Pengurangan Emisi Global</p>
                        </li>
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">4</span>
                            <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">Rupiah Menguat ke Level Terkuat dalam 6 Bulan Terakhir</p>
                        </li>
                    </ol>
                </div>

                <div class="bg-slate-900 rounded-2xl p-6 text-white">
                    <h3 class="text-base font-bold mb-2">Langganan Newsletter</h3>
                    <p class="text-sm text-slate-400 mb-4">Dapatkan ringkasan berita terbaik langsung ke email kamu setiap pagi.</p>
                    <input type="email" placeholder="Email kamu" class="w-full rounded-xl px-4 py-2.5 text-sm text-slate-900 mb-3 focus:outline-none">
                    <button class="w-full bg-white text-slate-900 rounded-xl py-2.5 text-sm font-semibold hover:bg-slate-100 transition">
                        Langganan Gratis
                    </button>
                </div>

            </aside>
        </div>

    </main>

</x-layout>