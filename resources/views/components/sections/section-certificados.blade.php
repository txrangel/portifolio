<section id="certificados" class="my-6">
    <div class="inline-flex justify-between rounded-tl-lg rounded-br-lg relative overflow-hidden bg-gray-900 text-gray-50 p-5 border-2 border-[{{ ENV('COR_LOGO_FUNDO') }}]">
        <div class="">
            <button wire:click="changeCertificate(1)">Certificado 1</button>
        </div>
        <div class="border-l-2 border-white/10 h-96 w-2/3 ml-6 pl-6">
            @if (!empty($certificado))
                <div class="h-56">
                    <h4 class="pb-4 text-2xl font-bold leading-none tracking-tight text-[{{ ENV('COR_LOGO_FUNDO') }}]">{{certificado->emissor}}</h4>
                    <h2 class="pb-2 text-4xl font-bold leading-none tracking-tight">{{$certificado->titulo}}</h2>
                    <h3 class="">{{$certificado->duracao}}</h3>
                    <p class="pt-4 text-lg text-gray-200 lg:text-xl dark:text-gray-200 text-justify">{{$certificado->desscricao}}</p>
                </div>
                <div class="mt-4 w-full flex justify-center">
                    <a href="{{$certificado->path}}" download="{{$certificado->titulo}}" title=""
                        class="mx-4 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span
                            class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            <i class="fa-regular fa-file-pdf mr-2"></i>
                            Cerificado
                        </span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>