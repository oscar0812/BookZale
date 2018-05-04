<?php
$config['displayErrorDetails'] = true;

function session_start_safe()
{
    if (!isset($_SESSION)) {
        session_start();
    }
}

function currentUser()
{
    session_start_safe();
    if (isset($_SESSION['user_id'])) {
        return UserQuery::create()->findPk($_SESSION['user_id']);
    }
    return null;
}

function logUserIn($id)
{
    session_start_safe();
    $_SESSION['user_id'] = $id;
}

function logUserOut()
{
    session_start_safe();
    unset($_SESSION['user_id']);
}

// date functions
// returns "x min ago, x hours ago, x days ago, etc"
function timeAgo($timestamp)
{
    $date1 = timestampToDate($timestamp);
    $date2 = getCurrentDateTime();
    $diff = dateDifference($date1, $date2);

    if ($diff->y > 0) {
        return $diff->y." year".(($diff->y>1)?"s":""). " ago";
    }

    if ($diff->m > 0) {
        return $diff->m." month".(($diff->m>1)?"s":""). " ago";
    }

    if ($diff->d > 0) {
        return $diff->d." day".(($diff->d>1)?"s":""). " ago";
    }

    if ($diff->h > 0) {
        return $diff->h." hour".(($diff->h>1)?"s":""). " ago";
    }

    if ($diff->i >= 0) {
        if ($diff->i < 5) {
            return "just now";
        }
        return $diff->i." minutes ago";
    }

    return "unknown";
}

function getCurrentDateTime()
{
    $dt = new DateTime();
    $dt->setTimezone(new DateTimeZone("Canada/Saskatchewan"));
    return $dt;
}

function getCurrentDate()
{
    $today = getCurrentDateTime();
    $today->setTime(0, 0);
    return $today;
}

function getCurrentTime()
{
    return getCurrentDateTime()->getTimestamp();
}

function timestampToDate($time)
{
    $dt = getCurrentDateTime();
    $dt->setTimestamp($time);
    return $dt;
}
