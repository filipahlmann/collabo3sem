<?php get_header(); ?>
<body>
    <main>
            <div class="textContainerHeadline">
                <h1><?php the_field('blog_header_text'); ?> </h1>
                <h3><?php the_field('blog_second_header_text'); ?> </h3>
        </div>


        <div class="addidasBox">
            <div class="textContainerBlog">
                <div class="textContainerBlog1">
                    <p> <?php the_field('blog_description_text'); ?> </p>
                    <p> <?php the_field('blog_description_product_text'); ?> </p>

                </div>

            
                    <b class="textContainerBlog2"> <?php the_field('blog_description_price_text'); ?> </b>
                        <button>KØB PRODUKTET HER</button>
                </div>

                <img class="imgaddidas" src="<?php the_field("addidas") ?>" alt="">
                </div>
                
        </div>
        <?php the_field('video'); ?>
    </main>
</body>

<?php get_footer(); ?>
