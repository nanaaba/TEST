<?php
require_once './DiscusionClass.php';
session_start();
$stud_id = $_SESSION['user_id'];
$number = $_SESSION['numrows'];
$post_id = $_SESSION['discussion_id'];
$discussion = new DiscusionClass();
$query_info = $discussion->getdiscussioncomments($post_id);
if ($query_info) {

    if ($number != mysql_num_rows($query_info)) {
        $_SESSION['numrows'] = mysql_num_rows($query_info);
        if (mysql_num_rows($query_info) > 0) {

            while ($row = mysql_fetch_assoc($query_info)) {
               
                $_SESSION['discussion_id'] = $post_id;
                ?>  
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <a class="avatar avatar-away" href="javascript:void(0)">
                                <img src="global/portraits/7.jpg" alt=""><i></i></a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <small class="pull-right">6h ago</small>
                                <a class="name"><?php echo $row['membername'] ?></a> posted message 
                                <!--                                                        <a class="name">Nathan Watts</a> site.-->
                            </h4>
                            <small><?php echo $row['datecommented'] ?></small>
                            <div class="content well">
                                <?php echo $row['comments'] ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
            }
        } else {
            echo '<div style="text-align:center;font-size:28px;font-style:bold;">No messages</div>';
        }
    } else {
        echo '0';
    }
} else {
    echo mysql_error();
}
?>
  