<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="color-scheme" content="light dark"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.cyan.min.css"
    />

    <title>Mohsen Azarmanesh</title>
    <meta
            name="description"
            content="Passionate web developer with a strong focus on backend development. I love building robust systems and creating engaging user experiences. Always eager to learn new technologies."
    />
    <meta name="author" content="Mohsen Azarmanesh"/>
    <meta name="copyright" content="Mohsen Azarmanesh"/>
    <meta name="robots" content="index, follow"/>

    <meta property="og:type" content="profile"/>
    <meta property="og:title" content="Mohsen Azarmanesh"/>
    <meta property="og:url" content="https://azarmanesh.dev"/>
    <meta
            property="og:description"
            content="Passionate web developer with a strong focus on backend development. I love building robust systems and creating engaging user experiences. Always eager to learn new technologies."
    />
    <meta property="profile:first_name" content="Mohsen"/>
    <meta property="profile:last_name" content="Azarmanesh"/>
    <meta property="profile:username" content="PyroVetis"/>

    <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/assets/favicon/apple-touch-icon.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/assets/favicon/favicon-32x32.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="/assets/favicon/site.webmanifest"/>

    <link rel="stylesheet" href="/assets/styles.css"/>

    <link rel="canonical" href="https://azarmanesh.com/projects"/>
</head>
<body>
<main class="container">
    <section>
        <hgroup>
            <h1>My Projects</h1>
            <p>
                <small><em>Total: 8 (6 online, 2 offline)</em></small
                ><br/>
                <small
                ><em
                    >Last updated:
                        <?php
                        $filename = __FILE__;
                        $lastModifiedTimestamp = filemtime($filename);
                        $lastModified = date("F Y", $lastModifiedTimestamp);
                        echo $lastModified;
                        ?>
                    </em></small
                >
            </p>
        </hgroup>
        <a href="/" class="contrast">Go Back</a>
    </section>
    <section>
        <h2>Online Projects</h2>
        <div class="grid">
            <article>
                <header>Azarmanesh.dev</header>
                <div>
                    <p>Personal portfolio.</p>
                    <p>Technologies used: <code>HTML</code><code>CSS</code></p>
                </div>
                <footer>
                    <a href="/" target="_blank">Link to azarmanesh</a> |
                    <a href="https://github.com/pyrovetis/portfolio" target="_blank"
                    >GitHub</a
                    >
                </footer>
            </article>

            <article>
                <header>Exile.ir</header>
                <div>
                    <p>URL shortener.</p>
                    <p>Technologies used: <code>Flask</code><code>HTMX</code><code>Alpine.js</code></p>
                </div>
                <footer>
                    <a href="https://exile.ir" target="_blank">Link to exile</a> |
                    <a href="https://github.com/pyrovetis/exile" target="_blank"
                    >GitHub</a
                    >
                </footer>
            </article>

            <article>
                <header>Feedbeen.com</header>
                <div>
                    <p>Finance app.</p>
                    <p>Technologies used: <code>Next.js</code><code>TanStack
                            Query</code><code>date-fns</code><code>JOSE</code><code>Zod</code><code>Zustand</code></p>
                </div>
                <footer>
                    <a href="https://feedbeen.com" target="_blank">Link to feedbeen</a>
                </footer>
            </article>
        </div>
        <div class="grid">
            <article>
                <header>Fuminsho.ir</header>
                <div>
                    <p>Playlist tools.</p>
                    <p>Technologies used: <code>Django</code><code>Pillow</code></p>
                </div>
                <footer>
                    <a href="https://fuminsho.ir" target="_blank">Link to fuminsho</a>
                    |
                    <a href="https://github.com/pyrovetis/fuminsho" target="_blank"
                    >GitHub</a
                    >
                </footer>
            </article>

            <article>
                <header>Braindamage.ir</header>
                <div>
                    <p>Video game news.</p>
                    <p>Technologies used: <code>WordPress</code></p>
                </div>
                <footer>
                    <a href="https://braindamage.ir" target="_blank">Link to braindamage</a>
                </footer>
            </article>

            <article>
                <header>Foodbaz.com</header>
                <div>
                    <p>Recipe and cooking tips.</p>
                    <p>Technologies used: <code>Django</code><code>Celery</code><code>Unfold
                            Admin</code><code>Scrapy</code>
                    </p>
                </div>
                <footer>
                    <a href="https://foodbaz.com" target="_blank">Link to foodbaz</a>
                </footer>
            </article>

            <!--            <article style="opacity: 0"></article>-->
        </div>
    </section>
    <section>
        <h2>Offline Projects</h2>
        <div class="grid">
            <article>
                <header>Nezarat.com</header>
                <div>

                    <p>Finance app.</p>
                    <p>Technologies used: <code>Next.js</code><code>TanStack
                            Query</code><code>date-fns</code><code>JOSE</code><code>Zod</code><code>Zustand</code></p>
                </div>
            </article>

            <article>
                <header>Blazing.ir</header>
                <div>

                    <p>Random image api.</p>
                    <p>Technologies used: <code>PHP</code></p>
                </div>
            </article>

            <article style="opacity: 0"></article>
        </div>
    </section>
</main>

<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Person",
        "name": "Mohsen Azarmanesh",
        "url": "https://azarmanesh.dev",
        "jobTitle": "Web Developer",
        "sameAs": [
            "https://x.com/SobhanPyro"
        ]
    }
</script>
</body>
</html>
