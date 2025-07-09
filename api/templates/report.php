<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Report - PT. ARTHA SOLUSI ADITAMA</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
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
                    <li class="active">
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
        
        <!-- Main Content -->
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
                <div class="report-header">
                    <h2>Project Reports</h2>
                    <button class="btn-primary" id="newProjectBtn">
                        <i class="fas fa-plus"></i> New Project
                    </button>
                </div>
                
                <!-- New Project Modal -->
                <div class="modal" id="newProjectModal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Create New Project</h3>
                            <button class="close-btn">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="projectForm">
                                <div class="form-group">
                                    <label for="projectName">Project Name</label>
                                    <input type="text" id="projectName" required>
                                </div>
                                <div class="form-group">
                                    <label for="customer">Customer</label>
                                    <select id="customer" required>
                                        <option value="">Select Customer</option>
                                        <option value="1">PT. Customer Satu</option>
                                        <option value="2">PT. Customer Dua</option>
                                        <option value="3">CV. Customer Tiga</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="technician">Technician</label>
                                    <select id="technician" required>
                                        <option value="">Select Technician</option>
                                        <option value="1">John Doe</option>
                                        <option value="2">Jane Smith</option>
                                        <option value="3">Michael Johnson</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="picCustomer">Person In Charge (Customer)</label>
                                    <input type="text" id="picCustomer" required>
                                </div>
                                <div class="form-group">
                                    <label for="projectDescription">Project Description</label>
                                    <textarea id="projectDescription" rows="3"></textarea>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn-secondary close-btn">Cancel</button>
                                    <button type="submit" class="btn-primary">Create Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Projects List -->
                <div class="projects-list">
                    <div class="project-card">
                        <div class="project-header">
                            <h3>Network Infrastructure Upgrade</h3>
                            <span class="project-status in-progress">In Progress</span>
                        </div>
                        <div class="project-details">
                            <div class="detail-item">
                                <span class="detail-label">Customer:</span>
                                <span class="detail-value">PT. Customer Satu</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">PIC:</span>
                                <span class="detail-value">Budi Santoso</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Technician:</span>
                                <span class="detail-value">John Doe</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Start Date:</span>
                                <span class="detail-value">15 Jun 2023</span>
                            </div>
                        </div>
                        <div class="project-actions">
                            <button class="btn-secondary view-progress-btn">
                                <i class="fas fa-tasks"></i> View Progress
                            </button>
                            <button class="btn-primary add-progress-btn">
                                <i class="fas fa-plus"></i> Add Progress
                            </button>
                        </div>
                    </div>
                    
                    <div class="project-card">
                        <div class="project-header">
                            <h3>Server Migration</h3>
                            <span class="project-status completed">Completed</span>
                        </div>
                        <div class="project-details">
                            <div class="detail-item">
                                <span class="detail-label">Customer:</span>
                                <span class="detail-value">PT. Customer Dua</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">PIC:</span>
                                <span class="detail-value">Ani Wijaya</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Technician:</span>
                                <span class="detail-value">Jane Smith</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Start Date:</span>
                                <span class="detail-value">01 Jun 2023</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">End Date:</span>
                                <span class="detail-value">10 Jun 2023</span>
                            </div>
                        </div>
                        <div class="project-actions">
                            <button class="btn-secondary view-progress-btn">
                                <i class="fas fa-tasks"></i> View Progress
                            </button>
                            <button class="btn-primary" disabled>
                                <i class="fas fa-check"></i> Completed
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Progress Modal -->
                <div class="modal" id="progressModal">
                    <div class="modal-content large">
                        <div class="modal-header">
                            <h3>Add Progress Report</h3>
                            <button class="close-btn">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="progressForm">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="progressDate">Date</label>
                                        <input type="text" id="progressDate" class="datepicker" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="technicianProgress">Technician</label>
                                        <select id="technicianProgress" required>
                                            <option value="">Select Technician</option>
                                            <option value="1">John Doe</option>
                                            <option value="2">Jane Smith</option>
                                            <option value="3">Michael Johnson</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="startTime">Start Time</label>
                                        <input type="text" id="startTime" class="timepicker" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="endTime">End Time</label>
                                        <input type="text" id="endTime" class="timepicker" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="progressDescription">Work Description</label>
                                    <textarea id="progressDescription" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="progressPhotos">Upload Photos</label>
                                    <div class="file-upload">
                                        <input type="file" id="progressPhotos" multiple accept="image/*">
                                        <label for="progressPhotos" class="upload-label">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Click to upload or drag and drop</span>
                                        </label>
                                        <div class="file-preview" id="filePreview"></div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn-secondary close-btn">Cancel</button>
                                    <button type="submit" class="btn-primary">Save Progress</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Progress List Modal -->
                <div class="modal" id="progressListModal">
                    <div class="modal-content extra-large">
                        <div class="modal-header">
                            <h3>Project Progress - Network Infrastructure Upgrade</h3>
                            <button class="close-btn">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="progress-list">
                                <div class="progress-item">
                                    <div class="progress-header">
                                        <h4>Initial Setup</h4>
                                        <span class="progress-date">20 Jun 2023 | 09:00 - 12:30</span>
                                    </div>
                                    <div class="progress-details">
                                        <div class="detail-item">
                                            <span class="detail-label">Technician:</span>
                                            <span class="detail-value">John Doe</span>
                                        </div>
                                        <div class="progress-description">
                                            <p>Performed initial network assessment and setup basic infrastructure. Installed core switches and configured VLANs.</p>
                                        </div>
                                        <div class="progress-photos">
                                            <div class="photo-thumbnail">
                                                <img src="https://via.placeholder.com/150" alt="Progress Photo">
                                            </div>
                                            <div class="photo-thumbnail">
                                                <img src="https://via.placeholder.com/150" alt="Progress Photo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="progress-item">
                                    <div class="progress-header">
                                        <h4>Cable Installation</h4>
                                        <span class="progress-date">21 Jun 2023 | 08:00 - 17:00</span>
                                    </div>
                                    <div class="progress-details">
                                        <div class="detail-item">
                                            <span class="detail-label">Technician:</span>
                                            <span class="detail-value">Jane Smith</span>
                                        </div>
                                        <div class="progress-description">
                                            <p>Installed CAT6 cables throughout the building. Tested all connections for optimal performance.</p>
                                        </div>
                                        <div class="progress-photos">
                                            <div class="photo-thumbnail">
                                                <img src="https://via.placeholder.com/150" alt="Progress Photo">
                                            </div>
                                            <div class="photo-thumbnail">
                                                <img src="https://via.placeholder.com/150" alt="Progress Photo">
                                            </div>
                                            <div class="photo-thumbnail">
                                                <img src="https://via.placeholder.com/150" alt="Progress Photo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="js/report.js"></script>
</body>
</html>