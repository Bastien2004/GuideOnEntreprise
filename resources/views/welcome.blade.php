<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bastien Hecquet, développeur Laravel. Sites web performants, optimisés SEO, livrés dans les délais.">
    <title>Guideon — Développeur Laravel & Sites Web sur mesure</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
<body>

{{-- NAV --}}
<header class="site-header">
    <div class="container header-inner">
        <a href="/" class="logo">
            <span class="logo-mark">G</span>
            <span class="logo-text">Guideon</span>
        </a>
        <nav class="main-nav">
            <a href="#realisations">Réalisations</a>
            <a href="#services">Services</a>
            <a href="#propos">À propos</a>
            <a href="#contact" class="nav-cta">Démarrer un projet</a>
        </nav>
        <button class="burger" onclick="this.classList.toggle('open'); document.querySelector('.mobile-nav').classList.toggle('open')" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
    <div class="mobile-nav">
        <a href="#realisations" onclick="document.querySelector('.mobile-nav').classList.remove('open')">Réalisations</a>
        <a href="#services" onclick="document.querySelector('.mobile-nav').classList.remove('open')">Services</a>
        <a href="#propos" onclick="document.querySelector('.mobile-nav').classList.remove('open')">À propos</a>
        <a href="#contact" class="nav-cta" onclick="document.querySelector('.mobile-nav').classList.remove('open')">Démarrer un projet</a>
    </div>
</header>

{{-- HERO --}}
<section class="hero">
    <div class="container">
        <div class="hero-available">
            <span class="pulse"></span>
            Disponible pour nouveaux projets
        </div>
        <h1 class="hero-title">
            Sites web Laravel<br>
            <em>conçus pour performer.</em>
        </h1>
        <p class="hero-desc">
            Bastien Hecquet — Je conçois et développe des sites et applications web sur mesure,<br class="br-desk"> rapides, bien référencés et faciles à faire évoluer.
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
                <span class="stat-l">Support</span>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section id="services" class="section section-services">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Ce que je fais</p>
            <h2>Un accompagnement complet,<br>du design au déploiement.</h2>
        </div>
        <div class="services-grid">
            <div class="service-item">
                <div class="service-num">01</div>
                <h3>Design & création</h3>
                <p>Interfaces pensées pour convertir. Chaque page est conçue autour de vos objectifs, pas d'un template.</p>
            </div>
            <div class="service-item">
                <div class="service-num">02</div>
                <h3>Développement Laravel</h3>
                <p>Applications robustes et sécurisées. Laravel offre la solidité d'un framework éprouvé avec la flexibilité du sur-mesure.</p>
            </div>
            <div class="service-item">
                <div class="service-num">03</div>
                <h3>SEO & performance</h3>
                <p>Hébergement optimisé, temps de chargement maîtrisés, structure pensée pour les moteurs de recherche dès le départ.</p>
            </div>
            <div class="service-item">
                <div class="service-num">04</div>
                <h3>Maintenance & suivi</h3>
                <p>Votre site reste à jour, sécurisé et fonctionnel. Je reste disponible bien après la livraison.</p>
            </div>
        </div>
    </div>
</section>

