﻿<?php
    $sql = "SELECT
                post.id,
                user.login,
                post.title,
                post.message
            From
                post
                    JOIN user
                        ON post.user_id = user.id
            ORDER BY
                post.id DESC
            LIMIT
                10;";
    
    $query = mysql_query($sql);         
                
?>

<div class="contenu">

<?php
    while ($row = mysql_fetch_array($query)) { ?>

    <h2><a href="index.php?page=post&id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
    <div class="txt"><?php echo $row['message']; ?></div>
    <div class="signature"><?php echo $row['login']; ?></div>
    <div class="bas_bloc"></div>
<?php     
    }
?>
</div>
