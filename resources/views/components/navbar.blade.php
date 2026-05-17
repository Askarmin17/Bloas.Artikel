<nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <div class="text-2xl font-bold text-slate-900">Nalar Muda</div>

        <ul class="flex gap-8 text-sm font-medium text-slate-600">
            <li><x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link></li>
            <li><x-nav-link href="/artikel" :active="request()->is('artikel')">Artikel</x-nav-link></li>
            <li><x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link></li>
        </ul>

        <div class="flex items-center gap-3">
            <input type="text" placeholder="Cari berita..."
                   class="text-sm border border-slate-200 rounded-full px-4 py-2 w-48 focus:outline-none focus:ring-2 focus:ring-slate-300">
        </div>

    </div>
</nav>