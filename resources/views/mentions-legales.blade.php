<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales | Guideon</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <style>
        .legal-header {
            background: rgba(255,255,255,0.94);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
            padding: 0;
        }
        .legal-header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 66px;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            font-weight: 800;
            color: var(--blue);
            padding: 8px 16px;
            background: var(--blue-pale);
            border: 1px solid var(--blue-mid);
            border-radius: 8px;
            transition: background 0.2s, border-color 0.2s;
        }
        .back-link:hover {
            background: var(--blue-mid);
        }
        .legal-hero {
            background: linear-gradient(155deg, #edf2ff 0%, #fff 55%);
            border-bottom: 1px solid var(--border);
            padding: 72px 0 56px;
        }
        .legal-hero h1 {
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 900;
            letter-spacing: -0.035em;
            color: var(--ink);
            margin-bottom: 10px;
        }
        .legal-hero p {
            font-size: 14px;
            font-weight: 600;
            color: var(--ink-3);
        }
        .legal-body {
            padding: 64px 0 96px;
        }
        .legal-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 40px 44px;
            display: flex;
            flex-direction: column;
            gap: 0;
        }
        .legal-section {
            padding: 28px 0;
            border-bottom: 1px solid var(--blue-pale);
        }
        .legal-section:first-child { padding-top: 0; }
        .legal-section:last-child  { padding-bottom: 0; border-bottom: none; }
        .legal-section h2 {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
            font-weight: 900;
            color: var(--ink);
            letter-spacing: -0.02em;
            margin-bottom: 12px;
        }
        .legal-icon {
            width: 32px;
            height: 32px;
            background: var(--blue-pale);
            border: 1px solid var(--blue-mid);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
            color: var(--blue);
        }
        .legal-section p,
        .legal-section li {
            font-size: 14px;
            font-weight: 600;
            color: var(--ink-2);
            line-height: 1.72;
        }
        .legal-section strong {
            color: var(--ink);
            font-weight: 800;
        }
        .legal-section ul {
            list-style: none;
            padding: 0;
            margin-top: 8px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .legal-section ul li::before {
            content: '—';
            color: var(--blue);
            font-weight: 800;
            margin-right: 8px;
        }
        .legal-footer {
            background: var(--ink);
            padding: 26px 0;
        }
        .legal-footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .legal-footer p {
            font-size: 12px;
            font-weight: 600;
            color: rgba(255,255,255,0.3);
        }
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 9px;
        }
        .footer-logo .logo-mark {
            width: 30px; height: 30px;
            background: var(--blue);
            border-radius: 7px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 14px; font-weight: 900;
        }
        .footer-logo .logo-text {
            font-size: 16px; font-weight: 900; color: #fff;
        }

        @media (max-width: 768px) {
            .legal-card { padding: 28px 22px; }
            .legal-hero { padding: 52px 0 40px; }
        }
    </style>
</head>
<body>

<header class="legal-header">
    <div class="container legal-header-inner">
        <a href="/" class="logo">
            <span class="logo-mark">G</span>
            <span class="logo-text">Guideon</span>
        </a>
        <a href="/" class="back-link">← Retour à l'accueil</a>
    </div>
</header>

<div class="legal-hero">
    <div class="container">
        <span class="eyebrow">Informations légales</span>
        <h1>Mentions légales</h1>
        <p>Informations légales relatives à l'éditeur et à l'hébergement du site guideon.dev</p>
    </div>
</div>

<div class="legal-body">
    <div class="container">
        <div class="legal-card">

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">👤</span>
                    Éditeur du site
                </h2>
                <p>
                    Le présent site est édité par <strong>Bastien Hecquet</strong>, développeur web indépendant opérant sous le nom commercial <strong>Guideon</strong>.<br><br>
                    <strong>Adresse e-mail :</strong> guideon.contact@gmail.com<br>
                    <strong>Téléphone :</strong> 06 16 44 34 73<br>
                    <strong>Site web :</strong> https://guideon.dev
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">🪪</span>
                    Statut
                </h2>
                <p>
                    Bastien Hecquet exerce en tant qu'auto-entrepreneur / entrepreneur individuel.<br>
                    <strong>Numéro SIRET :</strong> 101 296 739 00010<br>
                    <strong>Activité :</strong> Création, développement et maintenance de sites internet.
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">🖥️</span>
                    Hébergement
                </h2>
                <p>
                    Le site guideon.dev est hébergé par la société <strong>OVH SAS</strong>.<br>
                    <strong>Adresse :</strong> 2 rue Kellermann, 59100 Roubaix, France<br>
                    <strong>Site web :</strong> www.ovhcloud.com
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">©</span>
                    Propriété intellectuelle
                </h2>
                <p>
                    L'ensemble du contenu de ce site — textes, visuels, logo, structure, code — est la propriété exclusive de Bastien Hecquet / Guideon. Toute reproduction ou diffusion, même partielle, est interdite sans accord écrit préalable.
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">⚠️</span>
                    Responsabilité
                </h2>
                <p>
                    Les informations publiées sur ce site sont données à titre indicatif. Guideon s'efforce de les maintenir à jour mais ne saurait être tenu responsable d'éventuelles erreurs ou omissions, ni des conséquences liées à leur utilisation.
                </p>
            </div>

        </div>
    </div>
</div>

<footer class="legal-footer">
    <div class="container legal-footer-inner">
        <div class="footer-logo">
            <span class="logo-mark">G</span>
            <span class="logo-text">Guideon</span>
        </div>
        <p>© {{ date('Y') }} Bastien Hecquet — Guideon. Tous droits réservés.</p>
    </div>
</footer>

</body>
</html>
