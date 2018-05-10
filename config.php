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

function startsWith($original, $substr)
{
    $length = strlen($substr);
    return (substr($original, 0, $length) === $substr);
}

function endsWith($original, $substr)
{
    $length = strlen($substr);

    return $length === 0 ||
    (substr($original, -$length) === $substr);
}

// To get whole url and not just the path
function url($path = false)
{
    if (isset($_SERVER['HTTPS'])) {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    $url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if ($path === false) {
        return $url;
    }
    // input => http://localhost/book_store/html/detail
    // $path => books
    // outpus => http://localhost/book_store/html/books
    return substr($url, 0, strrpos($url, '/')+1).$path;
}

// edit a url, for example, modify a get parameter
// current url => http://url.com/page?get=param
// input array => array('get'=>'change')
// output url => http://url.com/page?get=change
function modifyUrl($mod = array(), $url = false)
{
    // If $url wasn't passed in, use the current url
    if ($url == false) {
        $url = url();
    }

    // Parse the url into pieces
    $url_array = parse_url($url);

    // The original URL had a query string, modify it.
    if (!empty($url_array['query'])) {
        parse_str($url_array['query'], $query_array);
        foreach ($mod as $key => $value) {
            $query_array[$key] = $value;
        }
    }

    // The original URL didn't have a query string, add it.
    else {
        $query_array = $mod;
    }

    return $url_array['scheme'].'://'.$url_array['host'].$url_array['path'].'?'.http_build_query($query_array);
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

// get the difference between 2 dates
// $date2 >= $date1
function dateDifference($date1, $date2)
{
    if (is_int($date1)) {
        $date1 = timestampToDate($date1);
    }
    if (is_int($date2)) {
        $date2 = timestampToDate($date2);
    }

    return $date1->diff($date2);
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
