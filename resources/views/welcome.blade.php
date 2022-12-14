<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AMS AEPET-BA - Assistência Mediadora de Serviços</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">

    <!-- Scripts -->
    <script src="js/app.js" defer></script>

</head>

<body class="antialiased">

    <div class="grid grid-cols-12 text-white" style="background-color: rgb(61, 144, 158);
                border-bottom-color: rgba(0, 0, 0, 0.05);
                border-bottom-style: solid;
                border-bottom-width: 1px;
                box-sizing: border-box;
                color: rgb(255, 255, 255);
                font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
                line-height: 26.05px;
                min-height: 40px;
                padding-top: 5px">

        <div class="col-span-12 sm:col-span-6 text-center">
            <span class="fa fa-comments-o"></span>
            <span> <a href="https://aepetba.org.br/v1/contato/" target="_blank">
                    FALE COM A DIRETORIA DA AEPET BAHIA
                </a></span>
        </div>

        <div class="col-span-12 sm:col-span-2 text-center">
            <span class="fa fa-phone"></span>
            <span>(71) 3012-4172</span>
        </div>

        <div class="col-span-12 sm:col-span-2 text-center">
            <span class="fa fa-whatsapp"></span>
            <span> <a target="_blank" href="https://api.whatsapp.com/send?phone=5571983568081&text=Ol%C3%A1,">
                    (71) 9 8356-8081
                </a></span>
        </div>

        <div class="col-span-12 sm:col-span-2 text-center">
            <span class="fa fa-envelope"></span>
            <span> <a href="mailto:bahia@aepet.org.br" target="_blank">
                    bahia@aepet.org.br
                </a></span>
        </div>
    </div>

    <div class="grid grid-cols-12 text-white" style=" 
                color: rgb(0, 0, 0);
                font-family: Arial, Helvetica, sans-serif;
                background-color: rgb(230, 230, 230);
                font-size: 16px;
              
                line-height: 26.05px;
                padding: 15px;">
        <div class="col-span-12 sm:col-span-6 text-center ml-5">
            <a target="_blank" href="https://aepetba.org.br/v1/">
                <img style="width: 250px; height: 76px" alt="Site logo" src="images/logo-AEPETBA.png">
            </a>
        </div>
        <div class="col-span-12 sm:col-span-6 text-center ml-5" style="color: rgb(5, 1, 75);">
            <p>VOCÊ ESTÁ NO AMBIENTE DO SISTEMA AMS AEPET-BA.</p>
            <p>CLIQUE NA LOGO PARA VOLTAR AO SITE DA AEPET BAHIA.</p>
        </div>
    </div>


    <div class="font-sans text-gray-900 antialiased">

        <div class="grid grid-cols-1 md:grid-cols-4 items-center md:gap-4 mt-10 mb-10 ml-5 mr-5">

            <div class="justify-self-center mb-5">
                <img src="images/tela-inicial.png" />
            </div>

            <div class="justify-self-center mb-5">
                <a href="{{ route('login') }}">
                    <img src="images/portal-associado.png" />
                </a>
            </div>

            <div class="justify-self-center mb-5">
                <a href="{{ route('partners.include') }}">
                    <img src="images/ser-credenciadobahia.png" />
                </a>
            </div>

            <div class="justify-self-center mb-5">
                <a href="{{ route('partners.search') }}">
                    <img src="images/busca-credenciado.png" />
                </a>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-4  md:gap-4 gap-4 mt-10 mb-10 ml-5 mr-5">

            <div class="justify-self-center">
                <a target="_blank" href="https://aepetba.org.br/v1/o-que-e-ams-aepet-ba/">
                    <img src="images/oquee-amsaepet.png" />
                </a>
            </div>

            <div class="justify-self-center">
                <a target="_blank" href="https://aepetba.org.br/v1/quem-pode-ser-conveniado/">
                    <img src="images/ser-credenciado.png" />
                </a>
            </div>

            <div class="justify-self-center">
                <a target="_blank" href="https://aepetba.org.br/v1/quem-pode-ser-dependente/">
                    <img src="images/incluir-dependente.png" />
                </a>
            </div>

            <div class="justify-self-center">
                <a target="_blank" href="https://aepetba.org.br/v1/politica-de-privacidade/">
                    <img src="images/ṕolitica-privacidade.png" />
                </a>
            </div>


        </div>

        <div class="text-left ml-5 items-start">
            <a href="https://aepetba.org.br/v1/manual-de-utilizacao-sistema-ams-aepet-ba/" target="_blank">
              <img style="display: inline" class="w-6 h-6" src="{{ asset('images/manual.png') }}" alt=""> 
              <span>MANUAL DE UTILIZAÇÃO DO SISTEMA</span>
            </a>
        </div>

    </div>

    <div class="grid grid-cols-12 text-white" 
          style="background-color: rgb(61, 144, 158);
            border-bottom-color: rgba(0, 0, 0, 0.05);   border-bottom-style: solid;
            border-bottom-width: 1px;    box-sizing: border-box;    color: rgb(255, 255, 255);    font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;    
            line-height: 26.05px;    min-height: 40px;    padding-top: 5px">

        <div class="col-span-12 sm:col-span-6 text-center">
            <span class="fa fa-comments-o"></span>
            <span> <a href="https://aepetba.org.br/v1/contato/" target="_blank">
                Todos os direitos reservados a AEPET BA. Desde 2022.
                </a></span>
        </div>

        <div class="col-span-12 sm:col-span-2 text-center">
        </div>

        <div class="col-span-12 sm:col-span-2 text-center">
        </div>

        <div class="col-span-12 sm:col-span-2 text-center items-center">
             <span> 
                 <a href="https://lubconsultoria.com.br/" target="_blank">
                    <img src="https://lubconsultoria.com.br/by/by-lubconsultoria.png" alt=""> 
                </a>
            </span>
        </div>
    </div>

</body>

</html>
