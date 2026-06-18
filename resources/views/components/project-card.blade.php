@props([
    'id'          => 'project',
    'title'       => 'PROJECT',
    'description' => 'A full-stack web application.',
    'image'       => null,
    'tags'        => [],
    'year'        => '2024',
    'index'       => '01',
])

<article
    class="project-card group relative flex flex-col bg-black border border-zinc-800 overflow-hidden cursor-pointer"
    style="background: #0a0a0a"
    data-modal="{{ $id }}"
    id="card-{{ $id }}"
    role="button"
    tabindex="0"
    aria-label="View {{ $title }} details"
>
    {{-- Index Badge --}}
    <div class="absolute top-3 left-3 z-10 text-[10px] text-zinc-600 font-mono tracking-widest">
        [{{ $index }}]
    </div>

    {{-- Year Badge --}}
    <div class="absolute top-3 right-3 z-10 text-[10px] text-zinc-600 font-mono tracking-widest">
        {{ $year }}
    </div>

    {{-- Cover Image / Placeholder --}}
    <div class="relative overflow-hidden aspect-video bg-zinc-900 border-b border-zinc-800">
        @if($image)
            <img src="{{ $image }}"
                 alt="{{ $title }}"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        @else
            <div class="w-full h-full flex items-center justify-center"
                 style="background-image: linear-gradient(to right,#27272a 1px,transparent 1px),linear-gradient(to bottom,#27272a 1px,transparent 1px);background-size:2rem 2rem">
                <span class="text-zinc-700 text-xs tracking-widest uppercase">NO_PREVIEW</span>
            </div>
        @endif

        {{-- Hover Overlay --}}
        <div class="card-overlay absolute inset-0 bg-black/75 flex flex-col items-center justify-center gap-2">
            <span class="text-pink-500 text-lg">◈</span>
            <span class="text-[10px] text-pink-500 tracking-[0.3em] uppercase">VIEW_DETAILS //</span>
        </div>
    </div>

    {{-- Card Footer --}}
    <div class="flex flex-col flex-1 p-4 gap-3">
        <h3 class="text-sm font-bold uppercase tracking-widest text-white leading-tight group-hover:text-pink-500 transition-colors duration-200">
            {{ $title }}
        </h3>

        <p class="text-xs text-zinc-500 leading-relaxed flex-1">
            {{ $description }}
        </p>

        <div class="border-t border-zinc-800"></div>

        <div class="flex items-center justify-between gap-2">
            <div class="flex flex-wrap gap-1">
                @foreach($tags as $tag)
                <span class="text-[9px] text-zinc-600 border border-zinc-800 px-1.5 py-0.5 uppercase tracking-wider">
                    {{ $tag }}
                </span>
                @endforeach
            </div>
            <span class="text-[9px] text-pink-500/50 tracking-widest shrink-0 group-hover:text-pink-500 transition-colors">
                OPEN ▸
            </span>
        </div>
    </div>
</article>
