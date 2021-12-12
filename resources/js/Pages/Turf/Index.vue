<template>
    <app-layout title="Turf">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
                 <h1 class="text-center text-4xl font-bold text-gray-700">{{turf.name}}</h1>
                <div class="overflow-hidden max-h-96 rounded shadow-md mt-6">
                    <img class="object-contain w-full" :src="turf.profile_picture_file_path" />
                </div>
                <div class="max-w-3xl w-full">
                    <h1 class="text-xl font-bold border-b border-gray-400 text-gray-400 mt-8">Available Slots</h1>
                    <div class="grid grid-cols-4  mt-4">
                        <div></div>
                        <div class="text-center text-gray-400">Start Time</div>
                        <div class="text-center text-gray-400">End Time</div>
                        <div></div>
                    </div>
                    <Slot v-for="(slot,index) in available_slots" :key="index" :turf-slot="slot" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Slot from "@/Components/TurfSlot.vue";
export default defineComponent({
    components: {
        AppLayout,
        Slot
    },
    props:['turf','available_slots']
});
</script>