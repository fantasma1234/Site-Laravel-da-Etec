<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="flex justify-around items-center p-7">
        <div>
            <img src="/img/logo.png" alt="Imagem" class="w-3/4">
        </div>
        <div class="cursor-pointer md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <nav class="hidden md:flex">
            <ul class="flex gap-8">
                <li>
                    <a href="{{ route('site.index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('site.cursos') }}">Cursos</a>
                </li>
                <li>
                    <a href="{{ route('site.departamentos') }}">Departamento</a>
                </li>
                <li>
                    <a href="{{ route('site.contato') }}">Contato</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="max-w-7xl m-auto">
        <div class="relative max-w-6xl m-auto">
            <div class="flex aspect-video overflow-x-hidden scroll-smooth shadow-2xs rounded-2xl">
                <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2023/11/2023-11-10-at-09.42.14.jpg" alt="imagem" id="imagem-1" class="flex-shrink-0 w-full object-cover snap-center basis-full">
                <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2023/09/image-21-1.jpg" alt="imagem" id="imagem-2">
            </div>
            <div class="flex gap-2 absolute bottom-5 left-1/2 -translate-x-1/2 z-10">
                <a href="#imagem-1" class="bg-white w-3 h-3 rounded-full opacity-70 transition-opacity duration-300 hover:opacity-100"></a>
                <a href="#imagem-2" class="bg-white w-3 h-3 rounded-full opacity-70 transition-opacity duration-300 hover:opacity-100"></a>
            </div>
        </div>
    </section>

    <section class="my-10 max-w-7xl m-auto">
        <div class="flex max-w-6xl m-auto flex-col  p-5 gap-6 lg:flex-row border bg-gray-300 rounded-2xl">
            <div class="flex-1">
                <img src="/img/aviso.jpeg" alt="personagens" class="w-full rounded-2xl">
            </div>
            <div class="flex-1">
                <div class="text-cyan-600 uppercase font-bold">Aviso</div>
                <div class="text-4xl font-medium">Edital de Licitação para Concessão dos Serviços da Cantina Escolar</div>
                <div class="opacity-75 my-4">
                    <p class="text-justify text-base md:text-lg max-w-[55ch]"><span class="font-bold">COMUNICADO DE LICITAÇÃO</span> A Escola Técnica Estadual da Etec da Zona Leste anuncia a abertura de licitação na modalidade Convite, destinada à concessão de uso do espaço e das instalações para exploração.</p>
                    <button class="text-lg bg-linear-to-r from-cyan-500 to-blue-500 py-2 px-4 rounded-lg text-neutral-200 mt-3 cursor-pointer hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 w-full">Veja +</button>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl m-auto">
        <div class="flex items-center gap-4">
            <h2 class="text-cyan-600 uppercase font-bold text-3xl">Destaque</h2>
            <p class="flex items-center gap-2"><span class="bg-red-500 text-neutral-200 rounded-full w-4 h-4 flex items-center justify-center cursor-pointer">+</span> <span class="text-red-500"><a href="#">Ver mais</a></span></p>
        </div>
        <div class="w-full h-[2px] bg-slate-950/20"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-10">
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2025/02/vagas-remanescentes-site-1-316x210.png" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">Vagas Abertas!</h5>
                    <p class="text-slate-600 text-lg mt-3">As inscrições para as Vagas Remanescentes já estão abertas!</p>
                    <a href="" class="text-center bg-linear-to-r from-cyan-500 to-blue-500 text-neutral-200 py-2 px-4 rounded-lg font-semibold mt-4 hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 focus:scale-95 transition-all duration-200 ease-out">Explore</a>
                </div>
            </div>
            <!--  -->
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2024/10/WhatsApp-Image-2024-10-29-at-18.06.25-316x210.jpeg" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">Novotec Brilha de novo</h5>
                    <p class="text-slate-600 text-lg mt-3">Apresentamos – Novotec Desenvolvimento de Sistemas AMS</p>
                    <a href="" class="text-center bg-linear-to-r from-cyan-500 to-blue-500 text-neutral-200 py-2 px-4 rounded-lg font-semibold mt-4 hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 focus:scale-95 transition-all duration-200 ease-out">Explore</a>
                </div>
            </div>
            <!--  -->
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/135/2024/09/IMG_20240418_105232267_HDR-scaled-1-316x210.jpg" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">Feira Tecnológica</h5>
                    <p class="text-slate-600 text-lg mt-3">Feira Tecnológica 2024 – 29 e 30 de novembro – Evento aberto ao público</p>
                    <a href="" class="text-center bg-linear-to-r from-cyan-500 to-blue-500 text-neutral-200 py-2 px-4 rounded-lg font-semibold mt-4 hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 focus:scale-95 transition-all duration-200 ease-out">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-16 bg-slate-900 p-8 h">
        <div class="flex flex-col gap-6 lg:flex-row">
            <div>
                <div class="text-4xl font-medium text-amber-50">Etec da Zona Leste</div>
                <div class="text-justify opacity-75 text-base md:text-lg max-w-[55ch] text-amber-50">
                    Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000
                </div>
            </div>
            <div>
                <div class="text-xl font-medium text-amber-50"><span class="text-cyan-400">|</span>Nosso time</div>
                <div class="opacity-75 text-amber-50">
                    <p class="text-sm md:text-lg max-w-[55ch]">tel: (99) 99999-9999</p>
                    <p class="text-sm md:text-lg max-w-[55ch]">email@gmail.com</p>
                </div>
            </div>
            <div>
                <div class="text-xl font-medium text-amber-50"><span class="text-cyan-400">|</span> De um feedback</div>
                <form action="">
                    <input type="text" name="feedback" placeholder="Escreva seu feedback" class="p-2 bg-slate-500 text-white border-none outline-none rounded-lg">
                    <input type="submit" value="Enviar" class="text-lg bg-blue-400 hover:bg-blue-700 py-2 px-7 rounded-lg text-white cursor-pointer mt-3">
                </form>
            </div>
        </div>
    </footer>
</body>

</html>