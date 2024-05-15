<?php
include "includes/discord.inc.php";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="max-w-screen px-1">

  <div class="overflow-hidden">
  <svg viewBox="0 0 814 834" width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 z-0">
    <g filter="url(#filter0_f_104_157)">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M295.115 59.1601C344.418 64.1227 399.334 40.4798 441.012 67.2809C482.661 94.0626 488.246 151.559 508.835 196.591C527.488 237.392 545.396 276.528 556.545 319.983C570.739 375.303 618.533 441.446 583.159 486.285C545.494 534.028 461.66 487.789 405.59 511.331C359.85 530.535 342.527 592.628 295.115 607.223C243.654 623.064 186.93 613.909 136.883 594.048C82.7959 572.583 15.6167 546.343 0.266022 490.214C-15.9307 430.991 59.9401 381.348 61.9299 319.983C63.8166 261.798 -2.69996 212.564 11.1028 156.008C24.7487 100.095 76.7396 54.6731 131.214 36.0975C184.338 17.982 239.269 53.5388 295.115 59.1601Z"
        fill="url(#paint0_linear_104_157)" fill-opacity="0.5" />
    </g>
    <defs>
      <filter id="filter0_f_104_157" x="-220" y="-187" width="1033.94" height="1020.28" filterUnits="userSpaceOnUse"
        color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix" />
        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
        <feGaussianBlur stdDeviation="109" result="effect1_foregroundBlur_104_157" />
      </filter>
      <linearGradient id="paint0_linear_104_157" x1="-269.581" y1="326.139" x2="286.88" y2="895.603"
        gradientUnits="userSpaceOnUse">
        <stop stop-color="#F5D6FA" />
        <stop offset="1" stop-color="#E6E0FE" />
      </linearGradient>
    </defs>
  </svg>
  </div>

  <div class="absolute left-0 top-0 z-10 sm:z-50 w-full">
    <header class="container mx-auto mt-4">
      <?php
      include "includes/ui/menu.inc.php";
      ?>
    </header>
    <section class="mt-32">
      <h1
        class="text-center text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-black font-bold w-3/4 lg:w-1/2 mx-auto"
        id="title"></h1>
      <p class="text-xl text-center mt-8">
        Leer en creeër samen, ongeacht je ervaring.<br />Met al
        <?=getdiscorduseramount()?> Discord leden.
      </p>
      <div class="text-center mt-6 flex justify-center gap-2">
        <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-slate-900 text-white hover:bg-slate-700 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900"
          variant="solid" color="slate" href="https://discord.com/invite/jsz7uV4JMz" target="_blank"><svg
            class="h-5 sm:mr-2" viewBox="0 -28.5 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
            <g>
              <path
                d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z"
                fill="#5865F2" fill-rule="nonzero"></path>
            </g>
          </svg><span class="hidden sm:block">Join Onze Discord</span></a>
        <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-slate-900 text-white hover:bg-slate-700 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900"
          variant="solid" color="slate" href="https://www.youtube.com/@JairEmanuels" target="_blank"><svg
            class="h-5 sm:mr-2" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 461.001 461.001" xml:space="preserve">
            <g>
              <path style="fill: #f61c0d"
                d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
                           c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
                           C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
                           c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z" />
            </g>
          </svg><span class="hidden sm:block">Aboneer Op Youtube</span></a>
      </div>
    </section>
  </div>
  </div>

  <div class="h-screen"></div>
  <?php
  include "sections/projecten.php";
  ?>

  <script src="/assets/js/typewrite.js"></script>
  <script src="/assets/js/script.js"></script>
</body>

</html>
