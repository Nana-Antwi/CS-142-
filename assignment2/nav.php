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
        
        
     
         
        
        if ($path_parts['filename'] == "Resume") {
            print '<li class="activePage">Resume</li>';
        } else {
            print '<li><a href="resume.php">Resume</a></li>';
        }
        
       
        
        
       
        
        ?>
    </ol>
</nav>