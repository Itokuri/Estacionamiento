<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamiento</title>
    <link rel="stylesheet" href="styles/CSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-color: #e8eddf;">
    <!-- Menu lateral -->
    <div class="menuLateral">
        <a href="agregarVehiculo.php" class="botonLateral" style="margin-top: 300px;" data-bs-toggle="tooltip" data-bs-placement="right" title="Agregar vehiculo">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="margin-top: 300px;">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
            </svg>
        </a>
        <a href="verVehiculos.php" class="botonLateral" style="margin-top: 40px;" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver vehiculos ingresados">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-list" viewBox="0 0 16 16" style="margin-top: 40px;" >
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </a>

        <!-- Estrella boluda -->
        <svg width="40px" height="40px" viewBox="0 0 121 121" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: 325px; margin-left: 5px">
            <style>
              #Star_Frame {
                transform-origin: 22% bottom;
                transform-box: fill-box;
                cursor: pointer;
                animation: none 1000ms ease-in-out;
              }
          
              #Star_Frame:active {
                opacity: .95;
              }
          
              #Star_Frame:focus {
                outline: none;
              }
          
              #Star_Frame:focus-visible #Star path {
                stroke-width: 1px;
                stroke: skyblue;
              }
          
              .starRight {
                animation-name: starWalkRight !important;
              }
          
              .starLeft {
                animation-name: starWalkLeft !important;
              }
          
              #Eye_Left,
              #Eye_Right {
                transform-origin: center bottom;
                transform-box: fill-box;
                animation: eyeBlink 2000ms linear infinite;
              }
          
              @keyframes eyeBlink {
                0% {
                  transform: scale(1, 1);
                }
          
                31% {
                  transform: scale(1, 1);
                }
          
                35% {
                  transform: scale(2, 0.05);
                }
          
                39% {
                  transform: scale(2, 0.05);
                }
          
                43% {
                  transform: scale(0.7, 1.2);
                }
          
                47% {
                  transform: scale(1, 1);
                }
          
                71% {
                  transform: scale(1, 1);
                }
          
                75% {
                  transform: scale(2, 0.05);
                }
          
                79% {
                  transform: scale(2, 0.05);
                }
          
                83% {
                  transform: scale(0.7, 1.2);
                }
          
                87% {
                  transform: scale(1, 1);
                }
          
                100% {
                  transform: scale(1, 1);
                }
              }
          
              @keyframes starWalkLeft {
                0% {
                  transform: scale(1, 1) rotate(0);
                  transform-origin: 22% bottom;
                }
          
                20% {
                  transform: scale(0.97, 1.02) rotate(-6deg);
                  transform-origin: 22% bottom;
                }
          
                50% {
                  transform: scale(1.02, 0.97) rotate(0);
                  transform-origin: 22% bottom;
                }
          
                70% {
                  transform: scale(0.99, 1.01) rotate(0);
                  transform-origin: 22% bottom;
                }
          
                90% {
                  transform: scale(1, 1) rotate(0);
                  transform-origin: 22% bottom;
                }
          
                100% {
                  transform: scale(1, 1) rotate(0);
                  transform-origin: 22% bottom;
                }
              }
          
              @keyframes starWalkRight {
                0% {
                  transform: scale(1, 1) rotate(0);
                  transform-origin: 78% bottom;
                }
          
                20% {
                  transform: scale(0.97, 1.02) rotate(6deg);
                  transform-origin: 78% bottom;
                }
          
                50% {
                  transform: scale(1.02, 0.97) rotate(0);
                  transform-origin: 78% bottom;
                }
          
                70% {
                  transform: scale(0.99, 1.01) rotate(0);
                  transform-origin: 78% bottom;
                }
          
                90% {
                  transform: scale(1, 1) rotate(0);
                  transform-origin: 78% bottom;
                }
          
                100% {
                  transform: scale(1, 1) rotate(0);
                  transform-origin: 78% bottom;
                }
              }
            </style>
            <script>
              function starFunc() {
                document.getElementById("Star_Frame").classList.toggle("starLeft");
                document.getElementById("Star_Frame").classList.toggle("starRight");
              }
            </script>
            <g id="Star_Frame" class="starLeft" onclick="starFunc();" onkeypress="starFunc();" tabindex="0">
              <g id="Star" filter="url(#filter0_i_36_28)">
                <path d="M57.6669 10.0235C59.2492 7.63884 62.7508 7.63884 64.3331 10.0236L80.9836 35.1188C81.5151 35.9199 82.3173 36.5028 83.2434 36.7607L112.256 44.8414C115.013 45.6093 116.095 48.9396 114.316 51.1813L95.5939 74.7717C94.9963 75.5248 94.6899 76.4678 94.7308 77.4283L96.0109 107.518C96.1325 110.377 93.2996 112.435 90.6178 111.436L62.3966 100.92C61.4958 100.585 60.5042 100.585 59.6034 100.92L31.3822 111.436C28.7004 112.435 25.8675 110.377 25.9891 107.518L27.2692 77.4283C27.3101 76.4678 27.0037 75.5248 26.4061 74.7717L7.68431 51.1813C5.90525 48.9396 6.98733 45.6093 9.74427 44.8414L38.7566 36.7607C39.6827 36.5028 40.4849 35.9199 41.0164 35.1188L57.6669 10.0235Z" fill="url(#paint0_linear_36_28)" />
              </g>
              <g id="Glow" opacity="0.8" filter="url(#filter1_f_36_28)">
                <path d="M57.6669 27.0236C59.2492 24.6388 62.7508 24.6388 64.3331 27.0236L75.0881 43.2333C75.6196 44.0344 76.4218 44.6172 77.3479 44.8751L96.0878 50.0947C98.8447 50.8626 99.9268 54.1929 98.1477 56.4346L86.0548 71.6723C85.4572 72.4253 85.1508 73.3684 85.1917 74.3289L86.0185 93.7645C86.1402 96.6237 83.3072 98.682 80.6255 97.6827L62.3967 90.8904C61.4958 90.5547 60.5042 90.5547 59.6033 90.8904L41.3745 97.6827C38.6928 98.682 35.8598 96.6237 35.9815 93.7645L36.8083 74.3289C36.8492 73.3684 36.5428 72.4253 35.9452 71.6723L23.8523 56.4346C22.0732 54.1929 23.1553 50.8626 25.9122 50.0947L44.6521 44.8751C45.5782 44.6172 46.3804 44.0344 46.9119 43.2333L57.6669 27.0236Z" fill="white" />
              </g>
              <g id="Eyes">
                <g id="Eye_Left" filter="url(#filter2_d_36_28)">
                  <rect id="Base_eye" x="53" y="49" width="4" height="16" rx="2" fill="#333333" />
                  <rect id="Glow_eye" x="55" y="51" width="1" height="6" rx="0.5" fill="#FEFEFE" />
                </g>
                <g id="Eye_Right" filter="url(#filter3_d_36_28)">
                  <rect id="Base_eye_2" x="65" y="49" width="4" height="16" rx="2" fill="#333333" />
                  <rect id="Glow_eye_2" x="67" y="51" width="1" height="6" rx="0.5" fill="#FEFEFE" />
                </g>
              </g>
            </g>
            <defs>
              <filter id="filter0_i_36_28" x="6.81503" y="0.235016" width="112.37" height="111.457" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                <feOffset dx="4" dy="-8" />
                <feGaussianBlur stdDeviation="6" />
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_36_28" />
              </filter>
              <filter id="filter1_f_36_28" x="-1.017" y="1.23502" width="124.034" height="120.704" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="12" result="effect1_foregroundBlur_36_28" />
              </filter>
              <filter id="filter2_d_36_28" x="50" y="46" width="10" height="22" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                <feOffset />
                <feGaussianBlur stdDeviation="1.5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_36_28" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_36_28" result="shape" />
              </filter>
              <filter id="filter3_d_36_28" x="62" y="46" width="10" height="22" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                <feOffset />
                <feGaussianBlur stdDeviation="1.5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_36_28" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_36_28" result="shape" />
              </filter>
              <linearGradient id="paint0_linear_36_28" x1="61" y1="5" x2="61" y2="125" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFD12D" />
                <stop offset="1" stop-color="#FF9900" />
              </linearGradient>
              <clipPath id="clip0_36_28">
                <rect width="121" height="121" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <!-- Fin de estrella boluda-->
    </div> 
    <!-- Final del menu lateral-->
</body>
</html>