<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTML Cheat Sheet</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header with navigation and logo -->
    <header>
        <div class="header-content">
            <img src="images/Archlinuxlogo.png" alt="Arch Linux Logo" class="logo">
            <nav class="navigation">
                <a href="#home" class="paragraph">Home</a>
                <a href="#about" class="paragraph">About Us</a>
                <a href="#services" class="paragraph">Services</a>
                <a href="#resources" class="paragraph">Resources</a>
                <a href="#registration" class="paragraph">Inscription</a>
                <a href="#contact" class="paragraph">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Home Section -->
        <section id="home" class="sectionpart">
            <div class="hero-content">
                <img src="images/Archlinuxlogo.png" alt="Arch Linux" class="hero-image">
                <h1>Arch linux Distro</h1>
                <p>An amazingly customizable distro, mostly used by developers worldwide</p>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="sectionpart">
            <h2>Customization of Arch linux</h2>
            <p>This is an example of how customizable Arch linux is with hyperland and proper configurations</p>
            <img src="images/Archlinux.png" alt="Arch Linux" class="Archimage">
        </section>

        <!-- Services Section -->
        <section id="services" class="sectionpart">
            <h2>Our Services</h2>
            <p>We offer a wide range of services designed to help individuals and organizations grow:</p>

            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Pricing</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Consulting and Strategy</td>
                        <td>Expert guidance for your Arch Linux projects and system architecture</td>
                        <td>1-3 months</td>
                        <td>$150/hour</td>
                    </tr>
                    <tr>
                        <td>Web and App Development</td>
                        <td>Custom solutions tailored to your needs with modern frameworks</td>
                        <td>2-6 months</td>
                        <td>From $5,000</td>
                    </tr>
                    <tr>
                        <td>Cloud Solutions</td>
                        <td>Scalable infrastructure deployment and management</td>
                        <td>1-4 weeks</td>
                        <td>From $2,500</td>
                    </tr>
                    <tr>
                        <td>Training and Workshops</td>
                        <td>Hands-on learning experiences for Arch Linux and development</td>
                        <td>1-5 days</td>
                        <td>$500/day</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Resources Section -->
        <section id="resources" class="sectionpart">
            <h2>Resources</h2>
            <p>Here are some useful links and materials:</p>
            <ul>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">MDN HTML
                        Documentation</a></li>
                <li><a href="https://www.w3schools.com/" target="_blank">W3Schools</a></li>
                <li><a href="https://css-tricks.com/" target="_blank">CSS Tricks</a></li>
            </ul>
        </section>

        <!-- Registration Form Section -->
        <section id="registration" class="sectionpart">
            <h2>Inscription au Cours d'Informatique</h2>
            <p>Remplissez le formulaire ci-dessous pour vous inscrire à nos cours</p>
            <form class="registration-form" action="Success.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" required placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" required placeholder="Entrez votre prénom">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="adresse">Adresse *</label>
                        <input type="text" id="adresse" name="adresse" required placeholder="Rue et numéro">
                    </div>
                    <div class="form-group">
                        <label for="numero">Numéro *</label>
                        <input type="text" id="numero" name="numero" required placeholder="Numéro de rue">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="npa">NPA *</label>
                        <input type="text" id="npa" name="npa" required placeholder="Code postal" pattern="[0-9]{4,5}"
                            title="Code postal à 4 ou 5 chiffres">
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville *</label>
                        <input type="text" id="ville" name="ville" required placeholder="Ville">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="date-naissance">Date de naissance *</label>
                        <input type="date" id="date-naissance" name="date-naissance" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail *</label>
                        <input type="email" id="email" name="email" required placeholder="exemple@email.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Mot de passe *</label>
                        <input type="password" id="password" name="password" required placeholder="Minimum 8 caractères"
                            minlength="8">
                    </div>
                    <div class="form-group">
                        <label for="cours">Sélectionner un cours *</label>
                        <select id="cours" name="cours" required>
                            <option value="">-- Choisissez un cours --</option>
                            <option value="intro-linux">Introduction à Linux et Arch Linux</option>
                            <option value="web-dev">Développement Web (HTML, CSS, JavaScript)</option>
                            <option value="python-prog">Programmation Python pour débutants</option>
                            <option value="cloud-infra">Infrastructure Cloud et DevOps</option>
                            <option value="cybersecurity">Cybersécurité et Réseaux</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-submit">S'inscrire</button>
                    <button type="reset" class="btn-reset">Réinitialiser</button>
                </div>
            </form>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="sectionpart">
            <h2>Contact Us</h2>
            <p>If you'd like to get in touch, here's how:</p>
            <ul>
                <li>Email: info@example.com</li>
                <li>Phone: +1 (555) 123-4567</li>
                <li>Address: 123 Main Street, Example City</li>
            </ul>
        </section>

    </main>
    <!-- Footer -->
    <footer class="footerpage">
        <nav class="endnavigation">
            <p>&copy; 2025 Example Company</p>
            <a href="#privacy">Privacy Policy</a> |
            <a href="#terms">Terms of Service</a>
        </nav>
    </footer>
</body>

</html>