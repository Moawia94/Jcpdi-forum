<section class="bg-primary-900 relative top-0  h-screen flex justify-center items-center">
    <img src="images/hero-bg.png" class="w-full">

        <div class="absolute inset-0 px-4 flex justify-center items-center mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">

            <div class="flex flex-col items-center justify-center mt-8 ml-2">
                <div x-data="countdown()" x-init="startTimer()" class="text-white text-center">
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
