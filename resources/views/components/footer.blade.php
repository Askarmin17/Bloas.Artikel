<footer class="bg-slate-900 text-slate-400 mt-16 py-12">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-10">
            <div class="md:col-span-2">
                <div class="text-2xl font-bold text-white mb-3">Nalar Muda</div>
                <p class="text-sm leading-relaxed text-slate-500">
                    Media berita digital terpercaya untuk generasi muda Indonesia. Menyajikan informasi aktual, mendalam, dan berimbang.
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold text-sm mb-3">Nalar Muda</h4>
                <ul class="flex flex-col gap-2 text-sm">
                    <li><x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link></li>
            <li><x-nav-link href="/artikel" :active="request()->is('artikel')">Artikel</x-nav-link></li>
            <li><x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold text-sm mb-3">Perusahaan</h4>
                <ul class="flex flex-col gap-2 text-sm">
                    <li><a href="/about" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition">Redaksi</a></li>
                    <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                    <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-6 text-xs text-center text-slate-600">
            &copy; 2026 Nalar Muda. Seluruh hak cipta dilindungi undang-undang.
        </div>
    </div>
</footer>