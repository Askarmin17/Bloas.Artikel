<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <main class="max-w-4xl mx-auto px-6 pb-20 pt-10">
        
        <section class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl mb-4">
                Membawa Literasi Digital Lebih Dekat dan Terbuka
            </h2>
            <p class="text-lg text-slate-500 leading-relaxed max-w-2xl mx-auto">
                Kami adalah platform penyedia ruang baca digital dan publikasi ilmiah yang berkomitmen menyajikan informasi akurat, mendalam, dan mudah diakses oleh siapa saja.
            </p>
        </section>

        <section class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                <div class="text-3xl mb-4">🎯</div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Visi Kami</h3>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Menjadi pusat referensi digital terpercaya yang menjembatani karya tulis ilmiah, kajian kebijakan, dan esai kritis nalar muda agar dapat menginspirasi masyarakat luas.
                </p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                <div class="text-3xl mb-4">🚀</div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Misi Kami</h3>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Menyediakan platform yang bersih, bebas dari distorsi informasi, serta memudahkan akses pengunduhan dokumen referensi (PDF) berkualitas demi mendukung ekosistem akademik dan literasi yang sehat.
                </p>
            </div>
        </section>

        <section class="mb-16">
            <h3 class="text-xl font-bold text-slate-900 mb-6 pb-3 border-b border-slate-200">Mengapa Membaca di Sini?</h3>
            <div class="grid sm:grid-cols-3 gap-6">
                
                <div class="flex flex-col gap-2">
                    <div class="text-slate-900 font-semibold text-base flex items-center gap-2">
                        <span class="text-red-600">✓</span> Berbasis Dokumen
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        Setiap ulasan utama kami sertai dengan dokumen PDF asli (Jurnal, Policy Brief, atau Esai) yang dapat dipertanggungjawabkan.
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="text-slate-900 font-semibold text-base flex items-center gap-2">
                        <span class="text-red-600">✓</span> Fokus & Bersih
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        Tampilan minimalis tanpa iklan yang mengganggu kenyamanan membaca, fokus penuh pada esensi konten dan data.
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="text-slate-900 font-semibold text-base flex items-center gap-2">
                        <span class="text-red-600">✓</span> Ruang Nalar Muda
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        Memberikan ruang bagi gagasan kreatif mahasiswa dan anak muda untuk bersanding dengan kajian kebijakan nasional.
                    </p>
                </div>

            </div>
        </section>

        <section class="bg-slate-900 rounded-2xl p-8 text-center text-white">
            <h3 class="text-xl font-bold mb-2">Ingin Berkolaborasi?</h3>
            <p class="text-sm text-slate-400 mb-6 max-w-xl mx-auto">
                Apakah Anda memiliki jurnal ilmiah, hasil kajian organisasi, atau esai kritis yang ingin dipublikasikan di platform kami? Mari bertukar gagasan bersama kami.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="mailto:info@domain.com" class="bg-white text-slate-900 rounded-full px-6 py-2.5 text-sm font-semibold hover:bg-slate-100 transition">
                    Hubungi Kami via Email
                </a>
            </div>
        </section>

    </main>
</x-layout>