<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <main class="max-w-6xl mx-auto px-6 pb-20">

        <section class="mb-12">
            <div class="grid lg:grid-cols-3 gap-6">

                <a href="{{ asset('documents/artikel 1.pdf') }}" target="_blank" class="lg:col-span-2 block bg-white rounded-2xl overflow-hidden border border-slate-200 group cursor-pointer hover:border-slate-300 transition">
                    <article>
                        <div class="bg-gradient-to-br from-slate-800 to-slate-600 h-64 flex items-end p-6 relative">
                            <span class="absolute top-4 right-4 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded shadow">PDF Jurnal</span>
                            <span class="bg-slate-900/60 backdrop-blur-sm text-white text-xs font-semibold uppercase tracking-wider px-3 py-1 rounded-full">Rekomendasi Utama</span>
                        </div>
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-slate-900 group-hover:text-slate-600 transition leading-tight mb-3">
                                Implementasi Kebijakan Energi Baru Terbarukan dalam Pembangunan IKN sebagai Komitmen SDGs
                            </h2>
                            <p class="text-slate-500 text-sm leading-relaxed mb-4">
                                Analisis mendalam bauran energi bersih di Ibu Kota Nusantara sebagai bagian dari peta jalan transisi energi nasional dan mitigasi emisi karbon global menuju target keberlanjutan.
                            </p>
                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <div class="flex items-center gap-3">
                                    <span class="font-medium text-slate-600">Jumiati Nanda</span>
                                    <span>•</span>
                                    <span>Kajian Ilmiah</span>
                                </div>
                                <span class="text-red-600 font-medium flex items-center gap-1">Baca PDF →</span>
                            </div>
                        </div>
                    </article>
                </a>

                <div class="flex flex-col gap-4">
                    
                    <a href="{{ asset('documents/artikel 2.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 p-5 group cursor-pointer hover:border-slate-300 transition relative">
                        <span class="absolute top-4 right-4 text-red-600 font-bold text-[10px] uppercase">PDF</span>
                        <span class="bg-slate-100 text-slate-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Policy Brief</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Analisis Kebijakan Transisi Energi dan Trilema Energi di Indonesia Periode 2019-2024
                        </h3>
                        <p class="text-xs text-slate-400">Putu Rusta A. • TII Kajian</p>
                    </a>

                    <a href="{{ asset('documents/artikel 3.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 p-5 group cursor-pointer hover:border-slate-300 transition relative">
                        <span class="absolute top-4 right-4 text-red-600 font-bold text-[10px] uppercase">PDF</span>
                        <span class="bg-slate-100 text-slate-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Karya Mahasiswa</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            FilanTree: Pemberdayaan Komunitas melalui Filantropi untuk Transisi Menuju Net-Zero
                        </h3>
                        <p class="text-xs text-slate-400">Nayla Taqiyya • Esai Kompetisi</p>
                    </a>

                    <div class="bg-white rounded-2xl border border-slate-200 p-5 group cursor-pointer hover:border-slate-300 transition">
                        <span class="bg-slate-100 text-slate-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Kabar Ekonomi</span>
                        <h3 class="text-base font-bold text-slate-900 mt-2 mb-2 group-hover:text-slate-600 transition leading-snug">
                            Rupiah Menguat ke Level Terkuat dalam 6 Bulan Terakhir
                        </h3>
                        <p class="text-xs text-slate-400">Dewi Lestari • 7 jam lalu</p>
                    </div>
                </div>

            </div>
        </section>

        <div class="grid lg:grid-cols-3 gap-10">

            <section class="lg:col-span-2">
                <h2 class="text-xl font-bold text-slate-900 mb-6 pb-3 border-b border-slate-200">Berita Terbaru</h2>

                <div class="flex flex-col gap-6">

                    <a href="{{ asset('documents/artikel 2.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">📊</div>
                        <div class="flex-1">
                            <span class="bg-slate-100 text-slate-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Policy Brief</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                Analisis Kebijakan Transisi Energi dan Trilema Energi di Indonesia Periode 2019-2024
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Kajian kritis Policy Assessment mengenai tantangan ketahanan energi nasional, keadilan akses bauran energi, serta keberlanjutan ekologi.
                            </p>
                            <p class="text-xs text-slate-400">Putu Rusta A. • <span class="text-red-600 font-medium">Baca PDF Dokumen</span></p>
                        </div>
                    </a>

                    <a href="{{ asset('documents/artikel 3.pdf') }}" target="_blank" class="block bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">🌱</div>
                        <div class="flex-1">
                            <span class="bg-slate-100 text-slate-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Esai Ilmiah</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                FilanTree: Pemberdayaan Komunitas melalui Filantropi untuk Transisi Menuju Net-Zero
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Gagasan kreatif kompetisi mahasiswa mengenai platform digital penunjang pendanaan transisi energi yang digerakkan oleh aksi anak muda.
                            </p>
                            <p class="text-xs text-slate-400">Nayla Taqiyya • <span class="text-red-600 font-medium">Baca PDF Dokumen</span></p>
                        </div>
                    </a>

                    <article class="bg-white rounded-2xl border border-slate-200 p-6 flex gap-5 group cursor-pointer hover:border-slate-300 transition">
                        <div class="bg-slate-100 rounded-xl w-28 h-24 shrink-0 flex items-center justify-center text-slate-400 text-3xl">🏛️</div>
                        <div class="flex-1">
                            <span class="bg-slate-100 text-slate-800 text-xs font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full">Kabar Hukum</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2 mb-1 group-hover:text-slate-600 transition leading-snug">
                                DPR Sahkan RUU Kesehatan Digital di Sidang Paripurna
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed mb-2">
                                Undang-undang baru mengatur rekam medis elektronik, telemedicine, dan perlindungan data pasien secara menyeluruh.
                            </p>
                            <p class="text-xs text-slate-400">Siti Nurhaliza • 8 jam lalu • 6 menit baca</p>
                        </div>
                    </article>

                </div>

                <div class="mt-8 text-center">
                    <a href="/artikel" class="inline-block border border-slate-300 rounded-full px-8 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">
                        Lihat Semua Berita
                    </a>
                </div>
            </section>

            <aside class="flex flex-col gap-8">

                <div class="bg-white rounded-2xl border border-slate-200 p-6">
                    <h3 class="text-base font-bold text-slate-900 mb-4">Paling Banyak Dibaca</h3>
                    <ol class="flex flex-col gap-4">
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">1</span>
                            <a href="{{ asset('documents/artikel 1.pdf') }}" target="_blank" class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">
                                Implementasi Kebijakan Energi Baru Terbarukan dalam Pembangunan IKN sebagai Komitmen SDGs
                            </a>
                        </li>
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">2</span>
                            <a href="{{ asset('documents/artikel 2.pdf') }}" target="_blank" class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">
                                Analisis Kebijakan Transisi Energi dan Trilema Energi di Indonesia Periode 2019-2024
                            </a>
                        </li>
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">3</span>
                            <a href="{{ asset('documents/artikel 3.pdf') }}" target="_blank" class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">
                                FilanTree: Pemberdayaan Komunitas melalui Filantropi untuk Transisi Menuju Net-Zero
                            </a>
                        </li>
                        <li class="flex gap-3 group cursor-pointer">
                            <span class="text-2xl font-bold text-slate-200 shrink-0 w-6">4</span>
                            <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition leading-snug">
                                Rupiah Menguat ke Level Terkuat dalam 6 Bulan Terakhir
                            </p>
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