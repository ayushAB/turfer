<template>
  <div class="rounded-md grid grid-cols-4 mt-4 shadow-md overflow-hidden">
      <div class="px-2 py-3 text-gray-400 text-center">Slot-{{turfSlot.id}}</div>
      <div class="py-3 text-gray-400 text-center">{{turfSlot.start_date_time}}</div>
      <div class="py-3 text-gray-400 text-center">{{turfSlot.end_date_time}}</div>
      <a @click.prevent="isOpen=true" href="#" class="bg-blue-500 text-white text-center py-3">Book now</a >
      <Dailog :turf-slot="turfSlot" v-if="isOpen" @on-close="isOpen = false" @onAccpet="bookSlot" />
  </div>
</template>

<script>
import { defineComponent, ref } from "vue";
import Dailog from '@/Components/Common/Dailog.vue';
import { Inertia } from "@inertiajs/inertia";

export default defineComponent({
    components: {Dailog},
    props: {
        turfSlot:{
            type: Object,
            default: {}
        }
    },
    setup(props) {
        const isOpen = ref(false)

        // 
        const bookSlot = () => {
            Inertia.post(route('book'), {
                "slot_id": props.turfSlot.id
            },{
                    onSuccess: () => (isOpen.value = false),
                    onError: (error) => {
                        console.log(error)
                    }
                })
        }
        return { isOpen, bookSlot }
    }
});
</script>