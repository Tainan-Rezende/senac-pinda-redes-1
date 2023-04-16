<main>
    <div class="container">
        <?php 
            // Pagination
            $pageA = filter_input(INPUT_GET, 'n', FILTER_SANITIZE_NUMBER_INT);
            $page = (!empty($pageA)) ? $pageA : 1;

            // Items per page
            $QtdData = 5;

            // Calculate Start of View
            $start = ($QtdData * $page) - $QtdData;

            // Selecting table and order by id
            $comment = "SELECT * FROM tb_comment ORDER BY c_id DESC LIMIT $start, $QtdData";
            $sqlCom = $conn->query($comment);

            // Printing data
            if($sqlCom->num_rows > 0){
                while($row = $sqlCom->fetch_assoc()){
        ?>
        <div class="commentList">
            <div class="card">
                <img src="<?php if($row['c_img'] == '') { echo "images/senac.png"; } else { echo $row['c_img']; } ?>">
                <div>
                    <h2>
                        <?=$row['c_name'];?>
                    </h2>
                    <p>
                        <?=$row['c_comment'];?>
                    </p>
                </div>
            </div>
        </div>
        <?php 
                }

                // Pagination - add number of users
                $sqlPg = "SELECT COUNT(c_id) AS num_result FROM tb_comment";
                $resultPage = mysqli_query($conn, $sqlPg);
                $rowPg = mysqli_fetch_assoc($resultPage);

                // echo $rowPg['num_result'];

                // Number of pages
                $amountPages = ceil($rowPg['num_result'] / $QtdData);

                // Links
                $maxLinks = 10;
        ?>
            <div class="pageNumber">
                <!-- First Page Link -->
                <a href="?p=comment&n=1">
                    <div>Primeira página</div>
                </a>
                <?php
                    // Previous page if >= 1
                    for($previousPage = $page - $maxLinks; $previousPage <= $page - 1; $previousPage++){
                        if($previousPage >= 1){
                ?>
                <a href="?p=comment&n=<?=$previousPage;?>">
                    <div><?=$previousPage;?></div>
                </a>
                <?php
                        }
                    }
                ?>
                <!-- Current Page -->
                <div><?=$page;?></div>
                <?php
                    // Next page if <= number of pages
                    for($nextPage = $page + 1; $nextPage <= $page + $maxLinks; $nextPage++){
                        if($nextPage <= $amountPages){
                ?>
                <a href="?p=comment&n=<?=$nextPage?>">
                    <div><?=$nextPage;?></div>
                </a>
                <?php } } ?>

                <!-- Last Page Link -->
                <a href="?p=comment&n=<?=$amountPages;?>">
                    <div>Última página</div>
                </a>
            </div>
        <?php 
            } else {
            // No data to show
        ?>
        <div class="wrapper">
            <div class="alert-error">
                <h3>Que pena!</h3>
                <hr>
                <p>Ainda não há nenhum comentário registrado...</p>
            </div>
        </div>
        <?php } ?>
    </div>
</main>