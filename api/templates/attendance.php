<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Absensi - PT. ARTHA SOLUSI ADITAMA</title>
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
                    <li class="active">
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
                <h2>Absensi Harian</h2>
                
                <?php
                // Check if user has already checked in today
                $hasCheckedIn = false; // This would come from your database
                $hasCheckedOut = false; // This would come from your database
                
                // Process form submission
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['check_in'])) {
                        // Handle check-in submission
                        $todayPlan = $_POST['today_plan'];
                        
                        // Check which photo was uploaded (camera or file)
                        if (!empty($_FILES['check_in_photo']['name'])) {
                            $photo = $_FILES['check_in_photo'];
                        } else {
                            $photo = $_FILES['check_in_photo_file'];
                        }
                        
                        // Process the photo upload and save to database
                        // You would add your database logic here
                        
                        $hasCheckedIn = true;
                        echo '<div class="alert success">Absensi masuk berhasil dicatat!</div>';
                    } 
                    elseif (isset($_POST['check_out'])) {
                        // Handle check-out submission
                        // Check which photo was uploaded (camera or file)
                        if (!empty($_FILES['check_out_photo']['name'])) {
                            $photo = $_FILES['check_out_photo'];
                        } else {
                            $photo = $_FILES['check_out_photo_file'];
                        }
                        
                        // Process the photo upload and save to database
                        // You would add your database logic here
                        
                        $hasCheckedOut = true;
                        echo '<div class="alert success">Absensi pulang berhasil dicatat!</div>';
                    }
                }
                ?>
                
                <!-- Check-in Form -->
                <div class="attendance-card">
                    <h3><i class="fas fa-sign-in-alt"></i> Absensi Masuk</h3>
                    
                    <?php if (!$hasCheckedIn): ?>
                        <form action="Attendance.php" method="POST" enctype="multipart/form-data" class="attendance-form">
                            <div class="form-group">
                                <label>Upload Foto Selfie:</label>
                                <div class="photo-upload-options">
                                    <!-- Option 1: Take Photo -->
                                    <div class="photo-option">
                                        <label class="upload-btn camera-option">
                                            <i class="fas fa-camera"></i>
                                            <span>Ambil Foto</span>
                                            <input type="file" class="photo-input" name="check_in_photo" accept="image/*" capture="user">
                                        </label>
                                        <div class="photo-preview" id="check_in_camera_preview"></div>
                                    </div>
                                    
                                    <!-- Option 2: Upload File -->
                                    <div class="photo-option">
                                        <label class="upload-btn file-option">
                                            <i class="fas fa-upload"></i>
                                            <span>Upload Foto</span>
                                            <input type="file" class="photo-input" name="check_in_photo_file" accept="image/*">
                                        </label>
                                        <div class="photo-preview" id="check_in_file_preview"></div>
                                    </div>
                                </div>
                                <p class="photo-note">Pilih salah satu metode di atas (wajib)</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="today_plan">Rencana Kerja Hari Ini:</label>
                                <textarea id="today_plan" name="today_plan" rows="4" placeholder="Apa yang akan Anda kerjakan hari ini?" required></textarea>
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" name="check_in" class="btn-submit">
                                    <i class="fas fa-check-circle"></i> Submit Absensi Masuk
                                </button>
                            </div>
                        </form>
                    <?php else: ?>
                        <div class="attendance-recorded">
                            <div class="recorded-message">
                                <i class="fas fa-check-circle success-icon"></i>
                                <p>Anda telah melakukan absensi masuk hari ini pada pukul <?php echo date('H:i'); ?></p>
                            </div>
                            
                            <div class="recorded-details">
                                <h4>Rencana Kerja Anda:</h4>
                                <p><?php echo htmlspecialchars($todayPlan ?? 'Tidak ada rencana kerja yang dicatat'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Check-out Form -->
                <div class="attendance-card">
                    <h3><i class="fas fa-sign-out-alt"></i> Absensi Pulang</h3>
                    
                    <?php if ($hasCheckedIn && !$hasCheckedOut): ?>
                        <form action="Attendance.php" method="POST" enctype="multipart/form-data" class="attendance-form">
                            <div class="form-group">
                                <label>Upload Foto Selfie:</label>
                                <div class="photo-upload-options">
                                    <!-- Option 1: Take Photo -->
                                    <div class="photo-option">
                                        <label class="upload-btn camera-option">
                                            <i class="fas fa-camera"></i>
                                            <span>Ambil Foto</span>
                                            <input type="file" class="photo-input" name="check_out_photo" accept="image/*" capture="user">
                                        </label>
                                        <div class="photo-preview" id="check_out_camera_preview"></div>
                                    </div>
                                    
                                    <!-- Option 2: Upload File -->
                                    <div class="photo-option">
                                        <label class="upload-btn file-option">
                                            <i class="fas fa-upload"></i>
                                            <span>Upload Foto</span>
                                            <input type="file" class="photo-input" name="check_out_photo_file" accept="image/*">
                                        </label>
                                        <div class="photo-preview" id="check_out_file_preview"></div>
                                    </div>
                                </div>
                                <p class="photo-note">Pilih salah satu metode di atas (wajib)</p>
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" name="check_out" class="btn-submit">
                                    <i class="fas fa-check-circle"></i> Submit Absensi Pulang
                                </button>
                            </div>
                        </form>
                    <?php elseif ($hasCheckedOut): ?>
                        <div class="attendance-recorded">
                            <div class="recorded-message">
                                <i class="fas fa-check-circle success-icon"></i>
                                <p>Anda telah melakukan absensi pulang hari ini pada pukul <?php echo date('H:i'); ?></p>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="attendance-pending">
                            <i class="fas fa-info-circle info-icon"></i>
                            <p>Silakan lakukan absensi masuk terlebih dahulu sebelum absensi pulang.</p>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Attendance History -->
                <div class="attendance-history">
                    <h3><i class="fas fa-history"></i> Riwayat Absensi Bulan Ini</h3>
                    <div class="history-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // This would come from your database
                                $attendanceHistory = [
                                    ['2023-07-15', '08:05', '17:30', 'Tepat Waktu'],
                                    ['2023-07-14', '08:15', '17:45', 'Tepat Waktu'],
                                    ['2023-07-13', '08:00', '17:20', 'Tepat Waktu'],
                                    ['2023-07-12', '07:55', '17:10', 'Tepat Waktu'],
                                    ['2023-07-11', '08:25', '17:35', 'Terlambat'],
                                ];
                                
                                foreach ($attendanceHistory as $record) {
                                    echo '<tr>';
                                    echo '<td>' . $record[0] . '</td>';
                                    echo '<td>' . $record[1] . '</td>';
                                    echo '<td>' . $record[2] . '</td>';
                                    echo '<td><span class="status-badge ' . strtolower(str_replace(' ', '-', $record[3])) . '">' . $record[3] . '</span></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Photo preview functionality for both options
        function setupPhotoPreview(inputSelector, previewId) {
            const input = document.querySelector(inputSelector);
            const preview = document.getElementById(previewId);
            
            input.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    
                    reader.addEventListener('load', function() {
                        preview.innerHTML = '';
                        const img = document.createElement('img');
                        img.src = this.result;
                        preview.appendChild(img);
                        preview.style.display = 'block';
                        
                        // Hide the upload button
                        this.closest('.upload-btn').style.display = 'none';
                    });
                    
                    reader.readAsDataURL(file);
                }
            });
        }
        
        // Initialize all photo previews
        setupPhotoPreview('input[name="check_in_photo"]', 'check_in_camera_preview');
        setupPhotoPreview('input[name="check_in_photo_file"]', 'check_in_file_preview');
        setupPhotoPreview('input[name="check_out_photo"]', 'check_out_camera_preview');
        setupPhotoPreview('input[name="check_out_photo_file"]', 'check_out_file_preview');
        
        // Handle form submission to use only one photo
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                // Validate that at least one photo is selected
                const checkInCamera = this.querySelector('input[name="check_in_photo"]');
                const checkInFile = this.querySelector('input[name="check_in_photo_file"]');
                const checkOutCamera = this.querySelector('input[name="check_out_photo"]');
                const checkOutFile = this.querySelector('input[name="check_out_photo_file"]');
                
                // For check-in form
                if (checkInCamera && checkInFile) {
                    if (!checkInCamera.files.length && !checkInFile.files.length) {
                        e.preventDefault();
                        alert('Silakan pilih salah satu metode upload foto');
                        return;
                    }
                    
                    if (checkInCamera.files.length > 0) {
                        this.querySelector('input[name="check_in_photo_file"]').disabled = true;
                    } else {
                        this.querySelector('input[name="check_in_photo"]').disabled = true;
                    }
                }
                
                // For check-out form
                if (checkOutCamera && checkOutFile) {
                    if (!checkOutCamera.files.length && !checkOutFile.files.length) {
                        e.preventDefault();
                        alert('Silakan pilih salah satu metode upload foto');
                        return;
                    }
                    
                    if (checkOutCamera.files.length > 0) {
                        this.querySelector('input[name="check_out_photo_file"]').disabled = true;
                    } else {
                        this.querySelector('input[name="check_out_photo"]').disabled = true;
                    }
                }
            });
        });
    </script>
</body>
</html>