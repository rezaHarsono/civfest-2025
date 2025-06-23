<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Event
{
    public static function all()
    {
        return [
            [
                'id_event' => 2,
                'nama_event' => 'Competitions',
                'link_event' => '/registerCompetitions',
                'link_page' => '/competitions'
            ],

            [
                'id_event' => 3,
                'nama_event' => 'National Seminar',
                'deskripsi' => 'National Seminar is a seminar activity aimed at academics, experts, practitioners, and the general public. It aims to provide knowledge to participants about the themes to be discussed related to construction technology.',
                'slug' => 'seminar-page',
                'link_event' => 'https://forms.gle/xGpeyo5astC7UKo96',
                'link_page' => ''
            ],

            [
                'id_event' => 4,
                'nama_event' => 'Closing',
                'deskripsi' => 'Closing Ceremony merupakan acara terakhir dari CIVFEST. Terdapat Awarding untuk memberikan penghargaan kepada juara tiap mata lomba di CIVFEST dan beberapa penampilan band jurusan serta guest star.',
                'slug' => 'closing-page',
                'link_event' => 'https://forms.gle/1BKrZkYPRzhAzt4m6',
                'link_page' => ''
            ]
        ];
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), function ($event) use ($slug) {
            return $event['slug'] == $slug;
        });
    }
}
