@extends('front.layouts.master')
@section('title', 'User Dashboard')
@section('css')
<style>
    :root {
        --un-blue: #4A90E2;
        --un-blue-dark: #001F3F;
        --success: #10B981;
        --warning: #FFD700;
        --danger: #EF4444;
    }

    body {
        background: #f5f7fa;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    /* Status Badge */
    .status-badge {
        display: inline-block;
        padding: 0.5rem 1.2rem;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.9rem;
    }

    .status-pending {
        background: rgba(255, 215, 0, 0.2);
        color: #B8860B;
    }

    .status-approved {
        background: rgba(16, 185, 129, 0.2);
        color: #059669;
    }

    .status-payment-pending {
        background: rgba(239, 68, 68, 0.2);
        color: #DC2626;
    }

    .status-completed {
        background: rgba(74, 144, 226, 0.2);
        color: #0A72B5;
    }

    /* Cards */
    .card-custom {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        margin-bottom: 1.5rem;
        border: 2px solid transparent;
        transition: all 0.3s;
        height: auto;
    }

    .card-custom:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .card-header-custom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f0f0f0;
    }

    .card-title {
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--un-blue-dark);
        margin: 0;
    }

    /* Progress Timeline */
    .progress-timeline {
        position: relative;
        padding-left: 2rem;
    }

    .timeline-item {
        position: relative;
        padding-bottom: 2rem;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -2rem;
        top: 0;
        width: 2px;
        height: 100%;
        background: #e0e0e0;
    }

    .timeline-item.completed::before {
        background: var(--success);
    }

    .timeline-item.active::before {
        background: var(--warning);
    }

    .timeline-dot {
        position: absolute;
        left: -2.6rem;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #e0e0e0;
        border: 3px solid white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .timeline-item.completed .timeline-dot {
        background: var(--success);
    }

    .timeline-item.active .timeline-dot {
        background: var(--warning);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7);
        }

        50% {
            box-shadow: 0 0 0 10px rgba(255, 215, 0, 0);
        }
    }

    /* Info Row */
    .info-row {
        display: flex;
        justify-content: space-between;
        padding: 1rem 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .info-row:last-child {
        border-bottom: none;
    }

    .info-label {
        font-weight: 600;
        color: #666;
    }

    .info-value {
        font-weight: 700;
        color: var(--un-blue-dark);
    }

    /* Upload Area */
    .upload-area {
        border: 2px dashed #ddd;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s;
    }

    .upload-area:hover {
        border-color: var(--un-blue);
        background: rgba(74, 144, 226, 0.05);
    }

    .upload-area.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .upload-area.disabled:hover {
        border-color: #ddd;
        background: transparent;
    }

    /* Buttons */
    .btn-custom {
        padding: 0.8rem 2rem;
        border-radius: 12px;
        font-weight: 700;
        transition: all 0.3s;
        border: none;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, var(--un-blue), #0A72B5);
        color: white;
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(74, 144, 226, 0.3);
        color: white;
    }

    .btn-success-custom {
        background: linear-gradient(135deg, var(--success), #34D399);
        color: white;
    }

    .btn-success-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        color: white;
    }

    /* Alert */
    .alert-custom {
        border-radius: 15px;
        border: none;
        padding: 1.2rem;
        margin-bottom: 1.5rem;
    }

    .alert-success {
        background: rgba(16, 185, 129, 0.1);
        color: #059669;
    }

    .alert-warning {
        background: rgba(255, 215, 0, 0.1);
        color: #B8860B;
    }

    .alert-info {
        background: rgba(74, 144, 226, 0.1);
        color: #0A72B5;
    }

    /* File List */
    .file-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 10px;
        margin-bottom: 0.8rem;
    }

    .file-info {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .file-icon {
        width: 40px;
        height: 40px;
        background: var(--un-blue);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    /* Payment Section */
    .payment-card {
        background: linear-gradient(135deg, #FFD700, #FFA500);
        color: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
    }

    .call_to_action {
        display: none;
    }
</style>
@endsection
@section('content')

<!-- Main Content -->
<div class="container" style="padding: 2rem 0; margin-top: 100px;">

    <!-- Welcome Section -->
    <div class="mb-4">
        <h1 class="fw-bold" style="color: var(--un-blue-dark);">Welcome back, {{ $user->name }}! 👋</h1>
        <p class="text-muted">Here's your registration status and what you need to do next</p>
    </div>

    <!-- Notifications (Hidden by default) -->
    <div id="notificationsPanel" style="display: none;">
        <div class="alert alert-success alert-custom d-flex align-items-center justify-content-between">
            <div>
                <i class="fas fa-check-circle me-2"></i>
                <strong>Great news!</strong> Your application has been approved by the admin!
            </div>
            <button class="btn-close" onclick="dismissNotification(this)"></button>
        </div>

        <div class="alert alert-info alert-custom d-flex align-items-center justify-content-between">
            <div>
                <i class="fas fa-info-circle me-2"></i>
                Please upload your passport copy and student ID to proceed.
            </div>
            <button class="btn-close" onclick="dismissNotification(this)"></button>
        </div>
    </div>

    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-8">

            <!-- Application Status -->
            <div class="card-custom">
                <div class="card-header-custom">
                    <h3 class="card-title">
                        <i class="fas fa-clipboard-list me-2"></i>
                        Application Status
                    </h3>

                    @if($user->application_status_from_admin == 'pending')
                    <span class="status-badge status-pending" id="statusBadge"> ✓ Pending And Under Review </span>
                    @elseif($user->application_status_from_admin == 'approved')
                    <span class="status-badge status-approved" id="statusBadge"> ✓ Application reviewed and approved
                    </span>
                    @elseif($user->application_status_from_admin == 'rejected')

                    <span class="status-badge status-payment-pending" id="statusBadge"> ✘ Rejected </span>
                    @endif

                </div>

                <!-- Progress Timeline -->
                <div class="progress-timeline">
                    <div class="timeline-item completed">
                        <div class="timeline-dot"></div>
                        <div>
                            <h5 class="fw-bold mb-1">Registration Submitted</h5>
                            <p class="text-muted mb-0"> {{ $user->created_at->format('Y/m/d h:i a') }} </p>
                        </div>
                    </div>

                    <div
                        class="timeline-item {{ $user->application_status_from_admin == 'pending' ? 'active' : 'completed' }}">
                        <!-- completed -->
                        <div class="timeline-dot"></div>
                        <div>
                            <h5 class="fw-bold mb-1">Admin Review</h5>
                            <p class="text-muted mb-0">Application reviewed and approved</p>
                        </div>
                    </div>

                    <div class="timeline-item {{ $user->payment_status == 'paid' ? 'completed' : 'active'  }}">
                        <div class="timeline-dot"></div>
                        <div>
                            <h5 class="fw-bold mb-1">Payment</h5>
                            <p class="text-muted mb-0">Complete payment to secure your spot</p>
                            <a class="btn btn-danger btn-sm" href="{{ route('front.pricing') }}"> Payment <i
                                    class="fas fa-credit-card"></i> </a>
                        </div>
                    </div>

                    <div class="timeline-item {{ $user->complete_application == 1 ? 'completed' : ''  }}">
                        <div class="timeline-dot"></div>
                        <div>
                            <h5 class="fw-bold mb-1">Confirmed</h5>
                            <p class="text-muted mb-0">Registration complete!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Need Help -->
            <div class="card-custom"
                style="background: linear-gradient(135deg, rgba(74, 144, 226, 0.1), rgba(10, 114, 181, 0.05)); border: 2px solid var(--un-blue);">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-headset me-2"></i>
                    Need Help?
                </h5>
                <p class="mb-3" style="line-height: 1.8;">We're here to help! Contact us if you have any questions.</p>
                <div class="d-grid gap-2">
                    <a href="https://wa.me/19175130904" class="btn btn-success-custom btn-custom">
                        <i class="fab fa-whatsapp me-2"></i>
                        WhatsApp Support
                    </a>
                </div>
            </div>
            <!-- Upload Documents -->
            {{-- <div class="card-custom">
                <div class="card-header-custom">
                    <h3 class="card-title">
                        <i class="fas fa-file-upload me-2"></i>
                        Upload Documents
                    </h3>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Required Documents:</h5>

                    <!-- Passport Upload -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="fas fa-passport me-2"></i>
                            Passport Copy
                            <span class="text-danger">*</span>
                        </label>
                        <div class="upload-area" onclick="document.getElementById('passportFile').click()">
                            <i class="fas fa-cloud-upload-alt"
                                style="font-size: 3rem; color: var(--un-blue); margin-bottom: 1rem;"></i>
                            <p class="mb-0"><strong>Click to upload</strong> or drag and drop</p>
                            <small class="text-muted">PDF, JPG or PNG (Max 5MB)</small>
                        </div>
                        <input type="file" id="passportFile" style="display: none;" accept=".pdf,.jpg,.jpeg,.png"
                            onchange="handleFileUpload(this, 'passport')">

                        <!-- Uploaded Files -->
                        <div id="passportFiles" style="margin-top: 1rem;">
                            <!-- Files will appear here -->
                        </div>
                    </div>

                    <!-- Student ID Upload -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="fas fa-id-card me-2"></i>
                            Student ID / Proof of Enrollment
                            <span class="text-danger">*</span>
                        </label>
                        <div class="upload-area" onclick="document.getElementById('studentIdFile').click()">
                            <i class="fas fa-cloud-upload-alt"
                                style="font-size: 3rem; color: var(--un-blue); margin-bottom: 1rem;"></i>
                            <p class="mb-0"><strong>Click to upload</strong> or drag and drop</p>
                            <small class="text-muted">PDF, JPG or PNG (Max 5MB)</small>
                        </div>
                        <input type="file" id="studentIdFile" style="display: none;" accept=".pdf,.jpg,.jpeg,.png"
                            onchange="handleFileUpload(this, 'studentId')">

                        <!-- Uploaded Files -->
                        <div id="studentIdFiles" style="margin-top: 1rem;">
                            <!-- Files will appear here -->
                        </div>
                    </div>

                    <button class="btn btn-primary-custom btn-custom" onclick="submitDocuments()">
                        <i class="fas fa-paper-plane me-2"></i>
                        Submit Documents
                    </button>
                </div>
            </div> --}}


        </div>

        <!-- Right Column -->
        <div class="col-lg-4">

            <!-- Registration Details -->
            <div class="card-custom">
                <div class="card-header-custom">
                    <h3 class="card-title">
                        <i class="fas fa-info-circle me-2"></i>
                        Your Details
                    </h3>
                </div>

                <div class="info-row">
                    <span class="info-label">Full Name</span>
                    <span class="info-value">{{ $user->name }}</span>
                </div>

                <div class="info-row">
                    <span class="info-label">Email</span>
                    <span class="info-value">john@example.com</span>
                </div>

                <div class="info-row">
                    <span class="info-label">Package</span>
                    <span class="info-value">Early Bird</span>
                </div>

                <div class="info-row">
                    <span class="info-label">Committee</span>
                    <span class="info-value">UNGA</span>
                </div>

                <div class="info-row">
                    <span class="info-label">Country Preference</span>
                    <span class="info-value">Egypt</span>
                </div>

                <div class="info-row">
                    <span class="info-label">Amount</span>
                    <span class="info-value" style="color: var(--success); font-size: 1.3rem;">$950</span>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card-custom">
                <div class="card-header-custom">
                    <h3 class="card-title">
                        <i class="fas fa-bolt me-2"></i>
                        Quick Actions
                    </h3>
                </div>

                <div class="d-grid gap-2">


                    <a class="btn btn-outline-primary btn-custom" href="{{ route('front.contact') }}">
                        <i class="fas fa-envelope me-2"></i>
                        Contact Support
                    </a>

                    <a class="btn btn-outline-primary btn-custom" href="{{ route('front.faq') }}">
                        <i class="fas fa-question-circle me-2"></i>
                        View FAQs
                    </a>
                </div>
            </div>



        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection

@section('js')
<script>
    // Toggle Notifications
        function toggleNotifications() {
            const panel = document.getElementById('notificationsPanel');
            panel.style.display = panel.style.display === 'none' ? 'block' : 'none';
        }

        // Dismiss Notification
        function dismissNotification(btn) {
            btn.closest('.alert').remove();
            const count = document.getElementById('notificationCount');
            const current = parseInt(count.textContent);
            if (current > 0) {
                count.textContent = current - 1;
            }
        }

        // Handle File Upload
        function handleFileUpload(input, type) {
            const file = input.files[0];
            if (!file) return;

            const container = document.getElementById(type + 'Files');
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';
            fileItem.innerHTML = `
                <div class="file-info">
                    <div class="file-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                        <div class="fw-bold">${file.name}</div>
                        <small class="text-muted">${(file.size / 1024).toFixed(2)} KB</small>
                    </div>
                </div>
                <button class="btn btn-sm btn-danger" onclick="this.closest('.file-item').remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;
            container.appendChild(fileItem);
        }

        // Submit Documents
        function submitDocuments() {
            alert('Documents submitted successfully! Admin will review them shortly.');

            // Simulate document approval after 2 seconds
            setTimeout(() => {
                document.getElementById('statusBadge').textContent = '✓ Documents Approved - Ready for Payment';
                document.getElementById('statusBadge').className = 'status-badge status-approved';
                document.getElementById('paymentSection').style.display = 'block';

                // Show success notification
                const notifPanel = document.getElementById('notificationsPanel');
                const newNotif = document.createElement('div');
                newNotif.className = 'alert alert-success alert-custom';
                newNotif.innerHTML = `
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Documents Approved!</strong> You can now proceed to payment.
                `;
                notifPanel.insertBefore(newNotif, notifPanel.firstChild);
                notifPanel.style.display = 'block';

                // Update notification count
                const count = document.getElementById('notificationCount');
                count.textContent = parseInt(count.textContent) + 1;
            }, 2000);
        }

        // Process Payment
        function processPayment() {
            alert('Redirecting to secure payment gateway...\n\nNote: This is a demo. In production, this would redirect to Stripe/PayPal.');

            // Simulate successful payment
            setTimeout(() => {
                document.getElementById('statusBadge').textContent = '✓ Registration Complete!';
                document.getElementById('statusBadge').className = 'status-badge status-completed';
                document.getElementById('paymentSection').innerHTML = `
                    <div class="text-center p-5">
                        <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                        <h3 class="fw-bold mt-4 mb-3">Payment Successful!</h3>
                        <p class="lead">Your registration is now complete. You'll receive a confirmation email shortly.</p>
                    </div>
                `;
            }, 1500);
        }


</script>
@endsection
