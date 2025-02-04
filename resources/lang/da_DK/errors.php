<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    '404_header'              => 'Firefly III kan ikke finde denne side.',
    '404_page_does_not_exist' => 'Den side du har anmodet om findes ikke. Kontroller at du ikke har indtastet den forkerte URL. Har du måske tastet forkert?',
    '404_send_error'          => 'Hvis du blev omdirigeret til denne side automatisk, bedes du modtage min undskyldning. Denne fejl er registreret i dine logfiler, og jeg ville være taknemmelig, hvis du sendte mig disse logfiler.',
    '404_github_link'         => 'Hvis du er sikker på, at denne side burde eksistere, bedes du oprette en fejlmelding på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Hovsa',
    'fatal_error'             => 'Der opstod en alvorlig fejl. Tjek logfilerne i "storage/logs" eller brug "docker logs -f [container]" for at se, hvad der gik galt.',
    'maintenance_mode'        => 'Firefly III kører i vedligeholdelsestilstand.',
    'be_right_back'           => 'Er straks tilbage!',
    'check_back'              => 'Firefly III er utilgængelig pga. en nødvendig vedligeholdelse. Tjek venligst tilbage om et sekund.',
    'error_occurred'          => 'Beklager, der opstod en fejl.',
    'db_error_occurred'       => 'Hovsa! Der opstod en databasefejl.',
    'error_not_recoverable'   => 'Desværre er denne fejl uoprettelig :(. Firefly III brød sammen. Fejlen er:',
    'error'                   => 'Fejl',
    'error_location'          => 'Denne fejl opstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med koden :code.',
    'stacktrace'              => 'Stack trace',
    'more_info'               => 'Yderligere information',
    'collect_info'            => 'Der findes mere information i mappen <code>storage/logs</code> hvor du vil finde logfilerne. Hvis du kører Docker, brug <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'Du kan læse mere om indhentning af fejloplysninger i <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">FAQ</a>.',
    'github_help'             => 'Få hjælp på GitHub',
    'github_instructions'     => 'Du er mere end velkommen til at oprette en ny fejlmelding <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">på GitHub</a></strong>.',
    'use_search'              => 'Brug søgefeltet!',
    'include_info'            => 'Inkludér informationen <a href=":link">fra denne fejlfindingsside</a>.',
    'tell_more'               => 'Uddyb gerne mere end bare "det siger Hovsa!"',
    'include_logs'            => 'Inkludér fejllogfiler (se ovenfor).',
    'what_did_you_do'         => 'Fortæl os, hvad du lavede.',
    'offline_header'          => 'Du er sandsynligvis offline',
    'offline_unreachable'     => 'Firefly III er ikke tilgængelig. Din enhed er i øjeblikket offline, eller serveren fungerer ikke.',
    'offline_github'          => 'Hvis du er sikker på, at både din enhed og serveren er online, skal du åbne en ticket på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
