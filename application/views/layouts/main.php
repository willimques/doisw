<!DOCTYPE html>
<html>
    <?php include_once "header.php"?>

    <body id="page-top">

        <div class="wrapper">

            <?php include_once "nav.php"?>

            <div id="content-wrapper">

                <div class="container-fluid">                                        
                    <?php	if(isset($_view) && $_view)
                    $this->load->view($_view); ?> 
                    <?php include_once "footer.php"?>
                    <?php if(isset($_custom) && $_custom)
                    $this->load->view($_custom); ?>        
                </div>
            </div>
        </div>
    </body>
</html>
