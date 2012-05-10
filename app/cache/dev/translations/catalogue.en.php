<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Λάθος όνομα χρήστη ή κωδικός',
    'fos_user_group_form_name' => 'Group name:',
    'fos_user_profile_form_user_username' => 'Όνομα Χρήστη:',
    'fos_user_profile_form_user_email' => 'Email:',
    'fos_user_profile_form_current' => 'Τωρινός κωδικός:',
    'fos_user_registration_form_username' => 'Όνομα χρήστη:',
    'fos_user_registration_form_email' => 'Email:',
    'fos_user_registration_form_plainPassword_first' => 'Κωδικός:',
    'fos_user_registration_form_plainPassword_second' => 'Επιβεβαίωση:',
    'fos_user_resetting_form_new_first' => 'Νέος κωδικός:',
    'fos_user_resetting_form_new_second' => 'Επιβεβαίωση:',
    'fos_user_change_password_form_new_first' => 'Νέος κωδικός:',
    'fos_user_change_password_form_new_second' => 'Επιβεβαίωση:',
    'fos_user_change_password_form_current' => 'Τωρινός Κωδικός:',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Όνομα:',
    'security.login.password' => 'Κωδικός:',
    'security.login.remember_me' => 'Απομνημόνευση',
    'security.login.submit' => 'Σύνδεση',
    'profile.show.username' => 'Όνομα Χρήστη',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Αλλαγή',
    'profile.flash.updated' => 'Το προφίλ σας έχει αλλάξει',
    'change_password.submit' => 'Αλλαγή κωδικού',
    'change_password.flash.success' => 'Ο κωδικός έχει αλλάξει',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Συγχαρητήρια %username%, ο λογαριασμλος σου έχει ενεργοποιηθεί.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Εγγραφή',
    'registration.flash.user_created' => 'Ο χρήστης έχει δημιουργηθεί επιτυχώς',
    'registration.email.subject' => 'Καλωσήρθες %username%!',
    'registration.email.message' => 'Γεια σου %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Αποσύνδεση',
    'layout.login' => 'Σύνδεση',
    'layout.register' => 'Εγγραφή',
    'layout.logged_in_as' => 'Συνδεδεμένος ως %username%',
    'fos_user_profile_form_name' => 'Όνομα:',
    'fos_user_profile_form_lastname' => 'Επίθετο:',
    'fos_user_profile_form_phone' => 'Τηλέφωνο',
    'fos_user_registration_form_name' => 'Όνομα:',
    'fos_user_registration_form_lastname' => 'Επίθετο:',
    'fos_user_registration_form_phone' => 'Τηλέφωνο:',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => 'The username is too short',
    'fos_user.username.long' => 'The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => 'The email is too short',
    'fos_user.email.long' => 'The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => 'The password is too short',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => 'The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => 'The name is too short',
    'fos_user.group.long' => 'The name is too long',
  ),
));



return $catalogue;
