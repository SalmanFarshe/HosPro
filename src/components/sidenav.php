<!-- Side Nav -->
<div class="dashboard-nav bg-glass">
    <header>
        <a href="#" class="brand-logo" style="text-decoration: none;">
            <i class="fa-solid fa-hotel"></i> <span>HosPro</span>
        </a>
    </header>

    <!-- Vertical Tab Links -->
    <nav class="dashboard-nav-list">
        <a href="../pages/dashboard.php" class="dashboard-nav-item <?php if($activePage == 'dashboard') echo 'active-page'; ?>">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="../pages/room-mapping.php" class="dashboard-nav-item <?php if($activePage == 'room-mapping') echo 'active-page'; ?>">
            <i class="fa-solid fa-bed"></i> Room Mapping
        </a>
        <a href="../pages/employee.php" class="dashboard-nav-item <?php if($activePage == 'employee') echo 'active-page'; ?>">
            <i class="fa-solid fa-user-tie"></i> Employee
        </a>
        <a href="../pages/events.php" class="dashboard-nav-item <?php if($activePage == 'events') echo 'active-page'; ?>">
            <i class="fa-solid fa-calendar-days"></i> All Events
        </a>
        <a href="../pages/allusers.php" class="dashboard-nav-item <?php if($activePage == 'allusers') echo 'active-page'; ?>">
            <i class="fa-solid fa-users"></i> All Users
        </a>

        <!-- Packages Section -->
        <a href="../pages/packages.php" class="dashboard-nav-item <?php if($activePage == 'packages') echo 'active-page'; ?>">
            <i class="fa-solid fa-clipboard-list"></i> Packages
        </a>

        <a href="../pages/billandpayments.php" class="dashboard-nav-item <?php if($activePage == 'billandpayments') echo 'active-page'; ?>">
            <i class="fa-regular fa-credit-card"></i> Bill & Payments
        </a>
        <a href="../pages/costing.php" class="dashboard-nav-item <?php if($activePage == 'costing') echo 'active-page'; ?>">
            <i class="fa-solid fa-chart-pie"></i> Total Costing
        </a>
        <a href="../pages/customize.php" class="dashboard-nav-item <?php if($activePage == 'customize') echo 'active-page'; ?>">
            <i class="fa-solid fa-pen-to-square"></i> Customization
        </a>
    </nav>

    <div class="nav-item-divider"></div>

    <nav class="dashboard-nav-list">
        <a href="../pages/logout.php" class="dashboard-nav-item">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </nav>
</div>
