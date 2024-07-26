<footer class="z-20 w-full bg-[{{ ENV('COR_LOGO_LETRA') }}] dark:bg-gray-900 text-[{{ ENV('COR_LOGO_LETRA') }}]">
    <div class="flex items-center justify-center p-6">
        <div class="flex justify-center items-center">
            <div class="inline-flex justify-between items-center">
                <a href="{{ url('https://github.com/txrangel') }}" target="_blank" title=""
                    class="mr-4 relative inline-flex items-center justify-center overflow-hidden text-md font-medium">
                    <i class="fa-brands fa-square-github"></i>
                </a>
                <a href="{{ url('https://www.linkedin.com/in/txrangel/') }}" target="_blank" title=""
                    class="mr-4 relative inline-flex items-center justify-center overflow-hidden text-md font-medium">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="{{ url('https://wa.me/5512981832641?text=Olá,%20João%20Vitor%20Rangel!%20Vim%20pelo%20seu%20site.%20Podemos%20conversar?') }}"
                    target="_blank" title=""
                    class="mr-4 relative inline-flex items-center justify-center overflow-hidden text-md font-medium">
                    <i class="fa-brands fa-square-whatsapp"></i>
                </a>
                <a href="arquivos/curriculo.pdf" download="Curriculo João Vitor Rangel" title=""
                    class="mr-4 relative inline-flex items-center justify-center overflow-hidden text-md font-medium">
                    <i class="fa-solid fa-file-pdf"></i>
                </a>
            </div>
            <span>&copy; {{ date('Y') }} João Teixeira - All Rights Reserved.</span>
        </div>
    </div>
</footer>
