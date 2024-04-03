<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#050505C7]">
    <nav id="header" class="fixed w-full z-30 top-0 text-black bg-black">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="pl-4 flex items-center">
                    <a href="#" class="toggleColour  no-underline hover:no-underline font-bold text-2xl lg:text-4xl  text-black"></a>
                        

                        
                    </a>
                </div>
                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center p-1 text-black hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <svg class="fill-white h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-black lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <a class="inline-block text-white no-underline font-bold text-2xl  hover:text-underline py-2 px-4 hover:text-primary" href="#Home">Home</a>
                        </li>                      
                        <li class="mr-3">
                            <a class="inline-block text-white no-underline font-bold text-2xl hover:text-underline py-2 px-4 hover:text-primary" href="#Service">Service</a>
                        </li>                      
                        <li class="mr-3">
                            <a class="inline-block text-white no-underline font-bold text-2xl hover:text-underline py-2 px-4 hover:text-primary" href="#Portofolio">Portofolio</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block text-white no-underline font-bold text-2xl hover:text-primary hover:text-underline py-2 px-4" href="#About">About</a>
                        </li>
                    </ul>

                </div>
            </div>
            <hr class="border-b border-gray-100 opacity-25 my-0 py-0 " />
        </nav>
     <section id="Home" class="pt-5 pb-80  sm:mt-2  w-full ">
        <div class="flex flex-wrap py-20 mx-auto">
          <div class="w-full self-center px-4 lg:w-1/2 mt-10 sm:mt-2">
            <div class="lg:py-8">
              <h1
                class="text-4xl   text-primary font-bold ">
                Hi I'am Muhamad Suharto 
              </h1>
              <h1
                class="text-4xl  lg:text-4xl text-white ">
                Mahasiswa Politeknik Tegal 
              </h1>
              <h1
                class="text-4xl  lg:text-4xl text-white mb-5">
                DIII Teknik Komputer 
              </h1>
              <p class="text-black mb-2 text-2xl ">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti possimus est vel magni illo inventore quaerat beatae facilis veritatis in quis ut, magnam harum quas dignissimos esse quasi similique dolorum?
              </p>
              <div class="bg-primary  group flex w-56 p-2 rounded-xl hover:bg-white">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" viewBox="0 0 24 24" class="fill-black group-hover:fill-primary "><path fill="currentColor" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.188 8.188 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18c.21-.58.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01"/></svg>

              <a href="https://wa.me/qr/NL3M34WD3H7PM1" class="text-2xl text-white group-hover:text-black">Whatsapp Me</a>
              </div>
          </div>
          </div>
           <div class="w-full self-center px-4 lg:w-1/2">
            <div class="relative ">
              <img
                src="personal.jpg"
                alt=""
                class=" mx-auto  shadow-lg shadow-black border-8 border-black rounded-full mt-10  " width="500" height="500" />
            </div>
          </div>
        </div>
      </div>
        </section>
       
        
        <section class="w-full  py-8" id="Portofolio">
                <h1 class="w-72 px-5 py-1 my-2 text-6xl ml-5 bg-black leading-tight text-white mb-10">
                    Portofolio 
                </h1>
            <div class=" w-full mx-auto px-2 pt-4 pb-32 text-gray-800 flex justify-center">
                <div class="items-center">

                <div class="flex flex-col sm:flex-row flex-wrap gap-5 justify-center sm:justify-center sm:mx-auto">
                    <div class="  overflow-hidden">
                        <img src="Portofolio1.png" alt="" class="mx-auto">
                        
                    </div>
                    <div class="  overflow-hidden">
                        <img src="Portofolio2.png" alt="" class="mx-auto">
                    </div>
                    <div class="  overflow-hidden">
                        <img src="Portofolio3.png" alt="" class="mx-auto">
                    </div>
                </div>
                </div>
            </div>
            
        </section>
         <section class="py-8 "  id="Service">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h1 class="w-96 my-2 text-6xl  leading-tight text-center text-white bg-black">
                    MY Service
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 border-4 bg-white border-primary rounded-xl overflow-hidden shadow text-white group hover:bg-black hover:border-white">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            
                            <div class="w-full font-bold text-4xl text-primary px-6 mt-20 group-hover:text-white">
                                Web Development
                            </div>
                            <p class="text-black group-hover:text-primary text-lg px-6 mb-20">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 border-4 bg-white border-primary rounded-xl  overflow-hidden shadow text-white group hover:bg-black hover:border-white">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            
                            <div class="w-full font-bold text-4xl text-primary px-6 mt-20 group-hover:text-white">
                                UI Design
                            </div>
                            <p class="text-black group-hover:text-primary text-lg px-6 mb-20">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 border-4 bg-white border-primary rounded-xl overflow-hidden shadow text-white group hover:bg-black hover:border-white">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            
                            <div class="w-full font-bold text-4xl text-primary px-6 mt-20 group-hover:text-white">
                                Web Design
                            </div>
                            <p class="text-black group-hover:text-primary text-lg px-6 mb-20">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    
                </div>
                
               
            </div>
        </section>
    <section id="About" class="py-10 pb-10 ">
      <div class="container">
        <div class="flex flex-wrap justify-evenly">
          <div class="w-full self-center px-4 lg:w-1/2">
            <div class=" relative ">
              <img
                src="personabout.jpg"
                alt=""
                class=" mx-auto  shadow-lg shadow-white border  border-teal-600 border-transparent" width="500" height="500" />
            </div>
          </div>


          <div class="w-full self-center px-4 lg:w-1/2 mt-10">
            <div class="lg:py-8">
              <h1
                class="text-6xl  lg:text-4xl text-white font-bold mb-5">
                About Me
              </h1>
              <p class="text-white mb-2 text-4xl ">
                Hello! I am Muhamad Suharto, a student at Politeknik Harapan Bersama Tegal, I am 19 years old. As a studious student, I am always looking for new challenges and opportunities for personal and professional growth.
              </p>
          </div>
          </div>
        </section>
        <div class="bg-white h-1 w-full"> </div>
        <footer class="block mt-5">
            <div class="">
                <div class=" w-1/2  mx-auto">
                    <p class="text-white text-4xl text-center">If you have a problem with me, call me. If you don't have my number, then that means you don't know me well enough to have a problem.</p>
                </div>
                <div class=" flex justify-center items-center">
                    <div class="bg-black py-5 px-5 rounded-lg">
                    <div class="flex gap-5">
                        <p class="text-white self-center text-2xl">Interested working with me?</p>
                        <div class="bg-primary flex gap-3 p-2 rounded-xl group hover:bg-white">

<svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" viewBox="0 0 24 24" class="fill-black group-hover:fill-primary "><path fill="currentColor" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.188 8.188 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18c.21-.58.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01"/></svg>


              <a href="https://wa.me/qr/NL3M34WD3H7PM1" class="text-2xl text-white group-hover:text-black ">Whatsapp Me</a>
              </div>
              <div class="bg-primary flex gap-3 p-2 rounded-xl group hover:bg-white">
                    <svg width="50" height="38" viewBox="0 0 60 48" class="fill-black group-hover:fill-primary " xmlns="http://www.w3.org/2000/svg">
    <path d="M58.8633 15.8055C59.3203 15.4191 60 15.7805 60 16.3913V41.882C60 45.1852 57.4805 47.8651 54.375 47.8651H5.625C2.51953 47.8651 0 45.1852 0 41.882V16.4038C0 15.7805 0.667969 15.4315 1.13672 15.8179C3.76172 17.9868 7.24219 20.7416 19.1953 29.978C21.668 31.8976 25.8398 35.9362 30 35.9113C34.1836 35.9487 38.4375 31.8228 40.8164 29.978C52.7695 20.7416 56.2383 17.9744 58.8633 15.8055ZM30 31.9101C32.7188 31.96 36.6328 28.2703 38.6016 26.7496C54.1523 14.746 55.3359 13.6989 58.9219 10.7073C59.6016 10.1464 60 9.27387 60 8.35147V5.98314C60 2.67995 57.4805 0 54.375 0H5.625C2.51953 0 0 2.67995 0 5.98314V8.35147C0 9.27387 0.398437 10.1339 1.07812 10.7073C4.66406 13.6864 5.84766 14.746 21.3984 26.7496C23.3672 28.2703 27.2812 31.96 30 31.9101Z" />
    </svg>

<svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" viewBox="0 0 24 24" class="fill-black group-hover:fill-primary "><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
              <a href="#" class="text-2xl text-white group-hover:text-black ">Instagram</a>
              </div>
</div>
                    </div>
                </div>
            </div>
        </footer>
                <script src="{{ mix('js/app.js') }}"></script>

        <script>
            var scrollpos = window.scrollY;
            var header = document.getElementById("header");
            var navcontent = document.getElementById("nav-content");
            var navaction = document.getElementById("navAction");
            var brandname = document.getElementById("brandname");
            var toToggle = document.querySelectorAll(".toggleColour");

            document.addEventListener("scroll", function() {
                /*Apply classes for slide in bar*/
                scrollpos = window.scrollY;

                if (scrollpos > 10) {
                    header.classList.add("bg-[#FFF176]");
                    navaction.classList.remove("bg-[#FFF176]");
                    navaction.classList.add("gradient");
                    navaction.classList.remove("text-blue-700");
                    navaction.classList.add("text-black");
                    //Use to switch toggleColour colours
                    for (var i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-gray-800");
                        toToggle[i].classList.remove("text-black");
                    }
                    header.classList.add("shadow");
                    navcontent.classList.remove("bg-gray-100");
                    navcontent.classList.add("bg-[#FFF176]");
                } else {
                    header.classList.remove("bg-[#FFF176]");
                    navaction.classList.remove("gradient");
                    navaction.classList.add("bg-[#FFF176]");
                    navaction.classList.remove("text-black");
                    navaction.classList.add("text-gray-800");
                    //Use to switch toggleColour colours
                    for (var i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-white");
                        toToggle[i].classList.remove("text-gray-800");
                    }

                    header.classList.remove("shadow");
                    navcontent.classList.remove("bg-red-700");
                    navcontent.classList.add("bg-gray-100");
                }
            });

        </script>
        <script>
            /*Toggle dropdown list*/
            /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");

            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

                //Nav Menu
                if (!checkParent(target, navMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, navMenu)) {
                        // click on the link
                        if (navMenuDiv.classList.contains("hidden")) {
                            navMenuDiv.classList.remove("hidden");
                        } else {
                            navMenuDiv.classList.add("hidden");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        navMenuDiv.classList.add("hidden");
                    }
                }
            }

            function checkParent(t, elm) {
                while (t.parentNode) {
                    if (t == elm) {
                        return true;
                    }
                    t = t.parentNode;
                }
                return false;
            }

        </script>
</body>
</html>