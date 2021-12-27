<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>
    <!-- main page -->
    <div class="container-fluid main-page">
        <div class="row">
            <!-- leftSide page -->
            <div class="left-side">
                <div class="left-side-bg">
                    <!-- ======================================================================================= add content -->
                </div>
            </div>
            <!-- rightSide page -->
            <div class="right-side">
                <div class="right-side-content">
                    <!-- right header -->
                    <div class="right-side-header">
                        <!-- main icon -->
                        <?php require_once 'tpl/mainicon.inc.php' ?>
                        <!-- sign out -->
                        <?php require_once 'tpl/signout.inc.php' ?>
                    </div>
                    <!-- ================================================= 新頁面加入 -->
                    <div class="container">
                        
                    </div>
                        <!-- ================================================= -->
                    </div>

<?php require_once 'tpl/foot.inc.php' ?>