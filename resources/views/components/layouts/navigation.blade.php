<nav class="relative top-0 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ Route('home') }}" title="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img type="image/svg" src="img/logo_branco_tx.svg" class="h-6" alt="TX Rangel Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Abrir menu principal</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a  href="{{ Route('home') }}" title=""
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ Route::is('home') ? 'border-b-2 duration-300' : '' }} border-[{{ ENV('COR_LOGO_FUNDO') }}] md:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] md:p-0 dark:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] dark:hover:bg-gray-700 dark:hover:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:bg-transparent">Home</a>
                </li>
                <li>
                    <a wire:navigate href="{{ Route('projects') }}" title=""
                        class="duration-300 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ Route::is('projects') ? 'border-b-2 ' : '' }} border-[{{ ENV('COR_LOGO_FUNDO') }}] md:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] md:p-0 dark:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] dark:hover:bg-gray-700 dark:hover:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:bg-transparent">Projetos</a>
                </li>
                <li>
                    <a wire:navigate href="{{ Route('informations') }}" title=""
                        class="duration-300 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ Route::is('informations') ? 'border-b-2 ' : '' }} border-[{{ ENV('COR_LOGO_FUNDO') }}] md:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] md:p-0 dark:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] dark:hover:bg-gray-700 dark:hover:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:bg-transparent">Informações</a>
                </li>
                <li>
                    <a href="{{ Route('certificates') }}" title=""
                        class="duration-300 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ Route::is('certificates') ? 'border-b-2 ' : '' }} border-[{{ ENV('COR_LOGO_FUNDO') }}] md:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] md:p-0 dark:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] dark:hover:bg-gray-700 dark:hover:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:bg-transparent">Certificações</a>
                </li>
                <li>
                    <a wire:navigate href="{{ Route('experiences') }}" title=""
                        class="duration-300 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ Route::is('experiences') ? 'border-b-2 ' : '' }} border-[{{ ENV('COR_LOGO_FUNDO') }}] md:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] md:p-0 dark:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] dark:hover:bg-gray-700 dark:hover:text-[{{ ENV('COR_LOGO_LETRA') }}] md:dark:hover:bg-transparent">Experiencias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
