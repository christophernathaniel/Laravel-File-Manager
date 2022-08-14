<x-website-layout>
    <div class="parent-frame">
        <section class="block--0001 view-frame window-width can-intersect" scroll-point>
      
            <div x-data class="title-space" x-show="$store.theme.current === 'space'">
                <h1 class="hidden">Epic Possibility</h1>
                <div class="fs-460 roboto fw-600 first can-parallax parallax-one">epic</div>
                <div class="fs-460 roboto fw-600 second can-parallax parallax-two">Possibility</div>
             </div>

             <div x-data class="title-space" x-show="$store.theme.current === 'ocean'">
                <h1 class="hidden">Totally Immersed</h1>
                <div class="fs-460 roboto fw-600 first can-parallax parallax-one">totally</div>
                <div class="fs-460 roboto fw-600 second can-parallax parallax-two">immersed</div>
             </div>

             <div class="triangle">
               
             </div>
              <div class="man"></div>
            <footer><div class="fs-24 fw-400 metropolis">developing.</div><div class="fs-24 fw-400 metropolis">designing.</div></footer>
        </section>
        <section class="block--0002 view-frame window-width" scroll-point>

            <div x-data class="title-space" x-show="$store.theme.current === 'space'">
                <h2 class="fs-96 roboto fw-600 first">Space your creativity</h2>
                <p class="fs-16 metropolis-thin fw-100 second">We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.</p>
             </div>

             <div x-data class="title-space" x-show="$store.theme.current === 'ocean'">
                <h2 class="fs-96 roboto fw-600 first">Oceanic difference</h2>
                <p class="fs-16 metropolis-thin fw-100 second">We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.</p>
             </div>

              <footer><div class="fs-24 fw-400 metropolis">creating.</div><div class="fs-24 fw-400 metropolis">programming.</div></footer>
        </section>
        <section class="block--0003 view-frame window-width can-intersect" scroll-point>
              <div class="title-space"  x-data x-show="$store.theme.current === 'space'">
                <h2 class="fs-96 roboto fw-600 first">Lift off.</h2>
                <p class="fs-16 metropolis-thin fw-100 second">We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.</p>
              </div>

               <div class="title-space"  x-data x-show="$store.theme.current === 'ocean'">
                <h2 class="fs-96 roboto fw-600 first">In depth.</h2>
                <p class="fs-16 metropolis-thin fw-100 second">We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.</p>
              </div>

                <div class="phone-view one can-parallax parallax-three">
                    <div class="frame"></div>
                </div>
                <div class="phone-view two can-parallax parallax-four">
                     <div class="frame"></div>
                    <div class="code-block-1"></div>
                    <div class="code-block-2"></div>
                    <div class="code-block-3"></div>
                </div>
                <div class="phone-view three can-parallax parallax-five">
                    <div class="frame"></div>
                    <div class="phone-view-bg"></div>
                    <div class="code-block-1"></div>
                    <div class="code-block-2"></div>
                    <div class="code-block-3"></div>
                </div>
              <footer><div class="fs-24 fw-400 metropolis">creating.</div><div class="fs-24 fw-400 metropolis">programming.</div></footer>
        </section>
        <section class="block--0004 view-frame window-width can-intersect" scroll-point>
              <div class="title-space">
                    <div class="alien-spaceship can-parallax parallax-six" x-data x-show="$store.theme.current === 'space'">
                        <div class="speed-group">
                            <div class="speed1"></div>
                            <div class="speed2"></div>
                            <div class="speed3"></div>
                            <div class="speed4"></div>
                        </div>
                    </div>
                </div>
                <div class="title-space">
                    <div class="alien-spaceship can-parallax parallax-six" x-data x-show="$store.theme.current === 'space'">
                        <div class="speed-group">
                            <div class="speed1"></div>
                            <div class="speed2"></div>
                            <div class="speed3"></div>
                            <div class="speed4"></div>
                        </div>
                    </div>
                     <div class="soundWave-container can-parallax parallax-seven" x-data x-show="$store.theme.current === 'ocean'">
                       
                       @for ($i = 0; $i < 100; $i++)
                            <div class="soundWave wave{{$i}}"></div>
                       @endfor
                      
                    </div>
                </div>
                    <div  class="title-space" x-data x-show="$store.theme.current === 'space'">
                        <h2 class="fs-96 roboto fw-600 first">At the speed of light.</h2>
                        <p class="fs-32 metropolis-thin fw-100 second">We believe having headspace to achieve your creative goals... Having worked with clients.</p>
                        <p class="fs-16 metropolis-thin fw-100 third">We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.</p>
                        
                    </div>
                    <div  class="title-space" x-data x-show="$store.theme.current === 'ocean'">
                        <h2 class="fs-96 roboto fw-600 first">At the speed of sound.</h2>
                        <p class="fs-32 metropolis-thin fw-100 second">We believe having headspace to achieve your creative goals... Having worked with clients.</p>
                        <p class="fs-16 metropolis-thin fw-100 third">We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.</p>
                    </div>
              
              <footer><div class="fs-24 fw-400 metropolis">creating.</div><div class="fs-24 fw-400 metropolis">programming.</div></footer>
        </section>
        <section class="block--0005 view-frame window-width" scroll-point>
            <div class="left">
                <div class="section-space-1 section-space">
                    <h2 class="fs-96 roboto fw-600">Development</h2>
                    <p class="fs-16 metropolis">Donec ut diam sed nisi pulvinar faucibus. Praesent non enim sagittis, faucibus ex sed, sodales nisl. Duis sagittis convallis turpis sit amet auctor. Integer rutrum odio aliquam risus vehicula tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla congue fermentum. Cras tristique ex vitae semper faucibus. Aenean leo nibh, gravida pretium urna sodales, vestibulum congue metus. Sed tempor libero enim, id interdum urna tempus ut. Fusce dapibus enim sapien, sed accumsan dui tempus et. Fusce ornare erat eu accumsan aliquet. Praesent vel urna pretium, gravida urna sed, pulvinar enim. Phasellus eros felis, hendrerit quis augue at, tincidunt viverra velit.</p>
                </div>
            </div>
            <div class="right">
                <div class="section-space-2 section-space">
                    <h2 class="fs-96 roboto fw-600">Design</h2>
                    <p class="fs-16 metropolis">Donec ut diam sed nisi pulvinar faucibus. Praesent non enim sagittis, faucibus ex sed, sodales nisl. Duis sagittis convallis turpis sit amet auctor. Integer rutrum odio aliquam risus vehicula tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla congue fermentum. Cras tristique ex vitae semper faucibus. Aenean leo nibh, gravida pretium urna sodales, vestibulum congue metus. Sed tempor libero enim, id interdum urna tempus ut. Fusce dapibus enim sapien, sed accumsan dui tempus et. Fusce ornare erat eu accumsan aliquet. Praesent vel urna pretium, gravida urna sed, pulvinar enim. Phasellus eros felis, hendrerit quis augue at, tincidunt viverra velit.</p>
                </div>
                <div class="section-space-3 section-space">
                    <h2 class="fs-96 roboto fw-600">UX</h2>
                    <p class="fs-16 metropolis">Donec ut diam sed nisi pulvinar faucibus. Praesent non enim sagittis, faucibus ex sed, sodales nisl. Duis sagittis convallis turpis sit amet auctor. Integer rutrum odio aliquam risus vehicula tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla congue fermentum. Cras tristique ex vitae semper faucibus. Aenean leo nibh, gravida pretium urna sodales, vestibulum congue metus. Sed tempor libero enim, id interdum urna tempus ut. Fusce dapibus enim sapien, sed accumsan dui tempus et. Fusce ornare erat eu accumsan aliquet. Praesent vel urna pretium, gravida urna sed, pulvinar enim. Phasellus eros felis, hendrerit quis augue at, tincidunt viverra velit.</p>
                </div>
            </div>
        </section>
         <section class="block--0006 view-frame window-width" scroll-point>

             <div x-data class="title-space" x-show="$store.theme.current === 'space'">
                <h2 class="fs-96 roboto fw-600 first">Lets build great things.</h2>
                <p class="fs-16 metropolis-thin fw-100 second">
                    We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process.
                    <br><br>
                    contact at <a href="mailto:hello@creativenebula.co.uk" class="roboto fw-600">hello@creativenebula.co.uk</a>
                </p>
                    
                <div class="phone"></div>
                <div class="laptop"></div>
                <div class="world-background"></div>
             </div>

             <div x-data class="title-space" x-show="$store.theme.current === 'ocean'">
                <h2 class="fs-96 roboto fw-600 first">Lets create great things.</h2>
                <p class="fs-16 metropolis-thin fw-100 second">
                    We believe having headspace to achieve your creative goals... Having worked with clients on web projects from ideation to launch, I have valuable experience in the design and development process. 
                </p>
                
             </div>
            
              <div class="man"></div>
              
              <footer><div class="fs-24 fw-400 metropolis">creating.</div><div class="fs-24 fw-400 metropolis">programming.</div></footer>
        </section>
    </div>
</x-website-layout>