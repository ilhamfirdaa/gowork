<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GoWork</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
            <div class="container p-4 lg:px-16">
                <div class="w-full flex justify-between items-center relative">
                    <div class="flex items-center lg:w-2/12">                        
                        <button id="hamburger" name="hamburger" type="button" class="block lg:hidden absolute">
                            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                        </button>
                        <div class="ml-8 lg:ml-0">
                            <img src="{{url('/images/gowork.png')}}" alt="logo">
                        </div>
                    </div>
                    
                    <nav id="nav-menu" class="hidden lg:block absolute py-5 lg:py-2 bg-white shadow-lg rounded-lg w-full lg:w-8/12 top-full lg:static lg:bg-transparent lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex lg:float-right">
                            <li class="group">
                                <a href="#one" class="font-semibold py-2 mx-4 flex group-hover:text-primary">MENU ONE</a>
                            </li>
                            <li class="group">
                                <a href="#two" class="font-semibold py-2 mx-4 flex group-hover:text-primary">MENU TWO</a>
                            </li>
                            <li class="group">
                                <a href="#three" class="font-semibold py-2 mx-4 flex group-hover:text-primary">MENU THREE</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="flex lg:w-2/12">
                        <button class="w-full font-semibold text-base py-1 px-6 border-2 border-black hover:bg-slate-50 disabled:text-slate-300 disabled:border-slate-300 rounded-full float-right">Direct Action</button>
                    </div>
                </div>
            </div>
        </header>
        
        <section id="banner" class="pt-16">
            <div class="container pl-4 py-4 lg:px-0">
                <div class="w-full flex justify-center lg:justify-end">
                    <img src="{{url('/images/hero.png')}}" alt="hero">
                </div>
            </div>
        </section>

        <section id="hero" class="relative lg:absolute -mt-10 lg:-mt-96">
            <div class="container w-full lg:max-w-sm pl-4 lg:pl-0 lg:ml-16 py-4 bg-white rounded-tr-xl">
                <div class="">
                    <h1 class="text-4xl font-serif font-semibold">Heading for Lorem Ipsum Dolor sit Amet, Consectetur Elit.</h1>
                    <p class="text-base">Introduction for lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
    
                <div class="flex flex-col pr-4 pt-8 gap-y-2">
                    <div class="w-full relative">
                        <select class="w-full text-slate-300 border border-slate-300 rounded-lg pl-10 py-2" name="location">
                            <option value="" disabled selected>Select Location</option>
                            <option value="1">Jakarta</option>
                            <option value="2">Bandung</option>
                            <option value="3">Semarang</option>
                            <option value="4">Surabaya</option>
                        </select>
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <button class="text-white bg-gradient-to-r from-[#243033] to-[#0D4759] py-2 px-16 rounded-xl hover:from-[#0D4759] hover:to-[#243033] disabled:bg-slate-200 transition duration-500">Find Space</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="plans" class="pt-10">
            <div class="container px-4 lg:px-16">
                <h2 class="font-bold text-center text-xl pb-6">FIND THE PLAN LOREM IPSUM DOLOR </h2>
    
                <div class="flex flex-col lg:flex-row lg:gap-x-4">
                    <div id="plan-1" class="w-full lg:w-1/5 py-2">
                        <div class="flex flex-col border border-gray-200 rounded-md">
                            <div class="w-full flex flex-row lg:flex-col gap-x-4 py-4 px-2">
                                <div class="flex justify-center">
                                    <img src="{{url('/images/plan.png')}}" alt="plan">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg lg:text-center">PLAN ONE</h4>
                                    <p>Introduction Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
        
                            <div class="benefit-container">
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                            </div>
            
                            <div class="w-full flex flex-col items-center justify-center bg-[#FCF4ED] gap-y-1 py-2">
                                <span>Starts from</span>
                                <span class="font-semibold">Rp 2.800.000*</span>
                                <span class="font-semibold">/pax/month</span>
                            </div>
                        </div>
                    </div>
                    <div id="plan-2" class="w-full lg:w-1/5 py-2">
                        <div class="flex flex-col border border-gray-200 rounded-md">
                            <div class="w-full flex flex-row lg:flex-col gap-x-4 py-4 px-2">
                                <div class="flex justify-center">
                                    <img src="{{url('/images/plan.png')}}" alt="plan">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg lg:text-center">PLAN TWO</h4>
                                    <p>Introduction Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
        
                            <div class="benefit-container">
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                            </div>
            
                            <div class="w-full flex flex-col items-center justify-center bg-[#FCF4ED] gap-y-1 py-2">
                                <span>Starts from</span>
                                <span class="font-semibold">Rp 2.800.000*</span>
                                <span class="font-semibold">/pax/month</span>
                            </div>
                        </div>
                    </div>
                    <div id="plan-3" class="w-full lg:w-1/5 py-2">
                        <div class="flex flex-col border border-gray-200 rounded-md">
                            <div class="w-full flex flex-row lg:flex-col gap-x-4 py-4 px-2">
                                <div class="flex justify-center">
                                    <img src="{{url('/images/plan.png')}}" alt="plan">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg lg:text-center">PLAN THREE</h4>
                                    <p>Introduction Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
        
                            <div class="benefit-container">
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                            </div>
            
                            <div class="w-full flex flex-col items-center justify-center bg-[#FCF4ED] gap-y-1 py-2">
                                <span>Starts from</span>
                                <span class="font-semibold">Rp 2.800.000*</span>
                                <span class="font-semibold">/pax/month</span>
                            </div>
                        </div>
                    </div>
                    <div id="plan-4" class="w-full lg:w-1/5 py-2">
                        <div class="flex flex-col border border-gray-200 rounded-md">
                            <div class="w-full flex flex-row lg:flex-col gap-x-4 py-4 px-2">
                                <div class="flex justify-center">
                                    <img src="{{url('/images/plan.png')}}" alt="plan">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg lg:text-center">PLAN FOUR</h4>
                                    <p>Introduction Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
        
                            <div class="benefit-container">
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                            </div>
            
                            <div class="w-full flex flex-col items-center justify-center bg-[#FCF4ED] gap-y-1 py-2">
                                <span>Starts from</span>
                                <span class="font-semibold">Rp 2.800.000*</span>
                                <span class="font-semibold">/pax/month</span>
                            </div>
                        </div>
                    </div>
                    <div id="plan-5" class="w-full lg:w-1/5 py-2">
                        <div class="flex flex-col border border-gray-200 rounded-md">
                            <div class="w-full flex flex-row lg:flex-col gap-x-4 py-4 px-2">
                                <div class="flex justify-center">
                                    <img src="{{url('/images/plan.png')}}" alt="plan">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg lg:text-center">PLAN FIVE</h4>
                                    <p>Introduction Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
        
                            <div class="benefit-container">
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
            
                                <div class="benefit-section">
                                    <img src="{{url('/images/printer.png')}}" alt="printer">
                                    <span class="text-sm">BENEFIT</span>
                                </div>
                            </div>
            
                            <div class="w-full flex flex-col items-center justify-center bg-[#FCF4ED] gap-y-1 py-2">
                                <span>Starts from</span>
                                <span class="font-semibold">Rp 2.800.000*</span>
                                <span class="font-semibold">/pax/month</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <span class="text-xs text-gray-300 float-right">*VAT is applicable</span>
            </div>
        </section>
        
        <section id="caption" class="pt-10">
            <div class="container px-4 lg:px-16">
                <p class="text-lg">Caption for lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="included" class="pt-10">
            <div class="container px-4 lg:px-16">
                <h3 class="font-bold text-3xl">All plans lorem ipsum</h3>
                <div class="flex flex-col lg:flex-row lg:gap-x-8">
                    <div class="pt-6">
                        <h4 class="font-semibold text-xl">Title Lorem Ipsum Dolor</h4>
                        <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="pt-6">
                        <h4 class="font-semibold text-xl">Title Consectetur Adipiscing</h4>
                        <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="pt-10 px-4">
            <div class="container lg:px-12">
                <div class="bg-[#E5F5FA] rounded-lg p-4">
                    <h3 class="font-bold text-2xl">Looking for a lorem ipsum dolor sit amet?</h3>
                    <div class="w-full flex justify-end">
                        <button class="font-semibold text-sm text-[#9E7619] disabled:text-[#E5D3A1] inline-flex items-center">
                            Call to Action
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <footer class="pt-16 pb-8">
            <div class="container px-4 lg:px-16">
                <p>Snippet Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
    
                <div class="w-full flex flex-col lg:flex-row lg:justify-between pt-8 pb-6 border-b">
                    <div class="flex items-center">
                        <img src="{{url('/images/gowork.png')}}" alt="logo" class="w-32 pb-4 lg:pb-0">
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter your email address for updates" class="lg:w-2/6 p-2 border border-slate-300 placeholder:text-slate-300 rounded-xl">
                </div>
    
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-2/12 flex lg:flex-col lg:gap-y-2 justify-between items-start pt-4">
                        <div class="w-2/3 lg:w-full flex flex-col gap-y-2">
                            <div class="flex items-center">
                                <img src="{{ url('/images/phone.png')}}" alt="phone">
                                <a href="#phone">
                                    <span class="text-[#9E7619]">+62 21 3970 7888</span>
                                </a>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ url('/images/whatsapp.png')}}" alt="whatsapp">
                                <a href="#whatsapp">
                                    <span class="text-[#9E7619]">+62 811 996 8896</span>
                                </a>
                            </div>
                        </div>
            
                        <div class="w-1/3 lg:w-3/4 flex justify-between items-center">
                            <a href="#instagram">
                                <img src="{{ url('/images/instagram.png')}}" alt="instagram">
                            </a>
                            <a href="#linkedin">
                                <img src="{{ url('/images/linkedin.png')}}" alt="linkedin">
                            </a>
                            <a href="#youtube">
                                <img src="{{ url('/images/youtube.png')}}" alt="youtube">
                            </a>
                        </div>
                    </div>
        
                    <div class="lg:w-6/12 py-8 lg:py-4">
                        <ul class="flex flex-col lg:flex-row lg:justify-evenly gap-y-4">
                            <a href="#one">
                                <li class="font-semibold">MENU ONE</li>
                            </a>
                            <a href="#two">
                                <li class="font-semibold">MENU TWO</li>
                            </a>
                            <a href="#three">
                                <li class="font-semibold">MENU THREE</li>
                            </a>
                        </ul>
                    </div>
                    
                    <div class="lg:w-4/12 lg:pt-4">
                        <div class="flex gap-x-4">
                            <span class="font-bold">Download GoWork App for free now!</span>
                            <a href="#apple">
                                <img src="{{ url('/images/apple.png')}}" alt="apple">
                            </a>
                            <a href="#android">
                                <img src="{{ url('/images/android.png')}}" alt="android">
                            </a>
                        </div>
            
                        <div class="w-3/4 lg:pt-2">
                            <span class="font-light text-xs text-[#6C7C80]">©Copyright 2021 GoWork Coworking & Office Space Kolaborasi Global Sukses, PT</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>