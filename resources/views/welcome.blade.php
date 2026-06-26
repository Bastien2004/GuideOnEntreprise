<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bastien Hecquet — Je crée votre site internet de A à Z. Design, développement, mise en ligne. Basé en France, disponible partout.">
    <title>Guideon — Création de sites web sur mesure</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
<body>

{{-- ═══════════════════════════════
     HEADER
═══════════════════════════════ --}}
<header class="site-header">
    <div class="container header-inner">

        <a href="/" class="logo">
            <span class="logo-mark">G</span>
            <span class="logo-text">Guideon</span>
        </a>

        <nav class="main-nav">
            <a href="#services">Services</a>
            <a href="#realisations">Réalisations</a>
            <a href="#propos">À propos</a>
            <a href="#contact" class="nav-cta">Démarrer un projet</a>
        </nav>

        <button
            class="burger"
            aria-label="Ouvrir le menu"
            onclick="this.classList.toggle('open'); document.querySelector('.mobile-nav').classList.toggle('open')"
        >
            <span></span><span></span><span></span>
        </button>

    </div>
    <div class="mobile-nav">
        <a href="#services"      onclick="document.querySelector('.mobile-nav').classList.remove('open')">Services</a>
        <a href="#realisations"  onclick="document.querySelector('.mobile-nav').classList.remove('open')">Réalisations</a>
        <a href="#propos"        onclick="document.querySelector('.mobile-nav').classList.remove('open')">À propos</a>
        <a href="#contact" class="nav-cta" onclick="document.querySelector('.mobile-nav').classList.remove('open')">Démarrer un projet</a>
    </div>
</header>


{{-- ═══════════════════════════════
     HERO
═══════════════════════════════ --}}
<section class="hero">
    <div class="container">
        <div class="hero-inner">

            <div class="hero-left">
                <div class="hero-available">
                    <span class="pulse"></span>
                    Disponible pour de nouveaux projets
                </div>

                <h1>
                    Votre site web,<br>
                    <em>fait pour durer.</em>
                </h1>

                <p class="hero-desc">
                    Je suis Bastien Hecquet. Je conçois et développe des sites internet sur mesure — clairs, rapides, bien référencés — pour les indépendants et petites entreprises.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-dark">Parler de mon projet</a>
                    <a href="#realisations" class="btn btn-ghost">Voir les réalisations</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="stat-n">3+</span>
                        <span class="stat-l">Sites livrés</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="hero-stat">
                        <span class="stat-n">Laravel</span>
                        <span class="stat-l">PHP 8+</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="hero-stat">
                        <span class="stat-n">7j/7</span>
                        <span class="stat-l">Disponible</span>
                    </div>
                </div>
            </div>

            <div class="hero-right">
                <div class="hero-card">
                    <div class="hero-card-logo">G</div>
                    <h3>Ce que vous obtenez</h3>
                    <p>Un site qui vous ressemble, conçu pour convertir vos visiteurs en clients.</p>
                    <div class="hero-card-items">
                        <div class="hero-card-item">
                            <span class="check">✓</span> Design unique, pas un template
                        </div>
                        <div class="hero-card-item">
                            <span class="check">✓</span> Visible sur Google dès le départ
                        </div>
                        <div class="hero-card-item">
                            <span class="check">✓</span> Parfait sur téléphone et tablette
                        </div>
                        <div class="hero-card-item">
                            <span class="check">✓</span> Suivi après la mise en ligne
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════
     POURQUOI GUIDEON
═══════════════════════════════ --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Pourquoi Guideon</span>
            <h2>Un accompagnement sérieux,<br>sans jargon inutile.</h2>
            <p>Je travaille avec des gens qui ont un vrai projet, pas forcément des connaissances en informatique. C'est justement là que j'interviens.</p>
        </div>

        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">🎨</div>
                <h3>Design sur mesure</h3>
                <p>Votre site est conçu à partir de zéro, autour de votre activité. Pas un thème WordPress acheté 30€ et revendu trois fois.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">⚡</div>
                <h3>Rapide à charger</h3>
                <p>Un site lent fait fuir les visiteurs. Je fais attention à chaque détail technique pour que ça s'affiche vite, partout.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">🔍</div>
                <h3>Pensé pour Google</h3>
                <p>Le référencement n'est pas un add-on qu'on branche après coup. C'est intégré dès la construction du site.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">📱</div>
                <h3>Mobile d'abord</h3>
                <p>La majorité de vos visiteurs passent par leur téléphone. Votre site s'adapte à toutes les tailles d'écran sans effort.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">🔒</div>
                <h3>Sécurisé</h3>
                <p>Certificat SSL, mises à jour régulières, hébergement fiable. Votre site est protégé et vous n'avez pas à vous en préoccuper.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">🤝</div>
                <h3>Un seul interlocuteur</h3>
                <p>Pas de service client anonyme. C'est moi qui réponds, du premier message jusqu'à la mise en ligne et après.</p>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════
     SERVICES
