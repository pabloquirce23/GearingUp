<?php
require_once('header.php');
?>
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Characters</div>
                        </div>
                        <div class="widget-content-right">
                            <?php
                            $result = mysqli_query($conn, "select * from characters");
                            $row = mysqli_num_rows($result);
                            echo '
                            <div class="widget-numbers text-white"><span>'.$row.'</span></div>
                                ';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Posts</div>
                        </div>
                        <div class="widget-content-right">
                            <?php
                            $result = mysqli_query($conn, "select * from posts");
                            $row = mysqli_num_rows($result);
                            echo '
                            <div class="widget-numbers text-white"><span>'.$row.'</span></div>
                                ';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Register User</div>
                        </div>
                        <div class="widget-content-right">
                            <?php
                            $result = mysqli_query($conn, "select * from users");
                            $row = mysqli_num_rows($result);
                            echo '
                            <div class="widget-numbers text-white"><span>'.$row.'</span></div>
                                ';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content" style="background: brown;">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Subscribers</div>
                        </div>
                        <div class="widget-content-right">
                            <?php
                            $result = mysqli_query($conn, "select * from subscribers");
                            $row = mysqli_num_rows($result);
                            echo '
                            <div class="widget-numbers text-white"><span>'.$row.'</span></div>
                                ';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once('footer.php');
?>