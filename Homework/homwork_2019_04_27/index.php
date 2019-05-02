<?php 
    $view='';
    $content='';
    if(isset($_GET['view'])){
        $view=$_GET['view'];
    }
    switch($view){
        case 'home':
            $content='home.php';
            break;
        case 'products':
            $content='products.php';
            break;
        case 'detail':
            $content='detail.php';
            break;
        case 'about_us':
            $content='about_us.php';
            break;
        case 'contact_us':
            $content='contact_us.php';
            break;
        default:$content='home.php';

    }
?>
        <?php include('header.php');?>

            <?php include('nav_menu.php');?>

            <!-- main content -->
            <section>
                <?php 
              
                include($content);
                
            ?>
            </section>

            <!-- end main content -->

            <!-- footer -->
            <?php include('footer.php');?>