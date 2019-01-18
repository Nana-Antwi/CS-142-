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
        
        
     
         
        
        if ($path_parts['filename'] == "Form") {
            print '<li class="activePage">Form</li>';
        } else {
            print '<li><a href="form.php">Form</a></li>';
        }
        
       
        
        
       
        
        ?>
    </ol>
</nav>