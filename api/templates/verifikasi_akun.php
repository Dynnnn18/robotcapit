<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - PT. ARTHA SOLUSI ADITAMA</title>
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
                        <a href="tools.php">
                            <i class="fas fa-tools"></i>
                            <span>Tools</span>
                        </a>
                    </li>
                    <li class="active">
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
                <h2><i class="fas fa-users"></i> Daftar Akun</h2>
                
                <div class="account-form-container">
                    <h3>Tambah Akun Baru</h3>
                    <form id="account-form" class="account-form">
                        <div class="form-group">
                            <label for="full-name">Full Name</label>
                            <input type="text" id="full-name" name="full-name" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                            <div class="password-toggle">
                                <i class="fas fa-eye" id="toggle-password"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" name="role" required>
                                <option value="">Pilih Role</option>
                                <option value="staff">Staff</option>
                                <option value="manager">Manager</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="submit-btn">Tambah Akun</button>
                    </form>
                </div>
                
                <div class="account-list-container">
                    <div class="account-filter">
                        <div class="filter-group">
                            <label for="role-filter">Filter Role:</label>
                            <select id="role-filter">
                                <option value="all">Semua Role</option>
                                <option value="staff">Staff</option>
                                <option value="manager">Manager</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <button class="filter-btn">Filter</button>
                    </div>
                    
                    <div class="account-table-container">
                        <table class="account-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andi Wijaya</td>
                                    <td>andi.wijaya</td>
                                    <td>
                                        <div class="password-field">
                                            <span class="password-text">password123</span>
                                            <i class="fas fa-eye toggle-password-visibility"></i>
                                        </div>
                                    </td>
                                    <td>Staff</td>
                                    <td>12/07/2023</td>
                                    <td class="action-buttons">
                                        <button class="action-btn delete"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Budi Santoso</td>
                                    <td>budi.s</td>
                                    <td>
                                        <div class="password-field">
                                            <span class="password-text">manager123</span>
                                            <i class="fas fa-eye toggle-password-visibility"></i>
                                        </div>
                                    </td>
                                    <td>Manager</td>
                                    <td>11/07/2023</td>
                                    <td class="action-buttons">
                                        <button class="action-btn delete"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Citra Dewi</td>
                                    <td>citra.dewi</td>
                                    <td>
                                        <div class="password-field">
                                            <span class="password-text">admin123</span>
                                            <i class="fas fa-eye toggle-password-visibility"></i>
                                        </div>
                                    </td>
                                    <td>Admin</td>
                                    <td>10/07/2023</td>
                                    <td class="action-buttons">
                                        <button class="action-btn delete"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dian Pratama</td>
                                    <td>dian.p</td>
                                    <td>
                                        <div class="password-field">
                                            <span class="password-text">supervisor123</span>
                                            <i class="fas fa-eye toggle-password-visibility"></i>
                                        </div>
                                    </td>
                                    <td>Supervisor</td>
                                    <td>09/07/2023</td>
                                    <td class="action-buttons">
                                        <button class="action-btn delete"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="pagination">
                        <button class="page-btn disabled"><i class="fas fa-chevron-left"></i></button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button>
                        <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <!-- Delete Confirmation Modal -->
                <div class="modal" id="delete-confirm-modal">
                    <div class="modal-content small-modal">
                        <div class="modal-header">
                            <h3>Konfirmasi Penghapusan</h3>
                            <button class="modal-close">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="alert warning">
                                <i class="fas fa-exclamation-triangle"></i>
                                <p>Anda yakin ingin menghapus akun ini? Data yang dihapus tidak dapat dikembalikan.</p>
                            </div>
                            <div class="user-to-delete">
                                <p><strong>Nama:</strong> <span id="delete-user-name">-</span></p>
                                <p><strong>Username:</strong> <span id="delete-user-username">-</span></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="action-btn cancel-btn">Batal</button>
                            <button class="action-btn confirm-delete-btn danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility in form
            const togglePassword = document.getElementById('toggle-password');
            const passwordInput = document.getElementById('password');
            
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
                this.classList.toggle('fa-eye');
            });

            // Toggle password visibility in table
            document.querySelectorAll('.toggle-password-visibility').forEach(icon => {
                icon.addEventListener('click', function() {
                    const passwordField = this.closest('.password-field');
                    const passwordText = passwordField.querySelector('.password-text');
                    
                    if (passwordText.style.webkitTextSecurity === 'none') {
                        passwordText.style.webkitTextSecurity = 'disc';
                        this.classList.remove('fa-eye-slash');
                        this.classList.add('fa-eye');
                    } else {
                        passwordText.style.webkitTextSecurity = 'none';
                        this.classList.remove('fa-eye');
                        this.classList.add('fa-eye-slash');
                    }
                });
            });

            // Form submission handler
            document.getElementById('account-form').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const fullName = document.getElementById('full-name').value;
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;
                const role = document.getElementById('role').value;
                
                // In a real application, you would make an AJAX call here to create the account
                // For demo purposes, we'll just add it to the table
                const tableBody = document.querySelector('.account-table tbody');
                const rowCount = tableBody.querySelectorAll('tr').length + 1;
                const today = new Date();
                const formattedDate = `${today.getDate()}/${today.getMonth()+1}/${today.getFullYear()}`;
                
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${rowCount}</td>
                    <td>${fullName}</td>
                    <td>${username}</td>
                    <td>
                        <div class="password-field">
                            <span class="password-text">${password}</span>
                            <i class="fas fa-eye toggle-password-visibility"></i>
                        </div>
                    </td>
                    <td>${role}</td>
                    <td>${formattedDate}</td>
                    <td class="action-buttons">
                        <button class="action-btn delete"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                `;
                
                tableBody.appendChild(newRow);
                
                // Add click handlers to new buttons
                newRow.querySelector('.action-btn.delete').addEventListener('click', showDeleteConfirmation);
                newRow.querySelector('.toggle-password-visibility').addEventListener('click', function() {
                    const passwordField = this.closest('.password-field');
                    const passwordText = passwordField.querySelector('.password-text');
                    
                    if (passwordText.style.webkitTextSecurity === 'none') {
                        passwordText.style.webkitTextSecurity = 'disc';
                        this.classList.remove('fa-eye-slash');
                        this.classList.add('fa-eye');
                    } else {
                        passwordText.style.webkitTextSecurity = 'none';
                        this.classList.remove('fa-eye');
                        this.classList.add('fa-eye-slash');
                    }
                });
                
                // Reset form
                this.reset();
                passwordInput.setAttribute('type', 'password');
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
                
                // Show success message
                alert('Akun berhasil ditambahkan!');
            });
            
            // Delete button handler
            document.querySelectorAll('.action-btn.delete').forEach(btn => {
                btn.addEventListener('click', showDeleteConfirmation);
            });
            
            // Modal close handlers
            document.querySelectorAll('.modal-close, .cancel-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.modal').forEach(modal => {
                        modal.style.display = 'none';
                    });
                });
            });
            
            // Confirm delete handler
            document.querySelector('.confirm-delete-btn').addEventListener('click', function() {
                const modal = document.getElementById('delete-confirm-modal');
                const rowIndex = modal.dataset.rowIndex;
                
                if (rowIndex) {
                    // In a real application, you would make an AJAX call here to delete the user
                    const row = document.querySelector(`.account-table tbody tr:nth-child(${rowIndex})`);
                    row.remove();
                    
                    // Update row numbers
                    const rows = document.querySelectorAll('.account-table tbody tr');
                    rows.forEach((row, index) => {
                        row.cells[0].textContent = index + 1;
                    });
                    
                    // Show success message
                    alert('Akun berhasil dihapus!');
                }
                
                // Close modal
                modal.style.display = 'none';
            });
            
            // Close modal when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target.classList.contains('modal')) {
                    event.target.style.display = 'none';
                }
            });
            
            // Function to show delete confirmation
            function showDeleteConfirmation() {
                const row = this.closest('tr');
                const cells = row.querySelectorAll('td');
                
                // Set user info in delete modal
                document.getElementById('delete-user-name').textContent = cells[1].textContent;
                document.getElementById('delete-user-username').textContent = cells[2].textContent;
                
                // Store row index for deletion
                const rowIndex = Array.from(row.parentNode.children).indexOf(row) + 1;
                document.getElementById('delete-confirm-modal').dataset.rowIndex = rowIndex;
                
                // Show modal
                document.getElementById('delete-confirm-modal').style.display = 'flex';
            }
        });
    </script>
</body>
</html>