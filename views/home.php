<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marginalia — a blog</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
  <div class="wrap">
    <div class="header-top">
      <div>
        <h1 class="wordmark">Marginalia<span class="dot">.</span></h1>
        <p class="tagline">Notes written in the margins</p>
      </div>
    </div>
    <nav class="site-nav">
      <a href="#" class="active">Home</a>
      <a href="#">Archive</a>
      <a href="#">About</a>
      <a href="#">Search</a>
    </nav>
  </div>
</header>

<main class="wrap content">

  <div class="main-col">

    <?php if (!empty($posts)): ?>   
            <article class="featured">
              <p class="eyebrow">Latest entry</p>
              <?php foreach ( $posts as $post ) : ?>
                <h2><a href="#"><?php echo $post['title'] ?></a></h2>
                <p class="excerpt">
                  <?php echo $post['content'] ?>
                </p>
                <div class="post-meta">
                  <span class="date">June 28, 2026</span>
                  <span class="sep">·</span>
                  <span>6 min read</span>
                  <span class="sep">·</span>
                  <span>Writing</span>
                  <span class="sep">·</span>
                  <a href="#" class="read-link">Read entry →</a>
              </div>
              <?php endforeach; ?>
            </article>
     
    <?php endif; ?>

    <p class="index-heading">Recent entries</p>
    <ul class="post-list">

      <li class="post-row">
        <a class="title" href="#">On Keeping a Commonplace Book</a>
        <span class="leader"></span>
        <span class="tag">Craft</span>
        <span class="date">Jun 21</span>
      </li>

      <li class="post-row">
        <a class="title" href="#">Why I Stopped Taking Notes on My Phone</a>
        <span class="leader"></span>
        <span class="tag">Tools</span>
        <span class="date">Jun 14</span>
      </li>

      <li class="post-row">
        <a class="title" href="#">A Short Defense of Long Walks</a>
        <span class="leader"></span>
        <span class="tag">Life</span>
        <span class="date">Jun 07</span>
      </li>

      <li class="post-row">
        <a class="title" href="#">Rereading: What Changes the Second Time</a>
        <span class="leader"></span>
        <span class="tag">Reading</span>
        <span class="date">May 30</span>
      </li>

      <li class="post-row">
        <a class="title" href="#">The Trouble With Productivity Advice</a>
        <span class="leader"></span>
        <span class="tag">Writing</span>
        <span class="date">May 22</span>
      </li>

      <li class="post-row">
        <a class="title" href="#">Notes From a Week Without a Todo List</a>
        <span class="leader"></span>
        <span class="tag">Life</span>
        <span class="date">May 15</span>
      </li>

    </ul>

    <div class="pagination">
      <a href="#">← Newer</a>
      <span class="page-num">Page 1 of 8</span>
      <a href="#">Older →</a>
    </div>

  </div>

  <aside class="sidebar">

    <section class="about-card">
      <h3>About</h3>
      <p>
        Short essays on reading, writing, and paying closer attention — updated most weeks,
        rarely on schedule.
      </p>
      <p class="signature">— written by you</p>
    </section>

    <section>
      <h3>Subscribe</h3>
      <div class="subscribe-card">
        <p>New entries, straight to your inbox. No noise.</p>
        <form class="subscribe-form" action="#" method="post">
          <input type="email" name="email" placeholder="you@email.com" required>
          <button type="submit">Join</button>
        </form>
      </div>
    </section>

    <section>
      <h3>Topics</h3>
      <div class="tag-cloud">
        <a href="#">Writing</a>
        <a href="#">Reading</a>
        <a href="#">Craft</a>
        <a href="#">Tools</a>
        <a href="#">Life</a>
        <a href="#">Notes</a>
      </div>
    </section>

    <section>
      <h3>Archive</h3>
      <ul class="archive-list">
        <li><a href="#">June 2026</a><span class="count">04</span></li>
        <li><a href="#">May 2026</a><span class="count">06</span></li>
        <li><a href="#">April 2026</a><span class="count">05</span></li>
        <li><a href="#">March 2026</a><span class="count">03</span></li>
      </ul>
    </section>

  </aside>

</main>

<footer class="site-footer">
  <div class="wrap" style="display:flex; justify-content:space-between; width:100%; flex-wrap:wrap; gap:12px;">
    <span>© 2026 Marginalia. Built with plain PHP.</span>
    <span><a href="#">RSS</a> · <a href="#">About</a> · <a href="#">Contact</a></span>
  </div>
</footer>

</body>
</html>