<?php 
        $statment = $pdo->prepare ("SELECT * FROM club_content_table WHERE type='about-header'");
        $statment->execute();
        
        while($row = $statment->fetch(PDO::FETCH_ASSOC)){
              echo $row["content"];
            }
                    ?>
