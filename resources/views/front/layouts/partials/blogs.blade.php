<!--====== BLOG PART START ======-->

<section id="blog" class="blog_area pt-120">
    <div class="container">
        <div class="row justify-center">
            <div class="w-full lg:w-1/2">
                <div class="section_title text-center pb-6">
                    <h5 class="sub_title">Blog</h5>
                    <h4 class="main_title">From The Blog</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-center lg:justify-start">
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                    <div class="blog_image">
                        <img src="{{ asset_url('front/images/blog-1.jpg') }}" alt="blog" class="w-full">
                    </div>
                    <div class="blog_content p-4 md:p-5">
                        <ul class="blog_meta flex justify-between">
                            <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                            <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                        <a href="#" class="more_btn">Read More</a>
                    </div>
                </div> <!-- row -->
            </div>
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                    <div class="blog_image">
                        <img src="{{ asset_url('front/images/blog-2.jpg') }}" alt="blog" class="w-full">
                    </div>
                    <div class="blog_content p-4 md:p-5">
                        <ul class="blog_meta flex justify-between">
                            <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                            <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">Improving products depending on feedback</a></h3>
                        <a href="#" class="more_btn">Read More</a>
                    </div>
                </div> <!-- row -->
            </div>
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                    <div class="blog_image">
                        <img src="{{ asset_url('front/images/blog-3.jpg') }}" alt="blog" class="w-full">
                    </div>
                    <div class="blog_content p-4 md:p-5">
                        <ul class="blog_meta flex justify-between">
                            <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                            <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">How to diversify your audience</a></h3>
                        <a href="#" class="more_btn">Read More</a>
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->

@include('front.layouts.partials.contact')