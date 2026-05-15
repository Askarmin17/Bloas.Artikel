<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <main class="max-w-6xl mx-auto px-6 pb-20">

        <!-- Filter Kategori -->
        <div class="flex gap-3 mb-8 flex-wrap">
            <a href="/artikel" class="{{ request()->is('artikel') && !request()->query('kategori') ? 'bg-slate-900 text-white' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50' }} px-4 py-2 rounded-full text-sm font-medium transition">
                Semua
            </a>
            <a href="/artikel?kategori=nasional" class="{{ request()->query('kategori') === 'nasional' ? 'bg-slate-900 text-white' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50' }} px-4 py-2 rounded-full text-sm font-medium transition">
                Nasional
            </a>
            <a href="/artikel?kategori=internasional" class="{{ request()->query('kategori') === 'internasional' ? 'bg-slate-900 text-white' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50' }} px-4 py-2 rounded-full text-sm font-medium transition">
                Internasional
            </a>
            <a href="/artikel?kategori=teknologi" class="{{ request()->query('kategori') === 'teknologi' ? 'bg-slate-900 text-white' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50' }} px-4 py-2 rounded-full text-sm font-medium transition">
                Teknologi
            </a>
            <a href="/artikel?kategori=olahraga" class="{{ request()->query('kategori') === 'olahraga' ? 'bg-slate-900 text-white' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50' }} px-4 py-2 rounded-full text-sm font-medium transition">
                Olahraga
            </a>
        </div>

        <!-- Grid Artikel -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Artikel 1 -->
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <div class="bg-gradient-to-br from-slate-800 to-slate-600 h-48"></div>
                <div class="p-5">
                    <span class="bg-red-100 text-red-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Nasional</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                        Pemerintah Umumkan Kebijakan Baru Energi Terbarukan untuk 2030
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">
                        Presiden secara resmi meluncurkan peta jalan transisi energi nasional yang menargetkan 50% energi bersih.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span class="font-medium text-slate-600">Ahmad Fauzi</span>
                        <span>•</span>
                        <span>2 jam lalu</span>
                        <span>•</span>
                        <span>5 mnt baca</span>
                    </div>
                </div>
            </article>

            <!-- Artikel 2 -->
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <div class="bg-gradient-to-br from-blue-800 to-blue-600 h-48"></div>
                <div class="p-5">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Teknologi</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                        Startup AI Lokal Raih Pendanaan Seri B Senilai $30 Juta
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">
                        Perusahaan rintisan berbasis kecerdasan buatan ini berhasil menarik minat investor asing untuk berekspansi.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span class="font-medium text-slate-600">Rina Kartika</span>
                        <span>•</span>
                        <span>4 jam lalu</span>
                        <span>•</span>
                        <span>3 mnt baca</span>
                    </div>
                </div>
            </article>

            <!-- Artikel 3 -->
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <div class="bg-gradient-to-br from-green-800 to-green-600 h-48"></div>
                <div class="p-5">
                    <span class="bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Olahraga</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                        Timnas Indonesia Lolos ke Semifinal Piala Asia U-23
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">
                        Dengan kemenangan dramatis atas Vietnam, Timnas U-23 melangkah ke babak semifinal untuk pertama kalinya.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span class="font-medium text-slate-600">Budi Santoso</span>
                        <span>•</span>
                        <span>6 jam lalu</span>
                        <span>•</span>
                        <span>4 mnt baca</span>
                    </div>
                </div>
            </article>

            <!-- Artikel 4 -->
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <div class="bg-gradient-to-br from-purple-800 to-purple-600 h-48"></div>
                <div class="p-5">
                    <span class="bg-purple-100 text-purple-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Internasional</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                        KTT G20 Sepakati Kerangka Baru Pengurangan Emisi Global
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">
                        Para pemimpin dunia mencapai kesepakatan bersejarah untuk mengurangi emisi karbon sebesar 40% pada 2035.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span class="font-medium text-slate-600">Maya Indah</span>
                        <span>•</span>
                        <span>3 jam lalu</span>
                        <span>•</span>
                        <span>4 mnt baca</span>
                    </div>
                </div>
            </article>

            <!-- Artikel 5 -->
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <div class="bg-gradient-to-br from-amber-800 to-amber-600 h-48"></div>
                <div class="p-5">
                    <span class="bg-amber-100 text-amber-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Ekonomi</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                        Rupiah Menguat ke Level Terkuat dalam 6 Bulan Terakhir
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">
                        Nilai tukar rupiah terhadap dolar AS menguat signifikan didorong oleh sentimen positif pasar global.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span class="font-medium text-slate-600">Dewi Lestari</span>
                        <span>•</span>
                        <span>7 jam lalu</span>
                        <span>•</span>
                        <span>3 mnt baca</span>
                    </div>
                </div>
            </article>

            <!-- Artikel 6 -->
            <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <div class="bg-gradient-to-br from-red-800 to-red-600 h-48"></div>
                <div class="p-5">
                    <span class="bg-red-100 text-red-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Nasional</span>
                    <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                        DPR Sahkan RUU Kesehatan Digital di Sidang Paripurna
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-3">
                        Undang-undang baru mengatur rekam medis elektronik, telemedicine, dan perlindungan data pasien.
                    </p>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span class="font-medium text-slate-600">Siti Nurhaliza</span>
                        <span>•</span>
                        <span>8 jam lalu</span>
                        <span>•</span>
                        <span>6 mnt baca</span>
                    </div>
                </div>
            </article>

        </div>

        <!-- Pagination -->
        <div class="mt-10 flex justify-center gap-2">
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">← Sebelumnya</a>
            <a href="#" class="px-4 py-2 rounded-full bg-slate-900 text-white text-sm">1</a>
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">2</a>
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">3</a>
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">Selanjutnya →</a>
        </div>

    </main>

</x-layout>