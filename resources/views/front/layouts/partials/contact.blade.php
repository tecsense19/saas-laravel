<!--====== CONTACT PART START ======-->

<section id="contact" class="contact_area relative pt-18 pb-120">
    <div class="contact_image flex items-center justify-end">
        <div class="image lg:pr-13">
            <img src="{{ asset_url('front/images/contact.svg') }}" alt="about">
        </div>
    </div> <!-- about image -->
    
    <div class="container">
        <div class="row justify-end">
            <div class="w-full lg:w-1/2">
                <div class="contact_wrapper mt-11">
                    <div class="section_title pb-4">
                        <h5 class="sub_title">Contact</h5>
                        <h4 class="main_title">Get In Touch</h4>
                        <p>Lorem ipsum dolor sitrg amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                    </div> <!-- section title -->
                    
                    <div class="contact_form">
                        <form id="contact-form" action="assets/php/contact.php" method="POST">
                            <div class="row">
                                <div class="w-full md:w-1/2">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <input name="name" id="name" type="text" placeholder="Name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <input name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <textarea name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                                <p class="form-message mx-3"></p>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <div class="single_form mt-8">
                                            <button type="submit" class="main-btn contact-btn">Submit</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div> <!-- contact wrapper -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->