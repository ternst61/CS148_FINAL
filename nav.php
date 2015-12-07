<!-- ######################     Main Navigation   ########################## -->
<div class="nav-wrap">
<div class="nav-anchor"></div>
<nav>
    <ol>
        <?php
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "history") {
            print '<li class="activePage">Family History</li>';
        } else {
            print '<li><a href="history.php">Family History</a></li>';
        }
        
        if ($path_parts['filename'] == "familytree") {
            print '<li class="activePage">Family Tree</li>';
        } else {
            print '<li><a href="familytree.php">Family Tree</a></li>';
        }
        
        if ($path_parts['filename'] == "form") {
            print '<li class="activePage">Edit Person</li>';
        } else {
            print '<li><a href="form.php">Edit Person</a></li>';
        }

        if ($path_parts['filename'] == "familytree") {
            print '<li class="activePage">Family Tree</li>';
        } else {
            print '<li><a href="familytree.php">Family Tree</a></li>';
        }
        ?>
    </ol>
</nav>
</div>
<!-- #################### Ends Main Navigation    ########################## -->

