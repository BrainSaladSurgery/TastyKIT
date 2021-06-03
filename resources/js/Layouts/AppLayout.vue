<template>
    <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">

        <!-- section body side nav -->
        <slot name="navSide" />

        <div class="flex-1 flex flex-col w-full">
            <slot name="content" />
        </div>
    </div>
</template>

<style>
    html {
        font-size: 14px;
        line-height: 1.285;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Arial,
        sans-serif;
    }
    html, body {
        width: 100%;
        height: 100%;
    }

    /* can be configured in tailwind.config.js */
    .group:hover .group-hover\:block {
        display: block;
    }

    .focus\:cursor-text:focus {
        cursor: text;
    }

    .focus\:w-64:focus {
        width: 16rem;
    }

    /* zendesk styles */
    .h-16 {
        height: 50px;
    }
    .bg-teal-900 {
        background: #03363d;
    }
    .bg-gray-100 {
        background: #f8f9f9;
    }
    .hover\:border-green-500:hover {
        border-color: #78a300;
    }

    /* SVG aguacate */
    .cls-1{fill:#a7aece;}
    .cls-12,.cls-2,.cls-6,.cls-9{fill:#fff;}
    .cls-2{opacity:0.3;}
    .cls-3{fill:#8f5653;}
    .cls-4{fill:#4bc190;}
    .cls-5{fill:#f8dc25;}
    .cls-5,.cls-6{opacity:0.5;}
    .cls-7{fill:#515570;}
    .cls-8{fill:#393c54;}
    .cls-10{fill:none;stroke:#515570;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}
    .cls-10,.cls-12{opacity:0.2;}
    .cls-11{fill:#f85565;}


    </style>