═══════════════════════════════ --}}
<section id="services" class="section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Ce que je fais</span>
            <h2>De l'idée à la mise en ligne,<br>je gère tout.</h2>
            <p>Vous n'avez pas à vous occuper de la technique. Vous me donnez votre vision, je construis le reste.</p>
        </div>

        <div class="services-list">
            <div class="service-row">
                <div class="service-num">01</div>
                <div class="service-text">
                    <h3>Design & maquette</h3>
                    <p>On commence par définir l'apparence de votre site : couleurs, mise en page, typographie. Vous validez avant qu'une ligne de code soit écrite.</p>
                </div>
            </div>
            <div class="service-row">
                <div class="service-num">02</div>
                <div class="service-text">
                    <h3>Développement Laravel</h3>
                    <p>Je construis votre site avec Laravel, un framework PHP robuste qui garantit sécurité, performance et facilité d'évolution.</p>
                </div>
            </div>
            <div class="service-row">
                <div class="service-num">03</div>
                <div class="service-text">
                    <h3>SEO & référencement</h3>
                    <p>Structure des pages, balises, vitesse, données structurées — tout est configuré pour que Google comprenne et valorise votre site.</p>
                </div>
            </div>
            <div class="service-row">
                <div class="service-num">04</div>
                <div class="service-text">
                    <h3>Mise en ligne & hébergement</h3>
                    <p>Nom de domaine, hébergement VPS, certificat de sécurité. Je m'occupe de tout. Vous n'avez plus qu'à partager l'adresse de votre site.</p>
                </div>
            </div>
            <div class="service-row">
                <div class="service-num">05</div>
                <div class="service-text">
                    <h3>Maintenance & suivi</h3>
                    <p>Votre site reste à jour et fonctionnel dans la durée. Et si vous avez besoin de modifier quelque chose, je suis joignable 7j/7.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════
     RÉALISATIONS
═══════════════════════════════ --}}
<section id="realisations" class="section section-alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Réalisations</span>
            <h2>Quelques projets récents.</h2>
            <p>Des vrais sites, pour de vraies personnes. Chaque projet est différent — c'est ça qui le rend intéressant.</p>
        </div>

        <div class="portfolio-grid">

            <article class="portfolio-card">
                <div class="portfolio-thumb">
                    <img
                        src="https://image.thum.io/get/width/700/crop/420/https://www.fredericoden.com/"
                        alt="Aperçu du site fredericoden.com"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('thumb-error')">
                    <div class="thumb-overlay">
                        <a href="https://www.fredericoden.com/" target="_blank" rel="noopener" class="thumb-visit">
                            Voir le site →
                        </a>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-tag">Site vitrine</span>
                    <h3>Frédéric Oden</h3>
                    <p>Site professionnel sur mesure, avec un design pensé pour mettre en valeur son activité et bien ressortir sur Google.</p>
                    <a href="https://www.fredericoden.com/" target="_blank" rel="noopener" class="portfolio-link">
                        fredericoden.com →
                    </a>
                </div>
            </article>

            <article class="portfolio-card">
                <div class="portfolio-thumb">
                    <img
                        src="https://image.thum.io/get/width/700/crop/420/https://cynthiarenard.fr/"
                        alt="Aperçu du site cynthiarenard.fr"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('thumb-error')">
                    <div class="thumb-overlay">
                        <a href="https://cynthiarenard.fr/" target="_blank" rel="noopener" class="thumb-visit">
                            Voir le site →
                        </a>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-tag">Site vitrine</span>
                    <h3>Cynthia Renard</h3>
                    <p>Une présence en ligne soignée, avec une identité visuelle forte qui colle à sa personnalité et donne envie de la contacter.</p>
                    <a href="https://cynthiarenard.fr/" target="_blank" rel="noopener" class="portfolio-link">
                        cynthiarenard.fr →
                    </a>
                </div>
            </article>

            <article class="portfolio-card">
                <div class="portfolio-thumb">
                    <img
                        src="https://image.thum.io/get/width/700/crop/420/https://desbarresdavid.fr/"
                        alt="Aperçu du site desbarresdavid.fr"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('thumb-error')">
                    <div class="thumb-overlay">
                        <a href="https://desbarresdavid.fr/" target="_blank" rel="noopener" class="thumb-visit">
                            Voir le site →
                        </a>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-tag">Site vitrine</span>
                    <h3>Desbarre David</h3>
                    <p>Un site construit sur Laravel, sécurisé et rapide, pour une image professionnelle qui tient dans le temps.</p>
                    <a href="https://desbarresdavid.fr/" target="_blank" rel="noopener" class="portfolio-link">
                        desbarresdavid.fr →
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════
     À PROPOS
