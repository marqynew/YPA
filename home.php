<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Menghitung Mimpi - YPA</title>

    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <div
      id="root"
      class="bg-slate-100 dark:bg-slate-900 font-body text-black dark:text-white"
    >
      <div
        class="bg-white w-[90%] mx-auto p-4 sm:p-6 dark:bg-slate-800 min-h-screen relative"
      >
        <div
          class="grid grid-cols-12 border-b items-center border-slate-300 dark:border-slate-700 pb-6 pr-2"
        >
          <div class="col-span-10 text-left">
            <h1 class="font-black">Menghitung Mimpi</h1>
          </div>
        </div>

        <div
          class="bg-primary-500 rounded-md px-4 py-6 grid grid-cols-12 items-center dark:bg-primary-300 my-4 sm:my-6"
        >
          <div class="col-span-9">
            <p class="font-bold text-sm sm:text-lg dark:text-slate-700">
              Hi, Kami
            </p>
            <h1 class="font-bold text-sm sm:text-lg mb-1 dark:text-slate-700">
              Kelompok YPA
            </h1>
            <p class="text-xxs text-slate-800 sm:text-sm dark:text-slate-900">
              Investment &amp; Pengusaha di Industri Keuangan dan Investasi.
            </p>
          </div>
          <div class="col-span-3 text-center -mt-4">
            <img src="YPA.png" class="mx-auto" />
          </div>
        </div>

        <div class="my-12 sm:my-16">
          <h3 class="font-bold sm:text-lg mb-8">Apa Mimpimu?</h3>
          <div class="grid grid-cols-3 gap-x-4 gap-y-12">
            <a href="kalkulatorinvestasi.html" class="text-center group">
              <div
                class="relative transition-colors bg-primary-500 dark:bg-primary-300 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md"
              >
                <img
                  src="calculator.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
              </div>
              <div class="font-bold text-xs sm:text-sm mt-1.5">
                Kalkulator Investasi
              </div>
            </a>
            <a href="menikah.html" class="text-center group">
              <div
                class="relative transition-colors bg-primary-500 dark:bg-primary-300 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md"
              >
                <img
                  src="wedding-rings.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
              </div>
              <div class="font-bold text-xs sm:text-sm mt-1.5">Menikah</div>
            </a>
            <a href="danapensiun.html" class="text-center group">
              <div
                class="relative transition-colors bg-primary-500 dark:bg-primary-300 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md"
              >
                <img
                  src="pension.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
              </div>
              <div class="font-bold text-xs sm:text-sm mt-1.5">
                Dana Pensiun
              </div>
            </a>
          </div>
        </div>

        <footer
          class="w-full mt-12 grid grid-cols-12 gap-4 items-center border-t border-slate-300 py-6 dark:border-slate-700"
        >
          <div
            class="text-xs font-medium col-span-12 text-center sm:text-left sm:col-span-9"
          >
            <span class="dark:text-white">
              © 2023
              <a href="//instagram.com/feliciaputritjiasaka" class="underline"
                >YangPentingAda(YPA)</a
              >. All Right Reserved.
            </span>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>