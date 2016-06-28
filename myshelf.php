<?php
require_once './LibraryClass.php';
if (isset($_POST['type'])) {
    $type = $_POST['type'];


    $new = new LibraryClass();
    $searchresults = $new->userlibrary($type);

    $numrows = mysql_num_rows($searchresults);
    if ($numrows > 0) {
        //display info
        while ($row = mysql_fetch_assoc($searchresults)) {
            $type = $row['resource_type'];
            if ($type == 'video' || $type == 'video_book') {
                $classtype = 'md-desktop-windows';
            } else {
                $classtype = 'md-file';
            }
            ?>  <li>
                <div class="category">
                    <div class="icon-wrap ">
                        <i class="icon <?php echo $classtype; ?>" aria-hidden="true"></i>
                    </div>
                    <h4><?php echo $row['title']; ?></h4>
                    <p><?php echo $row['description']; ?></p>
                    <a href="download.php?download_file=<?php echo $row['url']; ?>" >download</a>
                </div>
            </li><?php
        }
    } else {
        //no results found
        echo '  <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        No results in this criteria found.
                        </h3>
                    </div></div>';
    }
}
?>
