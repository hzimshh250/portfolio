@props([
    'index' => '01',
    'label' => 'SKILL',
])

<span class="skill-tag inline-flex items-center gap-2 px-3 py-1.5 border border-zinc-800 text-zinc-400 text-[10px] tracking-widest uppercase cursor-default">
    <span class="text-pink-500/70 font-bold">{{ $index }}</span>
    {{ $label }}
</span>
