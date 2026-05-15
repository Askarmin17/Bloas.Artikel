<a {{ $attributes }}
   class="{{ $active ? 'text-slate-900 font-semibold border-b-2 border-slate-900 pb-0.5' : 'hover:text-slate-900 transition' }}
          text-sm font-medium text-slate-600">
    {{ $slot }}
</a>