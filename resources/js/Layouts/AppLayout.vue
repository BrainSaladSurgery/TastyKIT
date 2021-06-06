<template>
    <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">
        <slot name="navSide" />

        <div class="flex-1 flex flex-col w-full">
            <slot name="content" />
        </div>
    </div>
</template>

