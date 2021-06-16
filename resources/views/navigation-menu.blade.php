<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <i class="fab fa-bootstrap"></i>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Aleksej Leonov, 13 gr.') }}
                    </x-jet-nav-link>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <x-jet-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                            {{ __('Apie mus') }}
                        </x-jet-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-jet-nav-link href="{{ route('paslaugos') }}" :active="request()->routeIs('paslaugos')">
                            {{ __('Paslaugos') }}
                        </x-jet-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-jet-nav-link href="{{ route('contacts') }}" :active="request()->routeIs('contacts')">
                            {{ __('Kontaktai') }}
                        </x-jet-nav-link>
                    </li>
                    
                   
                </ul>
            </div>

            

            
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    
</nav>
