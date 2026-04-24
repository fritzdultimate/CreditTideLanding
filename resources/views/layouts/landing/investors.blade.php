<!-- ══ CELEBRITY INVESTORS ══ -->
<section class="bg-bg2 py-20 px-6 lg:px-12">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <div
                class="inline-flex items-center gap-2 bg-accent text-white rounded-full px-5 py-2 text-xs font-semibold mb-5">
                👥 Operated by ranked users</div>
            <h2 class="reveal font-display text-3xl lg:text-4xl font-bold tracking-[-1.5px]">Profiles of
                Investors<br>Investing With Us</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3" id="celeb-grid">
            @foreach($investors as $investor)
                <div
                    class="celeb-item bg-bg3 border border-white/[0.08] rounded-xl p-4 flex items-center gap-3 hover:border-white/[0.2] hover:bg-bg transition-all group">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0"
                        style="background:rgba(255,77,106,.12);color:{{ $investor->color }}">
                        {{ $investor->initials }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="text-sm font-semibold text-t1 flex items-center gap-2">{{ $investor->name }}
                            <span class="bg-accent text-white text-[9px] px-2 py-0.5 rounded-full font-normal">
                                {{ $investor->years_in_company }} yrs
                            </span>
                        </div>
                        <div class="text-xs text-t3 mt-0.5">{{ $investor->position }}</div>
                        <div class="flex gap-4 mt-1.5">
                            <span class="text-xs text-t2">${{ format_compact($investor->investments) }} <span class="text-[10px] text-t3">invested</span></span>
                            <span class="text-xs text-cgreen">${{ format_compact($investor->deposits) }} <span class="text-[10px] text-t3">deposits</span></span>
                        </div>
                    </div>
                    <div class="text-xl opacity-50 group-hover:opacity-100 transition-opacity">
                        {{ $investor->icon }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>