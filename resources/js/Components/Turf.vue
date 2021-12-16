<template>
<!--  -->
    <a :href="route('turf', turf.id)"  class="flex flex-col items-center group">
        <div
            class="
                w-full
                flex
                shadow-md
                border border-gray-200
                overflow-hidden
                transition-all
                duration-500
                group-hover:-translate-y-4
                cursor-pointer
                z-20
                bg-white
            "
        >
            <div class="w-2/5 overflow-hidden">
                <img
                    class="object-cover"
                    :src="turf.profile_picture_file_path"
                />
            </div>
            <div class="flex-1 flex flex-col bg-white justify-between px-4 py-3">
                <div>
                    <h1 class="text-xl text-gray-800">{{turf.name}}</h1>
                    <!-- <div class="flex items-center">
                        <h3 class="line-through text-gray-400">$390</h3>
                        <h3 class="ml-1 text-sm text-gray-400">$290</h3>
                    </div> -->
                    <div class="text-xs text-gray-500">
                        {{ turf.address }}
                    </div>
                </div>
                <div>
                    <div class="flex items-center">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-600"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <span class="ml-1 text-xs text-gray-400"
                            >{{turf.city}},{{turf.country}}</span
                        >
                    </div>
                </div>
            </div>
        </div>
        <div
            class="
                bg-gray-700
                max-w-2xl
                -translate-y-8
                transition-all
                opacity-0
                group-hover:opacity-100
                group-hover:-translate-y-6
                duration-700
                text-white text-center
                w-full
                rounded
                font-medium
                py-3
                pb-1
            "
        >
            Book now
        </div>
    </a>
</template>

<script>
import { defineComponent } from "vue";


export default defineComponent({

    props: {
        turf:{
            type: Object,
            default: {}
        }
    }
});
</script>