═══════════════════════════════ --}}
<section id="propos" class="section section-dark">
    <div class="container">
        <div class="about-inner">

            <div class="about-left">
                <span class="eyebrow eyebrow-dark">À propos</span>
                <h2>"Votre projet mérite un guide, pas seulement un exécutant."</h2>
            </div>

            <div class="about-right">
                <p>Je suis <strong>Bastien Hecquet</strong>, développeur web indépendant et fondateur de <strong>Guideon</strong>. Je travaille principalement avec des entrepreneurs, artisans et freelances qui veulent une vraie présence en ligne — sans passer par une agence anonyme.</p>
                <p>Ce qui m'intéresse, c'est de comprendre votre activité avant d'ouvrir un éditeur de code. Un bon site, ça commence par des bonnes questions. Je m'implique comme si c'était mon propre projet.</p>

                <div class="about-promises">
                    <div class="promise-item">
                        <div class="promise-icon">✓</div>
                        Un seul interlocuteur, du brief à la mise en ligne
                    </div>
                    <div class="promise-item">
                        <div class="promise-icon">✓</div>
                        Pas de jargon — je m'adapte à votre niveau
                    </div>
                    <div class="promise-item">
                        <div class="promise-icon">✓</div>
                        Délais tenus, devis respecté
                    </div>
                    <div class="promise-item">
                        <div class="promise-icon">✓</div>
                        Disponible après la livraison
                    </div>
                </div>

                <div class="about-tags">
                    <span>Laravel</span>
                    <span>PHP 8+</span>
                    <span>Tailwind CSS</span>
                    <span>Postgresql</span>
                    <span>SEO technique</span>
                    <span>Déploiement VPS</span>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════
     CONTACT
═══════════════════════════════ --}}
<section id="contact" class="section">
    <div class="container">
        <div class="contact-inner">

            <div class="contact-left">
                <span class="eyebrow">Contact</span>
                <h2>Vous avez un projet en tête ?</h2>
                <p class="lead">Décrivez-moi votre idée. Pas besoin d'avoir tout préparé — on en parle ensemble et je vous reviens sous 24h avec une première analyse, sans engagement.</p>

                <div class="contact-details">
                    <a href="tel:0616443473" class="contact-item">
                        <div class="contact-ico">📞</div>
                        <span>06 16 44 34 73</span>
                    </a>
                    <a href="mailto:guideon.contact@gmail.com" class="contact-item">
                        <div class="contact-ico">✉</div>
                        <span>guideon.contact@gmail.com</span>
                    </a>
                    <a href="https://www.linkedin.com/in/bastien-hecquet-08b618256/" target="_blank" rel="noopener" class="contact-item">
                        <div class="contact-ico">in</div>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>

            <div class="contact-right">
                <div class="form-wrap">

                    @if(session('success'))
                        <div class="form-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="form-error">
                            Veuillez remplir tous les champs correctement.
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input
                                    type="text"
                                    id="nom"
                                    name="nom"
                                    value="{{ old('nom') }}"
                                    placeholder="Jean Dupont"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="jean@exemple.fr"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="projet">Votre projet</label>
                            <textarea
                                id="projet"
                                name="projet"
                                rows="5"
                                placeholder="Décrivez-moi votre activité et ce que vous attendez de votre site. Pas besoin d'être technique !"
                                required>{{ old('projet') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-dark btn-full">
                            Envoyer ma demande
                        </button>

                        <p class="form-note">Je réponds sous 24h — souvent moins.</p>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════
     FOOTER
═══════════════════════════════ --}}
<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-logo">
            <span class="logo-mark">G</span>
            <span class="logo-text">Guideon</span>
        </div>
        <p class="footer-copy">© {{ date('Y') }} Bastien Hecquet — Développeur Laravel</p>
        <a href="https://www.linkedin.com/in/bastien-hecquet-08b618256/" target="_blank" rel="noopener" class="footer-link">
            LinkedIn →
        </a>
    </div>
</footer>

</body>
</html>
