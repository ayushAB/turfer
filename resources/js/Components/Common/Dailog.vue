<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div
        class="fixed z-10 inset-0 overflow-y-auto"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true"
    >
        <div
            class="
                flex
                items-end
                justify-center
                min-h-screen
                pt-4
                px-4
                pb-20
                text-center
                sm:block sm:p-0
            "
        >
            <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
            <div
                class="
                    fixed
                    inset-0
                    bg-gray-500 bg-opacity-75
                    transition-opacity
                "
                aria-hidden="true"
            ></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"
                aria-hidden="true"
                >&#8203;</span
            >

            <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
            <div
                class="
                    inline-block
                    align-bottom
                    bg-white
                    rounded-lg
                    text-left
                    overflow-hidden
                    shadow-xl
                    transform
                    transition-all
                    sm:my-8 sm:align-middle sm:max-w-lg sm:w-full
                "
            >
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="
                                mx-auto
                                flex-shrink-0 flex
                                items-center
                                justify-center
                                h-12
                                w-12
                                rounded-full
                                bg-gray-100
                                sm:mx-0 sm:h-10 sm:w-10
                            "
                        >
                            <!-- Heroicon name: outline/exclamation -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"
                                />
                            </svg>
                        </div>
                        <div
                            class="
                                mt-3
                                text-center
                                sm:mt-0 sm:ml-4 sm:text-left
                            "
                        >
                            <h3
                                class="
                                    text-lg
                                    leading-6
                                    font-medium
                                    text-gray-900
                                "
                                id="modal-title"
                            >
                                Book Slot {{ turfSlot.id }} @ {{turfSlot.price }}
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Are you sure you want to book slot {{ turfSlot.id }}?
                                    Starting at {{ turfSlot.start_date_and_time }} till {{ turfSlot.end_date_and_time }}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="
                        bg-gray-50
                        px-4
                        py-3
                        sm:px-6 sm:flex sm:flex-row-reverse
                    "
                >
                    <button
                        type="button"
                        class="
                            w-full
                            inline-flex
                            justify-center
                            rounded-md
                            border border-transparent
                            shadow-sm
                            px-4
                            py-2
                            bg-green-600
                            text-base
                            font-medium
                            text-white
                            hover:bg-green-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-green-500
                            sm:ml-3 sm:w-auto sm:text-sm
                        "
                        @click="onAcceptDailog"
                    >
                        Book
                    </button>
                    <button
                        type="button"
                        class="
                            mt-3
                            w-full
                            inline-flex
                            justify-center
                            rounded-md
                            border border-gray-300
                            shadow-sm
                            px-4
                            py-2
                            bg-white
                            text-base
                            font-medium
                            text-gray-700
                            hover:bg-gray-50
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-indigo-500
                            sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm
                        "
                        @click="closeDailog"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
export default {
    props: {
      turfSlot:{
        type: Object,
        default: {}
      }
    },
    setup(props, context) {
        // emitting close dailog
        const closeDailog = () => {
            context.emit("onClose");
        };
        //emitting accept event
        const onAcceptDailog = () => {
            context.emit("onAccpet");
        };

        return {
            closeDailog,
            onAcceptDailog,
        };
    },
};
</script>

<style></style>
