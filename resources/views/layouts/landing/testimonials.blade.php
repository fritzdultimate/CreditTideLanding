<!-- ══ TESTIMONIALS MARQUEE ══ -->
<section class="bg-bg py-20 overflow-hidden">
    <div class="text-center mb-12 px-6">
        <div
            class="inline-flex items-center gap-2 bg-accent text-white rounded-full px-5 py-2 text-xs font-semibold mb-5">
            ⭐ Rated 4/5 over Lakh users</div>
        <h2 class="reveal font-display text-3xl lg:text-4xl font-bold tracking-[-1.5px]">Words of Praise
            From<br>Others About Our Presence</h2>
    </div>

    <!-- Row 1: left -->
    <div class="marq-wrap relative overflow-hidden mb-4"
        style="mask-image:linear-gradient(to right,transparent,black 120px,black calc(100% - 120px),transparent);padding-top:8px;margin-top:-8px">
        <div class="marq-left" id="marq1">

            @foreach ($testimonies as $testimony)
                <div
                    class="shrink-0 w-72 bg-bg2 border border-white/[0.08] rounded-2xl p-6 hover:border-accent2/50 hover:-translate-y-[5px] transition-all cursor-default">
                    <div class="text-3xl text-accent2/50 font-display mb-3 leading-none">"</div>
                    <p class="text-sm text-t2 leading-relaxed mb-5 relative group">
    
                        <span class="block group-hover:hidden">
                            {{ \Illuminate\Support\Str::limit($testimony->testimony, 120, '...') }}
                        </span>

                        <span class="hidden group-hover:block">
                            {{ $testimony->testimony }}
                        </span>

                    </p>
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-[10px] font-bold flex-shrink-0"
                            style="background:rgba(43,110,255,.15);color:#00C8FF">
                            <img src="{{ asset($testimony->image) }}">
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-t1">{{ $testimony->name }}</div>
                            <div class="text-[10px] text-t3">{{ $testimony->position }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Row 2: right -->
    <div class="marq-wrap relative overflow-hidden"
        style="mask-image:linear-gradient(to right,transparent,black 120px,black calc(100% - 120px),transparent);padding-top:8px;margin-top:-8px">
        <div class="marq-right" id="marq2">
            
        </div>
    </div>
</section>