<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Desktop Dashboard - PT. ARTHA SOLUSI ADITAMA</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar Fixed Width -->
        <div class="sidebar">
            <div class="logo-container">
                <img src="logo.png" alt="PT. ARTHA SOLUSI ADITAMA" class="logo">
                <h1>PT. ARTHA SOLUSI ADITAMA</h1>
            </div>
            
            <div class="user-info">
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="user-details">
                    <span class="username">John Doe</span>
                    <span class="role">Administrator</span>
                </div>
            </div>
            
            <nav class="main-nav">
                <ul>
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="report.php">
                            <i class="fas fa-file-alt"></i>
                            <span>Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="attendance.php">
                            <i class="fas fa-calendar-check"></i>
                            <span>Absensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="datastore.php">
                            <i class="fas fa-database"></i>
                            <span>DataStore</span>
                        </a>
                    </li>
                    <li>
                        <a href="Activity.php">
                            <i class="fas fa-list-check"></i>
                            <span>Activity</span>
                        </a>
                    </li>
                    <li>
                        <a href="Tools.php">
                            <i class="fas fa-tools"></i>
                            <span>Tools</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="verifikasi_akun.php">
                            <i class="fas fa-users"></i>
                            <span>Daftar Akun</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="nav-footer">
                <a href="#" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
        
        <!-- Main Content Fixed Width -->
        <div class="main-content">
            <header class="topbar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="user-actions">
                    <div class="notification-bell">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-menu">
                        <span class="username">John Doe</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </header>
            
            <div class="content">
                <h2>Dashboard Overview</h2>
                
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-icon blue">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-value">24</span>
                            <span class="stat-label">Reports Today</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-value">87%</span>
                            <span class="stat-label">Attendance</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon orange">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-value">Rp 12.5JT</span>
                            <span class="stat-label">Today Sales</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="stat-info">
                            <span class="stat-value">1.2GB</span>
                            <span class="stat-label">DataStore</span>
                        </div>
                    </div>
                </div>
                
                <div class="content-columns">
                    <div class="column">
                        <div class="card">
                            <h3><i class="fas fa-list-check"></i> Recent Activities</h3>
                            <div class="activity-list">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-file-upload"></i>
                                    </div>
                                    <div class="activity-details">
                                        <span class="activity-title">New file uploaded to DataStore</span>
                                        <span class="activity-time">5 minutes ago</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="activity-details">
                                        <span class="activity-title">New report submitted</span>
                                        <span class="activity-time">10 minutes ago</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                    <div class="activity-details">
                                        <span class="activity-title">Employee checked in</span>
                                        <span class="activity-time">25 minutes ago</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="activity-details">
                                        <span class="activity-title">New sale recorded</span>
                                        <span class="activity-time">1 hour ago</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="view-all">View All Activities →</a>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card">
                            <h3><i class="fas fa-database"></i> DataStore Status</h3>
                            <div class="storage-info">
                                <div class="storage-progress">
                                    <div class="progress-bar" style="width: 65%;"></div>
                                </div>
                                <div class="storage-details">
                                    <span>1.2 GB used of 2 GB</span>
                                    <span>65% used</span>
                                </div>
                            </div>
                            <div class="storage-types">
                                <div class="storage-type">
                                    <i class="fas fa-file-pdf"></i>
                                    <span>Documents</span>
                                    <span>450 MB</span>
                                </div>
                                <div class="storage-type">
                                    <i class="fas fa-file-image"></i>
                                    <span>Images</span>
                                    <span>620 MB</span>
                                </div>
                                <div class="storage-type">
                                    <i class="fas fa-file-csv"></i>
                                    <span>Data Files</span>
                                    <span>130 MB</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card quick-actions">
                            <h3><i class="fas fa-bolt"></i> Quick Actions</h3>
                            <div class="action-buttons">
                                <button class="action-btn">
                                    <i class="fas fa-plus"></i>
                                    <span>New Report</span>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-upload"></i>
                                    <span>Upload File</span>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-user-plus"></i>
                                    <span>Add User</span>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-cog"></i>
                                    <span>Settings</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>