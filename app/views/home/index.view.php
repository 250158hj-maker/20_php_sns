<div class="flex max-w-4xl mx-auto min-h-screen">
    <header class="sticky top-0 h-screen w-20 shrink-0 self-start border-r border-slate-100 xl:w-56">
        <?php include COMPONENT_DIR . 'nav.php' ?>
    </header>

    <main class="flex-1 border-r border-slate-100 min-h-screen">
        <?php include COMPONENT_DIR . 'home_tabs.php' ?>
        <?php include COMPONENT_DIR . 'search_form.php' ?>
        <?php include COMPONENT_DIR . 'tweet_form.php' ?>
        <?php include COMPONENT_DIR . 'home_tweet_list.php' ?>
    </main>
</div>