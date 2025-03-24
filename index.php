<? session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventsport - Suivez vos événements sportifs en ligne</title>
    <meta name="description" content="Plateforme de suivi d'événements sportifs en direct">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.php" class="logo">Eventsport</a>
            <nav class="menu">
                <?php if(!isset($_SESSION['connected'])): ?>
                    <a href="index.php">Accueil</a>
                    <a href="events.php">Événements</a>
                    <a href="about.php">À propos</a>
                    <a href="sign_in.php">S'inscrire</a>
                    <a href="login.php">Se connecter</a>
                <?php else: ?>
                    <a href="dashboard.php">Tableau de bord</a>
                    <a href="my-events.php">Mes événements</a>
                    <a href="profile.php">Profil</a>
                    <a href="logout.php">Se déconnecter</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="ban">
            <img src="images/stade_de_france.jpg" alt="Stade de France">
        </div>
        <div class="inner-banner">
            <h1>Vivez le sport autrement</h1>
            <p class="mb-4">Suivez vos événements sportifs préférés en temps réel</p>
            <a href="events.php" class="btn-custom">Découvrir les événements</a>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>Bienvenue sur Eventsport</h2>
            <div class="row">
                <div class="col-md-4">
                    <article>
                        <h3>Les événements</h3>
                        <p>Accédez à une large sélection d'événements sportifs en direct. Football, tennis, basketball et bien plus encore.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <h3>Notre mission</h3>
                        <p>Vous permettre de vivre une expérience unique en suivant vos sports favoris où que vous soyez.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <h3>Communauté</h3>
                        <p>Rejoignez une communauté passionnée de sport et partagez vos moments forts avec d'autres fans.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>À propos</h5>
                    <ul class="quick-links">
                        <li><a href="about.php">Notre histoire</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="careers.php">Carrières</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Services</h5>
                    <ul class="quick-links">
                        <li><a href="events.php">Événements</a></li>
                        <li><a href="pricing.php">Tarifs</li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Légal</h5>
                    <ul class="quick-links">
                        <li><a href="privacy.php">Confidentialité</a></li>
                        <li><a href="terms.php">Conditions</a></li>
                        <li><a href="cookies.php">Cookies</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>

            <div class="text-center mt-4">
                <p>&copy; <?php echo date('Y'); ?> Eventsport. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>