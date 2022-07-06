<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route('dashboard') }}">
            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Shahyousaf petroleum Logo" style="width: 150px; height: 100px;">
            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img mobile-logo" alt="Shahyousaf petroleum logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category pt-5">Main</li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path></svg>
            <span class="side-menu__label">Dashboard</span></a>
        </li>

        <li class="side-item side-item-category">Components</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"></path></svg>
            <span class="side-menu__label">Fuel Management</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('fuel') }}" class="slide-item"> Add New Petrol Type</a></li>
                {{-- <li><a href="#" class="slide-item"> All Petrol Types</a></li> --}}
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"></path></svg>
            <span class="side-menu__label">Stock Management</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('stock') }}" class="slide-item"> Add New Petrol Volume/Stock</a></li>
                {{-- <li><a href="#" class="slide-item"> All Stock-In Records</a></li> --}}
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z"></path></svg>
            <span class="side-menu__label">Sales Management</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('sale') }}" class="slide-item"> Add New Sale Transaction</a></li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('saleStock') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z"/><path d="M11 9h2v5h-2zm0 6h2v2h-2z"/></svg>
            <span class="side-menu__label">Sales/Stock Reports</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('profites') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z"/><path d="M11 9h2v5h-2zm0 6h2v2h-2z"/></svg>
            <span class="side-menu__label">Profite Reports</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z"></path></svg>
            <span class="side-menu__label">System Management</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('profile.show') }}" class="slide-item"> Update User Profile</a></li>
                <li><a href="{{ route('profile.show') }}" class="slide-item"> Update Account Password</a></li>
            </ul>
        </li>

    </ul>
</aside>
