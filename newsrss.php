<?php

// recent-widget.php
// Displays recent posts from a phpBB forum
// More info: http://www.lkozma.net/blog/phpbb-recent-posts-widget
//
$db_host = 'mmix2.mysql.ukraine.com.ua';  // TODO: put here your database host name
$db_user = 'mmix2_orange';  // TODO: put here your database user name
$db_pwd = 'xtwhmyx3';   // TODO: put here your database password
$database = 'mmix2_orange';  // TODO: change here if your forum database name is something else than phpbb_forum

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("DB connection error");

if (!mysql_select_db($database))
    die("DB selection error");

// sending query
mysql_query("SET NAMES 'utf8'");

// The following queries the most recent comments from the database
// It fetches the post time, post text, topic title and username
// The query is limited to approved posts and the 5 most recent posts are returned.
// Feel free to play around with the query and fetch different fields. Some information about the phpBB database structure is here:
// http://www.phpbbdoctor.com/doc_tables.php . Be aware that these things could change between versions. I tested it with phpBB 3.0
//
// [EDIT OCT 2011] Note that there are two versions of the query, the first will return the 5 most recent posts, the second will return the 5 most recent posts _from separate topics_,
//   i.e. it will not show posts from the same topic. This was suggested in the comments of the blog post.
// Uncomment only one of the two queries, depending on which you prefer.

//$result = mysql_query("select phpbb_posts.post_time as post_time, phpbb_posts.post_text as post_text, phpbb_posts.topic_id as tid, phpbb_posts.forum_id as fid, phpbb_topics.topic_title as topic_title, phpbb_users.username as username, phpbb_posts.post_username as anon from phpbb_posts, phpbb_topics, phpbb_users where post_visibility=1 and phpbb_posts.topic_id=phpbb_topics.topic_id and phpbb_posts.forum_id=34 and phpbb_posts.poster_id=phpbb_users.user_id order by post_time desc limit 10");

$result = mysql_query("select phpbb_posts.post_time as post_time, phpbb_posts.post_text as post_text, phpbb_posts.topic_id as tid, phpbb_posts.forum_id as fid, phpbb_topics.topic_title as topic_title, phpbb_users.username as username, phpbb_posts.post_username as anon from phpbb_posts, phpbb_topics, phpbb_users where post_id IN (select * from (select min(post_id) as mpt from phpbb_posts group by topic_id order by mpt desc limit 10) alias ) AND post_visibility=1 and phpbb_posts.forum_id=34 and phpbb_posts.topic_id=phpbb_topics.topic_id and phpbb_posts.poster_id=phpbb_users.user_id order by post_time desc;");


if (!$result) {
    die("DB query error");
}

echo "<p  style='background-color:#F46D1D; color:white; margin:0;padding:10px; border-radius: 5px 5px 0 0;'>Новости</p>";
echo "<table border='1' style='background-color:#ffffff'; width='100%'>";
$i = 0;
while($row = mysql_fetch_assoc($result))
{
    $i = $i+1; // This is to have different color for odd/even rows
    echo "<tr><td style='background-color:#E4E9EE; padding:1px; border-bottom-style:solid; border-bottom-width:1px; border-bottom-color:#F46D1D;'>";
    // Time of post
    $ptime = strftime('%I:%M %P %d.%m.%Y', $row['post_time']);
    // Username
    $puser = ($row['username']=="Anonymous")?$row['anon']:$row['username'];
    // Post text
    // Removing BBCode
    $ppost = preg_replace('/\[[^\]]*\]/', '', $row['post_text']);
    // Summarizing post
    $ppost = summary($ppost);
    // Removing some leftover formatting
    $ppost = str_replace("<!--", "", $ppost);
    $ppost = str_replace("-->", "", $ppost);

    // TODO: Replace nebulo.ro in the following line to the URL of your forum
    echo "<a href='http://orangepark.mmix.ua/viewtopic.php?f=".$row['fid']."&t=".$row['tid']."'><b>".$row['topic_title']."</b></a><span color=gray style='float:right;'>".$ptime."</span><br><b style='padding-right:10px; color: #AA0000;'>".$puser."</b>".$ppost;
    echo "</td></tr>";
}
mysql_free_result($result);

// This function summarizes posts to max. 200 characters
function summary($str, $limit = 200, $strip = false) {
    $str = ($strip == true)?strip_tags($str):$str;
    if (strlen ($str) > $limit) {
        $str = substr ($str, 0, $limit - 3);
        return trim(substr ($str, 0, strrpos ($str, ' ')).'...');
    }
    return trim($str);
}

// TODO: put your own forum link in the last line
?>
</table>
<p style='background-color:#F46D1D; color:white; margin-bottom:10px;padding:10px; border-radius: 0 0 5px 5px; max-height: 5px!important;'></p>