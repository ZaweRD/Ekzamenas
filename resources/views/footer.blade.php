<footer>
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <x-jet-nav-link
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="{{ route('dviraciai') }}" :active="request()->routeIs('dviraciai')"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-bicycle"></i>
        <p style="font-size: 10px;">Dviraciu Nuoma</p>
        
    </x-jet-nav-link>

      <!-- Twitter -->
      <x-jet-nav-link
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="{{ route('dviraciai') }}" :active="request()->routeIs('dviraciai')"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-car"></i>
        <p style="font-size: 10px;">Automobiliu Nuoma</p></x-jet-nav-link>

      <!-- Google -->
      <x-jet-nav-link
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="{{ route('dviraciai') }}" :active="request()->routeIs('dviraciai')"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-plane"></i>
        <p style="font-size: 10px;">Lektuvu biletai</p></x-jet-nav-link>

      <!-- Instagram -->
      <x-jet-nav-link
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="{{ route('dviraciai') }}" :active="request()->routeIs('dviraciai')"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-bus"></i>
        <p style="font-size: 10px;">Keliones Autobusu</p>

        </x-jet-nav-link>
    

     
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2017-2020 Copyright: Aleksej Leonov, 13gr.
    
  </div>
  <!-- Copyright -->
</footer>


</footer>