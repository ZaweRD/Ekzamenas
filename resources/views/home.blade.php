<x-guest-layout>
<!-- <div class="mx-4">
    <div class="jumbotron mx-4">
        <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
    </div>
</div> -->
<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"> Paslaugos</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <x-jet-nav-link class="btn btn-primary btn-lg" href="{{ route('paslaugos') }}" :active="request()->routeIs('paslaugos')">
                            {{ __('Pateikti atsilepima') }}
        </x-jet-nav-link> </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-5">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Change the background</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <button class="btn btn-outline-light" type="button">Example button</button>
        </div>
    </div>
    <div class="col-md-3">
      <div class="card">
  <img
    src="https://unsplash.com/photos/dOOGrK3zcUc"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <x-jet-nav-link class="btn btn-primary btn-lg" href="{{ route('lektuvai') }}" :active="request()->routeIs('lektuvai')">
                            {{ __('Placiau...') }}
    </x-jet-nav-link> </div>
  </div>
</div>
      </div>
      <div class="col-md-3">
      <div class="card">
  <img
    src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
    class="card-img-top"
    alt="..."
  />
  <div class="card-body">
    <h5 class="card-title"> Skrydiai</h5>
    <p class="card-text">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <x-jet-nav-link class="btn btn-primary btn-lg" href="{{ route('automobiliai') }}" :active="request()->routeIs('automobiliai')">
                            {{ __('Placiau...') }}
    </x-jet-nav-link> </div>
  </div>
</div>
      </div>
    </div>



</x-guest-layout>