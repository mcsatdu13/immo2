<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'bien_index' => [[], ['_controller' => 'App\\Controller\\BienController::index'], [], [['text', '/bien/']], [], []],
    'bien_new' => [[], ['_controller' => 'App\\Controller\\BienController::new'], [], [['text', '/bien/new']], [], []],
    'bien_show' => [['id'], ['_controller' => 'App\\Controller\\BienController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/bien']], [], []],
    'bien_edit' => [['id'], ['_controller' => 'App\\Controller\\BienController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/bien']], [], []],
    'bien_delete' => [['id'], ['_controller' => 'App\\Controller\\BienController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/bien']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
    'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
    'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
    'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
    'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
    'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
    'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
    'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/register/confirm']], [], []],
    'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
    'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
    'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
    'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
    'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/resetting/reset']], [], []],
    'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
];