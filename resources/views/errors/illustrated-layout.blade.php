<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            html {
                line-height: 1.15;
                    -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            body {
                margin: 0;
            }

            header,
            nav,
            section {
                display: block;
            }

            figcaption,
            main {
                display: block;
            }

            a {
                background-color: transparent;
                -webkit-text-decoration-skip: objects;
            }

            strong {
                font-weight: inherit;
            }

            strong {
                font-weight: bolder;
            }

            code {
                font-family: monospace, monospace;
                font-size: 1em;
            }

            dfn {
                font-style: italic;
            }

            svg:not(:root) {
                overflow: hidden;
            }

            button,
            input {
                font-family: sans-serif;
                font-size: 100%;
                line-height: 1.15;
                margin: 0;
            }

            button,
            input {
                overflow: visible;
            }

            button {
                text-transform: none;
            }

            button,
            html [type="button"],
            [type="reset"],
            [type="submit"] {
                -webkit-appearance: button;
            }

            button::-moz-focus-inner,
            [type="button"]::-moz-focus-inner,
            [type="reset"]::-moz-focus-inner,
            [type="submit"]::-moz-focus-inner {
                border-style: none;
                padding: 0;
            }

            button:-moz-focusring,
            [type="button"]:-moz-focusring,
            [type="reset"]:-moz-focusring,
            [type="submit"]:-moz-focusring {
                outline: 1px dotted ButtonText;
            }

            legend {
                -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                color: inherit;
                display: table;
                max-width: 100%;
                padding: 0;
                white-space: normal;
            }

            [type="checkbox"],
            [type="radio"] {
                -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                padding: 0;
            }

            [type="number"]::-webkit-inner-spin-button,
            [type="number"]::-webkit-outer-spin-button {
                height: auto;
            }

            [type="search"] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }

            [type="search"]::-webkit-search-cancel-button,
            [type="search"]::-webkit-search-decoration {
                -webkit-appearance: none;
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit;
            }

            menu {
                display: block;
            }

            canvas {
                display: inline-block;
            }

            template {
                display: none;
            }

            [hidden] {
                display: none;
            }

            html {
                -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                font-family: sans-serif;
            }

            *,
            *::before,
            *::after {
                -webkit-box-sizing: inherit;
                        box-sizing: inherit;
            }

            p {
                margin: 0;
            }

            button {
                background: transparent;
                padding: 0;
            }

            button:focus {
                outline: 1px dotted;
                outline: 5px auto -webkit-focus-ring-color;
            }

            *,
            *::before,
            *::after {
                border-width: 0;
                border-style: solid;
                border-color: #dae1e7;
            }

            button,
            [type="button"],
            [type="reset"],
            [type="submit"] {
                border-radius: 0;
            }

            button,
            input {
                font-family: inherit;
            }

            input::-webkit-input-placeholder {
                color: inherit;
                opacity: .5;
            }

            input:-ms-input-placeholder {
                color: inherit;
                opacity: .5;
            }

            input::-ms-input-placeholder {
                color: inherit;
                opacity: .5;
            }

            input::placeholder {
                color: inherit;
                opacity: .5;
            }

            button,
            [role=button] {
                cursor: pointer;
            }

            .bg-transparent {
                background-color: transparent;
            }

            .bg-white {
                background-color: #fff;
            }

            .bg-teal-light {
                background-color: #64d5ca;
            }

            .bg-blue-dark {
                background-color: #2779bd;
            }

            .bg-indigo-light {
                background-color: #7886d7;
            }

            .bg-purple-light {
                background-color: #a779e9;
            }

            .bg-no-repeat {
                background-repeat: no-repeat;
            }

            .bg-cover {
                background-size: cover;
            }

            .border-grey-light {
                border-color: #dae1e7;
            }

            .hover\:border-grey:hover {
                border-color: #b8c2cc;
            }

            .rounded-lg {
                border-radius: .5rem;
            }

            .border-2 {
                border-width: 2px;
            }

            .hidden {
                display: none;
            }

            .flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .items-center {
                -webkit-box-align: center;
                    -ms-flex-align: center;
                        align-items: center;
            }

            .justify-center {
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
            }

            .font-sans {
                font-family: Nunito, sans-serif;
            }

            .font-light {
                font-weight: 300;
            }

            .font-bold {
                font-weight: 700;
            }

            .font-black {
                font-weight: 900;
            }

            .h-1 {
                height: .25rem;
            }

            .leading-normal {
                line-height: 1.5;
            }

            .m-8 {
                margin: 2rem;
            }

            .my-3 {
                margin-top: .75rem;
                margin-bottom: .75rem;
            }

            .mb-8 {
                margin-bottom: 2rem;
            }

            .max-w-sm {
                max-width: 30rem;
            }

            .min-h-screen {
                min-height: 100vh;
            }

            .py-3 {
                padding-top: .75rem;
                padding-bottom: .75rem;
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .pb-full {
                padding-bottom: 100%;
            }

            .absolute {
                position: absolute;
            }

            .relative {
                position: relative;
            }

            .pin {
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }

            .text-black {
                color: #22292f;
            }

            .text-grey-darkest {
                color: #3d4852;
            }

            .text-grey-darker {
                color: #606f7b;
            }

            .text-2xl {
                font-size: 1.5rem;
            }

            .text-5xl {
                font-size: 3rem;
            }

            .uppercase {
                text-transform: uppercase;
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            .tracking-wide {
                letter-spacing: .05em;
            }

            .w-16 {
                width: 4rem;
            }

            .w-full {
                width: 100%;
            }

            @media (min-width: 768px) {
                .md\:bg-left {
                    background-position: left;
                }

                .md\:bg-right {
                    background-position: right;
                }

                .md\:flex {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                }

                .md\:my-6 {
                    margin-top: 1.5rem;
                    margin-bottom: 1.5rem;
                }

                .md\:min-h-screen {
                    min-height: 100vh;
                }

                .md\:pb-0 {
                    padding-bottom: 0;
                }

                .md\:text-3xl {
                    font-size: 1.875rem;
                }

                .md\:text-15xl {
                    font-size: 9rem;
                }

                .md\:w-1\/2 {
                    width: 50%;
                }
            }

            @media (min-width: 992px) {
                .lg\:bg-center {
                    background-position: center;
                }
            }
        </style>
    </head>
    <body class="antialiased font-sans">
        <div class="md:flex min-h-screen">
            <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
                <div class="max-w-sm m-8">
                    <div class="text-black text-5xl md:text-15xl font-black">
                        Uppss!!
                        
                    </div>
                    
                    <div style="position:relative; right:30px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.92 363.08"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#ebe6fa;}.cls-3{fill:#d6cbfa;}.cls-4{fill:#2d2065;}.cls-5{fill:#45319c;}.cls-6{fill:#5557e0;}.cls-7{fill:#6567e0;}.cls-8{fill:#4041a8;}.cls-9{fill:#e9e5fd;}.cls-10{fill:#facf5a;}.cls-11{fill:#c1affa;}.cls-12{fill:#fcbaac;}.cls-13{fill:#433096;}.cls-14{fill:#302166;}.cls-15{fill:#4a339e;}.cls-16{fill:#01203b;opacity:0.5;mix-blend-mode:soft-light;}.cls-17{fill:#fd416a;}.cls-18{fill:#fd567a;}.cls-19,.cls-22{fill:#fff;}.cls-20{fill:#392880;}.cls-21{fill:#fdc37e;}.cls-22{opacity:0.1;}.cls-23{fill:#4933a3;}.cls-24{fill:none;stroke:#fd849e;stroke-linecap:round;stroke-miterlimit:10;stroke-width:0.5px;}.cls-25{fill:#fca18d;}.cls-26{fill:#0b2c55;}.cls-27{fill:#d65b40;}.cls-28{fill:#00d0d5;}.cls-29{fill:#00a8b3;}</style></defs><title>2933575</title><g class="cls-1"><g id="OBJECTS"><path class="cls-2" d="M345.94,365.08s-46.09,28.58-66.37-2.77-3.69-40.56-24-48.86-59-18.44-57.15-35,24-32.26,24-56.23-25.7-76.61-5.63-94.54S251,129.09,274,109.73s35-47,61.76-48.86,27.66,20.28,47.94,28.58,57.15-16.59,81.12,1.84,17.51,67.29,16.59,120.76,40.24,90.78,19.12,107S357,328.2,345.94,365.08Z" transform="translate(-93.62 -60.76)"/><ellipse class="cls-3" cx="75.6" cy="342.56" rx="75.6" ry="13.94"/><ellipse class="cls-3" cx="360.79" cy="347.93" rx="132.13" ry="15.15"/><path class="cls-4" d="M512.14,121.67V389.56A17.48,17.48,0,0,1,494.66,407H359.26a17.48,17.48,0,0,1-17.47-17.48V121.67a17.48,17.48,0,0,1,17.47-17.48h135.4A17.49,17.49,0,0,1,512.14,121.67Z" transform="translate(-93.62 -60.76)"/><path class="cls-5" d="M440.93,396H413a6.53,6.53,0,0,1-6.53-6.53h0a6.53,6.53,0,0,1,6.53-6.53h27.93a6.53,6.53,0,0,1,6.53,6.53h0A6.53,6.53,0,0,1,440.93,396Z" transform="translate(-93.62 -60.76)"/><path class="cls-6" d="M501.61,128.29V365.53a8.49,8.49,0,0,1-8.48,8.48H360.79a8.49,8.49,0,0,1-8.48-8.48V128.29a8.49,8.49,0,0,1,8.48-8.48H493.13A8.48,8.48,0,0,1,501.61,128.29Z" transform="translate(-93.62 -60.76)"/><path class="cls-7" d="M485.7,120.22l-133.4,220.9V128.29a8.49,8.49,0,0,1,8.48-8.48h123Z" transform="translate(-93.62 -60.76)"/><circle class="cls-8" cx="333.34" cy="163.34" r="42.19"/><path class="cls-9" d="M442.71,230.34l4.45-15.18a2.5,2.5,0,0,0-2.4-3.2l-34.89.06-.84-5.78h-7.5a1,1,0,1,0,0,2h5.73l4.2,29.07h34.46a1,1,0,1,0,0-2H413.25l-.46-3.16h27.53A2.5,2.5,0,0,0,442.71,230.34Z" transform="translate(-93.62 -60.76)"/><circle class="cls-9" cx="321.96" cy="182.13" r="3.37"/><circle class="cls-9" cx="348.38" cy="182.13" r="3.37"/><path class="cls-9" d="M429.16,266.74a.51.51,0,0,1,0-1c1.33-.07,2.68-.2,4-.4a.51.51,0,1,1,.15,1c-1.36.2-2.74.34-4.1.41Zm-6.11-.12H423c-1.36-.13-2.74-.32-4.08-.58a.51.51,0,1,1,.19-1c1.31.25,2.65.44,4,.56a.51.51,0,0,1,0,1ZM439.17,265a.51.51,0,0,1-.16-1c1.28-.39,2.56-.84,3.79-1.35a.51.51,0,0,1,.39.95c-1.27.52-2.57,1-3.89,1.38Zm-26.06-.54a.53.53,0,0,1-.18,0c-1.3-.45-2.58-1-3.83-1.55a.51.51,0,1,1,.43-.93c1.21.56,2.47,1.07,3.73,1.51a.51.51,0,0,1-.15,1Zm35.36-3.55a.51.51,0,0,1-.27-1c1.15-.68,2.28-1.43,3.36-2.22a.51.51,0,0,1,.61.83c-1.1.81-2.26,1.57-3.44,2.27A.51.51,0,0,1,448.47,260.92ZM404,260a.51.51,0,0,1-.29-.08c-1.15-.75-2.27-1.56-3.34-2.41a.51.51,0,1,1,.64-.8c1,.83,2.14,1.63,3.26,2.36a.51.51,0,0,1-.27.94Zm52.55-5.27a.51.51,0,0,1-.37-.88c1-.93,1.87-1.93,2.73-3a.51.51,0,1,1,.78.66c-.88,1.05-1.82,2.07-2.8,3A.51.51,0,0,1,456.53,254.72Zm-60.34-1.26a.51.51,0,0,1-.39-.16c-.94-1-1.84-2.06-2.67-3.14a.51.51,0,1,1,.81-.62c.81,1.06,1.69,2.09,2.61,3.07a.51.51,0,0,1-.36.86Zm66.69-6.68a.51.51,0,0,1-.45-.78c.7-1.14,1.36-2.32,1.95-3.52a.51.51,0,1,1,.92.45c-.6,1.23-1.28,2.44-2,3.61A.51.51,0,0,1,462.88,246.78Zm-72.7-1.52a.51.51,0,0,1-.46-.26c-.67-1.19-1.29-2.43-1.85-3.69a.51.51,0,0,1,.94-.41c.54,1.22,1.15,2.44,1.8,3.6a.51.51,0,0,1-.43.76Zm77-7.71a.51.51,0,0,1-.17,0,.51.51,0,0,1-.33-.64c.41-1.27.76-2.58,1-3.89a.51.51,0,1,1,1,.22c-.29,1.34-.65,2.68-1.07,4A.51.51,0,0,1,467.15,237.55Zm-80.84-1.69a.51.51,0,0,1-.51-.38c-.36-1.32-.67-2.67-.9-4a.51.51,0,0,1,1-.18c.23,1.32.53,2.64.88,3.93a.51.51,0,0,1-.36.63Zm82.76-8.29H469a.51.51,0,0,1-.48-.55c.09-1.33.12-2.69.09-4v-.17a.51.51,0,0,1,1,0V223c0,1.38,0,2.76-.09,4.13A.51.51,0,0,1,469.07,227.57Zm-84.26-1.8a.48.48,0,0,1-.52-.45v-.09c0-1.34,0-2.7.08-4a.52.52,0,0,1,.55-.48.51.51,0,0,1,.48.55c-.09,1.3-.11,2.63-.08,3.94A.55.55,0,0,1,384.8,225.76Zm83.72-8.52a.51.51,0,0,1-.52-.42c-.23-1.32-.53-2.64-.89-3.93a.51.51,0,1,1,1-.27c.37,1.32.67,2.67.91,4a.51.51,0,0,1-.42.59Zm-82.79-1.56h-.12a.51.51,0,0,1-.39-.61c.29-1.34.65-2.68,1.06-4a.51.51,0,0,1,1,.31c-.41,1.27-.76,2.58-1,3.89A.51.51,0,0,1,385.73,215.68Zm79.83-8.16a.51.51,0,0,1-.48-.3c-.54-1.22-1.15-2.43-1.81-3.6a.51.51,0,1,1,.89-.5c.68,1.2,1.3,2.44,1.85,3.68a.51.51,0,0,1-.26.67A.52.52,0,0,1,465.56,207.52Zm-76.5-1.44a.5.5,0,0,1-.24-.05.51.51,0,0,1-.24-.68c.6-1.22,1.27-2.44,2-3.61a.51.51,0,1,1,.87.54c-.7,1.14-1.36,2.33-1.94,3.53A.51.51,0,0,1,389.06,206.08Zm71.29-7.28a.51.51,0,0,1-.42-.2c-.82-1.06-1.7-2.09-2.62-3.06a.51.51,0,1,1,.75-.7c.94,1,1.84,2.05,2.68,3.14a.51.51,0,0,1-.39.82Zm-65.75-1.24a.51.51,0,0,1-.41-.84c.88-1,1.82-2.07,2.79-3a.51.51,0,1,1,.72.73c-1,.94-1.87,1.94-2.73,3A.51.51,0,0,1,394.6,197.55Zm58.61-6a.51.51,0,0,1-.33-.11c-1-.83-2.15-1.62-3.27-2.35a.51.51,0,0,1,.56-.86c1.15.74,2.28,1.55,3.35,2.41a.51.51,0,0,1-.3.91Zm-51.2-1a.51.51,0,0,1-.32-.92c1.1-.81,2.26-1.58,3.44-2.28a.51.51,0,0,1,.52.88c-1.15.69-2.28,1.44-3.36,2.23A.51.51,0,0,1,402,190.59Zm42.53-4.35a.5.5,0,0,1-.23,0c-1.22-.56-2.48-1.06-3.74-1.5a.51.51,0,0,1,.33-1c1.29.45,2.58,1,3.83,1.54a.51.51,0,0,1-.2,1Zm-33.68-.64a.51.51,0,0,1-.21-1c1.27-.52,2.58-1,3.88-1.39a.51.51,0,1,1,.3,1c-1.28.39-2.55.84-3.79,1.35A.51.51,0,0,1,410.86,185.6Zm24-2.45h-.11c-1.31-.25-2.65-.44-4-.56a.51.51,0,1,1,.09-1c1.37.12,2.74.31,4.09.57a.51.51,0,0,1-.08,1Zm-14.2-.26a.51.51,0,0,1-.09-1c1.35-.2,2.73-.34,4.1-.42h0a.51.51,0,0,1,0,1c-1.34.07-2.68.21-4,.41Z" transform="translate(-93.62 -60.76)"/><circle class="cls-10" cx="333.34" cy="207.43" r="9.53"/><path class="cls-8" d="M426.53,272.71l-4.25-3.83a.87.87,0,0,1,1.16-1.29l2.9,2.62,4.66-5.65a.86.86,0,0,1,1.33,1.1Z" transform="translate(-93.62 -60.76)"/><ellipse class="cls-11" cx="37.61" cy="341.49" rx="31.8" ry="5.7"/><ellipse class="cls-11" cx="112.73" cy="341.49" rx="31.8" ry="5.7"/><path class="cls-4" d="M154,402.62H107.79c-.58-2-1.16-5.94,2-8.5,4.42-3.54,25.67-11,25.67-11l15.4-.54S157,397.18,154,402.62Z" transform="translate(-93.62 -60.76)"/><path class="cls-12" d="M151.24,369.88l-.18,13.81a10.89,10.89,0,0,1-8,3.41,9.11,9.11,0,0,1-7.57-3.94l.71-13.1Z" transform="translate(-93.62 -60.76)"/><path class="cls-13" d="M117.61,395.67a1,1,0,0,1-1-1v-4.25a1,1,0,0,1,2,0v4.25A1,1,0,0,1,117.61,395.67Z" transform="translate(-93.62 -60.76)"/><path class="cls-13" d="M123.8,395.67a1,1,0,0,1-1-1v-6.37a1,1,0,0,1,2,0v6.37A1,1,0,0,1,123.8,395.67Z" transform="translate(-93.62 -60.76)"/><path class="cls-4" d="M186,402.62h46.26c.58-2,1.16-5.94-2-8.5-4.42-3.54-25.67-11-25.67-11l-15.4-.54S183.09,397.18,186,402.62Z" transform="translate(-93.62 -60.76)"/><path class="cls-12" d="M188.82,369.88l.18,13.81a10.89,10.89,0,0,0,8,3.41,9.11,9.11,0,0,0,7.57-3.94l-.71-13.1Z" transform="translate(-93.62 -60.76)"/><path class="cls-13" d="M222.58,395.67a1,1,0,0,1-1-1v-4.25a1,1,0,0,1,2,0v4.25A1,1,0,0,1,222.58,395.67Z" transform="translate(-93.62 -60.76)"/><path class="cls-13" d="M216.38,395.67a1,1,0,0,1-1-1v-6.37a1,1,0,0,1,2,0v6.37A1,1,0,0,1,216.38,395.67Z" transform="translate(-93.62 -60.76)"/><path class="cls-14" d="M144.69,255.41,129.59,370.11a131.84,131.84,0,0,0,15.58.94c8.5,0,11.8-.94,11.8-.94l11.33-92.52L184.82,372s9,2.36,13.69,2.36a44.09,44.09,0,0,0,9.91-1.42L196.14,258.24Z" transform="translate(-93.62 -60.76)"/><path class="cls-15" d="M145.4,278.33a.27.27,0,0,1-.14-.5c7.78-4.57,6-17.77,6-17.9a.27.27,0,0,1,.53-.08c0,.14,1.82,13.69-6.27,18.45A.27.27,0,0,1,145.4,278.33Z" transform="translate(-93.62 -60.76)"/><path class="cls-15" d="M191,280a.27.27,0,0,1-.16-.05c-5.5-4.07-3.27-17.17-3.17-17.73a.26.26,0,0,1,.31-.22.27.27,0,0,1,.22.31c0,.13-2.27,13.33,3,17.2a.27.27,0,0,1-.16.49Z" transform="translate(-93.62 -60.76)"/><path class="cls-15" d="M170.3,264.88a2.28,2.28,0,1,1,2.28-2.28A2.28,2.28,0,0,1,170.3,264.88Zm0-4A1.74,1.74,0,1,0,172,262.6,1.74,1.74,0,0,0,170.3,260.87Z" transform="translate(-93.62 -60.76)"/><path class="cls-16" d="M375,144V245a8.11,8.11,0,0,1-8.12,8.12H340V135.91h26.87A8.11,8.11,0,0,1,375,144Z" transform="translate(-93.62 -60.76)"/><path class="cls-17" d="M271.2,138.82s-14.87,24.31-30.69,36.82-40.59,21.47-40.59,21.47l-.71,61.13a109.47,109.47,0,0,1-25.5.94c-13.45-1.17-32.1-4-32.1-4s.71-69.4,6.14-77.88c4.1-6.41,11.16-8,14.37-8.38a16.11,16.11,0,0,1,1.68-.12l3.08.1,14.17.49h.09s2.56-.19,6.83-.81A164.69,164.69,0,0,0,218.56,161c19.83-7.08,50.75-32.58,50.75-32.58Z" transform="translate(-93.62 -60.76)"/><path class="cls-18" d="M185.76,168.9,175,186.84l-12.83-17.93a16.11,16.11,0,0,1,1.68-.12l3.08.1L175,180.82l6.1-11.45h.09S181.5,169.52,185.76,168.9Z" transform="translate(-93.62 -60.76)"/><polygon class="cls-19" points="78.8 116.11 80.69 112.86 83.58 115.87 87.53 108.61 80.39 106.49 73.27 108.13 78.8 116.11"/><rect class="cls-4" x="112.85" y="75.2" width="160.48" height="107.35" rx="7.43" ry="7.43"/><rect class="cls-20" x="125.2" y="93.46" width="93.32" height="5.91"/><path class="cls-21" d="M220.84,189.43a2.76,2.76,0,0,1-1-.19V184a2.76,2.76,0,0,1,1-.19h10.75a2.81,2.81,0,0,1,0,5.61Z" transform="translate(-93.62 -60.76)"/><path class="cls-21" d="M246,182v3.22h-8.64a5.92,5.92,0,0,0-5.77-4.62H220.84a3.41,3.41,0,0,0-.8.1,4.36,4.36,0,0,1,4.21-3.16h17.31A4.45,4.45,0,0,1,246,182Z" transform="translate(-93.62 -60.76)"/><path class="cls-21" d="M237.23,188.44H246v4.11a4.45,4.45,0,0,1-4.43,4.46H224.25a4.45,4.45,0,0,1-4.43-4.46v0a5.52,5.52,0,0,0,1,.1h10.75A5.9,5.9,0,0,0,237.23,188.44Z" transform="translate(-93.62 -60.76)"/><rect class="cls-20" x="125.2" y="146.24" width="129.63" height="7.97"/><rect class="cls-20" x="202.44" y="161.13" width="52.39" height="7.44"/><path class="cls-22" d="M296.21,136c-15.95,21.19-53,64.71-89.74,66.79V143.39a7.43,7.43,0,0,1,7.43-7.43Z" transform="translate(-93.62 -60.76)"/><rect class="cls-23" x="224.56" y="86.36" width="33.7" height="18.61" rx="4.38" ry="4.38"/><path class="cls-12" d="M201.93,249.62s14.75,7.43,16.4,5.78-1.3-2.6-1.3-2.6,4.25,2.12,5.19.83-3.19-3.89-3.19-3.89,5.66,2.36,6.49.59-8.85-5.31-8.85-5.31,7.67,1.65,8,0-6.49-3.3-6.49-3.3,3.78-.71,3-2.83-14.63-.35-14.63-.35Z" transform="translate(-93.62 -60.76)"/><path class="cls-18" d="M151.77,173.21s8.14,5.49,5.84,19.65c0,0-4.43,15.4,6.73,22.84s43,22.3,43,22.3l-5.66,12s-45.14-7.43-56.29-22.83S136.37,185.78,151.77,173.21Z" transform="translate(-93.62 -60.76)"/><path class="cls-24" d="M151.77,173.21s8.14,5.49,5.84,19.65a28.47,28.47,0,0,0-.78,9.21" transform="translate(-93.62 -60.76)"/><path class="cls-12" d="M269.31,128.43s.27,16.46,3.45,16.46,1.5-10,1.5-10,.53,10.8,3.19,10.71S278.6,134,278.6,134s.89,11.33,3.54,11.15.27-11.68.27-11.68,1.24,9.12,4.07,8.85,2-13.9-.35-14.87a19.69,19.69,0,0,0-10.89-1.15C271,127.19,269.31,128.43,269.31,128.43Z" transform="translate(-93.62 -60.76)"/><path class="cls-12" d="M181.16,143.54v25.84s-1.18,1.88-8.38,1.88-8.14-1.88-8.14-1.88V143.54Z" transform="translate(-93.62 -60.76)"/><path class="cls-25" d="M181.16,156.6v7.79c-.92-.05-2-.11-3.1-.21-14.69-1.24-12.12-20.61-12.12-20.61Z" transform="translate(-93.62 -60.76)"/><path class="cls-12" d="M196.14,137.28c-.36-2.2-2.48-2.07-3.3-1.93v-3.74a13.46,13.46,0,0,0-26.91,0v3.73a4.54,4.54,0,0,0-2.12-.55c-2.54,0-3.9,2.31-3.33,4.87a5.07,5.07,0,0,0,4.12,4,11.51,11.51,0,0,0,1.33.24v3.29a13.46,13.46,0,0,0,26.91,0v-5.76C193.88,140.94,196.5,139.48,196.14,137.28Z" transform="translate(-93.62 -60.76)"/><path class="cls-26" d="M195.32,112.32c-1.06-2.48-5,1.77-5,1.77s1.53-3.78.42-4.84-4,1.53-4,1.53-4-2.7-11.1-1c-6.74,1.62-8.9,10.94-9.12,12a3.84,3.84,0,0,0-1-.14c-3,0-5.43,3.37-5.43,7.55s3,8.79,6,8.79,4.83-4.62,4.83-8.79c0-.33,0-.67-.05-1a18.84,18.84,0,0,0,7.08,1,36.14,36.14,0,0,0,10.76-1.57,11.25,11.25,0,0,0,4.11,5.13v-1.07a13.42,13.42,0,0,0-1.12-5.38C199.23,121.92,196.09,114.12,195.32,112.32Z" transform="translate(-93.62 -60.76)"/><path class="cls-26" d="M192.84,147.19a13.46,13.46,0,0,1-26.91,0V135.34l3.13.87s1.71,13.75,15.16,13.57C190.67,149.7,192.84,147.19,192.84,147.19Z" transform="translate(-93.62 -60.76)"/><path class="cls-27" d="M164.9,140.27a3.15,3.15,0,0,1-2.44-.8,1.6,1.6,0,0,1-.39-1.25.15.15,0,0,1,.18-.12.15.15,0,0,1,.12.17,1.29,1.29,0,0,0,.32,1,3.27,3.27,0,0,0,2.62.68h0a.15.15,0,0,1,0,.3Z" transform="translate(-93.62 -60.76)"/><path class="cls-27" d="M193.08,138.76h-.16a.15.15,0,0,1-.15-.16.15.15,0,0,1,.16-.15,1.79,1.79,0,0,0,1.4-.42,1.46,1.46,0,0,0,.39-1,.15.15,0,0,1,.14-.16.16.16,0,0,1,.16.14,1.76,1.76,0,0,1-.48,1.24A2,2,0,0,1,193.08,138.76Z" transform="translate(-93.62 -60.76)"/><path class="cls-27" d="M178.86,142.23a2,2,0,0,1-1.57-.66,4.43,4.43,0,0,1-.73-3,.35.35,0,0,1,.39-.31.36.36,0,0,1,.32.39,3.79,3.79,0,0,0,.55,2.46,1.32,1.32,0,0,0,1,.43,1.22,1.22,0,0,0,1-.41,3.72,3.72,0,0,0,.43-2.54.35.35,0,0,1,.7-.11,4.47,4.47,0,0,1-.59,3.11A1.91,1.91,0,0,1,178.86,142.23Z" transform="translate(-93.62 -60.76)"/><path class="cls-27" d="M188.86,142.23a2,2,0,0,1-1.57-.66,4.43,4.43,0,0,1-.73-3,.35.35,0,0,1,.39-.31.35.35,0,0,1,.31.39,3.79,3.79,0,0,0,.55,2.46,1.32,1.32,0,0,0,1,.43,1.22,1.22,0,0,0,1-.41,3.72,3.72,0,0,0,.43-2.54.35.35,0,0,1,.29-.41.35.35,0,0,1,.41.29,4.47,4.47,0,0,1-.59,3.11A1.91,1.91,0,0,1,188.86,142.23Z" transform="translate(-93.62 -60.76)"/><path class="cls-27" d="M183.32,147.37l-.32,0a.35.35,0,1,1,.1-.7,2.49,2.49,0,0,0,2-.75c0-.31-1-4.28-1.57-6.7a.35.35,0,0,1,.69-.17c.37,1.51,1.59,6.49,1.59,6.9a.93.93,0,0,1-.39.67A3.43,3.43,0,0,1,183.32,147.37Z" transform="translate(-93.62 -60.76)"/><path class="cls-26" d="M175.08,137.37a.51.51,0,0,1-.27-.93c.15-.1,3.83-2.38,6.82-.79a.51.51,0,1,1-.48.89c-2.48-1.32-5.77.73-5.8.75A.5.5,0,0,1,175.08,137.37Z" transform="translate(-93.62 -60.76)"/><path class="cls-26" d="M185.41,136.72a.51.51,0,0,1-.3-.92c.17-.12,4.21-3,6.44-.36a.51.51,0,1,1-.77.65c-1.62-1.92-5,.5-5.07.53A.51.51,0,0,1,185.41,136.72Z" transform="translate(-93.62 -60.76)"/><path class="cls-19" d="M183.21,153.08a4.92,4.92,0,0,1-3-1.15.35.35,0,0,1,.48-.52,3.77,3.77,0,0,0,4.58.32.35.35,0,1,1,.39.59A4.37,4.37,0,0,1,183.21,153.08Z" transform="translate(-93.62 -60.76)"/><circle class="cls-25" cx="83.49" cy="84.28" r="1.62"/><circle class="cls-25" cx="96.68" cy="83.99" r="1.62"/><path class="cls-19" d="M272.42,184.4v16.09h7.07a3.69,3.69,0,0,1,2.58.82,2.66,2.66,0,0,1,.9,2.06,2.59,2.59,0,0,1-.89,2,3.77,3.77,0,0,1-2.58.78h-9.77a4.44,4.44,0,0,1-3.26-1,4.51,4.51,0,0,1-1-3.25V184.4a4.59,4.59,0,0,1,.95-3.15,3.19,3.19,0,0,1,2.49-1.05,3.31,3.31,0,0,1,2.54,1A4.52,4.52,0,0,1,272.42,184.4Z" transform="translate(-93.62 -60.76)"/><path class="cls-19" d="M287.91,177.88a3.36,3.36,0,0,1-2.28-.82,3.17,3.17,0,0,1,0-4.49l.06-.06a3.26,3.26,0,0,1,2.26-.88,3.35,3.35,0,0,1,2.21.79,2.83,2.83,0,0,1,1,2.31,2.92,2.92,0,0,1-.93,2.3A3.23,3.23,0,0,1,287.91,177.88Zm3.15,6.59V202.9a4.11,4.11,0,0,1-.91,2.9,3,3,0,0,1-2.31,1,2.88,2.88,0,0,1-2.28-1,4.24,4.24,0,0,1-.88-2.87V184.65a4.09,4.09,0,0,1,.88-2.85,2.94,2.94,0,0,1,2.28-1,3.05,3.05,0,0,1,2.31,1,3.71,3.71,0,0,1,.91,2.66Z" transform="translate(-93.62 -60.76)"/><path class="cls-19" d="M311.14,203.85l-5.63-9.25-3.46,3.27v5.07a3.91,3.91,0,0,1-1,2.84,3,3,0,0,1-2.23,1,2.89,2.89,0,0,1-2.31-1,4.34,4.34,0,0,1-.84-2.9V175.71a5.4,5.4,0,0,1,.82-3.23,2.73,2.73,0,0,1,2.34-1.1,2.94,2.94,0,0,1,2.34,1,4.43,4.43,0,0,1,.86,3v15.46l7.17-7.52a17.64,17.64,0,0,1,2-1.92,2.8,2.8,0,0,1,1.7-.52,2.76,2.76,0,0,1,2,.76,2.52,2.52,0,0,1,.79,1.9q0,1.4-2.58,3.74l-3.39,3.11,6.54,10.28q.74,1.14,1,1.74a2.43,2.43,0,0,1,.32,1.13,3.34,3.34,0,0,1-.83,2.4,2.87,2.87,0,0,1-2.18.88,2.43,2.43,0,0,1-1.8-.63A15.22,15.22,0,0,1,311.14,203.85Z" transform="translate(-93.62 -60.76)"/><path class="cls-19" d="M322.32,177.88a3.36,3.36,0,0,1-2.28-.82,3.17,3.17,0,0,1,0-4.49l.06-.06a3.26,3.26,0,0,1,2.26-.88,3.35,3.35,0,0,1,2.21.79,2.83,2.83,0,0,1,1,2.31,2.92,2.92,0,0,1-.93,2.3A3.23,3.23,0,0,1,322.32,177.88Zm3.15,6.59V202.9a4.11,4.11,0,0,1-.91,2.9,3,3,0,0,1-2.32,1,2.88,2.88,0,0,1-2.28-1,4.24,4.24,0,0,1-.88-2.87V184.65a4.09,4.09,0,0,1,.88-2.85,2.94,2.94,0,0,1,2.28-1,3.05,3.05,0,0,1,2.31,1A3.71,3.71,0,0,1,325.48,184.47Z" transform="translate(-93.62 -60.76)"/><path class="cls-19" d="M330,189.13h.68V185.3q0-1.54.08-2.42a3.57,3.57,0,0,1,.47-1.5,2.87,2.87,0,0,1,1.07-1.06,3.05,3.05,0,0,1,1.56-.41,3.15,3.15,0,0,1,2.21.91,2.7,2.7,0,0,1,.83,1.47,13.47,13.47,0,0,1,.18,2.49v4.35h2.34a3,3,0,0,1,2.07.64,2.12,2.12,0,0,1,.71,1.65,1.84,1.84,0,0,1-1,1.8,6.59,6.59,0,0,1-2.91.52h-1.19v4a19,19,0,0,0,.11,2.3,2.34,2.34,0,0,0,.56,1.31,1.92,1.92,0,0,0,1.47.5,7.93,7.93,0,0,0,1.52-.2,7.9,7.9,0,0,1,1.49-.2,1.92,1.92,0,0,1,1.39.62,2.08,2.08,0,0,1,.62,1.53A2.56,2.56,0,0,1,342.6,206a11.42,11.42,0,0,1-4.84.82,8.34,8.34,0,0,1-4.53-1,4.66,4.66,0,0,1-2-2.78,18.86,18.86,0,0,1-.48-4.74v-4.52h-.84a3,3,0,0,1-2.1-.66,2.13,2.13,0,0,1-.74-1.66,2.06,2.06,0,0,1,.76-1.65A3.33,3.33,0,0,1,330,189.13Z" transform="translate(-93.62 -60.76)"/><path class="cls-28" d="M342.42,178.42V168.5h2.74q5.24,0,5.24,4.84a4.88,4.88,0,0,1-1.47,3.68,5.44,5.44,0,0,1-3.9,1.39Zm1.17-8.87v7.82h1.47a4.21,4.21,0,0,0,3-1,3.93,3.93,0,0,0,1.1-2.94q0-3.81-4-3.81Z" transform="translate(-93.62 -60.76)"/><path class="cls-29" d="M339.95,171.82a1.39,1.39,0,0,1-1-.37,1.14,1.14,0,0,1-.39-.88,1.1,1.1,0,0,1,.4-.88,1.47,1.47,0,0,1,1-.35,1.42,1.42,0,0,1,1,.35,1.2,1.2,0,0,1,.08,1.69l-.08.08A1.49,1.49,0,0,1,339.95,171.82Zm0,5.48a1.38,1.38,0,0,1-1-.37,1.16,1.16,0,0,1-.39-.88,1.1,1.1,0,0,1,.4-.88,1.47,1.47,0,0,1,1-.35,1.42,1.42,0,0,1,1,.35,1.21,1.21,0,0,1,.07,1.71l-.07.07a1.47,1.47,0,0,1-1,.37Z" transform="translate(-93.62 -60.76)"/></g></g></svg>
                   </div>

                    <div class="w-56 h-1 bg-purple-light my-3 md:my-6"></div>

                    <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                        {{ $msg ?? '' }}
                    </p>

                    <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                        <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                            {{ __('Volver a productos') }}
                        </button>
                    </a>
                </div>
            </div>

            <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
                @yield('image')
            </div>
        </div>
    </body>
</html>
