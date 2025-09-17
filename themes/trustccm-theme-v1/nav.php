




<nav class=" border-gray-200 dark:bg-gray-900" role="navigation" style="background: rgba(0, 0, 0, 0.4) !important;">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/trustccm_logo.png" class="h-14" alt="TrustCCM - Business Consulting Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white site-name">Trustccm</span>
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
           
           <!--  <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
            <a href="#" class="text-white bg-green-600 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-green-600 dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-800 sign-up-button">Sign up</a> -->


            <button data-collapse-toggle="mega-menu-icons" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 menu-icon" aria-controls="mega-menu-icons" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="<?php echo home_url(); ?>" class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <li>
                    <button id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        Company 
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg>
                    </button>
                    <div id="mega-menu-icons-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                <li>
                                    <a href="<?php echo home_url('/about'); ?>" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                        <span class="sr-only">About us</span>
                                        <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                        </svg>
                                        About Us
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo home_url('/case-studies'); ?>" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                        <span class="sr-only">Case Studies</span>
                                        <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                            <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>
                                            <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                        </svg>
                                        Case Studies
                                    </a>
                                </li>
                            

                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <!-- <li>
                                    <a href="<?php //echo home_url('/blog'); ?>" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                        <span class="sr-only">Blog</span>
                                        <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z"/>
                                            <path d="M6 5H5v1h1V5Z"/>
                                        </svg>
                                        Blog
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="#newsletter" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                        <span class="sr-only">Newsletter</span>
                                        <svg class="w-4 h-4 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M2 4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4zm2 0v.511l8 5.333 8-5.333V4H4zm16 2.489-8 5.333-8-5.333V20h16V6.489z"/>
                                        </svg>
                                        Newsletter
                                    </a>
                            </li> -->

                                <li>
                                    <a href="<?php echo home_url('/services'); ?>" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                        <span class="sr-only">Services</span>
                                        <svg class="w-4 h-4 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M10 2a2 2 0 0 0-2 2v2H5a3 3 0 0 0-3 3v1h20V9a3 3 0 0 0-3-3h-3V4a2 2 0 0 0-2-2h-4Zm4 4h-4V4h4v2ZM2 12v7a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-7H2Z"/>
                                        </svg>
                                        Services
                                    </a>
                                </li>                               
                               
                            </ul>
                        </div>
                        <div class="p-4 text-gray-900 dark:text-white">
                            <ul class="space-y-4">
                              
                                <li>
                                  <a href="<?php echo home_url('/consultancy-consulting'); ?>" 
                                     class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                    
                                    <!-- Icon -->
                                    <svg class="w-5 h-5 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" 
                                         fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                      <path d="M7 8h2v4H7v2h4V8H7v0Zm6 0h2v4h-2v2h4V8h-4Zm1-6C6.925 2 2 6.925 2 13c0 1.29.25 2.52.7 3.65a1 1 0 0 0 .08.16L2 22l5.19-1.37c1.09.4 2.26.61 3.49.61 6.075 0 11-4.925 11-11S17.075 2 11 2Z"/>
                                    </svg>

                                    <!-- Label -->
                                    <span>Consultancy</span>
                                  </a>
                                </li>

                                
                                <li>
                                    <a href="<?php echo home_url('/terms-of-use'); ?>" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                        <span class="sr-only">Terms</span>
                                        <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                                        </svg>
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="<?php echo home_url('/contact-us'); ?>" class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Contact Us</a>
                </li>

                
            </ul>
        </div>
    </div>
</nav>