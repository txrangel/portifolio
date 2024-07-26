<section id="projetos" class="flex justify-center items-center my-6">
    <div class="grid-cols-1 sm:grid md:grid-cols-4">
        @foreach ($projetos as $projeto)
            <div class="rounded-lg relative group cursor-pointer overflow-hidden w-64 h-80 bg-gray-900 text-gray-50 p-5 hover:shadow-lg hover:shadow-[{{ ENV('COR_LOGO_FUNDO') }}] transition-shadow duration-300">
                <a wire:navigate href="{{ Route('projectpage',$projeto->id) }}" class="" title="">
                    <div class="">
                        <div class="rounded-lg group-hover:scale-110 w-full h-60 bg-red-500 duration-300"></div>
                        <div class="absolute w-56 left-0 p-5 -bottom-16 duration-300 group-hover:-translate-y-12">
                            <div
                                class="absolute -z-10 left-0 w-64 h-40 opacity-0 duration-300 group-hover:opacity-50 group-hover:bg-blue-900">
                            </div>
                            <span class="text-xl w-64 font-bold break-words">{{$projeto->name}}</span>
                            <p class="group-hover:opacity-100 w-64 duration-300 opacity-0 break-words">{{$projeto->resume}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
