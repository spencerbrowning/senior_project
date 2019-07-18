<?php

function gravatar_url($email)
{
    $email = md5($email);

    return "https://gravatar.com/avatar/{$email}" . http_build_query([
            's' => 60,
            'd' => 'https://cdn1.iconfinder.com/data/icons/navigation-elements/512/user-login-man-human-body-mobile-person-512.png'
        ]);
}
