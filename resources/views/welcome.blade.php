<x-layouts.app title="DEV_PORTFOLIO" description="Full-Stack Developer — Laravel · Tailwind CSS · JavaScript">

{{-- ════════════════════════════════════════════════════════════
     NAVBAR
════════════════════════════════════════════════════════════ --}}
<header class="fixed top-0 left-0 right-0 z-50 border-b border-zinc-800 bg-black/90 backdrop-blur-sm">
    <nav class="max-w-7xl mx-auto px-6 h-14 flex items-center justify-between">
        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2 group" id="nav-logo">
            <span class="text-pink-500 font-bold text-sm">▶</span>
            <span class="text-xs text-zinc-400 tracking-[0.3em] uppercase group-hover:text-white transition-colors">
                DEV_PORTFOLIO
            </span>
        </a>

        {{-- System Status (hidden on mobile) --}}
        <div class="hidden md:flex items-center gap-4 text-[10px] text-zinc-600 tracking-widest">
            <span class="text-green-500">● ONLINE</span>
            <span class="border-l border-zinc-800 pl-4">V.2.5.0 // STABLE BUILD</span>
        </div>

        {{-- Nav Links --}}
        <div class="flex items-center gap-6 text-[11px] text-zinc-500 tracking-widest uppercase">
            <a href="#projects" class="nav-link" id="nav-projects">Projects</a>
            <a href="#experience" class="nav-link" id="nav-experience">XP_Logs</a>
            <a href="#education" class="nav-link hidden md:block" id="nav-education">Edu</a>
            <a href="#skills" class="nav-link hidden sm:block" id="nav-skills">Skills</a>
            <a href="#contact" class="nav-link hidden sm:block" id="nav-contact">Contact</a>
        </div>
    </nav>
</header>


