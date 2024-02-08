<section class="bg-primary-900 relative top-0 h-screen flex justify-center items-center">
    <img src="/images/hero-bg.png" class="w-full">
    <div class="absolute inset-0 py-8 px-12 mx-auto max-w-screen-xl lg:py-16   items-center justify-center grid gird-cols-1 md:grid-cols-3">
    <div class="col-span-2">
        <h1
            class="font-fatimah mb-4 text-xl px-12 md:px-0 pt-20 md:pt-0 font-extrabold tracking-tight leading-none text-primary-200 md:text-5xl lg:text-4xl ">
            {!!__('hero.h1') !!}</h1>
        <p class="mb-8 text-lg px-12 md:px-0 font-normal text-white lg:text-xl "> {!!__('hero.h2') !!} </p>
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">


            <ul class="items-start px-12 md:px-0 justify-start text-white ">
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

    <div class="justify-center items-center  px-12 md:px-0">
        <h1 class="text-xl mb-4 text-white text-center flex justify-center"> {!!__('hero.time_remaining') !!} </h1>
        <div class="backdrop-blur-sm bg-black/30 w-96 h-18  rounded-xl border border-gray-400">
            <div class="px-2 py-4 mx-auto text-center ">
                <div class="flex flex-col items-center ">
                    <div x-data="countdown()" x-init="startTimer()" class="text-black text-center">
                        <div class="text-xl text-white">
                          <span x-text="time.days"></span> {!!__('hero.day') !!}
                          <span x-text="time.hours"></span> {!!__('hero.hour') !!}
                          <span x-text="time.minutes"></span> {!!__('hero.minute') !!}
                          <span x-text="time.seconds"></span> {!!__('hero.second') !!}
                        </div>
                      </div>
                </div>
        </div>

            <script>
                function countdown() {
                  return {
                    time: { days: 0, hours: 0, minutes: 0, seconds: 0 },
                    targetDate: new Date('2024-02-19'),

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
        <div>

        </div>
    </div>
    </div>
    </div>
</section>
