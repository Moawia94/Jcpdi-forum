<section class="bg-primary-900 relative top-0  h-screen flex justify-center items-center">
    <img src="/images/hero-bg.png" class="w-full">
    <div class="absolute inset-0 py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12  items-center justify-center grid grid-cols-3">
    <div class="col-span-2">
        <h1
            class="font-fatimah mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
            {!!__('hero.h1') !!}</h1>
        <p class="mb-8 text-lg font-normal text-white lg:text-xl "> {!!__('hero.h2') !!} </p>
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">


            <ul class="items-start justify-start text-white ">
                <li>
                    <div class="inline-flex items-center justify-center py-3 text-lg font-medium text-center ">
                        <img src="svg/icon-date.svg" class="w-8 h-8 ml-2 mr-1 rtl:ml-2 rtl:mr-2">
                            {!!__('hero.event-date') !!}
                        </div>
                </li>
                <li>
                    <div class="inline-flex items-center justify-center py-3  text-lg font-medium text-center ">
                        <img src="svg/icon-time.svg" class="w-8 h-8 ml-2 mr-1 rtl:ml-2 rtl:mr-2">
                        {!!__('hero.event-time') !!}
                    </div>
                </li>
                <li>
                    <div class="inline-flex items-center justify-center  py-3 text-lg font-medium text-center">
                        <img src="svg/icon-location.svg" class="w-8 h-8 ml-2 mr-1 rtl:ml-2 rtl:mr-2">
                        {!!__('hero.event-location') !!}
                    </div>
                </li>
            </ul>


        </div>
    </div>
        <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">

            <div class="flex flex-col items-center mt-8 ml-2">
                <div x-data="countdown()" x-init="startTimer()" class="text-black text-center">
                    <h1 class="text-6xl mb-4"> {!!__('hero.time_remaining') !!} </h1>
                    <div class="text-4xl">
                      <span x-text="time.days"></span> {!!__('hero.day') !!}
                      <span x-text="time.hours"></span> {!!__('hero.hour') !!}
                      <span x-text="time.minutes"></span> {!!__('hero.minute') !!}
                      <span x-text="time.seconds"></span> {!!__('hero.second') !!}
                    </div>
                  </div>
            </div>
            <script>
                function countdown() {
                  return {
                    time: { days: 0, hours: 0, minutes: 0, seconds: 0 },
                    targetDate: new Date('2024-02-21'),

                    startTimer() {
                      setInterval(() => {
                        const diff = this.targetDate - new Date();
                        this.time.days = Math.floor(diff / (1000 * 60 * 60 * 24));
                        this.time.hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                        this.time.minutes = Math.floor((diff / 1000 / 60) % 60);
                        this.time.seconds = Math.floor((diff / 1000) % 60);
                      }, 1000);
                    }
                  }
                }
              </script>
        </div>
    </div>
</section>
