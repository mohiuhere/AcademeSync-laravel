<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{route('admin.dashbord')}}>
        <div class="sidebar-brand-icon rotate-top-nav-icon">
            <i class="fa-solid fa-group-arrows-rotate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{config('app.name')}}<sup>1</sup></div>
    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href={{route('admin.dashbord')}}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Components
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseZero"
            aria-expanded="true" aria-controls="collapseZero">
            <i class="fas fa-user-graduate"></i>
            <span>Students Info</span>
        </a>
        <div id="collapseZero" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <strong>
                    <a class="collapse-item" href={{route('student.index')}}>Students</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('promote.student.index')}} >Promote students</a>
                </strong>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fa-solid fa-graduation-cap "></i>
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
                    <a class="collapse-item" href={{route('class-setup.index')}}>Class Setup</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('subject.assign.index')}}>Subject Assign</a>
                </strong>
                {{-- <a class="collapse-item" href="cards.html">Subject</a>
                <a class="collapse-item" href="cards.html">Subject</a> --}}
            </div>
        </div>
    </li>

    {{-- <hr class="sidebar-divider"> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-clipboard"></i>
            <span>Examination</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <strong>
                    <a class="collapse-item" href={{route('exam.type.index')}}>Type</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('mark.grade.index')}}>Marks Grade</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('mark.distribution.index')}}>Mark Distribution</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('exam.setup.index')}}>Exam Setup</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('mark.register.index')}}>Mark Register</a>
                </strong>
            </div>
        </div>
    </li>

    {{-- <hr class="sidebar-divider"> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-money-check-alt"></i>
            <span>Fees</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <strong>
                    <a class="collapse-item" href={{route('fee.type.index')}}>Type</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('fee.master.index')}}>Master</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('fee.assing.index')}}>Assing</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('fee.collect.index')}}>Collect</a>
                </strong>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-users-cog"></i>
            <span>Staff</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <strong>
                    <a class="collapse-item" href={{route('teacher.index')}}>Teachers</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('assign-admin.index')}} >Admin Assign</a>
                </strong>
            </div>
        </div>
    </li>
    {{-- <hr class="sidebar-divider"> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <strong>
                    <a class="collapse-item" href={{route('general.setting.index')}}>General Settings</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('gender.index')}} >Genders</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('religion.index')}} >Religions</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('blood-group.index')}} >Blood Groups</a>
                </strong>
                <strong>
                    <a class="collapse-item" href={{route('session.index')}} >Sessions</a>
                </strong>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
