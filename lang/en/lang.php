<?php

return [
    'plugin' => [
        'name' => 'User',
        'description' => 'Front-end user management.',
        'tab' => 'Users',
        'access_users' => 'Manage Users',
        'access_groups' => 'Manage User Groups',
        'access_settings' => 'Manage User Settings'
    ],
    'users' => [
        'menu_label' => 'Users',
        'all_users' => 'All Users',
        'new_user' => 'New User',
        'list_title' => 'Manage Users',
        'activating' => 'Activating...',
        'trashed_hint_title' => 'User has deactivated their account',
        'trashed_hint_desc' => 'This user has deactivated their account and no longer wants to appear on the site. They can reactivate their account at any time by signing back in.',
        'activate_warning_title' => 'User not activated!',
        'activate_warning_desc' => 'This user has not been activated and will be unable to sign in.',
        'activate_confirm' => 'Do you really want to activate this user?',
        'active_manually' => 'Activate this user manually',
        'delete_confirm' => 'Do you really want to delete this user?',
        'activated_success' => 'User has been activated successfully!',
        'return_to_list' => 'Return to users list',
        'delete_selected_empty' => 'There are no selected users to delete.',
        'delete_selected_confirm' => 'Delete the selected users?',
        'delete_selected_success' => 'Successfully deleted the selected users.'
    ],
    'settings' => [
        'users' => 'Users',
        'menu_label' => 'User settings',
        'menu_description' => 'Manage user based settings.',
        'activation_tab' => 'Activation',
        'signin_tab' => 'Sign in',
        'registration_tab' => 'Registration',
        'notifications_tab' => 'Notifications',
        'allow_registration' => 'Allow user registration',
        'allow_registration_comment' => 'If this is disabled users can only be created by administrators.',
        'activate_mode' => 'Activation mode',
        'activate_mode_comment' => 'Select how a user account should be activated.',
        'activate_mode_auto' => 'Automatic',
        'activate_mode_auto_comment' => 'Activated automatically upon registration.',
        'activate_mode_user' => 'User',
        'activate_mode_user_comment' => 'The user activates their own account using mail.',
        'activate_mode_admin' => 'Administrator',
        'activate_mode_admin_comment' => 'Only an Administrator can activate a user.',
        'welcome_template' => 'Welcome mail template',
        'welcome_template_comment' => 'This mail template is sent to a user when they are first activated.',
        'require_activation' => 'Sign in requires activation',
        'require_activation_comment' => 'Users must have an activated account to sign in.',
        'use_throttle' => 'Throttle attempts',
        'use_throttle_comment' => 'Repeat failed sign in attempts will temporarily suspend the user.',
        'login_attribute' => 'Login attribute',
        'login_attribute_comment' => 'Select what primary user detail should be used for signing in.',
        'no_mail_template' => 'Do not send a notification',
        'hint_templates' => 'You can customize mail templates by selecting Mail > Mail Templates from the settings menu.'
    ],
    'user' => [
        'label' => 'User',
        'id' => 'ID',
        'username' => 'Username',
        'name' => 'Name',
        'surname' => 'Surname',
        'email' => 'Email',
        'created_at' => 'Registered',
        'reset_password' => 'Reset Password',
        'reset_password_comment' => 'To reset this users password, enter a new password here.',
        'confirm_password' => 'Password Confirmation',
        'confirm_password_comment' => 'Enter the password again to confirm it.',
        'groups' => 'Groups',
        'empty_groups' => 'There are no user groups available.',
        'avatar' => 'Avatar',
        'details' => 'Details',
        'account' => 'Account'
    ],
    'group' => [
        'label' => 'Group',
        'id' => 'ID',
        'name' => 'Name',
        'description_field' => 'Description',
        'code' => 'Code',
        'code_comment' => 'Enter a unique code used to identify this group.',
        'created_at' => 'Created',
        'users_count' => 'Users'
    ],
    'groups' => [
        'menu_label' => 'Groups',
        'all_groups' => 'User Groups',
        'new_group' => 'New Group',
        'delete_selected_confirm' => 'Do you really want to delete selected groups?',
        'list_title' => 'Manage Groups',
        'delete_confirm' => 'Do you really want to delete this group?',
        'delete_selected_success' => 'Successfully deleted the selected groups.',
        'delete_selected_empty' => 'There are no selected groups to delete.',
        'return_to_list' => 'Back to groups list',
        'return_to_users' => 'Back to users list',
        'create_title' => 'Create User Group',
        'update_title' => 'Edit User Group',
        'preview_title' => 'Preview User Group'
    ],
    'login' => [
        'attribute_email' => '이메일',
        'attribute_username' => 'Username'
    ],
    'account' => [
        'account' => 'Account',
        'account_desc' => 'User management form.',
        'redirect_to' => 'Redirect to',
        'redirect_to_desc' => 'Page name to redirect to after update, sign in or registration.',
        'code_param' => 'Activation Code Param',
        'code_param_desc' => 'The page URL parameter used for the registration activation code',
        'invalid_user' => 'A user was not found with the given credentials.',
        'invalid_activation_code' => 'Invalid activation code supplied.',
        'invalid_deactivation_pass' => 'The password you entered was invalid.',
        'success_activation' => 'Successfully activated your account.',
        'success_deactivation' => 'Successfully deactivated your account. Sorry to see you go!',
        'success_saved' => 'Settings successfully saved!',
        'login_first' => 'You must be logged in first!',
        'already_active' => 'Your account is already activated!',
        'activation_email_sent' => 'An activation email has been sent to your nominated email address.',
        'registration_disabled' => 'Registrations are currently disabled.',
        'sign_in' => 'Sign in',
        'register' => 'Register',
        'full_name' => 'Full Name',
        'email' => 'Email',
        'password' => 'Password',
        'login' => 'Login',
        'new_password' => 'New Password',
        'new_password_confirm' => 'Confirm New Password'
    ],
    'reset_password' => [
        'reset_password' => 'Reset Password',
        'reset_password_desc' => 'Forgotten password form.',
        'code_param' => 'Reset Code Param',
        'code_param_desc' => 'The page URL parameter used for the reset code'
    ],
    'session' => [
        'session' => 'Session',
        'session_desc' => 'Adds the user session to a page and can restrict page access.',
        'security_title' => 'Allow only',
        'security_desc' => 'Who is allowed to access this page.',
        'all' => 'All',
        'users' => 'Users',
        'guests' => 'Guests',
        'redirect_title' => 'Redirect to',
        'redirect_desc' => 'Page name to redirect if access is denied.',
        'logout' => 'You have been successfully logged out!'
    ]
];
