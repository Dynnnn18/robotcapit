<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools Management - PT. ARTHA SOLUSI ADITAMA</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* We'll add CSS later as requested */
    </style>
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
                    <li class="active">
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
                    <input type="text" placeholder="Search tools...">
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
                <h2><i class="fas fa-tools"></i> Tools Management</h2>
                
                <!-- Tabs Navigation -->
                <div class="tools-tabs">
                    <button class="tab-btn active" data-tab="stock-tools">Stock Tools</button>
                    <button class="tab-btn" data-tab="permit-tools">Permit Tools</button>
                    <button class="tab-btn" data-tab="handover-tools">Handover Tools</button>
                    <button class="tab-btn" data-tab="return-tools">Return Tools</button>
                </div>
                
                <!-- Stock Tools Tab -->
                <div class="tab-content active" id="stock-tools">
                    
                    <!-- Borrowed Tools Section - Simplified -->
                    <div class="card">
                        <div class="tools-header">
                            <h3><i class="fas fa-clipboard-list"></i> Currently Borrowed Tools</h3>
                            <div class="tools-search">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search borrowed tools..." id="borrowed-search">
                            </div>
                        </div>
                        
                        <div class="tools-table-container">
                            <table class="tools-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tool Name</th>
                                        <th>Borrower</th>
                                        <th>Borrow Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="borrowed-tools-body">
                                    <tr>
                                        <td>1</td>
                                        <td>Drill Machine</td>
                                        <td>Michael Johnson</td>
                                        <td>2023-06-10</td>
                                        <td><span class="status-badge pending">Pending Return</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hammer</td>
                                        <td>Sarah Williams</td>
                                        <td>2023-06-15</td>
                                        <td><span class="status-badge pending">Pending Return</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Power Saw</td>
                                        <td>David Brown</td>
                                        <td>2023-06-18</td>
                                        <td><span class="status-badge pending">Pending Return</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Screwdriver Set</td>
                                        <td>Michael Johnson</td>
                                        <td>2023-06-20</td>
                                        <td><span class="status-badge pending">Pending Return</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="tools-header">
                            <h3><i class="fas fa-toolbox"></i> Tools Inventory</h3>
                            <div class="tools-actions">
                                <button class="btn-add-tool" id="btn-add-tool">
                                    <i class="fas fa-plus"></i> Add New Tool
                                </button>
                                <div class="tools-search">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="Search tools..." id="stock-search">
                                </div>
                            </div>
                        </div>
                        
                        <div class="tools-table-container">
                            <table class="tools-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tool Name</th>
                                        <th>Category</th>
                                        <th>Total Qty</th>
                                        <th>Available</th>
                                        <th>Borrowed</th>
                                        <th>Condition</th>
                                        <th>Last Maintenance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="stock-tools-body">
                                    <tr>
                                        <td>1</td>
                                        <td>Drill Machine</td>
                                        <td>Power Tools</td>
                                        <td>5</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td><span class="status-badge excellent">Excellent</span></td>
                                        <td>2023-05-15</td>
                                        <td>
                                            <button class="btn-action edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn-action delete"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hammer</td>
                                        <td>Hand Tools</td>
                                        <td>10</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td><span class="status-badge good">Good</span></td>
                                        <td>2023-06-20</td>
                                        <td>
                                            <button class="btn-action edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn-action delete"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Power Saw</td>
                                        <td>Power Tools</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td><span class="status-badge good">Good</span></td>
                                        <td>2023-06-10</td>
                                        <td>
                                            <button class="btn-action edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn-action delete"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Screwdriver Set</td>
                                        <td>Hand Tools</td>
                                        <td>8</td>
                                        <td>5</td>
                                        <td>3</td>
                                        <td><span class="status-badge excellent">Excellent</span></td>
                                        <td>2023-06-15</td>
                                        <td>
                                            <button class="btn-action edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn-action delete"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Permit Tools Tab -->
                <div class="tab-content" id="permit-tools">
                    <div class="card">
                        <div class="tools-header">
                            <h3><i class="fas fa-clipboard-check"></i> Tool Borrowing Request</h3>
                        </div>
                        
                        <!-- New Permit Request Form -->
                        <div class="permit-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Technician Name</label>
                                    <select id="permit-technician">
                                        <option value="">Select Technician</option>
                                        <option value="1">Michael Johnson</option>
                                        <option value="2">Sarah Williams</option>
                                        <option value="3">David Brown</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Borrow From</label>
                                    <select id="permit-source">
                                        <option value="inventory">Inventory</option>
                                        <option value="technician">Technician</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row" id="technician-source-row" style="display:none;">
                                <div class="form-group">
                                    <label>Select Technician</label>
                                    <select id="permit-source-technician">
                                        <option value="">Select Technician</option>
                                        <option value="1">Michael Johnson</option>
                                        <option value="2">Sarah Williams</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Tools Needed</label>
                                    <div class="tools-selection">
                                        <div class="selected-tools" id="permit-selected-tools">
                                            <!-- Will be populated with selected tools -->
                                        </div>
                                        <button class="btn-add-tools" id="btn-add-permit-tools">
                                            <i class="fas fa-plus"></i> Add Tools
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Borrow Date/Time</label>
                                    <input type="datetime-local" id="permit-borrow-datetime" readonly>
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group full-width">
                                <label>Notes</label>
                                <textarea id="permit-notes" placeholder="Purpose of borrowing..."></textarea>
                            </div>
                            
                            <div class="form-actions">
                                <button class="btn-cancel" id="permit-cancel">Cancel</button>
                                <button class="btn-submit" id="permit-submit">Submit Request</button>
                            </div>
                        </div>
                        
                        <!-- Pending Approvals Section -->
                        <div class="tools-header">
                            <h3><i class="fas fa-user-clock"></i> Pending Approvals</h3>
                            <div class="tools-search">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search pending requests..." id="permit-pending-search">
                            </div>
                        </div>
                        
                        <div class="tools-table-container">
                            <table class="tools-table">
                                <thead>
                                    <tr>
                                        <th>Request ID</th>
                                        <th>Borrower</th>
                                        <th>Tools Requested</th>
                                        <th>Request Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="permit-pending-body">
                                    <tr>
                                        <td>REQ-001</td>
                                        <td>David Brown</td>
                                        <td>Drill Machine, Screwdriver Set</td>
                                        <td>2023-06-18</td>
                                        <td><span class="status-badge pending">Pending</span></td>
                                        <td>
                                            <button class="btn-action approve"><i class="fas fa-check"></i> Approve</button>
                                            <button class="btn-action reject"><i class="fas fa-times"></i> Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Handover Tools Tab -->
                <div class="tab-content" id="handover-tools">
                    <div class="card">
                        <div class="tools-header">
                            <h3><i class="fas fa-exchange-alt"></i> Tool Handover Request</h3>
                        </div>
                        
                        <!-- New Handover Form -->
                        <div class="handover-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>From Technician</label>
                                    <select id="handover-from">
                                        <option value="">Select Technician</option>
                                        <option value="1">Michael Johnson</option>
                                        <option value="2">Sarah Williams</option>
                                        <option value="3">David Brown</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>To Technician</label>
                                    <select id="handover-to">
                                        <option value="">Select Technician</option>
                                        <option value="1">Michael Johnson</option>
                                        <option value="2">Sarah Williams</option>
                                        <option value="3">David Brown</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group full-width">
                                <label>Tools to Handover</label>
                                <div class="tools-selection">
                                    <div class="selected-tools" id="handover-selected-tools">
                                        <!-- Will be populated with selected tools -->
                                    </div>
                                    <button class="btn-add-tools" id="btn-add-handover-tools">
                                        <i class="fas fa-plus"></i> Add Tools
                                    </button>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Handover Date/Time</label>
                                    <input type="datetime-local" id="handover-datetime" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group full-width">
                                <label>Handover Notes</label>
                                <textarea id="handover-notes" placeholder="Reason for handover..."></textarea>
                            </div>
                            
                            <div class="form-actions">
                                <button class="btn-cancel" id="handover-cancel">Cancel</button>
                                <button class="btn-submit" id="handover-submit">Submit Request</button>
                            </div>
                        </div>
                        
                        <!-- Pending Handover Approvals -->
                        <div class="tools-header">
                            <h3><i class="fas fa-user-clock"></i> Pending Handover Approvals</h3>
                            <div class="tools-search">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search pending handovers..." id="handover-pending-search">
                            </div>
                        </div>
                        
                        <div class="tools-table-container">
                            <table class="tools-table">
                                <thead>
                                    <tr>
                                        <th>Request ID</th>
                                        <th>From Technician</th>
                                        <th>To Technician</th>
                                        <th>Tools</th>
                                        <th>Request Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="handover-pending-body">
                                    <tr>
                                        <td>HOV-001</td>
                                        <td>Michael Johnson</td>
                                        <td>Sarah Williams</td>
                                        <td>Power Saw, Measuring Tape</td>
                                        <td>2023-06-17</td>
                                        <td><span class="status-badge pending">Pending</span></td>
                                        <td>
                                            <button class="btn-action approve"><i class="fas fa-check"></i> Approve</button>
                                            <button class="btn-action reject"><i class="fas fa-times"></i> Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Return Tools Tab -->
                <div class="tab-content" id="return-tools">
                    <div class="card">
                        <div class="tools-header">
                            <h3><i class="fas fa-undo"></i> Tool Return Process</h3>
                        </div>
                        
                        <!-- Return Form -->
                        <div class="return-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Return To</label>
                                    <select id="return-destination">
                                        <option value="inventory">Inventory</option>
                                        <option value="technician">Technician</option>
                                    </select>
                                </div>
                                <div class="form-group" id="return-technician-row" style="display:none;">
                                    <label>Select Technician</label>
                                    <select id="return-technician">
                                        <option value="">Select Technician</option>
                                        <option value="1">Michael Johnson</option>
                                        <option value="2">Sarah Williams</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Return Date/Time</label>
                                    <input type="datetime-local" id="return-datetime" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group full-width">
                                <label>Tools to Return</label>
                                <div class="tools-selection">
                                    <div class="selected-tools" id="return-selected-tools">
                                        <!-- Will be populated with selected tools -->
                                    </div>
                                    <button class="btn-add-tools" id="btn-add-return-tools">
                                        <i class="fas fa-plus"></i> Add Tools
                                    </button>
                                </div>
                            </div>
                            
                            <div class="form-group full-width">
                                <label>Return Condition</label>
                                <select id="return-condition">
                                    <option value="excellent">Excellent (no issues)</option>
                                    <option value="good">Good (minor wear)</option>
                                    <option value="maintenance">Needs Maintenance</option>
                                    <option value="damaged">Damaged</option>
                                </select>
                            </div>
                            
                            <div class="form-group full-width">
                                <label>Return Notes</label>
                                <textarea id="return-notes" placeholder="Condition notes, issues found..."></textarea>
                            </div>
                            
                            <div class="form-actions">
                                <button class="btn-cancel" id="return-cancel">Cancel</button>
                                <button class="btn-submit" id="return-submit">Submit Return</button>
                            </div>
                        </div>
                        
                        <!-- Pending Return Approvals -->
                        <div class="tools-header">
                            <h3><i class="fas fa-user-clock"></i> Pending Return Approvals</h3>
                            <div class="tools-search">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search pending returns..." id="return-pending-search">
                            </div>
                        </div>
                        
                        <div class="tools-table-container">
                            <table class="tools-table">
                                <thead>
                                    <tr>
                                        <th>Return ID</th>
                                        <th>Returned By</th>
                                        <th>Returned To</th>
                                        <th>Tools</th>
                                        <th>Return Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="return-pending-body">
                                    <tr>
                                        <td>RET-001</td>
                                        <td>David Brown</td>
                                        <td>Inventory</td>
                                        <td>Drill Machine</td>
                                        <td>2023-06-19</td>
                                        <td><span class="status-badge pending">Pending</span></td>
                                        <td>
                                            <button class="btn-action approve"><i class="fas fa-check"></i> Approve</button>
                                            <button class="btn-action reject"><i class="fas fa-times"></i> Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Add/Edit Tool -->
    <div class="modal" id="tool-modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3><i class="fas fa-toolbox"></i> <span id="modal-tool-title">Add New Tool</span></h3>
            
            <div class="modal-form">
                <div class="form-group">
                    <label>Tool Name</label>
                    <input type="text" id="tool-name" placeholder="Enter tool name">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Category</label>
                        <select id="tool-category">
                            <option value="power">Power Tools</option>
                            <option value="hand">Hand Tools</option>
                            <option value="measurement">Measurement</option>
                            <option value="ppe">PPE</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" id="tool-quantity" min="1" value="1">
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Condition</label>
                    <select id="tool-condition">
                        <option value="excellent">Excellent</option>
                        <option value="good">Good</option>
                        <option value="fair">Fair</option>
                        <option value="poor">Poor</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Last Maintenance Date</label>
                    <input type="date" id="tool-maintenance">
                </div>
                
                <div class="form-group">
                    <label>Notes</label>
                    <textarea id="tool-notes" placeholder="Additional notes..."></textarea>
                </div>
                
                <input type="hidden" id="tool-id">
                
                <div class="modal-actions">
                    <button class="btn-cancel" id="tool-cancel">Cancel</button>
                    <button class="btn-confirm" id="tool-save">Save Tool</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Select Tools -->
    <div class="modal" id="select-tools-modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3><i class="fas fa-toolbox"></i> Select Tools</h3>
            
            <div class="modal-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search tools..." id="modal-tools-search">
            </div>
            
            <div class="modal-tools-list" id="modal-tools-list">
                <!-- Sample Tools -->
                <div class="tool-item">
                    <input type="checkbox" class="tool-checkbox" id="tool-1" data-id="1" data-name="Drill Machine" data-category="Power Tools">
                    <div class="tool-info">
                        <label for="tool-1">Drill Machine</label>
                        <span>Power Tools | Available: 3</span>
                    </div>
                </div>
                <div class="tool-item">
                    <input type="checkbox" class="tool-checkbox" id="tool-2" data-id="2" data-name="Hammer" data-category="Hand Tools">
                    <div class="tool-info">
                        <label for="tool-2">Hammer</label>
                        <span>Hand Tools | Available: 8</span>
                    </div>
                </div>
                <div class="tool-item">
                    <input type="checkbox" class="tool-checkbox" id="tool-3" data-id="3" data-name="Power Saw" data-category="Power Tools">
                    <div class="tool-info">
                        <label for="tool-3">Power Saw</label>
                        <span>Power Tools | Available: 2</span>
                    </div>
                </div>
            </div>
            
            <div class="modal-actions">
                <button class="btn-cancel" id="select-tools-cancel">Cancel</button>
                <button class="btn-confirm" id="select-tools-confirm">Add Selected Tools</button>
            </div>
        </div>
    </div>

    <!-- Modal for View Request -->
    <div class="modal" id="view-request-modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3><i class="fas fa-file-alt"></i> Request Details</h3>
            
            <div class="request-details">
                <div class="detail-row">
                    <span class="detail-label">Request ID:</span>
                    <span class="detail-value" id="view-request-id">REQ-001</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Request Type:</span>
                    <span class="detail-value" id="view-request-type">Tool Borrowing</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">From:</span>
                    <span class="detail-value" id="view-request-from">Inventory</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">To:</span>
                    <span class="detail-value" id="view-request-to">David Brown</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Date:</span>
                    <span class="detail-value" id="view-request-date">2023-06-18</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Status:</span>
                    <span class="detail-value" id="view-request-status">Pending</span>
                </div>
                
                <div class="detail-section">
                    <h4>Tools</h4>
                    <div class="tools-list" id="view-request-tools">
                        <div class="tools-list-item">
                            <span>Drill Machine (Power Tools)</span>
                            <span>Qty: 1</span>
                        </div>
                        <div class="tools-list-item">
                            <span>Screwdriver Set (Hand Tools)</span>
                            <span>Qty: 1</span>
                        </div>
                    </div>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Notes:</span>
                    <span class="detail-value" id="view-request-notes">Need for installation work at client site</span>
                </div>
            </div>
            
            <div class="modal-actions" id="view-request-actions">
                <button class="btn-action approve"><i class="fas fa-check"></i> Approve</button>
                <button class="btn-action reject"><i class="fas fa-times"></i> Reject</button>
                <button class="btn-cancel">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Tab Switching Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Get all tab buttons and tab contents
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            
            // Add click event listeners to each tab button
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked button
                    button.classList.add('active');
                    
                    // Show the corresponding content
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Set current date/time for forms
            const now = new Date();
            const currentDateTime = now.toISOString().slice(0, 16);
            const currentDate = now.toISOString().slice(0, 10);
            
            document.getElementById('permit-borrow-datetime').value = currentDateTime;
            document.getElementById('handover-datetime').value = currentDateTime;
            document.getElementById('return-datetime').value = currentDateTime;
            
            // Show/hide technician select based on borrow source
            document.getElementById('permit-source').addEventListener('change', function() {
                const technicianRow = document.getElementById('technician-source-row');
                technicianRow.style.display = this.value === 'technician' ? 'block' : 'none';
            });
            
            // Show/hide technician select based on return destination
            document.getElementById('return-destination').addEventListener('change', function() {
                const technicianRow = document.getElementById('return-technician-row');
                technicianRow.style.display = this.value === 'technician' ? 'block' : 'none';
            });
            
            // Modal open/close functionality
            const modals = document.querySelectorAll('.modal');
            const closeButtons = document.querySelectorAll('.close-btn, .btn-cancel');
            
            // Open modal for adding new tool
            document.getElementById('btn-add-tool').addEventListener('click', () => {
                document.getElementById('tool-modal').style.display = 'block';
            });
            
            // Close modals
            closeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    modals.forEach(modal => {
                        modal.style.display = 'none';
                    });
                });
            });
            
            // Close modal when clicking outside
            window.addEventListener('click', (event) => {
                modals.forEach(modal => {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>