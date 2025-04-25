<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.sales.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sales Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.sales.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Sales
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLead"
            aria-expanded="true" aria-controls="collapseLead">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Lead</span>
        </a>
        <div id="collapseLead" class="collapse" aria-labelledby="headingLead" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.sales.lead.create') }}">Add Lead</a>
                <a class="collapse-item" href="{{ route('admin.sales.lead.view') }}">View Lead</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuotation"
            aria-expanded="true" aria-controls="collapseQuotation">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Quotation</span>
        </a>
        <div id="collapseQuotation" class="collapse" aria-labelledby="headingQuotation" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.sales.quotation.create') }}">Create Quotation</a>
                <a class="collapse-item" href="{{ route('admin.sales.quotation.view') }}">View Quotations</a>
            </div>
        </div>
    </li>

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

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Assign Task
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTask"  aria-expanded="true" aria-controls="collapseTask">                 <i class="fas fa-fw fa-tasks"></i>
            <span>Tasks</span>           </a>
        <div id="collapseTask" class="collapse" aria-labelledby="headingTask" data-parent="#accordionSidebar"> <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.sales.task.create') }}">Assign Task</a>  <a class="collapse-item" href="{{ route('admin.sales.task.view') }}">View Tasks</a>     </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Addons
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Other Links</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="#">Forgot Password</a>
                <a class="collapse-item" href="#">Update Profile</a>
                <a class="collapse-item" href="#">Logout</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
