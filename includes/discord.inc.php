<?php

//Functie voor het ophalen van het aantal users van de TechTraject server
function getdiscorduseramount() {
    $inviteUrl = "https://discord.com/api/v10/invites/jsz7uV4JMz?with_counts=true&with_expiration=true";

    $json = file_get_contents($inviteUrl);

    $data = json_decode($json);

    return $data->approximate_member_count;
}