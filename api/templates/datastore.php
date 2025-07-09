<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataStore - PT. ARTHA SOLUSI ADITAMA</title>
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
                    <li>
                        <a href="dashboard.php">
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
                    <li class="active">
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
                    <li>
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
                <h2>DataStore Files</h2>
                
                <div class="datastore-container">
                    <div class="datastore-tabs">
                        <button class="tab-btn active" data-tab="report">Report</button>
                        <button class="tab-btn" data-tab="absensi">Absensi</button>
                        <button class="tab-btn" data-tab="activity">Activity</button>
                    </div>
                    
                    <div class="datastore-content">
                        <!-- Report Files Tab -->
                        <div class="tab-pane active" id="report-tab">
                            <div class="file-actions">
                                <button class="upload-btn">
                                    <i class="fas fa-upload"></i> Upload File
                                </button>
                                <div class="search-filter">
                                    <input type="text" placeholder="Search files...">
                                    <select>
                                        <option>All Types</option>
                                        <option>PDF</option>
                                        <option>Excel</option>
                                        <option>Word</option>
                                    </select>
                                </div>
                            </div>
                            <div class="file-list">
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-pdf"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Monthly_Report_June_2023.pdf</span>
                                        <span class="file-meta">
                                            <span class="file-size">2.4 MB</span>
                                            <span class="file-date">2023-06-30</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-excel"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Sales_Data_Q2_2023.xlsx</span>
                                        <span class="file-meta">
                                            <span class="file-size">1.8 MB</span>
                                            <span class="file-date">2023-06-15</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-word"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Project_Summary.docx</span>
                                        <span class="file-meta">
                                            <span class="file-size">850 KB</span>
                                            <span class="file-date">2023-05-28</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Absensi Files Tab -->
                        <div class="tab-pane" id="absensi-tab">
                            <div class="file-actions">
                                <button class="upload-btn">
                                    <i class="fas fa-upload"></i> Upload File
                                </button>
                                <div class="search-filter">
                                    <input type="text" placeholder="Search files...">
                                    <select>
                                        <option>All Types</option>
                                        <option>PDF</option>
                                        <option>Excel</option>
                                        <option>CSV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="file-list">
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-excel"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Attendance_June_2023.xlsx</span>
                                        <span class="file-meta">
                                            <span class="file-size">1.2 MB</span>
                                            <span class="file-date">2023-07-01</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-csv"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Employee_Attendance_May_2023.csv</span>
                                        <span class="file-meta">
                                            <span class="file-size">650 KB</span>
                                            <span class="file-date">2023-06-02</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Activity Files Tab -->
                        <div class="tab-pane" id="activity-tab">
                            <div class="file-actions">
                                <button class="upload-btn">
                                    <i class="fas fa-upload"></i> Upload File
                                </button>
                                <div class="search-filter">
                                    <input type="text" placeholder="Search files...">
                                    <select>
                                        <option>All Types</option>
                                        <option>PDF</option>
                                        <option>Excel</option>
                                        <option>Image</option>
                                    </select>
                                </div>
                            </div>
                            <div class="file-list">
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-image"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Team_Activity_June.jpg</span>
                                        <span class="file-meta">
                                            <span class="file-size">3.5 MB</span>
                                            <span class="file-date">2023-06-20</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-pdf"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Project_Activity_Report.pdf</span>
                                        <span class="file-meta">
                                            <span class="file-size">1.1 MB</span>
                                            <span class="file-date">2023-06-10</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="file-item">
                                    <div class="file-icon">
                                        <i class="fas fa-file-video"></i>
                                    </div>
                                    <div class="file-info">
                                        <span class="file-name">Training_Session.mp4</span>
                                        <span class="file-meta">
                                            <span class="file-size">45.2 MB</span>
                                            <span class="file-date">2023-05-15</span>
                                        </span>
                                    </div>
                                    <div class="file-actions">
                                        <button class="download-btn" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="delete-btn" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/datastore.js"></script>
</body>
</html>