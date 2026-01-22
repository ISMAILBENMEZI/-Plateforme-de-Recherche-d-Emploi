  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Plateforme de Recrutement</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
    
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">

                <li><a href="Home">Accueil</a></li>
                <li><a href="offers">Offres</a></li>
                <li><a href="categories">Catégories</a></li>

            </ul>
            <a href="logout" class="btn-primary">Déconnexion</a>
        </div>
    </nav>

      <section class="search-section">
          <div class="search-container">
              <div class="search-bar">
                  <input type="text" placeholder="Rechercher un poste, une entreprise...">
                  <button class="btn-primary">Rechercher</button>
              </div>
              <div class="filters">
                  <select class="filter-select">
                      <option>Toutes les catégories</option>
                      <option>Technologie</option>
                      <option>Marketing</option>
                      <option>Finance</option>
                  </select>
                  <select class="filter-select">
                      <option>Localisation</option>
                      <option>Casablanca</option>
                      <option>Rabat</option>
                      <option>Marrakech</option>
                  </select>
                  <select class="filter-select">
                      <option>Type de contrat</option>
                      <option>CDI</option>
                      <option>CDD</option>
                      <option>Freelance</option>
                  </select>
              </div>
          </div>
      </section>
      <section>
          <h2 class="section-title">Dernières offres d'emploi</h2>
          <div class="jobs-grid">
              <div class="job-card">
                  <div class="job-header">
                      <div>
                          <h3 class="job-title">Développeur Full Stack</h3>
                          <p class="company-name">Tech Innovations SA</p>
                      </div>
                      <div class="company-logo">TI</div>
                  </div>
                  <div class="job-meta">
                      <span class="meta-item">📍 Casablanca</span>
                      <span class="meta-item">⏰ CDI</span>
                      <span class="meta-item">🕐 Publié il y a 2h</span>
                  </div>
                  <div class="tags">
                      <span class="tag">PHP</span>
                      <span class="tag">Laravel</span>
                      <span class="tag">React</span>
                      <span class="tag">MySQL</span>
                  </div>
                  <div class="job-footer">
                      <span class="salary">15 000 - 20 000 DH</span>
                      <button class="btn-apply">Postuler</button>
                  </div>
              </div>

              <div class="job-card">
                  <div class="job-header">
                      <div>
                          <h3 class="job-title">Chef de Projet Digital</h3>
                          <p class="company-name">Digital Marketing Pro</p>
                      </div>
                      <div class="company-logo">DM</div>
                  </div>
                  <div class="job-meta">
                      <span class="meta-item">📍 Rabat</span>
                      <span class="meta-item">⏰ CDI</span>
                      <span class="meta-item">🕐 Publié il y a 5h</span>
                  </div>
                  <div class="tags">
                      <span class="tag">Gestion de projet</span>
                      <span class="tag">Marketing Digital</span>
                      <span class="tag">SEO</span>
                  </div>
                  <div class="job-footer">
                      <span class="salary">18 000 - 25 000 DH</span>
                      <button class="btn-apply">Postuler</button>
                  </div>
              </div>

              <div class="job-card">
                  <div class="job-header">
                      <div>
                          <h3 class="job-title">Analyste Financier</h3>
                          <p class="company-name">Finance Corp</p>
                      </div>
                      <div class="company-logo">FC</div>
                  </div>
                  <div class="job-meta">
                      <span class="meta-item">📍 Casablanca</span>
                      <span class="meta-item">⏰ CDD</span>
                      <span class="meta-item">🕐 Publié il y a 1j</span>
                  </div>
                  <div class="tags">
                      <span class="tag">Analyse Financière</span>
                      <span class="tag">Excel</span>
                      <span class="tag">Reporting</span>
                  </div>
                  <div class="job-footer">
                      <span class="salary">12 000 - 16 000 DH</span>
                      <button class="btn-apply">Postuler</button>
                  </div>
              </div>

              <div class="job-card">
                  <div class="job-header">
                      <div>
                          <h3 class="job-title">Designer UX/UI</h3>
                          <p class="company-name">Creative Studio</p>
                      </div>
                      <div class="company-logo">CS</div>
                  </div>
                  <div class="job-meta">
                      <span class="meta-item">📍 Marrakech</span>
                      <span class="meta-item">⏰ Freelance</span>
                      <span class="meta-item">🕐 Publié il y a 3j</span>
                  </div>
                  <div class="tags">
                      <span class="tag">Figma</span>
                      <span class="tag">Adobe XD</span>
                      <span class="tag">UI Design</span>
                  </div>
                  <div class="job-footer">
                      <span class="salary">300 - 500 DH/j</span>
                      <button class="btn-apply">Postuler</button>
                  </div>
              </div>

              <div class="job-card">
                  <div class="job-header">
                      <div>
                          <h3 class="job-title">Ingénieur DevOps</h3>
                          <p class="company-name">Cloud Systems</p>
                      </div>
                      <div class="company-logo">CL</div>
                  </div>
                  <div class="job-meta">
                      <span class="meta-item">📍 Casablanca</span>
                      <span class="meta-item">⏰ CDI</span>
                      <span class="meta-item">🕐 Publié il y a 4j</span>
                  </div>
                  <div class="tags">
                      <span class="tag">Docker</span>
                      <span class="tag">Kubernetes</span>
                      <span class="tag">AWS</span>
                      <span class="tag">CI/CD</span>
                  </div>
                  <div class="job-footer">
                      <span class="salary">20 000 - 28 000 DH</span>
                      <button class="btn-apply">Postuler</button>
                  </div>
              </div>

              <div class="job-card">
                  <div class="job-header">
                      <div>
                          <h3 class="job-title">Responsable RH</h3>
                          <p class="company-name">HR Solutions</p>
                      </div>
                      <div class="company-logo">HR</div>
                  </div>
                  <div class="job-meta">
                      <span class="meta-item">📍 Rabat</span>
                      <span class="meta-item">⏰ CDI</span>
                      <span class="meta-item">🕐 Publié il y a 1 sem</span>
                  </div>
                  <div class="tags">
                      <span class="tag">Recrutement</span>
                      <span class="tag">Gestion RH</span>
                      <span class="tag">Formation</span>
                  </div>
                  <div class="job-footer">
                      <span class="salary">14 000 - 19 000 DH</span>
                      <button class="btn-apply">Postuler</button>
                  </div>
              </div>
          </div>
      </section>
  </body>

</html>