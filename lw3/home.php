<?php
$featuredPosts = [
	[
		'title' => 'The Road Ahead',
		'description' => 'The road ahead might be paved - it might not be.',
		'backgroundImageUrl' => './static/assets/postImage/the-road-ahead.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/matt-vogels.png',
			'name' => 'Mat Vogels',
		],
		'publicationDate' => 'September 25, 2015',
	],
	[
		'title' => 'From Top Down',
		'description' => 'Once a year, go someplace you’ve never been before.',
		'backgroundImageUrl' => './static/assets/postImage/from-top-down.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/willyam-wong.png',
			'name' => 'Willyam Wong',
		],
		'publicationDate' => 'September 25, 2015',
   		'tag' => 'ADVENTURE',
	],
];
$recentPosts = [
	[
		'title' => 'Sunny Side Up',
		'description' => 'No place is ever as bad as they tell you it’s going to be.',
		'imageUrl' => './static/assets/postImage/sunny-side-up.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/matt-vogels.png',
			'name' => 'Matt Vogels',
		],
		'publicationDate' => '9/25/2015',
	],
	[
		'title' => 'Still Standing Tall',
		'description' => 'Life begins at the end of your comfort zone.',
		'imageUrl' => './static/assets/postImage/still-standing.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/willyam-wong.png',
			'name' => 'Willyam Wong',
		],
		'publicationDate' => '9/25/2015',
	],
	[
		'title' => 'Water Falls',
		'description' => 'We travel not to escape life, but for life not to escape us',
		'imageUrl' => './static/assets/postImage/water-falls.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/matt-vogels.png',
			'name' => 'Matt Vogels',
		],
		'publicationDate' => '9/25/2015',
	],
	[
		'title' => 'Through the Mist',
		'description' => 'Travel makes you see what a tiny place you occupy in the world.',
		'imageUrl' => './static/assets/postImage/through-the-mist.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/willyam-wong.png',
			'name' => 'Willyam Wong',
		],
		'publicationDate' => '9/25/2015',
	],
	[
		'title' => 'Awaken Early',
		'description' => 'Not all those who wander are lost.',
		'imageUrl' => './static/assets/postImage/awaken-early.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/matt-vogels.png',
			'name' => 'Matt Vogels',
		],
		'publicationDate' => '9/25/2015',
	],
	[
		'title' => 'Try it Always',
		'description' => 'The world is a book, and those who do not travel read only one page.',
		'imageUrl' => './static/assets/postImage/try-it-always.png',
		'author' => [
			'avatarUrl' => './static/assets/avatars/matt-vogels.png',
			'name' => 'Matt Vogels',
		],
		'publicationDate' => '9/25/2015',
	],
]
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="./static/index.css">
    <title>Escape</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="navigation header__navigation">
          <img class="navigation__logo" src="./static/assets/logo.svg" alt="logo">
          <ul class="menu">
              <li class="menu__item">
                  <a class="link">HOME</a>
              </li>
              <li class="menu__item">
                  <a class="link">CATEGORIES</a>
              </li>
              <li class="menu__item">
                  <a class="link">ABOUT</a>
              </li>
              <li class="menu__item">
                  <a class="link">CONTACT</a>
              </li>
          </ul>
        </nav>
        <section class="page-info header-content__info">
          <h1 class="page-title">Let's do it together.</h1>
          <p class="page-description page-info__description">We travel the world in search of stories. Come along for the ride.</p>
          <a class="link-button page-info__link">View Latest Posts</a>
        </section>
      </div>
    </header>
    <div class="container">
      <ul class="tag-list">
        <li>
          <button class="tag-button">Nature</button>
        </li>
        <li>
          <button class="tag-button">Photography</button>
        </li>
        <li>
          <button class="tag-button">Relaxation</button>
        </li>
        <li>
          <button class="tag-button">Vacation</button>
        </li>
        <li>
          <button class="tag-button">Travel</button>
        </li>
        <li>
          <button class="tag-button">Adventure</button>
        </li>
      </ul>
    </div>
    <div class="post-list-section">
      <section class="posts">
        <h3 class="posts__title">Featured Posts</h3>
        <ul class="posts__list featured-posts">
			<?php 
				foreach ($featuredPosts as $post) {
					include 'components/featured_post_preview.php';
				}
			?>
        </ul>
      </section>
      <section class="posts">
        <h3 class="posts__title">Most Recent</h3>
        <ul class="posts__list recent-posts">
			<?php 
				foreach ($recentPosts as $post) {
					include 'components/recent_post_preview.php';
				}
			?>          
        </ul>
      </section>
    </div>
    <footer class="footer">
      <div class="footer__overlay">
        <section class="footer__content">
          <img class="footer__logo" src="./static/assets/logo.svg"/>
            <ul class="menu">
              <li class="menu__item">
                  <a class="link">HOME</a>
              </li>
              <li class="menu__item">
                  <a class="link">CATEGORIES</a>
              </li>
              <li class="menu__item">
                  <a class="link">ABOUT</a>
              </li>
              <li class="menu__item">
                  <a class="link">CONTACT</a>
              </li>
            </ul>
          </section>
      </div>        
  </footer>
  </body>
</html>