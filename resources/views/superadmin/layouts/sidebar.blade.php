        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('superadmin.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Super Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('superadmin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sales
            </div>

            <!-- Lead -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLead"
                    aria-expanded="true" aria-controls="collapseLead">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Lead</span>
                </a>
                <div id="collapseLead" class="collapse" aria-labelledby="headingLead" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('lead.create') }}">Add Lead</a>
                        <a class="collapse-item" href="{{ route('lead.view') }}">View Lead</a>
                    </div>
                </div>
            </li>

            <!-- Quatation -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuotation"
                    aria-expanded="true" aria-controls="collapseQuotation">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Quotation</span>
                </a>
                <div id="collapseQuotation" class="collapse" aria-labelledby="headingQuotation" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('quotation.create') }}">Create Quotation</a>
                        <a class="collapse-item" href="{{ route('quotation.view') }}">View Quotations</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Estimate -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEstimate"
                    aria-expanded="true" aria-controls="collapseEstimate">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Estimate</span>
                </a>
                <div id="collapseEstimate" class="collapse" aria-labelledby="headingEstimate" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">New Estimate</a>
                        <a class="collapse-item" href="#">View Estimates</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Performa Invoice -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerformaInvoice"
                    aria-expanded="true" aria-controls="collapsePerformaInvoice">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Performa Invoice</span>
                </a>
                <div id="collapsePerformaInvoice" class="collapse" aria-labelledby="headingPerformaInvoice" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Create Invoice</a>
                        <a class="collapse-item" href="#">View Invoices</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Commercial Invoice -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCommercialInvoice"
                    aria-expanded="true" aria-controls="collapseCommercialInvoice">
                    <i class="fas fa-fw fa-file-contract"></i>
                    <span>Commercial Invoice</span>
                </a>
                <div id="collapseCommercialInvoice" class="collapse" aria-labelledby="headingCommercialInvoice" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Create Invoice</a>
                        <a class="collapse-item" href="#">View Invoices</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="#">Login</a>
                        <a class="collapse-item" href="#">Register</a>
                        <a class="collapse-item" href="#">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="#">404 Page</a>
                        <a class="collapse-item" href="#">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->