<section>
    <div class="bg-[{{ ENV('COR_LOGO_LETRA') }}] max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-lg">
        <div class="inline-flex justify-between items-center py-2 w-14">
            <a class="circle" wire:navigate href="{{ Route('home') }}">
                <span class="bg-red-500 inline-flex justify-center items-center w-4 h-4 rounded-full"></span>
            </a>
            <a class="circle" wire:navigate href="{{ Route('projects') }}">
                <span class="bg-yellow-500 inline-flex justify-center items-center w-4 h-4 rounded-full"></span>
            </a>
            <div class="circle">
                <span class="bg-green-500 inline-flex justify-center items-center w-4 h-4 rounded-full"></span>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="w-full h-60 bg-red-500"></div>
            <div class="leading-normal py-6">
                <div class="">
                    <h5 class="text-4xl font-extrabold text-[{{ ENV('COR_LOGO_FUNDO') }}]">Relogio dinamico</h5>
                    <div class="my-4 w-full">
                        <span class="bg-gray-900 text-[{{ ENV('COR_LOGO_LETRA') }}] p-2 w-max h-6 rounded-lg font-normal text-xs">PHP</span>
                        <span class="bg-gray-900 text-[{{ ENV('COR_LOGO_LETRA') }}] p-2 w-max h-6 rounded-lg font-normal text-xs">Laravel</span>
                        <span class="bg-gray-900 text-[{{ ENV('COR_LOGO_LETRA') }}] p-2 w-max h-6 rounded-lg font-normal text-xs">CSS</span>
                        <span class="bg-gray-900 text-[{{ ENV('COR_LOGO_LETRA') }}] p-2 w-max h-6 rounded-lg font-normal text-xs">HTML</span>
                    </div>
                    <div class="my-2 w-full">
                        <a href="" title=""
                            class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span
                                class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                <i class="fa-solid fa-globe mr-2"></i>
                                Visualizar Projeto
                            </span>
                        </a>
                        <a href="" title=""
                            class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span
                                class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                <i class="fa-brands fa-github mr-2"></i>
                                Repositório
                            </span>
                        </a>
                        <a href="" title=""
                            class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span
                                class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                <i class="fa-brands fa-linkedin-in mr-2"></i>
                                Postagem
                            </span>
                        </a>
                    </div>
                </div>
                <div class="break-words w-full">
                    {!! $seuConteudoMarkdown !!}
                </div>                
            </div>
        </div>
    </div>
</section>
