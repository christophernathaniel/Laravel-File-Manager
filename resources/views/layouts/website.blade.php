<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Creative Nebula | Web App & Website Development | Design</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/scss/website.scss', 'resources/js/website.js'])

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CMGVJF32BG"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CMGVJF32BG');
        </script>

    </head>
    <body class="font-sans antialiased">
        <style>
            .loading-view {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100vw;
                height: 100vh;
                background-color: #fff;
                z-index: 1000;
                display: flex;
                align-items: center;
                justify-content: center;
                
            }
            .loading-view svg { 
                fill: #000;
                max-width: 40%;
            }
        </style>
        <div class="loading-view">
            <svg width="432" height="479" viewBox="0 0 432 479"  xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M86.4867 19.1034H307.842V204.617C314.652 198.7 320.936 193 326.637 187.574V19.1034V0.309082H307.842H86.4867H67.6924V19.1034V361.129C73.6238 358.513 79.9035 355.578 86.4867 352.346V19.1034ZM86.4867 365.315C79.9425 368.306 73.665 371.016 67.6924 373.427V459.726V478.521H86.4867H307.842H326.637V459.726V203.433C320.812 208.948 314.533 214.641 307.842 220.471V459.726H86.4867V365.315Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M197.176 301.541C231.487 301.541 259.301 273.726 259.301 239.415C259.301 205.104 231.487 177.29 197.176 177.29C162.864 177.29 135.05 205.104 135.05 239.415C135.05 266.003 151.752 288.69 175.236 297.556C197.172 285.382 213.053 274.344 220.726 265.638L236.904 260.456C233.324 271.081 216.919 285.413 191.336 301.27C193.258 301.449 195.206 301.541 197.176 301.541Z" />
                <circle cx="76.5733" cy="100.441" r="22.8668" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M211.995 280.871C314.541 211.812 386.714 139.558 373.197 119.488C359.681 99.4174 265.594 139.13 163.048 208.189C60.5023 277.248 -11.6704 349.502 1.84601 369.572C15.3624 389.643 109.449 349.93 211.995 280.871ZM205.941 270.038C303.379 204.419 373.472 138.013 362.498 121.718C351.524 105.422 263.637 145.406 166.199 211.026C68.7602 276.645 -1.33292 343.051 9.64145 359.347C20.6158 375.643 108.502 335.658 205.941 270.038Z" />
                <path d="M206.137 42.8892L211.761 53.7633L223.841 55.7517L215.237 64.4606L217.079 76.5637L206.137 71.072L195.196 76.5637L197.038 64.4606L188.434 55.7517L200.513 53.7633L206.137 42.8892Z" />
                <path d="M384.132 52.1987L386.944 57.6358L392.984 58.63L388.682 62.9845L389.603 69.036L384.132 66.2901L378.662 69.036L379.582 62.9845L375.28 58.63L381.32 57.6358L384.132 52.1987Z" />
                <path d="M421.722 220.8L424.534 226.237L430.574 227.232L426.272 231.586L427.193 237.638L421.722 234.892L416.252 237.638L417.173 231.586L412.871 227.232L418.91 226.237L421.722 220.8Z" />
                <path d="M370.173 316.859L371.579 319.578L374.598 320.075L372.447 322.252L372.908 325.278L370.173 323.905L367.437 325.278L367.898 322.252L365.747 320.075L368.767 319.578L370.173 316.859Z" />
                <path d="M266.699 80.1211L268.105 82.8396L271.125 83.3367L268.974 85.514L269.435 88.5398L266.699 87.1668L263.964 88.5398L264.424 85.514L262.273 83.3367L265.293 82.8396L266.699 80.1211Z" />
                <path d="M173.772 138.948L175.178 141.667L178.198 142.164L176.047 144.341L176.507 147.367L173.772 145.994L171.036 147.367L171.497 144.341L169.346 142.164L172.366 141.667L173.772 138.948Z" />
                <path d="M262.045 307.553L265.688 314.597L273.512 315.885L267.939 321.525L269.132 329.365L262.045 325.808L254.958 329.365L256.151 321.525L250.578 315.885L258.402 314.597L262.045 307.553Z" />
                <path d="M147.103 404.657L150.746 411.701L158.57 412.989L152.997 418.629L154.19 426.469L147.103 422.912L140.016 426.469L141.209 418.629L135.636 412.989L143.46 411.701L147.103 404.657Z" />
                </svg>
        </div>
        <x-jet-banner />

        <div>
            @livewire('website.navigation')

          

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
