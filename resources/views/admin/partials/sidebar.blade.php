<div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="{{ asset('design/images/logo.png') }}" alt="logo" style="height:100px!important;"></span>
                    <span class="logo-sm"><img src="{{ asset('design/images/logo.png') }}" alt="small logo" ></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="design/images/logo-dark.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="design/images/logo-sm.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-sm-hover">
                <i class="ti ti-circle align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div data-simplebar>

                <ul class="side-nav">

    <!-- Dashboard -->
    <li class="side-nav-title">Silai Point Admin</li>

    <li class="side-nav-item">
        <a href="dashboard.html" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
            <span class="menu-text"> Dashboard </span>
        </a>
    </li>

    <!-- Orders -->
    <li class="side-nav-item">
        <a href="orders.html" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-shopping-cart"></i></span>
            <span class="menu-text"> Orders </span>
        </a>
    </li>

    <!-- Customers -->
    <li class="side-nav-item">
        <a href="customers.html" class="side-nav-link">
            <span class="menu-icon"><i class="ti ti-users"></i></span>
            <span class="menu-text"> Customers </span>
        </a>
    </li>

    <!-- Fabrics -->
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarFabrics"
            aria-expanded="false"
            aria-controls="sidebarFabrics"
            class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-shirt"></i>
            </span>

            <span class="menu-text"> Fabrics </span>
            <span class="menu-arrow"></span>

        </a>

        <div class="collapse" id="sidebarFabrics">
            <ul class="sub-menu">

                <li class="side-nav-item">
                    <a href="{{route('add.fabric')}}" class="side-nav-link">
                        <span class="menu-text">Add Fabric</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{route('all.fabric')}}" class="side-nav-link">
                        <span class="menu-text">All Fabrics</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{route('fabric.category')}}" class="side-nav-link">
                        <span class="menu-text">Fabric Categories</span>
                    </a>
                </li>

            </ul>
        </div>
    </li>

    <!-- Buttons -->
    <li class="side-nav-item">

        <a data-bs-toggle="collapse"
            href="#sidebarButtons"
            aria-expanded="false"
            aria-controls="sidebarButtons"
            class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-circle-dot"></i>
            </span>

            <span class="menu-text"> Buttons </span>
            <span class="menu-arrow"></span>

        </a>

        <div class="collapse" id="sidebarButtons">

            <ul class="sub-menu">

                <li class="side-nav-item">
                    <a href="{{route('add.buttons')}}" class="side-nav-link">
                        <span class="menu-text">Add Buttons</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{route('all.buttons')}}" class="side-nav-link">
                        <span class="menu-text">All Buttons</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{route('buttons.category')}}" class="side-nav-link">
                        <span class="menu-text">Button Categories</span>
                    </a>
                </li>

            </ul>

        </div>

    </li>

    <!-- Collar Designs -->
    <li class="side-nav-item">

        <a data-bs-toggle="collapse"
            href="#sidebarCollars"
            aria-expanded="false"
            aria-controls="sidebarCollars"
            class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-layout-grid"></i>
            </span>

            <span class="menu-text"> Collar Designs </span>
            <span class="menu-arrow"></span>

        </a>

        <div class="collapse" id="sidebarCollars">

            <ul class="sub-menu">

                <li class="side-nav-item">
                    <a href="add-collar.html" class="side-nav-link">
                        <span class="menu-text">Add Collar</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="all-collars.html" class="side-nav-link">
                        <span class="menu-text">All Collars</span>
                    </a>
                </li>

            </ul>

        </div>

    </li>

    <!-- Cuff Designs -->
    <li class="side-nav-item">

        <a data-bs-toggle="collapse"
            href="#sidebarCuffs"
            aria-expanded="false"
            aria-controls="sidebarCuffs"
            class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-border-all"></i>
            </span>

            <span class="menu-text"> Cuff Designs </span>
            <span class="menu-arrow"></span>

        </a>

        <div class="collapse" id="sidebarCuffs">

            <ul class="sub-menu">

                <li class="side-nav-item">
                    <a href="add-cuff.html" class="side-nav-link">
                        <span class="menu-text">Add Cuff</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="all-cuffs.html" class="side-nav-link">
                        <span class="menu-text">All Cuffs</span>
                    </a>
                </li>

            </ul>

        </div>

    </li>

    <!-- Embroidery -->
    <li class="side-nav-item">

        <a data-bs-toggle="collapse"
            href="#sidebarEmbroidery"
            aria-expanded="false"
            aria-controls="sidebarEmbroidery"
            class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-brush"></i>
            </span>

            <span class="menu-text"> Embroidery </span>
            <span class="menu-arrow"></span>

        </a>

        <div class="collapse" id="sidebarEmbroidery">

            <ul class="sub-menu">

                <li class="side-nav-item">
                    <a href="add-embroidery.html" class="side-nav-link">
                        <span class="menu-text">Add Embroidery</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="all-embroidery.html" class="side-nav-link">
                        <span class="menu-text">All Embroidery</span>
                    </a>
                </li>

            </ul>

        </div>

    </li>

    <!-- Tailoring Types -->
    <li class="side-nav-item">

        <a data-bs-toggle="collapse"
            href="#sidebarTailoring"
            aria-expanded="false"
            aria-controls="sidebarTailoring"
            class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-scissors"></i>
            </span>

            <span class="menu-text"> Tailoring Types </span>
            <span class="menu-arrow"></span>

        </a>

        <div class="collapse" id="sidebarTailoring">

            <ul class="sub-menu">

                <li class="side-nav-item">
                    <a href="add-tailoring.html" class="side-nav-link">
                        <span class="menu-text">Add Tailoring Type</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="all-tailoring.html" class="side-nav-link">
                        <span class="menu-text">All Tailoring Types</span>
                    </a>
                </li>

            </ul>

        </div>

    </li>

    <!-- Measurements -->
    <li class="side-nav-item">
        <a href="measurements.html" class="side-nav-link">
            <span class="menu-icon">
                <i class="ti ti-ruler-measure"></i>
            </span>

            <span class="menu-text"> Measurements </span>
        </a>
    </li>

    <!-- Custom Designs -->
    <li class="side-nav-item">
        <a href="custom-designs.html" class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-pencil"></i>
            </span>

            <span class="menu-text"> Custom Designs </span>

        </a>
    </li>

    <!-- Payments -->
    <li class="side-nav-item">
        <a href="payments.html" class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-credit-card"></i>
            </span>

            <span class="menu-text"> Payments </span>

        </a>
    </li>

    <!-- Reviews -->
    <li class="side-nav-item">
        <a href="reviews.html" class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-star"></i>
            </span>

            <span class="menu-text"> Reviews </span>

        </a>
    </li>

    <!-- Settings -->
    <li class="side-nav-item">
        <a href="settings.html" class="side-nav-link">

            <span class="menu-icon">
                <i class="ti ti-settings"></i>
            </span>

            <span class="menu-text"> Settings </span>

        </a>
    </li>

</ul>

                <!-- Help Box -->
                <div class="help-box text-center">
                    <h5 class="fw-semibold fs-16">Unlimited Access</h5>
                    <p class="mb-3 text-muted">Upgrade to plan to get access to unlimited reports</p>
                    <a href="javascript: void(0);" class="btn btn-danger btn-sm">Upgrade</a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>