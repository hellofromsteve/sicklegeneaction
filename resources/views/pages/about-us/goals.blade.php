<x-layout title="Our Goals">

    <!-- Our Goals Start -->
    <div class="help-area pt-40 pb-20 ptb-sm-10 ">
        <div class="container">
            <div class=" text-center ">
                <h1 class="text-danger">Our Goals</h1>
            </div>

            <div class="section-title text-center mt-2">
                <p class="text-black"><strong>Our goals focus on activities that align with
                    Ghana’s National Strategy for  <br>Sickle Cell Disease
                    to ensure that Sickle Cell Warriors and their Families <br>
                    have full access to the following 6 elements of excellent SCD care:</strong>
                </p>

            </div>

            <div class="row text-center">
                <div class="row text-center">
                    @foreach($goals as $goal)
                        <div class="col-6 col-md-4 mb-5">
                            <div class="ht-about-feature-item p-4 border rounded shadow-sm h-100">
                                <!-- Red dot -->
                                <div style="width: 12px; height: 12px; background-color: #e3342f; border-radius: 50%; margin: 0 auto 15px;"></div>
                                <h4 class="text-black mb-1">Goal #{{ $goal['id'] }}</h4>


                                <h3 class="text-black">{{ $goal['title'] }}</h3>


                                <a href="{{ route($goal['route']) }}" class="btn btn-sm btn-danger mt-3">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission End -->

    <!-- Our Mission End
    <div class="pb-50">
        <div class="container text-center">
            <h1>Empowering Lives, Driving Change</h1>

            <div class="text-justify pt-30" style="text-align: justify;">
                <p>Sickle cell is a progressive, lifelong illness that has long-term complications and affects everyone differently. Its symptoms are unpredictable and can be severe. This unpredictability can impact the quality of life on a daily basis for a person with sickle cell disease. In Ghana, approximately 15,000-18,000 babies are born every year with Sickle Cell Disease. Twenty-five percent (25%) of Ghanaians also carry the Sickle Cell Trait, this means that Sickle Cell Disease impacts every family directly or indirectly.</p>

                <p>The Sickle Gene Action Foundation is dedicated to transforming the lives of individuals affected by Sickle Cell Disease (SCD). Our mission is to raise awareness, provide compassionate and dignified care, and advocate for innovative treatments. Our vision is to minimize Sickle Cell related deaths through stakeholder collaborations that reinforces standardized treatment and best practices in healthcare, affordable and comprehensive care for individuals. We are committed to early detection, effective management, and comprehensive support for SCD warriors and their families. </p>
            </div>
        </div>
    </div>
    -->

</x-layout>
