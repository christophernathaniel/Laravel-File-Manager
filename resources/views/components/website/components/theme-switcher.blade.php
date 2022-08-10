<div x-data>
    <div x-show="$store.setupModal.current === true">
      <div class="theme-switcher-modal">
        <div @click="$store.setupModal.current = false">Close Setup</div>
        <div x-show="$store.setupModal.progress === 0" class="single-view" @click.outside="$store.setupModal.current = false">

              <div class="title-block metropolis-thin">
                <h2 class="fw-100 fs-96">Profile</h2>
                <p class="fw-100 fs-32">Select your experience</p>
              </div>
            
              <div x-data class="choice-group">
                <div @click="$store.theme.current = 'space'; $store.theme.on()"><span class="preview" :class="$store.theme.current == 'space' ? 'highlight' : 'no-highlight'"></span><span class="name">Space</span></div>
                <div @click="$store.theme.current = 'ocean'; $store.theme.on()"><span class="preview" :class="$store.theme.current == 'ocean' ? 'highlight' : 'no-highlight'"></span><span class="name">Ocean</span></div>
                <div @click="$store.theme.current = 'clean'; $store.theme.on()"><span class="preview"  :class="$store.theme.current == 'clean' ? 'highlight' : 'no-highlight'"></span><span class="name">Clean</span></div>
              </div>

            <div class="next btn" @click="$store.setupModal.progress = 1;">
                Next
            </div> 
        </div>
        <div x-show="$store.setupModal.progress === 1" class="single-view" @click.outside="$store.setupModal.current = false">

              <div class="title-block metropolis-thin">
                <h2 class="fw-100 fs-96">Profile</h2>
                <p class="fw-100 fs-32">Light or Dark, Day or Night</p>
              </div>

              <div x-data class="choice-group">
                <div  @click="$store.darkMode.current = false; $store.darkMode.on()"><span :class="$store.darkMode.current == false ? 'highlight' : 'no-highlight'" class="preview"></span><span class="name">Light</span></div>
                <div @click="$store.darkMode.current = true; $store.darkMode.on()"><span :class="$store.darkMode.current == true ? 'highlight' : 'no-highlight'" class="preview"></span><span class="name">Dark</span></div>
              </div>

            <div class="back btn" @click="$store.setupModal.progress = 0;">
                Back
            </div> 

            <div class="next btn" @click="$store.setupModal.current = false">
                Complete
            </div> 
            
        </div>
    </div>
  </div>
</div>

