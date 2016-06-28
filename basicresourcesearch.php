<?php
require_once './ResourcesClass.php';
if (isset($_POST['searchval'])) {
    $searchval = $_POST['searchval'];

    $doctype = $_POST['doctype'];

    $new_search = new ResourcesClass();
    $searchresults = $new_search->basicsearch($doctype, $searchval);

    $numrows = mysql_num_rows($searchresults);
    if ($numrows > 0) {
        //display info
        while ($row = mysql_fetch_assoc($searchresults)) {
            $type = $row['type'];
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
                    <p><?php echo $new_search->displaylimitecharacters($row['description'], 30);  ?></p>
                    <a href="download.php?download_file=<?php echo $row['url']; ?>" class="pull-left">download</a>
                    <a href="#" onclick="addtomylibrary(<?php echo "'".$row['id']."','". $row['title']."','".$type."','".$row['description']."'" ?>)"  class="pull-right">Add to my library</a>
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
<script type="text/javascript">
    //add resource to user library
    function addtomylibrary(resourceid,title,type,desciption) {
               var  info ={
            'resourceid':resourceid,
            'title':title,
            'type':type,
            'desciption':desciption
        };
       $.ajax({
            url: 'addtomylibrary.php',
            type: "POST",
            data: info,
            success: function (data) {
                if(data === '0'){
                     swal({
                            title: "Success",
                            text: "Resource added to your library.",
                            type: "success",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Thanks",
                            closeOnConfirm: false
                        });
                }else{
                      swal({
                            title: "Error",
                            text: "Resource is already in your library",
                            type: "error",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Thanks",
                            closeOnConfirm: false
                        });
                }
               
                
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }
</script>