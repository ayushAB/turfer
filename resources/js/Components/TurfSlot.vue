<template>
  <div class="rounded-md grid grid-cols-4 mt-4 shadow-md overflow-hidden">
      <div class="px-2 py-3 text-gray-400 text-center">Slot-{{turfSlot.id}}</div>
      <div class="py-3 text-gray-400 text-center">{{turfSlot.start_date_time}}</div>
      <div class="py-3 text-gray-400 text-center">{{turfSlot.end_date_time}}</div>
      <a href="#" class="bg-blue-500 text-white text-center py-3">Book now</a >
  </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({

    props: {
        turfSlot:{
            type: Object,
            default: {}
        }
    }
});
</script>