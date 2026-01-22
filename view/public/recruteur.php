  <!DOCTYPE html>
  <html lang="fr">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CareerLink - Plateforme de Recrutement</title>
      <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
  </head>

  <body>
    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">
                <li><a href="Home">Accueil</a></li>
                <li><a href="offers">Offres</a></li>
                <li><a href="categories">Catégories</a></li>
           
            </ul>
            <a href="logaut" class="btn-primary">deconnexion</a>
        </div>
    </nav>
    
      <section class="offers-header">
          <a href="createNewOffer" class="btn-add-offer">
              + Add New Offer
          </a>
      </section>

      <section>
          <h2 class="section-title">Mes offres d'emploi</h2>
          <div class="jobs-grid">
              <div class="job-card">

                  <div class="card-menu">
                      <button type="button" class="menu-btn">⋮</button>

                      <div class="menu-dropdown">
                          <form action="goToUpdateOffer" method="POST">
                              <input type="hidden" name="offer_id" value="18">
                              <input type="hidden" name="user_id" value="1">
                              <button type="submit" class="menu-item update">Update</button>
                          </form>

                          <form action="deleteOffer" method="POST">
                              <input type="hidden" name="offer_id" value="19">
                              <input type="hidden" name="user_id" value="1">
                              <button type="submit" class="menu-item delete"
                                  onclick="return confirm('Are you sure you want to delete this offer?')">
                                  Delete
                              </button>
                          </form>
                      </div>
                  </div>

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
                      <span class="salary">300 - 500 DH</span>
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
      <script src="view/public_assets/JS/recruteur.js"></script>
  </body>

  </html>