{{-- RÉALISATIONS --}}
<section id="realisations" class="section section-realisations">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Réalisations</p>
            <h2>Ils m'ont fait confiance.</h2>
        </div>
        <div class="portfolio-grid">

            <article class="portfolio-card">
                <div class="portfolio-thumb">
                    <img
                        src="https://image.thum.io/get/width/700/crop/420/https://www.fredericoden.com/"
                        alt="Site fredericoden.com"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('thumb-error')">
                    <div class="thumb-overlay">
                        <a href="https://www.fredericoden.com/" target="_blank" rel="noopener" class="thumb-visit">
                            Visiter <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-tag">Site vitrine</span>
                    <h3>Frédéric Oden</h3>
                    <p>Site professionnel sur mesure avec design personnalisé et optimisation SEO complète.</p>
                    <a href="https://www.fredericoden.com/" target="_blank" rel="noopener" class="portfolio-link">
                        fredericoden.com <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="portfolio-card">
                <div class="portfolio-thumb">
                    <img
                        src="https://image.thum.io/get/width/700/crop/420/https://cynthiarenard.fr/"
                        alt="Site cynthiarenard.fr"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('thumb-error')">
                    <div class="thumb-overlay">
                        <a href="https://cynthiarenard.fr/" target="_blank" rel="noopener" class="thumb-visit">
                            Visiter <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-tag">Site vitrine</span>
                    <h3>Cynthia Renard</h3>
                    <p>Présence web soignée avec identité visuelle forte et parcours utilisateur optimisé.</p>
                    <a href="https://cynthiarenard.fr/" target="_blank" rel="noopener" class="portfolio-link">
                        cynthiarenard.fr <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="portfolio-card">
                <div class="portfolio-thumb">
                    <img
                        src="https://image.thum.io/get/width/700/crop/420/https://desbarresdavid.fr/"
                        alt="Site desbarresdavid.fr"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('thumb-error')">
                    <div class="thumb-overlay">
                        <a href="https://desbarresdavid.fr/" target="_blank" rel="noopener" class="thumb-visit">
                            Visiter <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-tag">Site vitrine</span>
                    <h3>Desbarre David</h3>
                    <p>Site Laravel sur mesure, sécurisé et performant pour une image professionnelle durable.</p>
                    <a href="https://desbarresdavid.fr/" target="_blank" rel="noopener" class="portfolio-link">
                        desbarresdavid.fr <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

{{-- À PROPOS --}}
<section id="propos" class="section section-about">
    <div class="container">
        <div class="about-grid">
            <div class="about-left">
                <p class="eyebrow eyebrow-light">À propos</p>
                <h2>"Votre projet mérite un guide, pas seulement un exécutant."</h2>
            </div>
            <div class="about-right">
                <p>Passionné par l'écosystème Laravel, j'ai fondé <strong>Guideon</strong> pour offrir aux entrepreneurs un accompagnement technique sérieux — sans jargon inutile, avec un vrai suivi.</p>
                <p>Je m'implique comme si c'était mon propre projet : je questionne, je propose, j'alerte. Vous avez un interlocuteur unique du brief à la mise en ligne.</p>
                <div class="about-tags">
                    <span>Laravel</span>
                    <span>PHP 8+</span>
                    <span>Tailwind CSS</span>
                    <span>MySQL</span>
                    <span>SEO technique</span>
                    <span>Déploiement VPS</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT --}}
<section id="contact" class="section section-contact">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-left">
                <p class="eyebrow">Contact</p>
                <h2>On discute de votre projet ?</h2>
                <p class="contact-intro">Décrivez-moi votre idée. Je vous réponds sous 24h avec une première analyse, sans engagement.</p>
                <div class="contact-infos">
                    <a href="tel:0616443473" class="contact-info-item">
                        <i class="fas fa-phone"></i>
                        <span>06 16 44 34 73</span>
                    </a>
                    <a href="mailto:guideon.contact@gmail.com" class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <span>guideon.contact@gmail.com</span>
                    </a>
                    <a href="https://www.linkedin.com/in/bastien-hecquet-08b618256/" target="_blank" class="contact-info-item">
                        <i class="fab fa-linkedin-in"></i>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
            <div class="contact-right">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    @if(session('success'))
                        <div class="form-success">
                            ✓ {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="form-error">
                            Veuillez remplir tous les champs correctement.
                        </div>
                    @endif

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Jean Dupont" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="jean@exemple.fr" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="projet">Votre projet</label>
                        <textarea id="projet" name="projet" rows="5" placeholder="Décrivez votre projet : objectifs, fonctionnalités souhaitées, délais..." required>{{ old('projet') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-full">
                        Envoyer ma demande <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer class="site-footer">
    <div class="container footer-inner">
        <span class="logo-text">Guideon</span>
        <p>© {{ date('Y') }} Bastien Hecquet — Développeur Laravel</p>
        <a href="https://www.linkedin.com/in/bastien-hecquet-08b618256/" target="_blank" class="footer-linkedin">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
</footer>

</body>
</html>
