<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bastien Hecquet, développeur spécialisé Laravel. Je crée des outils digitaux performants et optimisés SEO pour propulser votre activité.">
    <title>Guideon | Expert Laravel & Création de Sites Web Performance</title>

    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#fcfdfe] text-slate-900 selection:bg-blue-600 selection:text-white">

<nav class="fixed w-full z-50 transition-all duration-300 py-4 px-6">
    <div class="max-w-6xl mx-auto bg-white/80 backdrop-blur-xl border border-white/20 px-6 py-3 rounded-2xl shadow-sm flex justify-between items-center">
        <div class="text-xl font-black text-blue-600 tracking-tighter flex items-center gap-2">
            <div class="w-9 h-9 bg-gradient-to-br from-blue-400 to-blue-600 rounded-[10px] flex items-center justify-center text-white text-lg shadow-md border-b-4 border-blue-800/30">
                G
            </div>
            GUIDEON
        </div>
        <div class="hidden md:flex items-center space-x-8 font-bold text-[13px] uppercase tracking-widest text-slate-500">
            <a href="#services" class="hover:text-blue-600 transition-colors">Services</a>
            <a href="#propos" class="hover:text-blue-600 transition-colors">À propos</a>
            <a href="#contact" class="bg-slate-900 text-white px-5 py-2.5 rounded-xl hover:bg-blue-600 hover:shadow-xl hover:shadow-blue-500/20 transition-all active:scale-95">
                Projet en vue ?
            </a>
        </div>
    </div>
</nav>

