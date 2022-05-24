<?php get_header(); ?>

    <!-- Page not found details -->
    <main id="main-content" class="default-page not-found-text">
        <h1>Page not found ...</h1>
        <h2>Either the link is broken or the page no longer exists.</h2>
        <h3>Please use the navigation above or search here:</h3>
        <?php get_search_form(); ?>
    </main>

    <!-- Noise effect -->
    <section class="not-found-effect">
    </section>
    <svg class="noise-svg">
        <filter id="noise-filter">
            <feTurbulence id="turbulence">
                <animate attributeName="baseFrequency" dur="50s" values="0.9 0.9;0.8 0.8;0.9 0.9;" repeatCount="indefinite">
                </animate>
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" scale="60">
            </feDisplacementMap>
        </filter>
    </svg>

<?php get_footer(); ?>