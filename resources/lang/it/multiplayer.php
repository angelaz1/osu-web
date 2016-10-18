<?php

/**
 *    Copyright 2016 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed in the hopes of
 *    attracting more community contributions to the core ecosystem of osu!
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'match' => [
        'header' => 'Partite Multigiocatore',
        'team-types' => [
            'head-to-head' => 'Testa a Testa',
            'tag-coop' => 'Tag Cooperativo',
            'team-vs' => 'VS a squadre',
            'tag-team-vs' => 'Tag VS a Squadre',
        ],
        'events' => [
            'player-left' => ':user ha lasciato la partita',
            'player-joined' => ':user si � unito alla partita',
            'player-kicked' => ':user � stato cacciato dalla partita',
            'match-created' => ':user ha creato la partita',
            'match-disbanded' => ':the partita � stata terminata',
            'host-changed' => ':user � diventato l\'host',

            'player-left-no-user' => 'un giocatore ha lasciato la partita',
            'player-joined-no-user' => 'un giocatore si � unito alla partita',
            'player-kicked-no-user' => 'un giocatore � stato cacciato dalla partita',
            'match-created-no-user' => 'la partita � stata creata',
            'match-disbanded-no-user' => 'la partita � stata terminata',
            'host-changed-no-user' => 'l\'host � cambiato',
        ],
        'in-progress' => '(partita in corso)',
        'score' => [
            'stats' => [
                'combo' => 'Combo',
                'accuracy' => 'Precisione',
                'score' => 'Punteggio',
                'countgeki' => 'MAX',
                'count300' => '300s',
                'countkatu' => '200s',
                'count100' => '100s',
                'count50' => '50s',
                'countmiss' => 'Errori',
            ],
        ],
        'failed' => 'FALLITO',
        'teams' => [
            'blue' => 'Team Blu',
            'red' => 'Team Rosso',
        ],
        'winner' => 'Il :team vince',
        'difference' => 'di :difference',
        'loading-events' => 'Caricamento eventi...',
        'more-events' => 'guarda tutto...',
        'beatmap-deleted' => 'beatmap cancellata',
    ],
    'game' => [
        'scoring-type' => [
            'score' => 'Punteggio pi� alto',
            'accuracy' => 'Precisione pi� alta',
            'combo' => 'Combo pi� alta',
            'scorev2' => 'Punteggio V2',
        ],
    ],
];
