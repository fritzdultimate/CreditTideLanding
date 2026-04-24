<!-- ══ PARTNER COMPANIES ══ -->
<section class="bg-bg2 py-20 px-4 sm:px-6 lg:px-12">
    <div class="max-w-6xl mx-auto">

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-accent text-white rounded-full px-5 py-2 text-xs font-semibold mb-5">
                🏢 Top ranked companies
            </div>

            <h2 class="font-display text-3xl lg:text-4xl font-bold tracking-[-1.5px] text-t1">
                Companies Investing With Us
            </h2>

            <p class="text-t2 text-sm lg:text-base mt-3 max-w-xl mx-auto">
                Global companies across multiple industries partnering with CreditTide for long-term growth.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

            @foreach ($companies as $company)
                

                <div class="group bg-bg3 border border-white/[0.08] rounded-xl p-4 flex flex-col gap-4 hover:bg-bg transition-all hover:-translate-y-1.5">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-lg overflow-hidden bg-black/30">
                            <img src="{{ asset($company->image) }}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-t1">{{ $company->name }}</p>
                            <!-- <p class="text-xs text-t3">Property Tech</p> -->
                        </div>
                    </div>
                    <p class="text-xs text-t2">{{ $company->about }}</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-[11px] text-t3">Global</span>
                        <a href="{{ $company->url }}" target="_blank"
                        class="text-xs text-accent2 font-semibold flex items-center gap-1 group-hover:gap-2 transition-all">
                            Visit →
                        </a>
                    </div>
                </div>

            @endforeach


        </div>

    </div>
</section>