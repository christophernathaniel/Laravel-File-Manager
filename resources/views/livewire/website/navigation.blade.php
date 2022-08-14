<div>

    <div class="website-logo">
        <svg width="57" height="63" viewBox="0 0 57 63" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0655 3.28556H40.6247V27.2202C41.5033 26.4567 42.3141 25.7214 43.0496 25.0213V3.28556V0.860718H40.6247H12.0655H9.64062V3.28556V47.4133C10.4059 47.0758 11.2161 46.6972 12.0655 46.2801V3.28556ZM12.0655 47.9534C11.2211 48.3394 10.4112 48.6889 9.64062 49V60.1347V62.5595H12.0655H40.6247H43.0496V60.1347V27.0675C42.2981 27.779 41.488 28.5135 40.6247 29.2656V60.1347H12.0655V47.9534Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3465 39.7256C30.7733 39.7256 34.362 36.1369 34.362 31.7101C34.362 27.2833 30.7733 23.6947 26.3465 23.6947C21.9197 23.6947 18.3311 27.2833 18.3311 31.7101C18.3311 35.1406 20.4861 38.0678 23.5163 39.2116C26.3462 37.641 28.395 36.217 29.3849 35.0938L31.472 34.4253C31.01 35.796 28.8936 37.645 25.5933 39.6907C25.8412 39.7138 26.0925 39.7256 26.3465 39.7256Z" />
            <circle cx="10.7872" cy="13.7798" r="2.95027" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2589 37.059C41.4894 28.1491 50.8011 18.8269 49.0572 16.2374C47.3133 13.6479 35.1742 18.7717 21.9438 27.6816C8.71332 36.5916 -0.598386 45.9138 1.1455 48.5033C2.88938 51.0928 15.0285 45.969 28.2589 37.059ZM27.4776 35.6613C40.0491 27.1951 49.0925 18.6275 47.6766 16.525C46.2607 14.4225 34.9217 19.5813 22.3501 28.0475C9.77861 36.5137 0.735201 45.0814 2.15111 47.1838C3.56703 49.2863 14.9061 44.1275 27.4776 35.6613Z" />
            <path d="M27.5032 6.35452L28.2288 7.7575L29.7874 8.01404L28.6773 9.13767L28.9149 10.6992L27.5032 9.99067L26.0916 10.6992L26.3292 9.13767L25.2191 8.01404L26.7776 7.7575L27.5032 6.35452Z" />
            <path d="M50.4684 7.55536L50.8312 8.25685L51.6105 8.38512L51.0554 8.94693L51.1743 9.7277L50.4684 9.37343L49.7626 9.7277L49.8814 8.94693L49.3264 8.38512L50.1056 8.25685L50.4684 7.55536Z" />
            <path d="M55.318 29.3084L55.6808 30.0099L56.4601 30.1382L55.9051 30.7L56.0239 31.4808L55.318 31.1265L54.6122 31.4808L54.731 30.7L54.176 30.1382L54.9552 30.0099L55.318 29.3084Z" />
            <path d="M48.6668 41.7021L48.8482 42.0528L49.2379 42.117L48.9603 42.3979L49.0197 42.7883L48.6668 42.6111L48.3139 42.7883L48.3733 42.3979L48.0958 42.117L48.4854 42.0528L48.6668 41.7021Z" />
            <path d="M35.3162 11.1579L35.4976 11.5086L35.8873 11.5727L35.6098 11.8537L35.6692 12.244L35.3162 12.0669L34.9633 12.244L35.0227 11.8537L34.7452 11.5727L35.1348 11.5086L35.3162 11.1579Z" />
            <path d="M23.327 18.7477L23.5084 19.0985L23.898 19.1626L23.6205 19.4435L23.6799 19.8339L23.327 19.6568L22.9741 19.8339L23.0335 19.4435L22.7559 19.1626L23.1456 19.0985L23.327 18.7477Z" />
            <path d="M34.7167 40.5013L35.1867 41.41L36.1962 41.5762L35.4772 42.304L35.6311 43.3154L34.7167 42.8565L33.8024 43.3154L33.9563 42.304L33.2373 41.5762L34.2468 41.41L34.7167 40.5013Z" />
            <path d="M19.8867 53.0296L20.3567 53.9383L21.3661 54.1045L20.6471 54.8323L20.801 55.8437L19.8867 55.3848L18.9723 55.8437L19.1262 54.8323L18.4072 54.1045L19.4167 53.9383L19.8867 53.0296Z" />
        </svg>
        <div class="logo-text">
            <span class="fs-24 fw-400 metropolis">creative</span>
            <span class="fs-24 fw-400 metropolis">nebula</span>
        </div>
    </div>
    <div x-data="{ open: false }">
        <div @click="open = ! open">
            <x-website.atoms.navicon />
        </div>
        <div x-show="open" class="navigation" x-transition @click.outside="open = false">
        <a class="close" @click="open = ! open">
            <svg width="25" height="24" viewBox="0 0 25 24"  xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.98591 0.236816L0.802734 1.42L11.3793 11.9966L0.803212 22.5727L1.98639 23.7559L12.5625 13.1798L23.1386 23.7559L24.3218 22.5727L13.7457 11.9966L24.3223 1.42L23.1391 0.23682L12.5625 10.8134L1.98591 0.236816Z" />
            </svg>
        </a>

            <div class="menu-top-row">
            <ul class="menu-social-items">
                <li>
                    <a href="https://www.facebook.com/creativenebula" target="blank"> {{-- Facebook --}}
                       <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_137_625)"><path d="M35.7822 18.0283C35.7822 8.39545 27.9775 0.590759 18.3447 0.590759C8.71191 0.590759 0.907227 8.39545 0.907227 18.0283C0.907227 26.7315 7.28387 33.9456 15.6201 35.2548V23.069H11.1904V18.0283H15.6201V14.1864C15.6201 9.81646 18.2217 7.40263 22.2063 7.40263C24.1146 7.40263 26.11 7.74295 26.11 7.74295V12.032H23.9107C21.745 12.032 21.0693 13.3764 21.0693 14.7552V18.0283H25.9054L25.132 23.069H21.0693V35.2548C29.4056 33.9456 35.7822 26.7315 35.7822 18.0283Z"/></g>
                        <defs><clipPath id="clip0_137_625"><rect width="36" height="36"  transform="translate(0.344727 0.0282593)"/></clipPath></defs>
                        </svg>
                    </a>
                </li>
                 <li>
                    <a href="https://github.com/christophernathaniel" target="_blank"> {{-- GITHUB --}}
                       <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_137_621)"><path d="M11.3824 26.4181C11.3824 26.5509 11.2294 26.6572 11.0365 26.6572C10.8169 26.6771 10.6639 26.5708 10.6639 26.4181C10.6639 26.2853 10.8169 26.179 11.0098 26.179C11.2094 26.1591 11.3824 26.2654 11.3824 26.4181ZM9.31328 26.1193C9.2667 26.2521 9.39977 26.4048 9.59936 26.4447C9.77235 26.5111 9.97195 26.4447 10.0119 26.3118C10.0518 26.179 9.92537 26.0263 9.72578 25.9665C9.55279 25.9201 9.35985 25.9865 9.31328 26.1193ZM12.254 26.0064C12.0611 26.0529 11.928 26.179 11.948 26.3318C11.9679 26.4646 12.1409 26.5509 12.3405 26.5044C12.5334 26.4579 12.6665 26.3318 12.6465 26.199C12.6266 26.0728 12.4469 25.9865 12.254 26.0064ZM16.6318 0.559509C7.4038 0.559509 0.344727 7.55209 0.344727 16.7626C0.344727 24.1271 4.98868 30.429 11.6219 32.647C12.4736 32.7997 12.773 32.2751 12.773 31.8435C12.773 31.4318 12.753 29.1607 12.753 27.7661C12.753 27.7661 8.09574 28.7622 7.11771 25.7872C7.11771 25.7872 6.35924 23.8548 5.26811 23.3568C5.26811 23.3568 3.74453 22.3142 5.37457 22.3341C5.37457 22.3341 7.03122 22.4669 7.94271 24.0474C9.39977 26.6107 11.8415 25.8736 12.7929 25.4353C12.9459 24.3728 13.3784 23.6357 13.8574 23.1974C10.1383 22.7857 6.38586 22.2478 6.38586 15.8595C6.38586 14.0333 6.8915 13.1169 7.95602 11.9482C7.78303 11.5165 7.21751 9.73685 8.129 7.4392C9.51953 7.00756 12.7197 9.23216 12.7197 9.23216C14.0504 8.86029 15.4808 8.66771 16.898 8.66771C18.3151 8.66771 19.7455 8.86029 21.0762 9.23216C21.0762 9.23216 24.2764 7.00091 25.6669 7.4392C26.5784 9.74349 26.0129 11.5165 25.8399 11.9482C26.9044 13.1236 27.5564 14.04 27.5564 15.8595C27.5564 22.2677 23.6377 22.779 19.9185 23.1974C20.5306 23.722 21.0496 24.7181 21.0496 26.2786C21.0496 28.5165 21.0296 31.2857 21.0296 31.8302C21.0296 32.2618 21.3357 32.7865 22.1806 32.6337C28.8338 30.429 33.3447 24.1271 33.3447 16.7626C33.3447 7.55209 25.8598 0.559509 16.6318 0.559509ZM6.81166 23.463C6.72517 23.5294 6.74513 23.6822 6.85824 23.8083C6.96469 23.9146 7.11771 23.9611 7.2042 23.8747C7.29069 23.8083 7.27074 23.6556 7.15763 23.5294C7.05118 23.4232 6.89815 23.3767 6.81166 23.463ZM6.09311 22.9251C6.04654 23.0115 6.11307 23.1177 6.24614 23.1841C6.35259 23.2505 6.48565 23.2306 6.53223 23.1376C6.5788 23.0513 6.51227 22.9451 6.3792 22.8786C6.24614 22.8388 6.13969 22.8587 6.09311 22.9251ZM8.24876 25.2892C8.14231 25.3755 8.18223 25.5747 8.33525 25.7009C8.48828 25.8536 8.68122 25.8736 8.76771 25.7673C8.8542 25.681 8.81428 25.4818 8.68122 25.3556C8.53485 25.2029 8.33525 25.1829 8.24876 25.2892ZM7.49029 24.313C7.38384 24.3794 7.38384 24.5521 7.49029 24.7048C7.59674 24.8576 7.77638 24.924 7.86287 24.8576C7.96932 24.7712 7.96932 24.5986 7.86287 24.4458C7.76973 24.2931 7.59674 24.2267 7.49029 24.313Z" ></g>
                            <defs><clipPath id="clip0_137_621"><rect width="33" height="34"  transform="translate(0.344727 0.0282593)"/></clipPath></defs>
                        </svg>

                    </a>
                </li>
                 <li>
                    <a href="https://twitter.com/creative_nebula" target="blank"> {{-- Twitter --}}
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_137_623)"><path d="M33.5404 11.6881C33.5639 12.0168 33.5639 12.3455 33.5639 12.6742C33.5639 22.6988 25.9339 34.2496 11.9884 34.2496C7.69208 34.2496 3.70099 33.0053 0.34375 30.8455C0.954178 30.9159 1.54105 30.9394 2.17496 30.9394C5.71995 30.9394 8.98332 29.7421 11.5893 27.6996C8.25554 27.6291 5.46175 25.4457 4.49917 22.4406C4.96875 22.511 5.43826 22.558 5.93133 22.558C6.61214 22.558 7.29303 22.464 7.92687 22.2998C4.45227 21.5954 1.84622 18.5434 1.84622 14.8575V14.7636C2.8557 15.3271 4.02966 15.6792 5.27386 15.7261C3.23134 14.3644 1.8932 12.0402 1.8932 9.41078C1.8932 8.00218 2.26876 6.71094 2.92616 5.58403C6.65904 10.1855 12.2701 13.1906 18.5619 13.5193C18.4446 12.9558 18.3741 12.369 18.3741 11.782C18.3741 7.60306 21.7548 4.19891 25.9572 4.19891C28.1406 4.19891 30.1126 5.11452 31.4978 6.59358C33.2116 6.26492 34.855 5.631 36.3106 4.76237C35.7471 6.52319 34.5498 8.00225 32.9769 8.94127C34.5029 8.77701 35.982 8.35433 37.3436 7.76746C36.3108 9.26994 35.0195 10.6081 33.5404 11.6881V11.6881Z"/></g>
                            <defs><clipPath id="clip0_137_623"><rect width="37" height="37" transform="translate(0.34375 0.724243)"/></clipPath></defs>
                        </svg>
                    </a>
                </li>
                 <li>
                    <a href="https://www.instagram.com/the.creative.nebula" target="blank"> {{-- Instagram --}}
                       <svg width="33" height="37" viewBox="0 0 33 37"  xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_137_627)"><path d="M16.2371 10.7473C11.6943 10.7473 8.02997 14.3543 8.02997 18.8262C8.02997 23.2981 11.6943 26.9051 16.2371 26.9051C20.78 26.9051 24.4443 23.2981 24.4443 18.8262C24.4443 14.3543 20.78 10.7473 16.2371 10.7473ZM16.2371 24.0785C13.3014 24.0785 10.9014 21.7231 10.9014 18.8262C10.9014 15.9293 13.2943 13.5739 16.2371 13.5739C19.18 13.5739 21.5728 15.9293 21.5728 18.8262C21.5728 21.7231 19.1728 24.0785 16.2371 24.0785V24.0785ZM26.6943 10.4168C26.6943 11.4645 25.8371 12.3012 24.78 12.3012C23.7157 12.3012 22.8657 11.4574 22.8657 10.4168C22.8657 9.3762 23.7228 8.53245 24.78 8.53245C25.8371 8.53245 26.6943 9.3762 26.6943 10.4168ZM32.13 12.3293C32.0085 9.8051 31.4228 7.56916 29.5443 5.72698C27.6728 3.88479 25.4014 3.30823 22.8371 3.18167C20.1943 3.03401 12.2728 3.03401 9.62997 3.18167C7.07282 3.3012 4.80139 3.87776 2.92282 5.71995C1.04425 7.56213 0.465681 9.79807 0.337109 12.3223C0.187109 14.9239 0.187109 22.7215 0.337109 25.3231C0.458538 27.8473 1.04425 30.0832 2.92282 31.9254C4.80139 33.7676 7.06568 34.3442 9.62997 34.4707C12.2728 34.6184 20.1943 34.6184 22.8371 34.4707C25.4014 34.3512 27.6728 33.7746 29.5443 31.9254C31.4157 30.0832 32.0014 27.8473 32.13 25.3231C32.28 22.7215 32.28 14.9309 32.13 12.3293V12.3293ZM28.7157 28.1145C28.1585 29.4926 27.08 30.5543 25.6728 31.1098C23.5657 31.9324 18.5657 31.7426 16.2371 31.7426C13.9085 31.7426 8.90139 31.9254 6.80139 31.1098C5.40139 30.5614 4.32282 29.4996 3.75854 28.1145C2.92282 26.0403 3.11568 21.1184 3.11568 18.8262C3.11568 16.534 2.92997 11.6051 3.75854 9.53791C4.31568 8.15979 5.39425 7.09807 6.80139 6.5426C8.90854 5.71995 13.9085 5.90979 16.2371 5.90979C18.5657 5.90979 23.5728 5.72698 25.6728 6.5426C27.0728 7.09104 28.1514 8.15276 28.7157 9.53791C29.5514 11.6121 29.3585 16.534 29.3585 18.8262C29.3585 21.1184 29.5514 26.0473 28.7157 28.1145Z"/></g>
                        <defs><clipPath id="clip0_137_627"><rect width="32" height="36" transform="translate(0.230469 0.833221)"/></clipPath></defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/thecreativenebula" target="blank"> {{-- Pinterest --}}
                        <svg  width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/></svg>
                    </a>
                </li>
            </ul>
            <div class="login-items">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="login-button">
                                <span>Log in</span>
                                <svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_137_629)"><path d="M20.748 2.12201H17.623C16.7603 2.12201 16.0605 2.82172 16.0605 3.68451C16.0605 4.5473 16.7603 5.24701 17.623 5.24701H20.748C21.6108 5.24701 22.3105 5.94672 22.3105 6.80951V19.3095C22.3105 20.1723 21.6108 20.872 20.748 20.872H17.623C16.7603 20.872 16.0605 21.5717 16.0605 22.4345C16.0605 23.2973 16.7603 23.997 17.623 23.997H20.748C23.3369 23.997 25.4355 21.8984 25.4355 19.3095V6.80951C25.4355 4.22064 23.3359 2.12201 20.748 2.12201ZM17.1641 11.956L10.9141 5.70599C10.3032 5.09515 9.31445 5.09613 8.70459 5.70599C8.09424 6.31635 8.09424 7.30511 8.70459 7.91547L12.291 11.497H1.99805C1.13428 11.497 0.435547 12.1953 0.435547 13.0595C0.435547 13.9238 1.13428 14.622 1.99805 14.622H12.291L8.70801 18.205C8.09766 18.8154 8.09766 19.8041 8.70801 20.4145C9.31836 21.0248 10.3071 21.0248 10.9175 20.4145L17.1675 14.1645C17.7744 13.5527 17.7744 12.5663 17.1641 11.956Z" /></g>
                                    <defs><clipPath id="clip0_137_629"><rect width="25" height="25" transform="translate(0.435547 0.559509)"/></clipPath></defs>
                                </svg>

                            </a>

                            {{-- @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif --}}
                        @endauth
                    </div>
                @endif
            </div>

            </div>

            <ul class="menu-items fs-96 roboto fw-600">
                <li><a href="/">Home</a></li>
                <li>
                    <a href="https://christophernathaniel.co.uk" target="_blank">
                        Blog
                        <span class="icon">
                            <svg width="33" height="33" viewBox="0 0 33 33" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_137_634)"><path d="M24.2305 20.5C23.1261 20.5 22.2305 21.3956 22.2305 22.5V28.5H4.23047V10.5H10.2305C11.3348 10.5 12.2305 9.605 12.2305 8.5C12.2305 7.395 11.3348 6.5 10.2305 6.5H4.23047C2.02109 6.5 0.230469 8.29063 0.230469 10.5V28.5C0.230469 30.7088 2.02109 32.5 4.23047 32.5H22.2305C24.4398 32.5 26.2305 30.7088 26.2305 28.5V22.5C26.2305 21.3937 25.3367 20.5 24.2305 20.5ZM30.7305 0.5H22.2305C21.4217 0.5 20.6917 0.987312 20.383 1.73438C20.0724 2.4825 20.2443 3.34188 20.8166 3.91438L23.4055 6.5L10.818 19.0875C10.0367 19.8687 10.0367 21.1344 10.818 21.9156C11.2055 22.3062 11.718 22.5 12.2305 22.5C12.743 22.5 13.2542 22.3047 13.6442 21.9141L26.2305 9.33125L28.8167 11.9175C29.389 12.4888 30.2467 12.6575 30.9967 12.3511C31.743 12.0375 32.2305 11.3062 32.2305 10.5V2C32.2305 1.17125 31.5617 0.5 30.7305 0.5Z"/></g>
                                <defs><clipPath id="clip0_137_634"><rect width="32" height="32"  transform="translate(0.230469 0.5)"/></clipPath></defs>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>

            <div class="menu-persona-options">
                <div class="left metropolis fs-24 fw-400">
                    Persona
                </div>
                <ul class="right">
                     <li>
                        <a href="#" @click="$store.theme.current = 'space'; $store.theme.on()">
                            <span class="toggle" :class="$store.theme.current == 'space' ? 'active' : 'no-active'"></span><span class="title"><span class="metropolis fs-16 fw-100">explorer</span><span class="metropolis fs-24 fw-400">developer</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" @click="$store.theme.current = 'ocean'; $store.theme.on()">
                            <span class="toggle" :class="$store.theme.current == 'ocean' ? 'active' : 'no-active'"></span><span class="title"><span class="metropolis fs-16 fw-100">navigator</span><span class="metropolis fs-24 fw-400">designer</span></span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="menu-darkmode-options">
                <div class="left metropolis fs-24 fw-400">
                    Dark mode
                </div>
                <ul class="right">
                     <li>
                        <a href="#" @click="$store.darkMode.current = false; $store.darkMode.on()">
                            <span class="toggle"  :class="$store.darkMode.current == false ? 'active' : 'no-active'"></span><span class="title"><span class="metropolis fs-16 fw-100">day</span><span class="metropolis fs-24 fw-400">light</span></span>
                        </a>
                         
                    </li>
                    <li>
                        <a href="#" @click="$store.darkMode.current = true; $store.darkMode.on()">
                            <span class="toggle"  :class="$store.darkMode.current == true ? 'active' : 'no-active'"></span><span class="title"><span class="metropolis fs-16 fw-100">night</span><span class="metropolis fs-24 fw-400">dark</span></span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="menu-credits">
                <div x-data>
                    <div @click="$store.setupModal.current = true; $store.setupModal.progress = 0;">Open Setup</div>
                </div>
                <p>Copyright creativenebula.co.uk. Creative & Build by Christopher Nathaniel.   </p>
                <p>Built using Laravel 9, Jetstream, Livewire, AlpineJS, Tailwind and Intly.JS. <br> Served using Laravel Forge, Digital Ocean & Cloudflare.</p>
            
            </div>

             {{-- Light / Dark Switcher --}}
            {{-- <div x-data>
                <label class="switch" >
                    <span class="slider round" :class="$store.darkMode.current ? 'active' : 'inactive'" @click="$store.darkMode.current = !$store.darkMode.current; $store.darkMode.on()" ></span>   
                </label>
                <span x-text="$store.darkMode.current"></span>   
            </div> --}}

            {{-- <div x-data>
                <div @click="$store.setupModal.current = true; $store.setupModal.progress = 0;">Open Setup</div>
            </div> --}}


            
        </div>
    </div>

  


    {{-- Theme Switcher --}}
    <x-website.components.theme-switcher />
   

    {{-- <div x-data>
         <p x-show="$store.theme.current === 'space'">Space Content</p>
         <p x-show="$store.theme.current === 'ocean'">Ocean Content</p>
         <p x-show="$store.theme.current === 'clean'">Clean Content</p>
    </div> --}}





   
    {{-- <div x-data="{ darkMode: $persist(true) }">
    <label class="switch" >
        <input type="checkbox" checked="{ darkMode }" @click="$store.darkMode.toggle()" >
        <span class="slider round"></span>
    </label>
    <span x-text="darkMode"></span>   
    </div> --}}


</div>
