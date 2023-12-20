<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            
        </div>
        <div class="sidebar-brand-text mx-3">{{config('app.name')}}<sup>1</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Components
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Academic</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <strong>
                    <a class="collapse-item" href={{route('class.index')}}>Class</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('section.index')}}>Section</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('subject.index')}}>Subject</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('class.setup.index')}}>Class Setup</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('subject.assign.index')}}>Subject Assign</a>
                </strong>
                {{-- <a class="collapse-item" href="cards.html">Subject</a>
                <a class="collapse-item" href="cards.html">Subject</a> --}}
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>