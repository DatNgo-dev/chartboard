<x-app-layout>
    <script>
    function dragstartHandler(ev) {
        ev.dataTransfer.setData("text/plain", ev.target.id);
    }

    function dragoverHandler(ev) {
        ev.preventDefault();
        ev.dataTransfer.dropEffect = "move";
    }

    function dropHandler(ev) {
        ev.preventDefault();
        // Get the id of the target and add the moved element to the target's DOM
        const data = ev.dataTransfer.getData("text/plain");
        ev.target.appendChild(document.getElementById(data));
    }
    </script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class='py-3'>
                <div class="grid grid-cols-3 gap-x-2">
                    <div class='rounded-sm' id='drop-zone-a' ondrop="dropHandler(event)"
                        ondragover="dragoverHandler(event)">
                        <a id='item-1' href="#" draggable="true" ondragstart="dragstartHandler(event)"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Card 1</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                            </div>
                        </a>
                        <a id='item-2' href="#" draggable="true" ondragstart="dragstartHandler(event)"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Card 2</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                            </div>
                        </a>
                        <a id='item-3' href="#" draggable="true" ondragstart="dragstartHandler(event)"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Card 3</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class='bg-blue-200 rounded-sm' id="drop-zone" class="border-red-100 border-1"
                        ondrop="dropHandler(event)" ondragover="dragoverHandler(event)">
                    </div>
                    <div class='bg-blue-300 rounded-sm'>
                        <p>Hello</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>