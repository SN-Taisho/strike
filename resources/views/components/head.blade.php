<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <meta name="description"
        content="Bowl like a pro at Strike Academy! Lessons, leagues, tournaments & parties for all ages. Strike the perfect outing!" />
    <meta name="keywords"
        content="bowling academy, learn to bowl, bowling lessons, bowling training, improve bowling game, bowling tips, bowling drills, bowling equipment, bowling shoes, bowling ball fitting, bowling league, bowling tournament, bowling party">
    <meta name="keywords"
        content="bowling for beginners, learn to bowl from scratch, first time bowling, bowling for kids, family bowling">
    <meta name="keywords"
        content=" improve bowling score, bowling drills for intermediate players, bowling tips for accuracy, bowling techniques, spare shooting, strike shooting, bowling ball selection, bowling training for advanced players, bowling coaching">
    <meta name="keywords"
        content=" how to become a pro bowler, tournament preparation, mental game for bowling, high score bowling, bowling equipment for advanced players">
    <meta name="keywords"
        content="fun bowling, social bowling, competitive bowling, bowling for health, bowling for fitness, bowling for stress relief, bowling team building">
    <meta name="keywords"
        content="bowling academy singapore, bowling lessons singapore, beginner bowling singapore, professional bowling singapore, bowling coach singapore, bowling for kids singapore, bowling birthday party singapore, strike the pins singapore, bowl like a pro singapore">

    <!-- <title>
@isset($title)
    {{ $title }} |
@endisset {{ config('app.name') }}
</title> -->
    <title>
        @isset($title)
            Strike Academy | {{ $title }}
        @else
            Strike Academy
        @endisset
    </title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
