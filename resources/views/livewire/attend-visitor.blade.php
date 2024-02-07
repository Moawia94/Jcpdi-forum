<section class="bg-gray-50 py-24">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class=" h-24 " src="/svg/logo.svg" alt="logo">
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl  leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                {!!__('form.confirm') !!} <span class="font-bold"> {{$visitor->name}} </span>
                </h1>
                {{-- <h2 class="text-l  leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Please Confirm Your Attendnce
                </h2> --}}
                <form class="space-y-4 md:space-y-6" wire:submit.prevent="save">
                    <div>
                        @if (session()->has('error'))
                        <div
                            class="alert alert-danger flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 ">
                            {{ session('error') }}
                        </div>
                        @endif
                    </div>





                    <ul class="grid w-full gap-6 md:grid-cols-2">
                        <li>
                            <input type="radio" id="will-attend" name="attendence" value="Will Attend" class="hidden peer" wire:model="attendingType" wire:click='trigerY'>
                            <label for="will-attend" class="inline-flex items-center justify-center w-full p-5 text-green-600 bg-white border border-green-600 rounded-lg cursor-pointer  peer-checked:border-green-600 peer-checked:text-white peer-checked:bg-green-600 hover:text-gray-600 hover:bg-green-100 ">
                                <div class="block">
                                    <div class="w-full">{!!__('form.yes') !!}</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="not-attending" name="attendence" value="Not Attending" class="hidden peer" wire:model="attendingType" wire:click='trigerN'>
                            <label for="not-attending" class="inline-flex items-center justify-center w-full p-5 text-red-600 bg-white border border-red-600 rounded-lg cursor-pointer   peer-checked:border-red-600 peer-checked:text-white peer-checked:bg-red-600 hover:text-gray-600 hover:bg-red-100 ">
                                <div class="block">
                                    <div class="w-full">{!!__('form.no') !!}</div>
                                </div>
                            </label>
                        </li>
                    </ul>

                    @if ($yes == 'yes')
                    <p class="text-primary-900">{!!__('form.y-desc')!!}</p>
                    @endif

                    @if ($no == 'no')
                    <p class="text-red-500">{!!__('form.n-desc')!!}</p>
                    <p class="text-green-500">{!!__('form.n-sup-desc')!!}</p>
                    @endif



                    <x-table >
                        <x-slot name="body">
                            @foreach ($escorts as $escort)
                                <x-table-row>
                                    <x-slot name="name">{{$escort->name}}</x-slot>
                                    <x-slot name="job">{{$escort->job_title}}</x-slot>
                                </x-table-row>
                            @endforeach
                        </x-slot>
                    </x-table>






                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5 py-4">
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{!!__('form.name') !!}</label>
                            <input wire:model='name' type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            @error('name') <span class="error text-red-500">{!!__('hero.errname') !!}</span> @enderror
                        </div>
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{!!__('form.job') !!}</label>
                            <input wire:model='job' type="text" name="Job Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            @error('job') <span class="error text-red-500">{!!__('hero.errname') !!}</span> @enderror
                        </div>
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{!!__('form.mobile') !!}</label>
                            <input wire:model='mobile' type="text" name="mobile" id="mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            @error('mobile') <span class="error text-red-500">{!!__('hero.errname') !!}</span> @enderror
                        </div>
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{!!__('form.email') !!}</label>
                            <input wire:model='email' type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            @error('email') <span class="error text-red-500">{!!__('hero.errname') !!}</span> @enderror
                        </div>

                        <p class="-mt-4 md:-mt-6 text-red-400 col-span-2">{!!__('form.y-sup-desc')!!}</p>

                    </div>

                    <div wire:click='addEscort'  class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-40 ">{!!__('form.add') !!}</div>
                    @if (session()->has('message'))
                    <div
                        class="alert alert-success flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800">
                        {{ session('message') }}

                    </div>
                    @endif
                    <button  type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{!!__('form.submit') !!}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
  </section>