<section class="relative pt-48 pb-32 bg-guideon text-white rounded-b-[4rem] shadow-2xl overflow-hidden">
    <div class="circuit-overlay"></div>
    <div class="max-w-6xl mx-auto px-6 relative z-10 flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-3/5 text-center lg:text-left space-y-10">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase">
                <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Disponible pour nouveaux projets
            </div>
            <h1 class="text-6xl lg:text-8xl font-black leading-[0.9] tracking-tight">
                On guide votre site vers le <span class="text-blue-200 italic">succès.</span>
            </h1>
            <p class="text-xl text-blue-50 max-w-xl leading-relaxed font-medium opacity-80">
                Bastien Hecquet — Développeur Laravel spécialisé dans la création d'outils digitaux qui propulsent votre activité.
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                <a href="#contact" class="bg-white text-blue-700 px-10 py-5 rounded-2xl font-black text-lg shadow-xl hover:shadow-white/10 hover:-translate-y-1 transition-all active:scale-95">
                    Lancer mon projet
                </a>
                <a href="#services" class="bg-blue-500/10 backdrop-blur-md border border-white/20 text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 transition-all">
                    Expertise
                </a>
            </div>
        </div>

        <div class="lg:w-2/5 flex justify-center relative">
            <div class="floating relative w-72 h-60 bg-[#3b66f5] rounded-[3rem] border-b-[12px] border-black/20 shadow-[0_25px_50px_-12px_rgba(59,102,245,0.5)] flex flex-col items-center justify-center overflow-hidden">

                <div class="absolute top-10 flex justify-between w-44">
                    <div class="w-12 h-4 border-t-4 border-[#0a1a4a] rounded-[100%] -rotate-12"></div>
                    <div class="w-12 h-4 border-t-4 border-[#0a1a4a] rounded-[100%] rotate-12"></div>
                </div>

                <div class="flex space-x-4 mt-6">
                    <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center relative shadow-inner overflow-hidden">
                        <div class="w-14 h-14 bg-[#0a1a4a] rounded-full relative translate-x-2 translate-y-1">
                            <div class="absolute top-2 right-2 w-4 h-4 bg-white rounded-full"></div>
                        </div>
                    </div>
                    <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center relative shadow-inner overflow-hidden">
                        <div class="w-14 h-14 bg-[#0a1a4a] rounded-full relative translate-x-2 translate-y-1">
                            <div class="absolute top-2 right-2 w-4 h-4 bg-white rounded-full"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 w-16 h-6 border-b-4 border-[#0a1a4a] rounded-[100%]"></div>

                <div class="absolute top-4 left-6 w-16 h-8 bg-white/20 rounded-full blur-md -rotate-12"></div>
            </div>

            <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-300/20 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-indigo-500/20 blur-3xl rounded-full"></div>
        </div>
    </div>
</section>

<section id="services" class="py-32 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row justify-between items-end mb-20 gap-8">
            <div class="space-y-4">
                <h2 class="text-blue-600 font-black tracking-widest uppercase text-xs">Pourquoi choisir Guideon ?</h2>
                <p class="text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">Une solution complète<br>pour votre présence web.</p>
            </div>
            <p class="text-slate-500 max-w-sm font-medium">De la première ligne de code au déploiement final, je m'occupe de tout.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="service-card group p-10 rounded-[2rem] border-slate-100 border-2">
                <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-xl mb-8 group-hover:rotate-6 transition-transform shadow-lg shadow-blue-500/20">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="text-2xl font-black mb-4">Création</h3>
                <p class="text-slate-500 leading-relaxed text-[15px] font-medium">Design sur-mesure captivant, pensé pour convertir vos visiteurs en clients.</p>
            </div>
            <div class="service-card group p-10 rounded-[2rem] border-slate-100 border-2">
                <div class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-xl mb-8 group-hover:rotate-6 transition-transform shadow-lg shadow-indigo-500/20">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-2xl font-black mb-4">Dév. Laravel</h3>
                <p class="text-slate-500 leading-relaxed text-[15px] font-medium">Des applications web robustes, rapides et sécurisées avec le meilleur framework PHP.</p>
            </div>
            <div class="service-card group p-10 rounded-[2rem] border-slate-100 border-2">
                <div class="w-14 h-14 bg-emerald-600 text-white rounded-2xl flex items-center justify-center text-xl mb-8 group-hover:rotate-6 transition-transform shadow-lg shadow-emerald-500/20">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-2xl font-black mb-4">Mise en ligne</h3>
                <p class="text-slate-500 leading-relaxed text-[15px] font-medium">Hébergement haute performance et optimisation SEO pour être vu partout.</p>
            </div>
            <div class="service-card group p-10 rounded-[2rem] border-slate-100 border-2">
                <div class="w-14 h-14 bg-amber-600 text-white rounded-2xl flex items-center justify-center text-xl mb-8 group-hover:rotate-6 transition-transform shadow-lg shadow-amber-500/20">
                    <i class="fas fa-shield-halved"></i>
                </div>
                <h3 class="text-2xl font-black mb-4">Maintenance</h3>
                <p class="text-slate-500 leading-relaxed text-[15px] font-medium">Mises à jour et support technique 7j/7 pour votre sérénité totale.</p>
            </div>
        </div>
    </div>
</section>

<section id="propos" class="py-20 px-6">
    <div class="max-w-6xl mx-auto bg-slate-900 rounded-[3rem] p-12 lg:p-20 flex flex-col lg:flex-row items-center gap-16 relative overflow-hidden">
        <div class="lg:w-1/2 relative z-10">
            <h2 class="text-blue-400 font-bold uppercase tracking-widest text-xs mb-6">L'humain derrière le code</h2>
            <h3 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-8 italic">"Votre projet mérite un guide, pas seulement un exécutant."</h3>
            <p class="text-slate-400 text-lg leading-relaxed mb-10">
                Passionné par l'écosystème Laravel, j'ai fondé <span class="text-white font-bold tracking-tight">GUIDEON</span> pour offrir aux entrepreneurs un accompagnement technique haut de gamme sans le jargon complexe.
            </p>
            <div class="flex gap-10">
                <div><p class="text-4xl font-black text-white">100%</p><p class="text-slate-500 text-xs font-bold uppercase mt-2">Engagement</p></div>
                <div><p class="text-4xl font-black text-white">PHP 8+</p><p class="text-slate-500 text-xs font-bold uppercase mt-2">Expertise Laravel</p></div>
            </div>
        </div>
        <div class="lg:w-1/2 flex justify-center lg:justify-end">
            <div class="w-64 h-64 lg:w-80 lg:h-80 bg-blue-600 rounded-[2rem] flex items-center justify-center text-9xl text-white shadow-3xl rotate-3">
                <i class="fas fa-user-circle opacity-30"></i>
                <span class="absolute font-black italic scale-150">BH.</span>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-32">
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-white rounded-[4rem] shadow-2xl shadow-slate-200/50 border border-slate-100 flex flex-col lg:flex-row overflow-hidden italic">
            <div class="lg:w-2/5 bg-blue-600 p-12 lg:p-20 text-white flex flex-col justify-between">
                <div class="space-y-8">
                    <h2 class="text-5xl font-black leading-tight italic">On discute de votre futur site ?</h2>
                    <div class="space-y-6 pt-10">
                        <a href="tel:0616443473" class="flex items-center gap-5 group">
                            <div class="contact-icon-box">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span class="text-lg font-bold uppercase">06 16 44 34 73</span>
                        </a>
                        <a href="mailto:guideon.contact@gmail.com" class="flex items-center gap-5 group">
                            <div class="contact-icon-box">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span class="text-lg font-bold uppercase tracking-tighter">guideon.contact@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:w-3/5 p-12 lg:p-20 bg-slate-50/50">
                <form action="#" class="space-y-8 not-italic">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-1">Votre Nom</label>
                            <input type="text" placeholder="Jean Dupont" class="w-full bg-white border-none rounded-2xl px-6 py-4 shadow-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                        </div>
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-1">Email professionnel</label>
                            <input type="email" placeholder="jean@exemple.fr" class="w-full bg-white border-none rounded-2xl px-6 py-4 shadow-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-1">Votre projet en quelques mots</label>
                        <textarea rows="4" placeholder="Objectifs, fonctionnalités, délais..." class="w-full bg-white border-none rounded-2xl px-6 py-4 shadow-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none"></textarea>
                    </div>
                    <button class="w-full bg-slate-900 text-white font-black py-5 rounded-2xl hover:bg-blue-600 hover:shadow-2xl hover:shadow-blue-500/40 transition-all transform active:scale-95 flex items-center justify-center gap-3 tracking-widest uppercase text-sm">
                        Envoyer ma demande <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="py-12 bg-white text-center border-t border-slate-50">
    <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="text-xl font-black text-slate-900 uppercase italic">GUIDEON</div>
        <div class="flex gap-6">
            <a href="https://www.linkedin.com/in/bastien-hecquet-08b618256/" target="_blank" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white transition-all">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">© {{ date('Y') }} — Bastien Hecquet</p>
    </div>
</footer>

</body>
</html>
