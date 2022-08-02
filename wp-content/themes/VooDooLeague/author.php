<?php
    get_header();
    // Obtener el autor actual
    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
    
    <header class="main_menu single_page_menu menu_fixed animated faceInDown">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <?php get_template_part('nav'); ?>
                </div>
            </div>
        </div>
    </header>
    
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our team</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="blog_area single-post-area section_padding">
        <div class="container">
            <div class="name">
                <div class="author_nickname_rol">
                    <h1><?php the_author_meta('nickname')?></h1>
                    <br/>
                    <h2><?php echo get_author_role($curauth->ID)?></h2>
                </div>
                <div class="author_gravatar"/> 
                    <img src="<?php echo get_avatar_url(get_the_author_ID()) ?>"/>
                </div/>
            </div>
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="section-top-border">
                        <div class="col-lg-12 author_image">
                            <?php
                                $URL = get_template_directory_uri()."/img/team/".$curauth->nickname.".jpg";
                                $URL2 = get_template_directory_uri()."/img/team/".$curauth->nickname.".png";
                                
                                if (my_file_exists($URL)) {
                                    $myURL = $URL;
                                } elseif (my_file_exists($URL2)) {
                                    $myURL = $URL2;
                                } else {
                                    $myURL = get_template_directory_uri()."/img/team/default-author.jpg";
                                }
                            ?>
                            <img src="<?php echo $myURL ?>"/>
                        </div>
                        <br/><br/>
					    <div class="typography">
					        <h2><?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ?></h2>
                            <h5><?php echo get_the_author_meta('grade') ?></h5>
                        </div>
                        <br/>
					    <div class="row">
						    <div class="col-lg-12">
							    <blockquote class="generic-blockquote">
							        <?php echo get_the_author_meta('description') ?>
							    </blockquote>
						    </div>
					    </div>
				    </div>
                    <div class="typographyRRSS">
                        <h4>
                            &nbsp;&nbsp;
                            <a href="<?php echo get_the_author_meta('facebook'); ?>" class="single_social_icon"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo get_the_author_meta('twitter'); ?>" class="single_social_icon"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
                            <a href="<?php echo get_the_author_meta('instagram'); ?>" class="single_social_icon"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
                            <a href="<?php echo get_the_author_meta('linkedin'); ?>" class="single_social_icon"><i class="fab fa-linkedin"></i></a>
                        </h4>
                    </div>
				    <div class="section-top-border">
                        <h3 class="mb-30">Skills</h3>
                        <div class="progress-table">
			                <div class="table-row">
			                    <div class="serial">01</div>
                                <div class="visit"><?php echo get_the_author_meta('skill1') ?></div>
                                <div class="country"><?php echo get_the_author_meta('skill1V') ?></div>
                                <div class="percentage">
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" style="width: <?php echo get_the_author_meta('skill1V') ?>"aria-valuenow="<?php echo get_the_author_meta('skill1V') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="serial">02</div>
                                <div class="visit"><?php echo get_the_author_meta('skill2') ?></div>
                                <div class="country"><?php echo get_the_author_meta('skill2V') ?></div>
                                <div class="percentage">
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" style="width: <?php echo get_the_author_meta('skill2V') ?>"aria-valuenow="<?php echo get_the_author_meta('skill2V') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="serial">03</div>
                                <div class="visit"><?php echo get_the_author_meta('skill3') ?></div>
                                <div class="country"><?php echo get_the_author_meta('skill3V') ?></div>
                                <div class="percentage">
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" style="width: <?php echo get_the_author_meta('skill3V') ?>"aria-valuenow="<?php echo get_the_author_meta('skill3V') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="serial">04</div>
                                <div class="visit"><?php echo get_the_author_meta('skill4') ?></div>
                                <div class="country"><?php echo get_the_author_meta('skill4V') ?></div>
                                <div class="percentage">
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" style="width: <?php echo get_the_author_meta('skill4V') ?>"aria-valuenow="<?php echo get_the_author_meta('skill4V') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-top-border">
                        <h3 class="mb-30">Last posts</h3>
                        <div class="row">
                            
                            <?php
                                $args = array (
                                    'posts_per_page' => 3,
                                    'author' => $curauth->ID,
                                    // Excluir los post-formats del bucle del post destacado
                                    'tax_query' => array( // Accedemos a la taxonomía de WP en la consulta principal de WP, tiene un array de arrays de args como
                                        array(
                                            'taxonomy' => 'post_format', // Por qué concepto vamos a buscar
                                            'field' => 'slug', // En qué campo del post me voy a basar para buscar
                                            'terms' => array( // Qué términos vamos a manejar -> los slugs de cada uno de los post-formats que queremos excluir
                                                'post-format-gallery',
                                                'post-format-audio',
                                                'post-format-video',
                                                'post-format-quote',
                                                'post-format-link',
                                                'post-format-image',
                                            ),
                                            'operator' => 'NOT IN', // Qué vamos hacer con ellos -> EXCLUIRLOS
                                        ),
                                    ),
                                );
                                
                                $related = new WP_Query($args);
                                
                                if ($related->have_posts()):
                                    while($related->have_posts()):
                                        $related->the_post();
                            ?>
                        
                            <div class="col-6 col-md-4 shortlinks_container">
                                <div class="blog_item_img">
                                    <p>Date: <?php the_time('j M Y'); ?></p>
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            $PostImg = get_the_post_thumbnail_url();
                                        } else {
                                            $PostImg = get_template_directory_url().'/img/post/VooDoo_logo.jpg';
                                        }
                                    ?>
                                    <img class="card-img rounded-0" src="<?php echo $PostImg; ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h5><a href=<?php the_permalink(); ?>><?php echo the_title(); ?></a></h5>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        
                            <?php
                                    endwhile;
                                endif;
                                
                                wp_reset_query();
                            ?>
                        
                        </div>
                    </div>
                    <div class="section-top-border">
                        <h3 class="mb-30">Shortlinks</h3>
                        <div class="row">
                            <div class="col-6 col-md-4 shortlinks_container">
                                <div class="typography">
                                    <h5 class="mb-20"><span class="dashicons dashicons-calendar-alt"></span>&nbsp;Calendar</h5>
                                    <br/>
                                        <?php
                                            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets')) {
                                        ?>
                                            <p>ERROR</p>                
                                        <?php
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 shortlinks_container">
                                <div class="typography">
                                    <h5 class="mb-20"><span class="dashicons dashicons-admin-users"></span>&nbsp;Other authors</h5>
                                    <ul class="unordered-list">
    			                        <li>
                                            <?php
                                                $args = array(
                                                    //'echo' => false, // En lugar de visualizar los autores los devuelve como una lista
                                                    'hide_empty' => false, // Esto que hace se visulicen los autores aunque no tengan posts publicados
                                                    'optioncount' => true, // Visualiza el número de posts que tiene publicados el autor
                                                    'orderby' => 'post_count', // Ordena los autores según el número de posts publicados
                                                    'order' => 'DESC', // Del que más posts tiene al que menos - Orden Descendente-
                                                    'exclude' => $curauth->ID, // Excluye el author que estoy viendo en la plantilla
                                                );
                                                wp_list_authors($args);
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 shortlinks_container">
                                <div class="typography">
                                    <h5 class="mb-20"><span class="dashicons dashicons-admin-page"></span>&nbsp;Pages</h5>
                                    <ul class="unordered-list">
    			                        <li>
                                            <?php
                                                $pages = get_pages();
                                                $exclude = array();
                                                foreach($pages as $page) {
                                                    if (!in_array($page->post_title, array('Home', 'Game', 'Blog', 'Contact', 'Archives', 'Private Zone'))) {
                                                        $exclude[] = $page->ID;
                                                    }
                                                }
                                                $args = array(
                                                    'title_li' => "",
                                                    'exclude' => implode(', ', $exclude),
                                                );
                                                wp_list_pages($args);            
                                            ?>
                                    	</li>
				                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php get_sidebar('simple'); ?>
            </div>
        </div>
    </section>
   
<?php
    get_footer();
?>

