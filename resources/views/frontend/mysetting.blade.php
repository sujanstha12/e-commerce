@extends('frontend.master')
@section('container')
<div class="container">
    <h1>Account Settings</h1>

    <!-- Profile Section -->
    <div class="settings-section">
        <h2>Profile</h2>
        <div class="setting profile-image">
            <label for="profile-picture">Profile Picture</label>
            <img src="https://static1.bigstockphoto.com/8/9/3/large1500/398335286.jpg" alt="Profile Picture" id="profile-img">
            <input type="file" id="profile-picture" accept="image/*">
        </div>
        <div class="setting">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" placeholder="Enter your full name">
        </div>
        <div class="setting">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Enter your email address">
        </div>
    </div>

    <!-- Password Section -->
    <div class="settings-section">
        <h2>Password</h2>
        <div class="setting">
            <label for="current-password">Current Password</label>
            <input type="password" id="current-password" placeholder="Enter current password">
        </div>
        <div class="setting">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" placeholder="Enter new password">
        </div>
        <div class="setting">
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" id="confirm-password" placeholder="Confirm new password">
        </div>
    </div>

    <!-- Privacy Section -->
    <div class="settings-section privacy-options">
        <h2>Privacy Settings</h2>
        <div class="setting">
            <label for="visibility">Profile Visibility</label>
            <select id="visibility">
                <option value="public">Public</option>
                <option value="private">Private</option>
                <option value="friends-only">Friends Only</option>
            </select>
        </div>
        <div class="setting">
            <label for="data-sharing">Share My Data With Partners</label>
            <input type="checkbox" id="data-sharing">
        </div>
    </div>

    <!-- Notifications Section -->
    <div class="settings-section notifications">
        <h2>Notifications</h2>
        <div class="setting">
            <label for="email-notifications">Receive Email Notifications</label>
            <input type="checkbox" id="email-notifications" checked>
        </div>
        <div class="setting">
            <label for="sms-notifications">Receive SMS Notifications</label>
            <input type="checkbox" id="sms-notifications">
        </div>
    </div>

    <!-- Save Changes Button -->
    <div class="save-btn">
        <button>Save Changes</button>
    </div>
</div>
@endsection
