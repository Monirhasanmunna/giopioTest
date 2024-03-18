<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import SearchIcon from '@/Components/Icons/SearchIcon.vue';
import CloseIcon from '@/Components/Icons/CloseIcon.vue';


</script>

<template>
    <GuestLayout>
        <div class="p-[20px] md:p-[100px] pb-0">
            <div class="w-full space-y-4">
                <!-- search bar -->
                <div class="w-full bg-[#FFFFFF] flex justify-between items-center border border-gray-200 rounded-md">
                    <div class="relative flex rounded-lg w-full items-center">
                        <input type="text" placeholder="Enter to search"
                            id="hs-trailing-button-add-on-with-icon-and-button"
                            name="hs-trailing-button-add-on-with-icon-and-button"
                            class="py-3 px-4 ps-11 ml-3 block w-full border-none  rounded-s-lg text-sm focus:z-10 focus:border-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none placeholder:text-[17px] placeholder:text-gray-400 ">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 p-4">
                            <svg class="flex-shrink-0 size-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" /></svg>
                        </div>
                        <button type="button"
                            class=" hidden py-2 px-5 m-[10px] font-manrope sm:inline-flex justify-center items-center gap-x-2 text-[18px] rounded-md  bg-gradient-to-r from-[#2F55DB] to-[#42BBFF] text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            <SearchIcon class="text-[22px]" />
                            <span>Explore</span>
                        </button>
                    </div>
                </div>
                <!-- search bar -->

                <!-- search result -->
                <div class="w-full flex flex-wrap gap-4">
                    <div class="h-[33px]  rounded-md md:min-w-[110px] bg-gradient-to-r from-[#2F55DB] to-[#42BBFF] p-[1px]">
                        <div class="flex h-full w-full rounded-md items-center justify-center bg-[#FFFFFF] back px-2 py-[7px]">
                            <div class=" text-[14px] font-medium md:text-[15px] bg-gradient-to-r from-[#2F55DB] to-[#42BBFF] inline-block text-transparent bg-clip-text font-manrope">
                                Recent Search
                            </div>
                        </div>
                    </div>

                    <div class="md:min-w-[130px] rounded-md border border-gray-300 flex items-center px-2 py-[7px]">
                        <div class="w-full flex justify-between gap-3 items-center">
                            <h6 class="font-manrope text-[12px] text-gray-600">Leanne Graham</h6>
                            <CloseIcon class="text-gray-500" />
                        </div>
                    </div>

                    <div class="md:min-w-[130px]  rounded-md border border-gray-300 flex items-center px-2 py-[7px]">
                        <div class="w-full flex justify-between gap-3 items-center">
                            <h6 class="font-manrope text-[12px] text-gray-600">Leanne Graham</h6>
                            <CloseIcon class="text-gray-500" />
                        </div>
                    </div>
                </div>
                <!-- search result -->
            </div>

            <div class="w-full mt-[40px] space-y-3">
                <div class="w-full flex justify-between">
                    <h6 class="font-semibold text-[#344054] text-[16px]">Selection</h6>
                    <div class="text-[14px] font-semibold bg-gradient-to-r from-[#2F55DB] to-[#3EA6F8] inline-block text-transparent bg-clip-text font-manrope">
                        Clear selection
                    </div>
                </div>

                
                <div class="h-auto md:min-h-[82px] rounded-md w-full bg-gradient-to-r from-[#2F55DB] to-[#42BBFF] p-[1px]">
                    <div class="flex flex-wrap gap-4 h-auto min-h-[82px] w-full rounded-md  bg-[#FFFFFF] back p-3">
                        <!-- selected items -->
                        <div class="bg-[#E0F3FF] h-[30px] rounded-md flex gap-5 justify-between items-center px-3">
                            <h6 class="text-sm md:text-md">Clementine Bauch</h6>
                            <CloseIcon class="text-gray-500 text-[20px]" />
                        </div>
                        <div class="bg-[#E0F3FF] h-[30px] rounded-md flex gap-5 justify-between items-center px-3">
                            <h6 class="text-sm md:text-md">Clementine Bauch</h6>
                            <CloseIcon class="text-gray-500 text-[20px]" />
                        </div>
                        <div class="bg-[#E0F3FF] h-[30px] rounded-md flex gap-5 justify-between items-center px-3">
                            <h6 class="text-sm md:text-md">Clementine Bauch</h6>
                            <CloseIcon class="text-gray-500 text-[20px]" />
                        </div>

                        <!-- selected items -->
                    </div>
                </div>

                <!-- table -->
                <div class="w-full pt-6">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto overflow-y-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border border-gray-300 rounded-lg overflow-hidden dark:border-gray-700">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                    <th width="1%" class="py-3 ps-4">
                                        <div class="flex items-center h-5">
                                        <input id="hs-table-checkbox-all" type="checkbox" class="border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                        <label for="hs-table-checkbox-all" class="sr-only">Checkbox</label>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 text-start text-[15px] text-[#344054] font-medium uppercase">Name</th>
                                    <th  class="px-6 py-3 text-center text-[15px] text-[#344054] font-medium  uppercase">Distance</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="py-3 ps-4">
                                            <div class="flex items-center h-5">
                                            <input id="hs-table-checkbox-1" type="checkbox" class="border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            <label for="hs-table-checkbox-1" class="sr-only">Checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 font-manrope py-4 whitespace-nowrap text-[15px]  text-[#344054]">John Brown</td>
                                        <td class="px-6 font-manrope py-4 whitespace-nowrap text-center text-[15px] text-[#344054]">45</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="p-3 sm:hidden">
            <button type="button" class=" py-3 px-5 m-[10px] w-full font-manrope justify-center items-center inline-flex gap-x-2 text-[18px] rounded-md  bg-gradient-to-r from-[#2F55DB] to-[#42BBFF] text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <SearchIcon class="text-[22px]" />
                <span>Explore</span>
            </button>
        </div>
    </GuestLayout>
</template>

<style scoped>
.col-auto {
    width: auto;
  }
</style>