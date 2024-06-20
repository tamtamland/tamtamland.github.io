<!DOCTYPE html>
<html lang="ja">
<?php wp_head(); ?>
<head>
    <meta charset="UTF-8">
    <title>南アルプス架空リゾートホテル</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="サイトのキーワードの設定">
    <meta name="description" content="サイトの概要の設定">
    <link rel="<?php echo get_template_directory_uri(); ?>stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <header>
        <div class="header_inner container">
            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                <div class="logo">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <p><?php bloginfo( 'description' ); ?></p>         
                </div>
            </a>

            
        </div>    
        <div id="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- burger -->
        
        <div class="main_image">
            <img src="<?php echo get_template_directory_uri(); ?>img/main_back_image.jpg" alt="ホテル外観">       
        </div>
        <!--main image -->
        <nav id="nav">
            <ul class="container">
                <li><a href="">ホーム</a></li>
                <li><a href="">ホテル紹介</a></li>
                <li><a href="">アクセス</a></li>
                <li><a href="">お問い合わせ</a></li>
            </ul>
        </nav>
        <!--nav -->
    </header>
    <!--header -->
    <div class="wrap container">
        <main>  
            <div class="info">
                <h2>新着情報</h2>
        <?php if ( have_posts() ) : //もし、投稿が1件以上あったら ?>
        <?php while ( have_posts() ) : //投稿の表示条件を満たす間は繰り返す ?>
        <?php the_post(); //データ1件分を取り出して渡す ?>
                <!-- 投稿開始 -->
                <div class="info_item">
                    <p class="photo"><a href="<?php the_permalink(); ?>">< <?php the_post_thumbnail(); ?>></a></p>
                    <div class="content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <a href="<?php the_permalink(); ?>" class="category"><?php the_category( '&nbsp;' ); ?></a><a href=""><time datetime="<?php the_time( 'Y-n-j'  ); ?>"><?php the_time( 'Y年n月j日' ); ?></time></a>
                        <p class="text">
                        <?php the_excerpt(); ?>
                        </p>
                    </div>   
                </div>
                <!-- 投稿終了 -->
                <?php endwhile; //投稿ループ終了 ?>
                <!--▼ ページネーション : 開始-->
               <?php the_posts_pagination(); ?>　
               <!--▲ ページネーション : 終了-->
               <?php else: //もし、表示すべき投稿がなかったら ?>
        <p>あてはまる情報はまだありません。</p>
        <?php endif; //条件分岐終了 ?>
                
               
             

               
              
                </div>
                <!-- 投稿終了 -->

                <!--▼ ページネーション : 開始-->
                <div class="pagination">
                    <span class='page-numbers current'>1</span>
                    <a class='page-numbers' href='#'>2</a>
                    <a class='page-numbers' href='#'>3</a>
                    <a class="next page-numbers" href="#">次ページへ</a>
                </div>
                <!--▲ ページネーション : 終了-->

            </div>
            <!-- info -->




        </main>
        <!-- main -->
        <aside>
            <div class="recent">
                <h3>最新記事</h3>
                <ul>
                    <li><a href="">納涼・蛍鑑賞会</a></li>
                    <li><a href="">お花見企画の予約を開始</a></li>
                    <li><a href="">バレンタイン企画を行います</a></li>
                    <li><a href="">今年も宜しくお願いいたします</a></li>
                    <li><a href="">クリスマスイベント</a></li>
                </ul>
            </div>

            <div class="banner">
               <a href=""><img src="img/christmas.jpg"  width=330 height="250" alt="クリスマスイベント"></a>
            </div>
        </aside>
        <!-- aside -->
     </div> 
       <!-- .wrapper -->
    <footer>
        <div class="footer_inner container">
            <p><small>Copy Right 2022 南アルプス架空リゾートホテル</small></p>
        </div>
    </footer>
    <!-- footer -->

    <p id="top">TOP</p>
    <!-- toTop -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>js/script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>
