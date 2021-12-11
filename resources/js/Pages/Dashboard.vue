<template>
    <app-layout title="Dashboard">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
                <div
                    class="
                        bg-white
                        overflow-hidden
                        shadow-2xl
                        sm:rounded-lg
                        relative
                    "
                >
                    <div
                        class="
                            absolute
                            sm:left-10 sm:top-40
                            h-12
                            w-12
                            rounded-full
                            bg-white bg-opacity-90
                            flex
                            justify-center
                            items-center
                        "
                    >
                        {{ "<" }}
                    </div>
                    <div
                        class="
                            absolute
                            sm:right-10 sm:top-40
                            h-12
                            w-12
                            rounded-full
                            bg-white bg-opacity-90
                            flex
                            justify-center
                            items-center
                        "
                    >
                        {{ ">" }}
                    </div>
                    <img
                        class="max-h-96 w-full object-cover"
                        src="https://images.unsplash.com/photo-1588415759532-d457888bd1cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    />
                </div>
                <div
                    class="
                        absolute
                        -bottom-7
                        left-72
                        rounded
                        w-full
                        flex
                        -mt-8
                        z-10
                        bg-white
                        max-w-2xl
                        px-2
                        py-3
                    "
                >
                    <input
                        class="
                            flex-1
                            border border-gray-200
                            focus:outline-none
                            focus:ring-0
                            focus:ring-transparent
                            px-2
                        "
                        type="text"
                        placeholder="Search"
                    />
                    <div
                        class="
                            flex
                            justify-center
                            items-center
                            bg-gray-200
                            px-3
                            py-2
                        "
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mt-20 mx-auto sm:px-6 lg:px-8  py-2 relative border-b border-gray-200">
                <h1 class="text-2xl text-gray-400">Turfs</h1>
            </div>
            <div class="max-w-7xl grid grid-cols-2 gap-6 mt-10 mx-auto sm:px-6 lg:px-8 relative">
                <Turf v-for="(turf,index) in turfs" :key="index" :turf="turf" />
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import Turf from "@/Components/Turf.vue";

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        Turf,
    },
    props:['turfs']
});
</script>