{{-- ════════════════════════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════════════════════ --}}
<section id="hero" class="relative min-h-screen flex flex-col pt-14 overflow-hidden">

    {{-- Top system bar --}}
    <div class="flex items-center justify-between px-6 py-3 border-b border-zinc-800 text-[10px] text-zinc-600 tracking-widest">
        <span>// SYS_INIT :: PORTFOLIO_RUNTIME</span>
        <span class="text-pink-500/70">V.2.5.0 // STABLE BUILD</span>
    </div>

    {{-- Main hero content --}}
    <div class="flex-1 flex flex-col justify-center px-6 md:px-16 lg:px-24 py-16 max-w-7xl mx-auto w-full">

        {{-- Eyebrow --}}
        <div class="flex items-center gap-3 mb-6 fade-in" style="transition-delay: 0.1s">
            <div class="w-8 h-px bg-pink-500"></div>
            <span class="text-[11px] text-pink-500 tracking-[0.4em] uppercase">Full-Stack Developer</span>
        </div>

        {{-- Giant Name --}}
        <div class="mb-6 fade-in" style="transition-delay: 0.2s">
            <h1 class="font-bold uppercase leading-none tracking-tight">
                <span class="block text-white"
                      style="font-size: clamp(3rem, 10vw, 9rem); line-height: 1">
                    HAZIM
                </span>
                <span class="block text-stroke"
                      style="font-size: clamp(3rem, 10vw, 9rem); line-height: 1">
                    SHAH
                </span>
            </h1>
        </div>

        {{-- Width metric line --}}
        <div class="flex items-center gap-4 mb-10 fade-in" style="transition-delay: 0.3s">
            <span class="text-[9px] text-zinc-600 tracking-widest">WIDTH: AUTO</span>
            <div class="flex-1 max-w-md h-px bg-zinc-800 relative">
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1.5 h-1.5 border border-zinc-600 rotate-45"></div>
                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1.5 h-1.5 border border-zinc-600 rotate-45"></div>
            </div>
            <span class="text-[9px] text-zinc-600 tracking-widest">100%</span>
        </div>

        {{-- Tagline --}}
        <div class="mb-10 fade-in" style="transition-delay: 0.4s">
            <p class="text-zinc-400 text-sm leading-relaxed max-w-xl">
                <span class="text-pink-500">$</span>
                BSE (Multimedia) graduate from
                <span class="text-white">Universiti Kebangsaan Malaysia</span>.
                Full Stack Developer with hands-on production experience - building
                <span class="text-white">Laravel</span>, <span class="text-white">MySQL</span>, and
                <span class="text-white">JavaScript</span> systems for real users.
            </p>
        </div>

        {{-- CTA Row --}}
        <div class="flex flex-wrap items-center gap-4 fade-in" style="transition-delay: 0.5s">
            <a href="#projects" id="hero-cta-projects"
               class="btn-ghost px-6 py-3 border border-pink-500 text-pink-500 text-xs tracking-widest uppercase hover:bg-pink-500 hover:text-black transition-all duration-200">
                VIEW_PROJECTS //
            </a>
            <a href="#contact" id="hero-cta-contact"
               class="btn-ghost px-6 py-3 border border-zinc-700 text-zinc-400 text-xs tracking-widest uppercase">
                INITIATE_CONTACT
            </a>
            <a href="{{ asset('files/resume.pdf') }}" download="Hazim_Shah_Resume.pdf" id="hero-cta-resume"
               class="btn-ghost flex items-center gap-2 px-6 py-3 border border-dashed border-zinc-700 text-zinc-500 text-xs tracking-widest uppercase hover:border-pink-500 hover:text-pink-500 transition-all duration-200">
                <span class="text-[10px]">↓</span> DOWNLOAD_CV
            </a>
        </div>
    </div>

    {{-- Bottom system meta bar --}}
    <div class="flex items-center justify-between px-6 py-3 border-t border-zinc-800 text-[10px] text-zinc-700 tracking-widest">
        <span>// STATUS :: AVAILABLE_FOR_WORK</span>
        <span id="hero-clock">00:00:00</span>
    </div>

    {{-- Decorative vertical line (desktop) --}}
    <div class="hidden lg:block absolute right-24 top-20 bottom-20 w-px bg-zinc-800"></div>

    {{-- Decorative side label --}}
    <div class="hidden lg:flex absolute right-24 top-1/2 -translate-y-1/2 translate-x-10 items-center gap-2"
         style="transform: translateY(-50%) translateX(3rem) rotate(90deg)">
        <span class="text-[9px] text-zinc-700 tracking-[0.4em] uppercase whitespace-nowrap">SYSTEM :: ACTIVE</span>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     PROJECTS INDEX
