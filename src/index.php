<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href=".././output.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <header class="bg-[#ffffff] shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
          <div class="text-lg font-bold text-blue-600">Akilabs Inc.</div>
          <nav class="flex space-x-6">
            <div class="md:hidden">
              <button id="menu-btn" class="text-blue-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
              </button>
            </div>
            <div id="menu-links" class="hidden flex md:flex flex-col md:flex-row md:space-x-6 md:items-center md:static absolute top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-lg md:shadow-none md:p-0 p-6">
              <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
              <a href="#" class="text-gray-600 hover:text-blue-600">About</a>
              <a href="#" class="text-gray-600 hover:text-blue-600">Services</a>
              <a href="#" class="text-gray-600 hover:text-blue-600">Products</a>
              <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
              <a href="#" class="bg-blue-600 text-white py-2 px-4 rounded animate hover:bg-blue-500">Contact Us</a>
            </div>
          </nav>
        </div>
  </header>
  <!-- Section 1 -->
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <!-- <div> -->
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <div class="w-full md:w-3/6"  data-aos="fade-up"
              data-aos-duration="3000">
              <img alt="ecommerce" class="lg:h-auto h-64 object-cover object-center rounded"
              src="img/meeting1-removebg-preview.png">
          </div>
          
          <div class="md:w-3/6 w-full lg:pl-3 lg:py-6 mt-6 lg:mt-0 ">
            <h1 class="text-blue-500 text-3xl title-font font-medium mb-1">Innovate & Tranform</h1>
            <h6 class="text-blue-500  title-font font-normal mb-1">Your Business</h6>
            <p class="leading-relaxed">
              Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy
              chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
              Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
              neutra jean shorts keytar banjo tattooed umami cardigan.
            </p>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </section>
  <!-- Section 2 -->
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <div class="md:w-3/6 w-full lg:pl-10 lg:py-6 mb-6 lg:mb-0 ">
          <h1 class="text-blue-500 text-3xl title-font font-medium mb-4">About Akilab Inc.</h1>
          <h6 class="text-blue-500">Web Solution Company</h6>
          <p class="leading-relaxed my-4">
            Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy
            chia microdosing tilde DIY. XOXO fam inxigo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1
            seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean.
          </p>
        </div>
        <div class="md:w-3/6 w-full" data-aos="zoom-out-left">
          
          <img alt="ecommerce" class="lg:h-auto h-64 object-cover object-center rounded"
          src="img/company.jpg">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3 -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div
            class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2"
                d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Japanese Know How</h2>
            <p class="leading-relaxed text-base">
              Japan is a group of islands in the Pacific Ocean, located in East Asia. Sometimes it is also called the
              “land of the rising sun”.
            </p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div
            class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path fill-rule="evenodd"
                d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Flixsible Service</h2>
            <p class="leading-relaxed text-base">
              Flexible Options Trading is conducted in the J-NET Market, which is a separate market from the auction
              market,
            </p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div
            class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path fill-rule="evenodd"
                d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Japanese Project Manager</h2>
            <p class="leading-relaxed text-base">
              Company and the hierarchical structure put in place in an organization.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4 -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-5 mx-auto">
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div
            class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2"
                d="M16.5 15v1.5m0 0V18m0-1.5H15m1.5 0H18M3 9V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3M3 9v6a1 1 0 0 0 1 1h5M3 9h16m0 0v1M6 12h3m12 4.5a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Efficient Cost</h2>
            <p class="leading-relaxed text-base">
              Cost efficiency is about spending less money than you make.
            </p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div
            class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path fill-rule="evenodd"
                d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                clip-rule="evenodd" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Team Experiance and Skill</h2>
            <p class="leading-relaxed text-base">
              Many businesses use small teams to maximize workflow and increase performance.
            </p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div
            class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Strong Client Focus</h2>
            <p class="leading-relaxed text-base">
              To build a truly customer-focused culture, you first need to ensure you understand your customers and
              their needs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5 -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 mx-auto">
      <div class="text-center mb-5">
        <h1 class="sm:text-3xl sm:my-10 text-2xl font-medium text-center title-font text-blue-500 mb-4">Massage from Director</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
          " Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Non provident quam inventore tenetur aliquam velit pariatur
          suscipit explicabo, "
        </p>
      </div>
     
    </div>
  </section>

  <!-- Section 6 -->
  <section class="text-gray-600 py-10 body-font overflow-hidden">
    <div class="container px-5 mx-auto">
      <div class="text-center mb-5">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-blue-500 ">Our Service</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
            Web Solution Company
          </p>
        
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <div class="md:w-2/5 w-full" data-aos="zoom-out-right">
            <img alt="ecommerce" class="lg:h-auto h-64 object-cover object-center rounded"
            src="img/webdevelopment.png" >
          </div>
          <div class="md:w-3/5 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h1 class="text-blue-500 text-3xl title-font font-medium mb-1">Website Development</h1>
            <h6 class="title-font font-normal mb-1">We provide Development service of website of landing page for client
            </h6>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="bg-gray-100 rounded flex h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                  class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                  <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <span class="title-font font-medium">Planing</span>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="bg-gray-100 rounded flex h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                  class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                  <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <span class="title-font font-medium">Testing and Debugging</span>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="bg-gray-100 rounded flex h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                  class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                  <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <span class="title-font font-medium">Maintenance and Updates</span>
              </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="bg-gray-100 rounded flex h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                  class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                  <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <span class="title-font font-medium">Collaboration</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7 -->
  <section class="text-gray-600  overflow-hidden">
    <div class="container px-5 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <div class="md:w-3/5 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
          <h1 class="text-blue-500 text-3xl title-font font-medium mb-4">Web System Development</h1>
          <p class="leading-relaxed my-4">
            The role of a web system developer is to design applications. They work closely with project
            managers, designers, and other developers to create robust and scalable software solutions that
            meet the needs of businesses and users.
          </p>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium">Requirements Analysis</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium">System Design</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium">Development</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium">Testing and Debugging</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium">Deployment</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium">Maintenance and Support</span>
            </div>
          </div>
        </div>
        <div data-aos="zoom-out-left" class="md:w-2/5 w-full">
            <img alt="ecommerce" class="lg:h-auto h-64 object-cover object-center rounded"
            src="img/websystem.png">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8 -->
  <section class="text-gray-600 body-font overflow-hidden p-5">
    <div class="container  mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <div class="md:w-2/5 w-full"data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500">
          <img alt="ecommerce" class="lg:h-auto h-64 object-cover object-center rounded"
          src="img/webdevelopment.png">
        </div>
        <div class="md:w-3/5 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h1 class="text-blue-500 text-3xl title-font font-medium mb-1">Online Service</h1>
          <h6 class="title-font font-normal mb-1">
            Online services have become an integral part of our daily lives, providing a wide range of functions and
            conveniences.
          </h6>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
              <span class="title-font font-medium">Communication and Connection</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
              <span class="title-font font-medium">Information and Entertainment</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
              <span class="title-font font-medium">Business and Commerce</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
              <span class="title-font font-medium">Productivity and Collaboration</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-gray-100 rounded flex h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
              <span class="title-font font-medium">Government and Public Services</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="body-font overflow-hidden">
    <div class="container px-5 mx-auto flex">
      <div class="lg:w-4/5 mx-auto">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h1 class="text-blue-500 text-3xl title-font font-medium mb-3">Contant Us</h1>
          <div class="flex my-2">
            <div>
              <svg aria-hidden="true" class="w-6 h-6 mr-2 text-gray-800 dark:text-white"  xmlns="http://www.w3.org/2000/svg"
                width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
              </svg>
            </div>
            <span>09886866868</span>
          </div>
          <div class="flex my-2">
            <div>
              <svg class="w-6 h-6 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm10 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-8-5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm1.942 4a3 3 0 0 0-2.847 2.051l-.044.133-.004.012c-.042.126-.055.167-.042.195.006.013.02.023.038.039.032.025.08.064.146.155A1 1 0 0 0 6 17h6a1 1 0 0 0 .811-.415.713.713 0 0 1 .146-.155c.019-.016.031-.026.038-.04.014-.027 0-.068-.042-.194l-.004-.012-.044-.133A3 3 0 0 0 10.059 14H7.942Z" clip-rule="evenodd"/>
              </svg>
            </div>
            <span>Akilabs@gmail.com</span>
          </div>
          <div class="flex my-2">
            <div>
              <svg class="w-6 h-6 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm10 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-8-5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm1.942 4a3 3 0 0 0-2.847 2.051l-.044.133-.004.012c-.042.126-.055.167-.042.195.006.013.02.023.038.039.032.025.08.064.146.155A1 1 0 0 0 6 17h6a1 1 0 0 0 .811-.415.713.713 0 0 1 .146-.155c.019-.016.031-.026.038-.04.014-.027 0-.068-.042-.194l-.004-.012-.044-.133A3 3 0 0 0 10.059 14H7.942Z" clip-rule="evenodd"/>
              </svg>
            </div>
            <span>
              No48, Phum Anlong Kngan,Sangkat Khmounh, Khan Sen Sok Phnom Penh,Cambodia 12103
            </span>
          </div>
        </div>
      </div>
      <div class="lg:w-4/5 mx-auto">
        <form action="sendmail.php" method="post" class="p-9">
          <div class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-4 focus-within:ring-inset sm:max-w-md">
            <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Full Name*">
          </div>
          <div class="flex rounded-md shadow-sm ring-1 my-3 ring-gray-300 focus-within:ring-4 focus-within:ring-inset  sm:max-w-md">
            <input type="email" name="email" id="email" autocomplete="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Email*">
          </div>
          <div class="flex rounded-md shadow-sm ring-1 my-3 ring-gray-300 focus-within:ring-4 focus-within:ring-inset  sm:max-w-md">
            <input type="text" name="subject" id="subject" autocomplete="subject" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Subject*">
          </div>
          <div class="flex rounded-md shadow-sm ring-1 my-3 ring-gray-300 focus-within:ring-4 focus-within:ring-inset  sm:max-w-md">
            <input type="text" name="message" id="message" autocomplete="message" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Message*">
          </div>
          <button class="bg-blue-900 text-white p-4 rounded-md" name="btn_send">Send Email</button>
        </form>
      </div>
    </div>
  </footer>
</body>
<script>
  AOS.init();
  const menuBtn = document.getElementById('menu-btn');
    const menuLinks = document.getElementById('menu-links');

    // Toggle the menu visibility on mobile
    menuBtn.addEventListener('click', () => {
      menuLinks.classList.toggle('hidden');
    }); 
</script>
</html>