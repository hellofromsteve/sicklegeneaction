<x-layout title="Our Groundwork - Five" description="As of 2022, 21 Sickle Cell Centers across Ghana provide specialized treatment and care for people living with sickle cell disease.">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-80 ptb-sm-60 ">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10">5. Treatment Centers for Sickle Cell Disease </h4>
                <h5 class="pt-20 px-4 mb-3">Ghana’s Groundwork for Nationwide Excellence in Specialized Treatment and Care</h5>

                <div class="text-justify pt-10 px-4" >
                    <p class="text-black">In 2022, there were 21 Sickle Cell Centers across Ghana.</p>
                </div>

                <div class="text-justify pt-10 px-4" >
                    <p class="text-black">The Sickle Cell Foundation of Ghana established and worked with twenty-one (21) SCD centers across the country to provide special services for persons living with the condition. These could be located at:</p>
                </div>

                <div class="px-4">
                    <ol class="text-black fs-6">
                        @foreach ($hospitals as $hospital)
                            <li class="mb-3">{{ $hospital }}</li>
                        @endforeach
                    </ol>
                </div>


            </div>
        </div>


    </div>
    <!-- Our Mission End -->



</x-layout>
