<div x-data>
   
      <div class="theme-switcher-modal"   x-show="$store.setupModal.current === true"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-90"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-90">
        {{-- <div @click="$store.setupModal.current = false">Close Setup</div> --}}
        <div x-show="$store.setupModal.progress === 0" class="single-view" @click.outside="$store.setupModal.current = false">

              {{-- <div class="title-block roboto">
                <h2 class="fw-100 fs-96">Profile</h2>
                <p class="fw-100 fs-32">Select your experience</p>
              </div>
             --}}
            <div class="setup-logo">
             <svg width="57" height="63" viewBox="0 0 57 63" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9637 3.05668H40.5229V26.9914C41.4015 26.2278 42.2123 25.4925 42.9478 24.7924V3.05668V0.631836H40.5229H11.9637H9.53882V3.05668V47.1845C10.3041 46.8469 11.1143 46.4683 11.9637 46.0512V3.05668ZM11.9637 47.7246C11.1193 48.1105 10.3094 48.46 9.53882 48.7711V59.9058V62.3306H11.9637H40.5229H42.9478V59.9058V26.8386C42.1963 27.5501 41.3862 28.2846 40.5229 29.0368V59.9058H11.9637V47.7246Z" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M26.2447 39.4967C30.6715 39.4967 34.2602 35.9081 34.2602 31.4813C34.2602 27.0545 30.6715 23.4658 26.2447 23.4658C21.8179 23.4658 18.2292 27.0545 18.2292 31.4813C18.2292 34.9118 20.3843 37.8389 23.4145 38.9827C26.2444 37.4121 28.2931 35.9881 29.2831 34.8649L31.3702 34.1964C30.9082 35.5672 28.7918 37.4162 25.4915 39.4618C25.7394 39.4849 25.9907 39.4967 26.2447 39.4967Z" />
              <circle cx="10.6846" cy="13.5509" r="2.95027" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M28.1569 36.8299C41.3873 27.92 50.699 18.5978 48.9552 16.0083C47.2113 13.4188 35.0722 18.5426 21.8417 27.4525C8.61127 36.3625 -0.700437 45.6847 1.04345 48.2742C2.78733 50.8637 14.9264 45.7399 28.1569 36.8299ZM27.3756 35.4322C39.9471 26.966 48.9905 18.3984 47.5746 16.2959C46.1587 14.1934 34.8196 19.3522 22.2481 27.8184C9.67656 36.2846 0.63315 44.8523 2.04906 46.9548C3.46497 49.0572 14.804 43.8984 27.3756 35.4322Z" />
              <path d="M27.4009 6.12549L28.1265 7.52847L29.6851 7.78501L28.575 8.90864L28.8126 10.4702L27.4009 9.76163L25.9893 10.4702L26.2269 8.90864L25.1168 7.78501L26.6753 7.52847L27.4009 6.12549Z" />
              <path d="M50.3659 7.32666L50.7287 8.02815L51.5079 8.15642L50.9529 8.71824L51.0717 9.499L50.3659 9.14473L49.66 9.499L49.7789 8.71824L49.2238 8.15642L50.0031 8.02815L50.3659 7.32666Z" />
              <path d="M55.2157 29.0796L55.5785 29.7811L56.3578 29.9094L55.8028 30.4712L55.9216 31.2519L55.2157 30.8977L54.5099 31.2519L54.6287 30.4712L54.0737 29.9094L54.8529 29.7811L55.2157 29.0796Z" />
              <path d="M48.5648 41.4731L48.7462 41.8239L49.1358 41.888L48.8583 42.1689L48.9177 42.5593L48.5648 42.3822L48.2119 42.5593L48.2713 42.1689L47.9937 41.888L48.3834 41.8239L48.5648 41.4731Z" />
              <path d="M35.2147 10.9292L35.3961 11.2799L35.7857 11.3441L35.5082 11.625L35.5676 12.0154L35.2147 11.8382L34.8618 12.0154L34.9212 11.625L34.6436 11.3441L35.0333 11.2799L35.2147 10.9292Z" />
              <path d="M23.2252 18.519L23.4066 18.8698L23.7962 18.9339L23.5187 19.2148L23.5781 19.6052L23.2252 19.4281L22.8723 19.6052L22.9317 19.2148L22.6541 18.9339L23.0438 18.8698L23.2252 18.519Z" />
              <path d="M34.6142 40.2725L35.0842 41.1812L36.0937 41.3474L35.3747 42.0752L35.5286 43.0866L34.6142 42.6277L33.6998 43.0866L33.8538 42.0752L33.1347 41.3474L34.1442 41.1812L34.6142 40.2725Z" />
              <path d="M19.7844 52.8008L20.2544 53.7095L21.2639 53.8757L20.5448 54.6035L20.6987 55.6149L19.7844 55.156L18.87 55.6149L19.0239 54.6035L18.3049 53.8757L19.3144 53.7095L19.7844 52.8008Z" />
            </svg>
            </div>


               <h2 class="fs-96 roboto fw-600 first">Select your experience</h2>

              <div x-data class="choice-group">
                <div class="space-choice" @click="$store.theme.current = 'space'; $store.theme.on()"><span class="preview" :class="$store.theme.current == 'space' ? 'preview-active' : 'preview-inactive'"></span> <span class="item-group"><span class="toggle" :class="$store.theme.current == 'space' ? 'active' : 'no-active'"></span><span class="title"><span class="metropolis fs-16 fw-100">explorer</span><span class="metropolis fs-24 fw-400">developer</span></span></span></div>
                <div class="ocean-choice" @click="$store.theme.current = 'ocean'; $store.theme.on()"><span class="preview" :class="$store.theme.current == 'ocean' ? 'preview-active' : 'preview-ianctive'"></span> <span class="item-group"><span class="toggle" :class="$store.theme.current == 'ocean' ? 'active' : 'no-active'"></span><span class="title"><span class="metropolis fs-16 fw-100">navigator</span><span class="metropolis fs-24 fw-400">designer</span></span></span></div>
              </div>

              <div x-data class="choice-group">
                
                 <div href="#" @click="$store.darkMode.current = false; $store.darkMode.on()">
                 <span class="item-group">
                    <span class="toggle"  :class="$store.darkMode.current == false ? 'active' : 'no-active'"></span>
                    <span class="title"><span class="metropolis fs-16 fw-100">day</span><span class="metropolis fs-24 fw-400">light</span></span>
                  </span>
                </div>

                <div href="#" @click="$store.darkMode.current = true; $store.darkMode.on()">
                <span class="item-group">
                  <span class="toggle"  :class="$store.darkMode.current == true ? 'active' : 'no-active'"></span>
                  <span class="title"><span class="metropolis fs-16 fw-100">night</span><span class="metropolis fs-24 fw-400">dark</span></span>
                  </span>
                </div>
              </div>


              <div class="next btn" @click="$store.setupModal.current = false">
                Complete
            </div> 
        </div>
       
    </div>

</div>

