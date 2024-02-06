<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            Flowbite
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Hi , {{$visitor->first_name}}
                </h1>
                <h2 class="text-l  leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Please Confirm Your Attendnce
                </h2>
                <form class="space-y-4 md:space-y-6" wire:submit.prevent="test">
                    <div>
                        @if (session()->has('error'))
                        <div
                            class="alert alert-success flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800">
                            {{ session('error') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        @if (session()->has('message'))
                        <div
                            class="alert alert-success flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>

                    <ul class="grid w-full gap-6 md:grid-cols-2">
                        <li>
                            <input type="radio" id="will-attend" name="attendence" value="Will Attend" class="hidden peer" wire:model="attendingType">
                            <label for="will-attend" class="inline-flex items-center justify-center w-full p-5 text-green-600 bg-white border border-green-600 rounded-lg cursor-pointer  peer-checked:border-green-600 peer-checked:text-white peer-checked:bg-green-600 hover:text-gray-600 hover:bg-green-100 ">
                                <div class="block">
                                    <div class="w-full">Yes I'll Attend</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="not-attending" name="attendence" value="Not Attending" class="hidden peer" wire:model="attendingType">
                            <label for="not-attending" class="inline-flex items-center justify-center w-full p-5 text-red-600 bg-white border border-red-600 rounded-lg cursor-pointer   peer-checked:border-red-600 peer-checked:text-white peer-checked:bg-red-600 hover:text-gray-600 hover:bg-red-100 ">
                                <div class="block">
                                    <div class="w-full">No I'll not Attend</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <button  wire:model='test' class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Confirm</button>
                </form>

            </div>
        </div>
    </div>
  </section>
