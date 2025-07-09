<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daily Activity - PT. ARTHA SOLUSI ADITAMA</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <a href="Dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="Report.php">
                            <i class="fas fa-file-alt"></i>
                            <span>Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="Attendance.php">
                            <i class="fas fa-calendar-check"></i>
                            <span>Absensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="DataStore.php">
                            <i class="fas fa-database"></i>
                            <span>DataStore</span>
                        </a>
                    </li>
                    <li class="active">
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
                <div class="activity-header">
                    <h2>Daily Activity Forum</h2>
                    <button class="btn-create-forum" id="createForumBtn">
                        <i class="fas fa-plus"></i> Create New Forum
                    </button>
                </div>
                
                <!-- Modal Create Forum -->
                <div class="modal" id="createForumModal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h3>Create New Daily Forum</h3>
                        <form id="forumForm">
                            <div class="form-group">
                                <label for="forumDate">Date</label>
                                <input type="date" id="forumDate" name="forumDate" required>
                            </div>
                            <div class="form-group">
                                <label for="forumTitle">Title</label>
                                <input type="text" id="forumTitle" name="forumTitle" placeholder="Daily Activity 01 Jan 2023" required>
                            </div>
                            <div class="form-group">
                                <label for="forumDescription">Description</label>
                                <textarea id="forumDescription" name="forumDescription" rows="3" placeholder="Describe the focus for today's activities"></textarea>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn-cancel">Cancel</button>
                                <button type="submit" class="btn-submit">Create Forum</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Activity Forums List -->
                <div class="forums-container">
                    <div class="forum-card">
                        <div class="forum-header">
                            <h3>Daily Activity - 15 July 2023</h3>
                            <span class="forum-date">Created: 14 July 2023</span>
                        </div>
                        <div class="forum-body">
                            <p>Today we will focus on server maintenance and client site visits. Please report your activities in detail.</p>
                            
                            <div class="forum-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>12 Technicians</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-check-circle"></i>
                                    <span>8 Submitted</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-clock"></i>
                                    <span>4 Pending</span>
                                </div>
                            </div>
                        </div>
                        <div class="forum-actions">
                            <button class="btn-view">
                                <i class="fas fa-eye"></i> View Activities
                            </button>
                            <button class="btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn-delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                    
                    <div class="forum-card">
                        <div class="forum-header">
                            <h3>Daily Activity - 14 July 2023</h3>
                            <span class="forum-date">Created: 13 July 2023</span>
                        </div>
                        <div class="forum-body">
                            <p>Weekly network checkup and hardware maintenance activities. Include photos if possible.</p>
                            
                            <div class="forum-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>15 Technicians</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-check-circle"></i>
                                    <span>15 Submitted</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-clock"></i>
                                    <span>0 Pending</span>
                                </div>
                            </div>
                        </div>
                        <div class="forum-actions">
                            <button class="btn-view">
                                <i class="fas fa-eye"></i> View Activities
                            </button>
                            <button class="btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn-delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                    
                    <div class="forum-card">
                        <div class="forum-header">
                            <h3>Daily Activity - 13 July 2023</h3>
                            <span class="forum-date">Created: 12 July 2023</span>
                        </div>
                        <div class="forum-body">
                            <p>Software updates and patching for all client systems. Report any issues encountered.</p>
                            
                            <div class="forum-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>10 Technicians</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-check-circle"></i>
                                    <span>9 Submitted</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-clock"></i>
                                    <span>1 Pending</span>
                                </div>
                            </div>
                        </div>
                        <div class="forum-actions">
                            <button class="btn-view">
                                <i class="fas fa-eye"></i> View Activities
                            </button>
                            <button class="btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn-delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("createForumModal");
        const btn = document.getElementById("createForumBtn");
        const span = document.getElementsByClassName("close-btn")[0];
        const cancelBtn = document.querySelector(".btn-cancel");

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        cancelBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Form submission
        document.getElementById("forumForm").addEventListener("submit", function(e) {
            e.preventDefault();
            // Here you would normally send data to server
            alert("New daily forum created successfully!");
            modal.style.display = "none";
            // Reset form
            this.reset();
        });
    </script>
</body>
</html>