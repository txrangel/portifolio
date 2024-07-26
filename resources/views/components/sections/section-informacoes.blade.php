<section id="informacoes" class="my-6">
    <div class="inline-flex justify-between rounded-tl-lg rounded-br-lg relative group overflow-hidden bg-gray-900 text-gray-50 p-5 border-2 border-[{{ ENV('COR_LOGO_FUNDO') }}]">
        <div class="">
            <img class="h-96 w-96" src="img/undraw_laravel_and_vue_-59-tp.svg" alt="Desenho UnDraw" />
        </div>
        <div class="border-l-2 border-white/10 h-96 w-2/3 ml-6 pl-6">
            <div class="h-56">
                <h4 class="pb-4 text-2xl font-bold leading-none tracking-tight text-[{{ ENV('COR_LOGO_FUNDO') }}]">Quem
                    sou
                </h4>
                <h2 class="pb-2 text-4xl font-bold leading-none tracking-tight">João Vitor Rangel Teixeira Domingues</h2>
                <h3 class="">Full-Stack Developer</h3>
                <p class="pt-4 text-lg text-gray-200 lg:text-xl dark:text-gray-200 text-justify">Sou João Vitor Rangel,
                    tenho 20 anos e há mais de 3 anos venho contribuindo para o desenvolvimento e aprimoramento de
                    plataformas e produtos através da minha expertise Full-Stack, ajudando empresas a alcançarem seus
                    objetivos de forma eficiente e inovadora.</p>
                    
            </div>
            <div class="mt-4 flex justify-center items-center h-36">
                <div
                    class="w-3/4 h-28 inline-flex justify-between items-center px-4 ">
                    <a href="{{ url('https://github.com/txrangel') }}" target="_blank" title=""
                        class="hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] hover:border-2 duration-300 border-[{{ ENV('COR_LOGO_FUNDO') }}] p-2 rounded-lg">
                        <i class="fa-brands fa-square-github fa-5x"></i>
                    </a>
                    <a href="{{ url('https://www.linkedin.com/in/txrangel/') }}" target="_blank" title=""
                        class="hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] hover:border-2 duration-300 border-[{{ ENV('COR_LOGO_FUNDO') }}] p-2 rounded-lg">
                        <i class="fa-brands fa-linkedin fa-5x"></i>
                    </a>
                    <a href="{{ url('https://wa.me/5512981832641?text=Olá,%20João%20Vitor%20Rangel!%20Vim%20pelo%20seu%20site.%20Podemos%20conversar?') }}"
                        target="_blank" title=""
                        class="hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] hover:border-2 duration-300 border-[{{ ENV('COR_LOGO_FUNDO') }}] p-2 rounded-lg">
                        <i class="fa-brands fa-square-whatsapp fa-5x"></i>
                    </a>
                    <a href="arquivos/curriculo.pdf" download="Curriculo João Vitor Rangel" title=""
                        class="hover:text-[{{ ENV('COR_LOGO_FUNDO') }}] hover:border-2 duration-300 border-[{{ ENV('COR_LOGO_FUNDO') }}] p-2 rounded-lg">
                        <i class="fa-solid fa-file-pdf fa-5x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
