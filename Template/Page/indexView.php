
<html>
    <body>
    <?php  require_once ('../Template/Partials/header.php'); ?>  
        <main> 
            <h3>Le super blog de la piscine</h3>
            
            <?php foreach($articles as $article){ ?>
                <article>
                        <h2> <?php echo $article['Title'] ?> </h2>
                        <p> <?php echo $article['Content']?> </p>
                        <p> <?php echo $article['Created_at'] ?> </p>
                </article>
           <?php };?>


        </main>
        <?php require_once ('../Template/Partials/footer.php'); ?>   
    </body>
</html>




