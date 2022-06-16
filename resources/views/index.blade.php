<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>AMN-Monitoring</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="karim kompissi" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

      html {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
  </head>

  <body class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed" style="background-image: url('homepage/header.png');">
    <div class="h-full">
      <!--Nav-->
      <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
          <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            AMN&dash;<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Monitoring</span>
          </a>
        </div>
      </div>

      <!--Main-->
      <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
            Welcome to
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
              AMN Mnitoring
            </span>
            Choose your service to log in.
          </h1>
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
          <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="homepage/monitoring.png" />
        </div>

        <div class="mx-auto md:pt-16">
          <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
            Choose your service.
          </p>
          <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
            {{-- <img src="homepage/App Store.svg" class="h-12 pr-12 transform hover:scale-125 duration-300 ease-in-out" /> --}}
            <button type="button" class="inline-block px-6 py-2.5 h-12 pr-12 transform hover:scale-125 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-300 ease-in-out"> <a href="{{ route('login') }}"> RollUp </a> </button>
            {{-- <img src="homepage/Play Store.svg" class="h-12 transform hover:scale-125 duration-300 ease-in-out" /> --}}
            <button type="button" class="inline-block px-6 py-2.5 h-12 pr-12 transform hover:scale-125 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-300 ease-in-out"><a href="{{ route('login') }}"> MFO </a></button>
          </div>
        </div>

        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
          <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; AMN&dash;Monitoring 2022</a>
        </div>
      </div>
    </div>
  </body>
</html>
