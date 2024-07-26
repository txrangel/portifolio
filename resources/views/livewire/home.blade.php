<div class="text-zinc-700 dark:text-[{{ ENV('COR_LOGO_LETRA') }}]">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <div class="w-full">
                @include('components.sections.section-home')
                @include('components.sections.section-projetos')
                <div class="flex items-center justify-center">
                    <button wire:navigate href="{{ Route('projects') }}"
                        class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span
                            class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Ver mais
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </span>
                    </button>
                </div>
                @include('components.sections.section-informacoes')
                <livewire:certificates :certificadoId="$certificadoId" />
                @include('components.sections.section-experiencias')
            </div>
        </div>
    </div>
</div>