════════════════════════════════════════════════════════════ --}}
<section id="projects" class="border-t border-zinc-800 py-24 px-6 md:px-16 lg:px-24 max-w-7xl mx-auto w-full">

    {{-- Section Header --}}
    <div class="flex items-end justify-between mb-12 fade-in">
        <div>
            <p class="text-[10px] text-pink-500 tracking-[0.4em] uppercase mb-2">// 01_MODULE</p>
            <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-widest text-white">
                PROJECT_INDEX
            </h2>
        </div>
        <span class="text-[10px] text-zinc-700 tracking-widest hidden md:block">
            TOTAL :: {{ count($projects) }}_ENTRIES
        </span>
    </div>

    {{-- Separator --}}
    <div class="border-t border-zinc-800 mb-12"></div>

    {{-- Project Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 fade-in" style="transition-delay: 0.1s">
        @foreach($projects as $project)
            <x-project-card
                :id="$project['id']"
                :index="str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)"
                :title="$project['title']"
                :description="$project['description']"
                :image="$project['image'] ?? null"
                :tags="$project['tags'] ?? []"
                :year="$project['year'] ?? date('Y')"
            />
        @endforeach
    </div>
</section>

{{-- Project data as JSON for modal JS --}}
<script>
    window.PORTFOLIO_PROJECTS = @json($projects);
</script>

{{-- ════════════════════════════════════════════════════════════
     PROJECT MODAL
════════════════════════════════════════════════════════════ --}}
<div id="project-modal"
     class="fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-8"
     style="display:none!important"
     role="dialog"
     aria-modal="true"
     aria-labelledby="modal-title">

    {{-- Backdrop --}}
    <div id="modal-backdrop"
         class="absolute inset-0 bg-black/90 backdrop-blur-sm"
         id="modal-close-backdrop"></div>

    {{-- Modal Panel --}}
    <div id="modal-panel"
         class="relative z-10 w-full max-w-5xl max-h-[90vh] flex flex-col border border-zinc-800 overflow-hidden"
         style="background:#080808">

        {{-- Modal Top Bar --}}
        <div class="flex items-center justify-between px-5 py-3 border-b border-zinc-800 shrink-0">
            <div class="flex items-center gap-3">
                <span class="text-pink-500 text-xs">◈</span>
                <span class="text-[10px] text-zinc-600 tracking-widest">// PROJECT_DETAIL_VIEW</span>
            </div>
            <div class="flex items-center gap-4">
                <span id="modal-year" class="text-[10px] text-zinc-700 tracking-widest"></span>
                <button id="modal-close"
                        class="text-zinc-600 hover:text-pink-500 transition-colors text-xs tracking-widest"
                        aria-label="Close modal">
                    [CLOSE ✕]
                </button>
            </div>
        </div>

        {{-- Modal Scrollable Body --}}
        <div class="flex-1 overflow-y-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 min-h-full">

                {{-- LEFT: Info --}}
                <div class="p-6 md:p-8 border-b lg:border-b-0 lg:border-r border-zinc-800 flex flex-col gap-6">

                    {{-- Title --}}
                    <div>
                        <p class="text-[9px] text-pink-500/60 tracking-[0.4em] uppercase mb-2">SYSTEM :: PROJECT_LOADED</p>
                        <h2 id="modal-title" class="text-xl font-bold uppercase tracking-widest text-white leading-tight"></h2>
                    </div>

                    {{-- Tech Tags --}}
                    <div>
                        <p class="text-[9px] text-zinc-700 tracking-widest uppercase mb-2">TECH_STACK</p>
                        <div id="modal-tags" class="flex flex-wrap gap-2"></div>
                    </div>

                    {{-- Role --}}
                    <div class="border-t border-zinc-800 pt-4">
                        <p class="text-[9px] text-zinc-700 tracking-widest uppercase mb-1">MY_ROLE</p>
                        <p id="modal-role" class="text-xs text-pink-500 tracking-wide"></p>
                    </div>

                    {{-- Description --}}
                    <div>
                        <p class="text-[9px] text-zinc-700 tracking-widest uppercase mb-2">OVERVIEW</p>
                        <p id="modal-details" class="text-xs text-zinc-400 leading-relaxed"></p>
                    </div>

                    {{-- Challenges --}}
                    <div class="border-t border-zinc-800 pt-4">
                        <p class="text-[9px] text-zinc-700 tracking-widest uppercase mb-2">CHALLENGES</p>
                        <p id="modal-challenges" class="text-xs text-zinc-600 leading-relaxed"></p>
                    </div>

                    {{-- Footer: Live Button OR Restricted Notice --}}
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex flex-col gap-3">

                        {{-- Live site button (shown when URL exists) --}}
                        <a id="modal-live-btn"
                           href="#"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="hidden w-full py-2.5 border border-pink-500 text-pink-500 text-[10px] tracking-[0.3em] uppercase text-center hover:bg-pink-500 hover:text-black transition-all duration-200">
                            ▶ VISIT_LIVE_SITE //
                        </a>

                        {{-- Restricted notice (shown when no URL) --}}
                        <div id="modal-restricted"
                             class="flex items-center gap-2 text-[9px] text-zinc-700 tracking-widest">
                            <span class="text-yellow-600">▲</span>
                            SOURCE CODE &amp; LIVE LINK RESTRICTED -- COMPANY POLICY
                        </div>
                    </div>
                </div>

                {{-- RIGHT: Gallery --}}
                <div class="p-6 md:p-8 flex flex-col gap-4">
                    <p class="text-[9px] text-zinc-700 tracking-widest uppercase shrink-0">GALLERY // SCREENSHOTS</p>

                    {{-- Main Image Viewer --}}
                    <div id="gallery-main"
                         class="relative aspect-video border border-zinc-800 overflow-hidden bg-zinc-950 flex items-center justify-center"
                         style="background-image:linear-gradient(to right,#1c1c1e 1px,transparent 1px),linear-gradient(to bottom,#1c1c1e 1px,transparent 1px);background-size:1.5rem 1.5rem">
                        <img id="gallery-main-img" src="" alt="" class="w-full h-full object-cover hidden">
                        <div id="gallery-empty" class="flex flex-col items-center gap-2">
                            <span class="text-zinc-700 text-2xl">◻</span>
                            <span class="text-[9px] text-zinc-700 tracking-widest">NO_SCREENSHOTS_YET</span>
                            <span class="text-[8px] text-zinc-800 tracking-widest">ADD IMAGES TO gallery[] IN HomeController</span>
                        </div>
                        {{-- Nav arrows --}}
                        <button id="gallery-prev"
                                class="absolute left-2 top-1/2 -translate-y-1/2 w-7 h-7 border border-zinc-700 text-zinc-500 hover:border-pink-500 hover:text-pink-500 transition-all flex items-center justify-center text-xs hidden">
                            ‹
                        </button>
                        <button id="gallery-next"
                                class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 border border-zinc-700 text-zinc-500 hover:border-pink-500 hover:text-pink-500 transition-all flex items-center justify-center text-xs hidden">
                            ›
                        </button>
                        {{-- Counter --}}
                        <div id="gallery-counter"
                             class="absolute bottom-2 right-2 text-[9px] text-zinc-700 tracking-widest hidden">
                        </div>
                    </div>

                    {{-- Thumbnail Strip --}}
                    <div id="gallery-thumbs" class="flex gap-2 overflow-x-auto pb-1 hidden">
                    </div>

                    {{-- Hint --}}
                    <p class="text-[9px] text-zinc-800 tracking-widest mt-auto">
                        $ upload screenshots → public/images/projects/{{ '{id}' }}/
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>



{{-- ════════════════════════════════════════════════════════════
     EXPERIENCE LOGS (XP_LOGS)
════════════════════════════════════════════════════════════ --}}
<section id="experience" class="border-t border-zinc-800 py-24 px-6 md:px-16 lg:px-24 max-w-7xl mx-auto w-full">

    {{-- Section Header --}}
    <div class="flex items-end justify-between mb-12 fade-in">
        <div>
            <p class="text-[10px] text-pink-500 tracking-[0.4em] uppercase mb-2">// 02_MODULE</p>
            <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-widest text-white">
                XP_LOGS
            </h2>
        </div>
        <span class="text-[10px] text-zinc-700 tracking-widest hidden md:block">
            RECORDS :: {{ count($experiences) }}_ENTRIES
        </span>
    </div>

    {{-- Separator --}}
    <div class="border-t border-zinc-800 mb-12"></div>

    {{-- Terminal Pre-header --}}
    <div class="mb-8 fade-in" style="transition-delay: 0.05s">
        <p class="text-xs text-zinc-600 tracking-widest">$ cat experience.log | grep --color=auto "ROLE"</p>
        <p class="text-xs text-pink-500/60 tracking-widest mt-1">OUTPUT: {{ count($experiences) }} RECORDS FOUND</p>
    </div>

    {{-- XP Timeline --}}
    <div class="relative border-l border-zinc-800 pl-8 space-y-10 fade-in" style="transition-delay: 0.1s">
        @foreach($experiences as $exp)
        <div class="xp-node relative">
            {{-- Role + Date row --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                <h3 class="text-sm font-bold uppercase tracking-widest text-white">
                    {{ $exp['role'] }}
                </h3>
                <span class="text-[10px] text-pink-500/80 tracking-widest border border-pink-500/20 px-2 py-0.5 shrink-0">
                    {{ $exp['period'] }}
                </span>
            </div>

            {{-- Company --}}
            <p class="text-xs text-zinc-500 tracking-wider mb-3 uppercase">
                {{ $exp['company'] }}
            </p>

            {{-- Bullet Points --}}
            <ul class="space-y-1.5">
                @foreach($exp['bullets'] as $bullet)
                <li class="text-xs text-zinc-600 leading-relaxed flex gap-2">
                    <span class="text-zinc-700 shrink-0">▸</span>
                    {{ $bullet }}
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     EDUCATION
════════════════════════════════════════════════════════════ --}}
<section id="education" class="border-t border-zinc-800 py-24 px-6 md:px-16 lg:px-24 max-w-7xl mx-auto w-full">

    {{-- Section Header --}}
    <div class="flex items-end justify-between mb-12 fade-in">
        <div>
            <p class="text-[10px] text-pink-500 tracking-[0.4em] uppercase mb-2">// 03_MODULE</p>
            <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-widest text-white">
                EDU_LOG
            </h2>
        </div>
    </div>

    {{-- Separator --}}
    <div class="border-t border-zinc-800 mb-12"></div>

    {{-- Terminal Pre-header --}}
    <div class="mb-8 fade-in" style="transition-delay: 0.05s">
        <p class="text-xs text-zinc-600 tracking-widest">$ cat education.log | sort --reverse</p>
        <p class="text-xs text-pink-500/60 tracking-widest mt-1">OUTPUT: 2 RECORDS FOUND</p>
    </div>

    {{-- Education Timeline --}}
    <div class="relative border-l border-zinc-800 pl-8 space-y-10 fade-in" style="transition-delay: 0.1s">

        {{-- Degree --}}
        <div class="xp-node relative">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                <h3 class="text-sm font-bold uppercase tracking-widest text-white">
                    BACHELOR OF SOFTWARE ENGINEERING
                </h3>
                <span class="text-[10px] text-pink-500/80 tracking-widest border border-pink-500/20 px-2 py-0.5 shrink-0">
                    AUG 2022 - PRESENT
                </span>
            </div>
            <p class="text-xs text-zinc-500 tracking-wider mb-3 uppercase">
                Multimedia System Development // Universiti Kebangsaan Malaysia (UKM)
            </p>
            <ul class="space-y-1.5">
                <li class="text-xs text-zinc-600 leading-relaxed flex gap-2">
                    <span class="text-zinc-700 shrink-0">▸</span>
                    Specialisation in multimedia systems, application design, and software engineering principles.
                </li>
                <li class="text-xs text-zinc-600 leading-relaxed flex gap-2">
                    <span class="text-zinc-700 shrink-0">▸</span>
                    Coursework covers Android development, Unity 3D, database systems, and web application development.
                </li>
            </ul>
        </div>

        {{-- Foundation --}}
        <div class="xp-node relative">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                <h3 class="text-sm font-bold uppercase tracking-widest text-white">
                    COMPUTER SCIENCE (MATRICULATION)
                </h3>
                <span class="text-[10px] text-pink-500/80 tracking-widest border border-pink-500/20 px-2 py-0.5 shrink-0">
                    AUG 2020 - JUNE 2022
                </span>
            </div>
            <p class="text-xs text-zinc-500 tracking-wider mb-3 uppercase">
                Kolej Matrikulasi Selangor
            </p>
            <ul class="space-y-1.5">
                <li class="text-xs text-zinc-600 leading-relaxed flex gap-2">
                    <span class="text-zinc-700 shrink-0">▸</span>
                    CGPA: 3.54 / 4.00
                </li>
            </ul>
        </div>

    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     SYSTEM CAPABILITIES (SKILLS)
════════════════════════════════════════════════════════════ --}}
<section id="skills" class="border-t border-zinc-800 py-24 px-6 md:px-16 lg:px-24 max-w-7xl mx-auto w-full">

    {{-- Section Header --}}
    <div class="flex items-end justify-between mb-12 fade-in">
        <div>
            <p class="text-[10px] text-pink-500 tracking-[0.4em] uppercase mb-2">// 04_MODULE</p>
            <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-widest text-white">
                SYS_CAPABILITIES
            </h2>
        </div>
    </div>

    {{-- Separator --}}
    <div class="border-t border-zinc-800 mb-12"></div>

    {{-- Memory Allocation Bar --}}
    <div class="mb-10 fade-in" style="transition-delay: 0.05s">
        <div class="flex items-center justify-between mb-2">
            <span class="text-[10px] text-zinc-600 tracking-widest uppercase">MEMORY_ALLOCATION</span>
            <span class="text-[10px] text-pink-500 tracking-widest" id="mem-pct">0%</span>
        </div>
        <div class="h-px bg-zinc-800 relative overflow-hidden">
            <div id="mem-bar"
                 class="absolute left-0 top-0 h-full bg-pink-500 transition-none"
                 style="width: 0%; --target-w: 87%">
            </div>
        </div>
        <div class="flex justify-between mt-1">
            <span class="text-[9px] text-zinc-700">0x0000</span>
            <span class="text-[9px] text-zinc-700">0xFFFF</span>
        </div>
    </div>

    {{-- Skill Pyramid --}}
    <div class="flex flex-col items-center gap-5 fade-in" style="transition-delay: 0.1s">

        @foreach($skills as $category => $items)
        <div class="w-full flex flex-col items-center gap-3 fade-in"
             style="transition-delay: {{ $loop->index * 0.08 + 0.1 }}s">

            {{-- Category label --}}
            <p class="text-[9px] text-zinc-700 tracking-[0.4em] uppercase">
                {{ $loop->iteration }}. {{ $category }}
            </p>

            {{-- Skill cards row - centered, narrows naturally per count --}}
            <div class="flex flex-wrap justify-center gap-2">
                @foreach($items as $i => $skill)
                <div class="skill-pyramid-card group relative px-3 py-2 border border-zinc-800 bg-zinc-950
                            hover:border-pink-500/60 hover:bg-pink-500/5
                            transition-all duration-200 cursor-default">
                    {{-- Index --}}
                    <span class="absolute top-1 left-1.5 text-[8px] text-pink-500/40 font-mono leading-none
                                 group-hover:text-pink-500/80 transition-colors">
                        {{ str_pad($loop->parent->index * 20 + $i + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    {{-- Label --}}
                    <span class="block text-[11px] text-zinc-400 tracking-widest uppercase mt-2
                                 group-hover:text-white transition-colors whitespace-nowrap">
                        {{ $skill }}
                    </span>
                </div>
                @endforeach
            </div>

            {{-- Connector line (not on last row) --}}
            @if (!$loop->last)
            <div class="w-px h-4 bg-zinc-800"></div>
            @endif

        </div>
        @endforeach

        {{-- Pyramid tip --}}
        <div class="flex flex-col items-center gap-1 mt-2 opacity-30">
            <div class="w-px h-3 bg-zinc-700"></div>
            <div class="w-2 h-2 rotate-45 border border-pink-500/60 bg-pink-500/10"></div>
        </div>

    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     CONTACT
════════════════════════════════════════════════════════════ --}}
<section id="contact" class="border-t border-zinc-800 py-24 px-6 md:px-16 lg:px-24 max-w-7xl mx-auto w-full">

    {{-- Section Header --}}
    <div class="mb-12 fade-in">
        <p class="text-[10px] text-pink-500 tracking-[0.4em] uppercase mb-2">// 05_MODULE</p>
        <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-widest text-white">
            INIT_CONTACT
        </h2>
    </div>

    {{-- Separator --}}
    <div class="border-t border-zinc-800 mb-12"></div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 fade-in" style="transition-delay: 0.1s">

        {{-- Left: Message --}}
        <div>
            <p class="text-sm text-zinc-400 leading-relaxed mb-8">
                <span class="text-pink-500">$</span>
                BSE (Multimedia) graduate available for full-time roles and freelance projects.
                Experienced in Laravel full-stack development with real production deployments.
                If you have a system worth building - let's talk.
            </p>
            <div class="space-y-3">
                <a href="mailto:[hazimshah69@gmail.com]" id="contact-email"
                   class="flex items-center gap-3 text-xs text-zinc-500 hover:text-pink-500 transition-colors group">
                    <span class="text-pink-500/40 group-hover:text-pink-500">▸</span>
                    hazimshah69@gmail.com
                </a>
                <a href="https://www.linkedin.com/in/muhdhazimshah/" target="_blank" id="contact-linkedin"
                   class="flex items-center gap-3 text-xs text-zinc-500 hover:text-pink-500 transition-colors group">
                    <span class="text-pink-500/40 group-hover:text-pink-500">▸</span>
                    linkedin.com/in/muhdhazimshah/
                </a>
            </div>

            {{-- Download Resume --}}
            <div class="pt-6 mt-2 border-t border-zinc-800">
                <p class="text-[9px] text-zinc-700 tracking-[0.4em] uppercase mb-3">// ATTACH_RESUME</p>
                <a href="{{ asset('files/resume.pdf') }}" download="Hazim_Shah_Resume.pdf" id="contact-resume-download"
                   class="btn-ghost inline-flex items-center gap-3 px-6 py-3 border border-dashed border-zinc-700 text-zinc-400 text-xs tracking-widest uppercase hover:border-pink-500 hover:text-pink-500 transition-all duration-200 group">
                    <span class="text-base leading-none group-hover:translate-y-0.5 transition-transform duration-200">↓</span>
                    DOWNLOAD_CV.PDF
                </a>
            </div>
        </div>

        {{-- Right: Terminal-style form --}}
        <form id="contact-form" class="space-y-4">
            <div class="border border-zinc-800 p-1 focus-within:border-pink-500/50 transition-colors">
                <label class="block text-[9px] text-zinc-600 tracking-widest px-2 pt-1">NAME_INPUT</label>
                <input type="text" name="name" id="form-name" placeholder="YOUR_NAME"
                       class="w-full bg-transparent px-2 py-2 text-xs text-zinc-300 placeholder-zinc-700 outline-none">
            </div>
            <div class="border border-zinc-800 p-1 focus-within:border-pink-500/50 transition-colors">
                <label class="block text-[9px] text-zinc-600 tracking-widest px-2 pt-1">EMAIL_INPUT</label>
                <input type="email" name="email" id="form-email" placeholder="YOUR@EMAIL.COM"
                       class="w-full bg-transparent px-2 py-2 text-xs text-zinc-300 placeholder-zinc-700 outline-none">
            </div>
            <div class="border border-zinc-800 p-1 focus-within:border-pink-500/50 transition-colors">
                <label class="block text-[9px] text-zinc-600 tracking-widest px-2 pt-1">MESSAGE_INPUT</label>
                <textarea name="message" id="form-message" rows="5" placeholder="DESCRIBE_YOUR_PROJECT //"
                          class="w-full bg-transparent px-2 py-2 text-xs text-zinc-300 placeholder-zinc-700 outline-none resize-none"></textarea>
            </div>
            <button type="submit" id="form-submit"
                    class="btn-ghost w-full py-3 border border-pink-500 text-pink-500 text-xs tracking-widest uppercase hover:bg-pink-500 hover:text-black transition-all duration-200">
                TRANSMIT_MESSAGE //
            </button>
        </form>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     FOOTER
════════════════════════════════════════════════════════════ --}}
<footer class="border-t border-zinc-800 py-8 px-6 md:px-16 lg:px-24">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <span class="text-pink-500 text-sm">▶</span>
            <span class="text-[10px] text-zinc-700 tracking-widest uppercase">DEV_PORTFOLIO // SYSTEM</span>
        </div>
        <span class="text-[10px] text-zinc-700 tracking-widest">
            &copy; {{ date('Y') }} - ALL_RIGHTS_RESERVED
        </span>
        <div class="flex items-center gap-2 text-[9px] text-zinc-800 tracking-widest">
            <span class="text-green-600">●</span>
            BUILD: STABLE // UPTIME: 99.9%
        </div>
    </div>
</footer>

</x-layouts.app>
