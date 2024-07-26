<section id="home" class="my-6">
    <div class="p-6 inline-flex items-center justify-between relative group overflow-hidden">
        @foreach ($funcionarios as $funcionario)
        <div class="w-1/2">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-[{{ ENV('COR_LOGO_LETRA') }}]">
                Construindo um <span class="text-[{{ ENV('COR_LOGO_FUNDO') }}]">futuro melhor</span> com tecnologia.
            </h1>
            <p class="text-lg text-gray-200 lg:text-xl dark:text-gray-200 text-justify">Olá!</p>
            <p class="text-lg text-gray-200 lg:text-xl dark:text-gray-200 text-justify">Sou João Vitor Rangel, tenho 20
                anos
                e há mais de 3 anos venho contribuindo para o desenvolvimento e aprimoramento de plataformas e produtos
                através da minha expertise Full-Stack, ajudando empresas a alcançarem seus objetivos de forma eficiente
                e
                inovadora.</p>
        </div>
        <div
            class="h-80 w-80 z-20 rounded-full hover:shadow-xl hover:shadow-[{{ ENV('COR_LOGO_FUNDO') }}] hover:scale-95 scale-100 duration-300">
            <a href="{{$funcionario->linkedin}}" title="" class="cursor-pointer rounded-full " target="_blank">
                @if(empty($funcionario->photo_path))
                    <img class="rounded-full" src="{{$funcionario->photo_path}}" alt="{{$funcionario->name}}" class=""/>
                @else
                    <img class="rounded-full" src="img/no-user.jpeg" alt="No user" class=""/>
                @endif
            </a>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <a href="{{$funcionario->cv_path}}" download="Curriculo João Vitor Rangel" title=""
            class="mx-4 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span
                class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <i class="fa-regular fa-file-pdf mr-2"></i>
                Curriculo
            </span>
        </a>

        <a href="{{$funcionario->github}}" target="_blank" title="GitHub"
            class="mx-4 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-md font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[{{ ENV('COR_LOGO_FUNDO') }}] to-blue-500 group-hover:from-[{{ ENV('COR_LOGO_FUNDO') }}] group-hover:to-blue-500 hover:text-[{{ ENV('COR_LOGO_LETRA') }}] dark:text-[{{ ENV('COR_LOGO_LETRA') }}] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span
                class="relative inline-flex items-center px-5 py-2.5 transition-all ease-in duration-300 bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <i class="fa-brands fa-github mr-2"></i>
                Github
            </span>
        </a>
        @include('components.form-message')
    </div>
        @endforeach
</section>
