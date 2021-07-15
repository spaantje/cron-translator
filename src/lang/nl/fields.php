<?php

return [
    'minutes' => [
        'every' => 'elke minuut',
        'increment' => 'elke :increment minuten',
        'times_per_increment' => ':times keer per :increment minuut',
        'multiple' => ':times keer per uur',
    ],
    'hours' => [
        'every' => 'elke uur',
        'once_an_hour' => 'een keer per uur',
        'increment' => 'elke :increment uur',
        'multiple_per_increment' => ':count hours out of :increment',
        'times_per_increment' => ':times every :increment hours',
        'increment_chained' => 'of every :increment hours',
        'multiple_per_day' => ':count hours a day',
        'times_per_day' => ':times per dag',
        'once_at_time' => 'om :time',
    ],
    'days_of_month' => [
        'every' => 'elke dage',
        'increment' => 'elke :increment dagen',
        'multiple_per_increment' => ':count days out of :increment',
        'multiple_per_month' => ':count dagen per maand',
        'once_on_day' => 'on the :day',
        'every_on_day' => 'on the :day of every month',
    ],
    'months' => [
        'every' => 'every month',
        'every_on_day' => 'the :day of every month',
        'increment' => 'every :increment months',
        'multiple_per_increment' => ':count months out of :increment',
        'multiple_per_year' => ':count months a year',
        'once_on_month' => 'on :month',
        'once_on_day' => 'on :month the :day',
    ],
    'days_of_week' => [
        'every' => 'every :weekday',
        'increment' => 'every :increment days of the week',
        'multiple_per_increment' => ':count days of the week out of :increment',
        'multiple_days_a_week' => ':count days a week',
        'once_on_day' => 'on :days',
    ],
    'years' => [
        'every' => 'elk jaar',
    ],
];
