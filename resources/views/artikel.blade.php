<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <main class="max-w-6xl mx-auto px-6 pb-20">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="{{ asset('documents/artikel1.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <article>
                    <div class="bg-gradient-to-br from-slate-800 to-slate-600 h-48 relative">
                        <span class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded shadow">PDF Jurnal</span>
                    </div>
                    <div class="p-5">
                        <span class="bg-red-100 text-red-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Nasional</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Implementasi Kebijakan Energi Baru Terbarukan dalam Pembangunan IKN sebagai Komitmen SDGs
                        </h3>
                        <p class="text-sm text-slate-500 leading-relaxed mb-3">
                            Analisis bauran energi bersih di Ibu Kota Nusantara sebagai bagian dari peta jalan transisi energi nasional dan mitigasi emisi karbon global.
                        </p>
                        <div class="flex items-center justify-between text-xs text-slate-400">
                            <div class="flex items-center gap-2">
                                <span class="font-medium text-slate-600">Jumiati Nanda</span>
                                <span>•</span>
                                <span>Kajian Ilmiah</span>
                            </div>
                            <span class="text-red-600 font-medium flex items-center gap-1">Baca PDF →</span>
                        </div>
                    </div>
                </article>
            </a>

            <a href="{{ asset('documents/artikel2.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <article>
                    <div class="bg-gradient-to-br from-blue-800 to-blue-600 h-48 relative">
                        <span class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded shadow">PDF Kajian</span>
                    </div>
                    <div class="p-5">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Ekonomi & Lingkungan</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Analisis Kebijakan Transisi Energi dan Trilema Energi di Indonesia Periode 2019-2024
                        </h3>
                        <p class="text-sm text-slate-500 leading-relaxed mb-3">
                            Kajian kritis Policy Assessment mengenai tantangan ketahanan energi nasional, keadilan akses bauran energi, serta keberlanjutan ekologi.
                        </p>
                        <div class="flex items-center justify-between text-xs text-slate-400">
                            <div class="flex items-center gap-2">
                                <span class="font-medium text-slate-600">Putu Rusta A.</span>
                                <span>•</span>
                                <span>Policy Brief</span>
                            </div>
                            <span class="text-red-600 font-medium flex items-center gap-1">Baca PDF →</span>
                        </div>
                    </div>
                </article>
            </a>

            <a href="{{ asset('documents/artikel3.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 overflow-hidden group cursor-pointer hover:border-slate-300 transition">
                <article>
                    <div class="bg-gradient-to-br from-green-800 to-green-600 h-48 relative">
                        <span class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded shadow">PDF Esai</span>
                    </div>
                    <div class="p-5">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Nalar Muda</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            FilanTree: Pemberdayaan Komunitas melalui Filantropi untuk Transisi Menuju Net-Zero
                        </h3>
                        <p class="text-sm text-slate-500 leading-relaxed mb-3">
                            Gagasan kreatif kompetisi mahasiswa mengenai platform digital penunjang pendanaan transisi energi yang digerakkan oleh aksi anak muda.
                        </p>
                        <div class="flex items-center justify-between text-xs text-slate-400">
                            <div class="flex items-center gap-2">
                                <span class="font-medium text-slate-600">Nayla Taqiyya</span>
                                <span>•</span>
                                <span>Karya Mahasiswa</span>
                            </div>
                            <span class="text-red-600 font-medium flex items-center gap-1">Baca PDF →</span>
                        </div>
                    </div>
                </article>
            </a>

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

        <div class="mt-10 flex justify-center gap-2">
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">← Sebelumnya</a>
            <a href="#" class="px-4 py-2 rounded-full bg-slate-900 text-white text-sm">1</a>
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">2</a>
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">3</a>
            <a href="#" class="px-4 py-2 rounded-full border border-slate-200 text-sm text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">Selanjutnya →</a>
        </div>

    </main>
</x-layout>