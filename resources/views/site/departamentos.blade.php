<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FDFDFC]">
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
        <div class="flex items-center gap-4">
            <h2 class="text-cyan-600 uppercase font-bold text-3xl">Departamentos</h2>
        </div>
        <div class="w-full h-[2px] bg-slate-950/20"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-10">
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/img/SecretariaAcademica.webp" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">Secretaria Acadêmica</h5>
                    <a href="" class="text-center bg-linear-to-r from-cyan-500 to-blue-500 text-neutral-200 py-2 px-4 rounded-lg font-semibold mt-4 hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 focus:scale-95 transition-all duration-200 ease-out">Explore</a>
                </div>
            </div>
            <!--  -->
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/img/pedagogica.webp" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">Coordenação</h5>
                    <a href="" class="text-center bg-linear-to-r from-cyan-500 to-blue-500 text-neutral-200 py-2 px-4 rounded-lg font-semibold mt-4 hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 focus:scale-95 transition-all duration-200 ease-out">Explore</a>
                </div>
            </div>
            <!--  -->
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/img/diretoria.jpg" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">Diretoria</h5>
                    <a href="" class="text-center bg-linear-to-r from-cyan-500 to-blue-500 text-neutral-200 py-2 px-4 rounded-lg font-semibold mt-4 hover:bg-linear-to-r hover:from-cyan-600 hover:to-blue-600 focus:scale-95 transition-all duration-200 ease-out">Explore</a>
                </div>
            </div>
            <!--  -->
            <div class="rounded-xl shadow-lg">
                <div class="p-5 flex flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img src="/img/apm.jpg" alt="Imagem" class="w-full">
                    </div>
                    <h5 class="text-2xl md:text-3xl font-medium mt-3">APM</h5>
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