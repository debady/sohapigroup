# SITE DE SOHAPIGROUP COMMUNICATION

### ✅ ÉTAPES POUR CONNECTER TON NOM DE DOMAINE À RENDER

#### 1. **Achète ton domaine**
Tu peux l’acheter chez un registrar comme :
- [Namecheap](https://namecheap.com)
- [Google Domains](https://domains.google)
- [OVH](https://www.ovh.com)
- [GoDaddy](https://godaddy.com)
- etc.

> 💡 Une fois acheté, tu auras accès au **panneau DNS**.

---

#### 2. **Ajoute ton domaine dans Render**

1. Va dans ton **service Render**
2. Clique sur **"Settings"**
3. Va dans **"Custom Domains"**
4. Clique sur **"Add Custom Domain"**
5. Entre le domaine que tu as acheté : `www.sohapigroup.com` ou `sohapigroup.com`
6. Render va te fournir des **enregistrements DNS à ajouter** (souvent un `CNAME` ou `A` record)

---

#### 3. **Configure les DNS chez ton registrar**

Rends-toi dans le **panneau DNS** du site où tu as acheté ton domaine, puis :

- Ajoute les enregistrements **indiqués par Render**
- Généralement :
  - Un `CNAME` pour `www` pointant vers `yourservice.onrender.com`
  - Et parfois un `A` record ou un `ALIAS` pour le domaine racine

⚠️ Les changements DNS peuvent mettre **quelques minutes à 24h** à se propager.

---

#### 4. **Active HTTPS sur Render**

Une fois que les DNS sont bien propagés, Render activera **automatiquement le HTTPS (SSL)** pour ton domaine.

---

### ✅ Résultat :
Tu pourras accéder à ton site via :  
🔗 `https://sohapigroup.com`  
et/ou  
🔗 `https://www.sohapigroup.com` (selon ton choix)

---

Tu veux que je t’aide à configurer les DNS une fois que tu as acheté le domaine ?