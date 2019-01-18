<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        
        
     
         
        
        if ($path_parts['filename'] == "Table") {
            print '<li class="activePage">Table</li>';
        } else {
            print '<li><a href="table.php">Table</a></li>';
        }
        
       
        
        
       
        
        ?>
    </ol>
</nav>