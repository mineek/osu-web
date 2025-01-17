<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'error' => [
        'chat' => [
            'empty' => 'Nu se pot trimite mesaje necompletate.',
            'limit_exceeded' => 'Trimiți mesaje prea repede, te rugăm să aștepți puțin înainte de a trimite unul nou.',
            'too_long' => 'Mesajul pe care dorești să-l trimiți este prea lung.',
        ],
    ],

    'scopes' => [
        'bot' => 'Acționează că un chat bot.',
        'identify' => 'Să te identifice și să-ți citească profilul public.',

        'chat' => [
            'write' => 'Trimite mesaje în numele tău.',
        ],

        'forum' => [
            'write' => 'Creează și editează subiecte și postări din forum în numele tău.',
        ],

        'friends' => [
            'read' => 'Vezi pe cine urmărești.',
        ],

        'public' => 'Citește datele publice pe partea ta.',
    ],
];
