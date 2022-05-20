<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id='post-container'>
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id='post-description'><?= $currentPost['description'] ?></p>
            <div id="img-container">
                <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deleniti, accusantium reprehenderit molestiae sit natus aliquam, cumque libero exercitationem porro laboriosam! Recusandae commodi quod iste voluptate nostrum nam maxime ducimus?
            Obcaecati porro facilis quas magni, beatae libero minima alias. Inventore nam saepe minima eaque sequi officiis dolores necessitatibus, ipsa incidunt deleniti ducimus nesciunt aperiam iure? Possimus ea earum facere dolore?
            Voluptate fugit autem accusantium asperiores ab ratione aliquam doloremque velit fugiat est! Distinctio blanditiis sit, neque ad dolore corporis excepturi eligendi? Corporis dolor velit doloremque blanditiis nobis debitis, nemo eligendi.
            Voluptatem placeat incidunt ut officiis consequuntur explicabo nobis, dolorem similique vel eaque minus accusamus. Perspiciatis rem facilis similique, aliquid nobis aperiam nesciunt, minima nemo fuga eum molestias earum temporibus libero!
            Impedit totam expedita perferendis. Sit earum dolore quod reprehenderit voluptate tempore fuga incidunt rem quidem rerum aliquam deserunt numquam repellat illum debitis modi, maiores nobis, repudiandae accusantium ex. Dolore, delectus.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deleniti, accusantium reprehenderit molestiae sit natus aliquam, cumque libero exercitationem porro laboriosam! Recusandae commodi quod iste voluptate nostrum nam maxime ducimus?
            Obcaecati porro facilis quas magni, beatae libero minima alias. Inventore nam saepe minima eaque sequi officiis dolores necessitatibus, ipsa incidunt deleniti ducimus nesciunt aperiam iure? Possimus ea earum facere dolore?
            Voluptate fugit autem accusantium asperiores ab ratione aliquam doloremque velit fugiat est! Distinctio blanditiis sit, neque ad dolore corporis excepturi eligendi? Corporis dolor velit doloremque blanditiis nobis debitis, nemo eligendi.
            Voluptatem placeat incidunt ut officiis consequuntur explicabo nobis, dolorem similique vel eaque minus accusamus. Perspiciatis rem facilis similique, aliquid nobis aperiam nesciunt, minima nemo fuga eum molestias earum temporibus libero!
            Impedit totam expedita perferendis. Sit earum dolore quod reprehenderit voluptate tempore fuga incidunt rem quidem rerum aliquam deserunt numquam repellat illum debitis modi, maiores nobis, repudiandae accusantium ex. Dolore, delectus.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php")
?>