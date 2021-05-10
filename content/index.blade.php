@extends('_includes.base')

@section('body')
  <!-- Section 1 -->
  <section class="w-full px-6 pb-12 antialiased bg-white">
    <div class="mx-auto max-w-7xl">
      @include('_includes.nav')

      <!-- Main Hero Content -->
      <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
        <h1
          class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl">
          <span class="inline md:block">Let's Craft Your</span> <span
            class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Next
            Great Idea</span>
        </h1>
        <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Simplifying the creation of
          landing pages, blog pages, application pages and so much more!</div>
        <div class="flex flex-col items-center mt-12 text-center">
          <span class="relative inline-flex w-full md:w-auto">
            <a href="#_" type="button"
              class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
              Reach Out
            </a>
          </span>
        </div>
      </div>
      <!-- End Main Hero Content -->

    </div>
  </section>


  <!-- Section 2 -->
  <section class="px-2 py-32 bg-white md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
      <div class="flex flex-wrap items-center sm:-mx-3">
        <div class="w-full md:w-1/2 md:px-3">
          <div
            class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
            <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">Beautiful Pages to</span>
              <span class="block text-indigo-600 xl:inline">Tell Your Story!</span>
            </h1>
            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been easier to build
              beautiful websites that convey your message and tell your story.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
            <img src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Section 3 -->
<section class="flex items-center justify-center py-10 text-white bg-white sm:py-16 md:py-24 lg:py-32">
  <div class="relative max-w-3xl px-10 text-center text-white auto lg:px-0">
      <div class="flex flex-col w-full md:flex-row">

          <!-- Top Text -->
          <div class="flex justify-between">
              <h1 class="relative flex flex-col text-6xl font-extrabold text-left text-black">
                  Crafting
                  <span>Powerful</span>
                  <span>Experiences</span>
              </h1>
          </div>
          <!-- Right Image -->
          <div class="relative top-0 right-0 h-64 mt-12 md:-mt-16 md:absolute md:h-96">
              <img src="https://cdn.devdojo.com/images/december2020/designs3d.png" class="object-cover mt-3 mr-5 h-80 lg:h-96">
          </div>
      </div>

      <!-- Separator -->
      <div class="my-16 border-b border-gray-300 lg:my-24"></div>

      <!-- Bottom Text -->
      <h2 class="text-left text-gray-500 xl:text-xl">
          Building beautiful designs for your next project.
      </h2>
  </div>
</section>
@stop
