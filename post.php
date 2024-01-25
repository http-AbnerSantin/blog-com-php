<?php
    include_once("./templates/header.php");


    if(isset($_GET['id'])){
        $post_id = $_GET['id'];
        $current_post;

        foreach($posts as $post) {
            if($post['id'] == $post_id){
                $current_post = $post;
            }
        }
    }


?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $current_post['title'] ?></h1>
        <p id="post-description"><?= $current_post['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?=$current_post['img']?>" alt="<?= $current_post['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, eligendi ea quidem unde quisquam deserunt commodi excepturi sapiente modi, nemo sed quod cumque obcaecati necessitatibus dicta non sit veniam explicabo.
            Voluptate, officiis? Molestiae ipsam est enim nesciunt mollitia, doloremque voluptatibus cupiditate iste tempora facere? Voluptas error incidunt enim corrupti non modi officiis iusto numquam, adipisci, quos suscipit similique. Consectetur, autem!
            Voluptate ea voluptatum obcaecati error dolorem ipsam consectetur eum commodi rem dicta totam adipisci nam cumque, quis excepturi. Asperiores quisquam sint enim error molestias optio illum necessitatibus et eum aperiam!
            Earum repudiandae dignissimos id cum soluta labore iste incidunt nam, sint, voluptatem recusandae totam esse blanditiis deleniti pariatur accusamus dolores quo enim sed sunt. Ducimus quia autem vel quod consequuntur!
            Itaque adipisci eum eaque reiciendis dolores neque nemo? Accusamus dignissimos sunt dolor accusantium, aspernatur sit quaerat eligendi iure magni temporibus obcaecati, adipisci ducimus dolores fuga nostrum provident iste amet possimus.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, eligendi ea quidem unde quisquam deserunt commodi excepturi sapiente modi, nemo sed quod cumque obcaecati necessitatibus dicta non sit veniam explicabo.
            Voluptate, officiis? Molestiae ipsam est enim nesciunt mollitia, doloremque voluptatibus cupiditate iste tempora facere? Voluptas error incidunt enim corrupti non modi officiis iusto numquam, adipisci, quos suscipit similique. Consectetur, autem!
            Voluptate ea voluptatum obcaecati error dolorem ipsam consectetur eum commodi rem dicta totam adipisci nam cumque, quis excepturi. Asperiores quisquam sint enim error molestias optio illum necessitatibus et eum aperiam!
            Earum repudiandae dignissimos id cum soluta labore iste incidunt nam, sint, voluptatem recusandae totam esse blanditiis deleniti pariatur accusamus dolores quo enim sed sunt. Ducimus quia autem vel quod consequuntur!
            Itaque adipisci eum eaque reiciendis dolores neque nemo? Accusamus dignissimos sunt dolor accusantium, aspernatur sit quaerat eligendi iure magni temporibus obcaecati, adipisci ducimus dolores fuga nostrum provident iste amet possimus.
        </p>
    </div>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($current_post['tags'] as $tag): ?>
            <li><a href=""><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categorias as $categoria): ?>
            <li><a href=""><?= $categoria ?></a></li>
        <?php endforeach; ?>
    </ul>

</aside>
</main>

    
<?php 
    include_once("./templates/footer.php");
?>
