<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité | Guideon</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <style>
        .legal-header {
            background: rgba(255,255,255,0.94);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
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
        .back-link:hover { background: var(--blue-mid); }
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
        .legal-body { padding: 64px 0 96px; }
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
            width: 32px; height: 32px;
            background: var(--blue-pale);
            border: 1px solid var(--blue-mid);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; flex-shrink: 0;
            color: var(--blue);
        }
        .legal-section p,
        .legal-section li {
            font-size: 14px;
            font-weight: 600;
            color: var(--ink-2);
            line-height: 1.72;
        }
        .legal-section strong { color: var(--ink); font-weight: 800; }
        .legal-section ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
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
        /* Bloc mis en avant */
        .legal-highlight {
            background: var(--blue-pale);
            border: 1px solid var(--blue-mid);
            border-radius: 10px;
            padding: 14px 18px;
            margin-top: 14px;
            font-size: 14px;
            font-weight: 700;
            color: var(--blue);
            display: flex;
            align-items: center;
            gap: 10px;
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
        .footer-logo { display: flex; align-items: center; gap: 9px; }
        .footer-logo .logo-mark {
            width: 30px; height: 30px;
            background: var(--blue); border-radius: 7px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 14px; font-weight: 900;
        }
        .footer-logo .logo-text { font-size: 16px; font-weight: 900; color: #fff; }

        @media (max-width: 768px) {
            .legal-card  { padding: 28px 22px; }
            .legal-hero  { padding: 52px 0 40px; }
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
        <span class="eyebrow">Vos données</span>
        <h1>Politique de confidentialité</h1>
        <p>Comment vos informations sont collectées, utilisées et protégées sur guideon.dev</p>
    </div>
</div>

<div class="legal-body">
    <div class="container">
        <div class="legal-card">

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">👁</span>
                    Introduction
                </h2>
                <p>
                    Guideon (Bastien Hecquet) s'engage à protéger la vie privée des personnes qui visitent ce site ou prennent contact. Cette page explique simplement quelles données sont collectées, pourquoi, et comment vous pouvez exercer vos droits.
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">📋</span>
                    Données collectées
                </h2>
                <p>Seules les informations que vous transmettez volontairement via le formulaire de contact sont enregistrées :</p>
                <ul>
                    <li>Nom et prénom</li>
                    <li>Adresse e-mail</li>
                    <li>Numéro de téléphone (si fourni)</li>
                    <li>Description de votre projet</li>
                </ul>
                <p style="margin-top: 12px;">Aucun cookie de traçage, aucun outil d'analyse de comportement ni aucune donnée de navigation n'est collecté.</p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">🎯</span>
                    Utilisation des données
                </h2>
                <p>Ces informations sont utilisées uniquement pour :</p>
                <ul>
                    <li>Vous répondre suite à votre prise de contact</li>
                    <li>Préparer un devis ou une analyse de votre projet</li>
                    <li>Assurer le suivi de notre collaboration si elle se concrétise</li>
                </ul>
                <div class="legal-highlight">
                    🔒 Vos données ne sont jamais vendues, partagées ou transmises à des tiers.
                </div>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">🗓</span>
                    Durée de conservation
                </h2>
                <p>
                    Vos données sont conservées le temps nécessaire au traitement de votre demande, et au maximum <strong>3 ans</strong> sans interaction de votre part, conformément aux recommandations de la CNIL.
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">✅</span>
                    Vos droits (RGPD)
                </h2>
                <p>
                    Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez à tout moment d'un droit d'accès, de rectification, de suppression et de portabilité de vos données personnelles.
                </p>
                <p style="margin-top: 10px;">
                    Pour exercer ces droits, contactez-moi par e-mail à : <strong>guideon.contact@gmail.com</strong><br>
                    Je m'engage à répondre dans un délai maximum de <strong>72 heures</strong>.
                </p>
            </div>

            <div class="legal-section">
                <h2>
                    <span class="legal-icon">📬</span>
                    Contact & réclamation
                </h2>
                <p>
                    Pour toute question relative à cette politique ou à vos données : <strong>guideon.contact@gmail.com</strong><br><br>
                    Si vous estimez que vos droits ne sont pas respectés, vous pouvez également saisir la <strong>CNIL</strong> via <a href="https://www.cnil.fr" target="_blank" rel="noopener" style="color: var(--blue); font-weight: 700;">www.cnil.fr</a>.
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
