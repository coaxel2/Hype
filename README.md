# Site Vitrine de Reportages

Site vitrine en PHP pour présenter vos reportages de manière élégante et professionnelle.

## 🚀 Fonctionnalités

- **Page d'accueil** avec grille de reportages
- **Pages de détail** pour chaque reportage avec galerie photos
- **Design responsive** adapté mobile et tablette
- **Interface moderne** avec dégradés et animations
- **Architecture PHP simple** et maintenable

## 📁 Structure du projet

```
hype/
├── index.php              # Page d'accueil avec liste des reportages
├── reportage.php          # Page de détail d'un reportage
├── config.php             # Configuration du site
├── functions.php          # Fonctions PHP (données des reportages)
├── assets/
│   ├── css/
│   │   └── style.css     # Styles CSS
│   └── images/
│       └── reportages/   # Images des reportages
└── README.md             # Ce fichier
```

## 🎨 Reportages inclus

Le site contient 6 reportages d'exemple :
1. **Les marchés colorés de Marrakech** 🇲🇦
2. **La vie nocturne à Tokyo** 🇯🇵
3. **Les fjords de Norvège** 🇳🇴
4. **Street art à Berlin** 🇩🇪
5. **La faune de Madagascar** 🇲🇬
6. **Les temples d'Angkor** 🇰🇭

## 🛠️ Installation

1. Assurez-vous que MAMP est installé et en cours d'exécution
2. Le site est déjà dans `/Applications/MAMP/htdocs/hype`
3. Accédez au site via : `http://localhost:8888/hype`

## 💡 Personnalisation

### Ajouter un nouveau reportage

Éditez le fichier `functions.php` et ajoutez un nouvel élément dans le tableau de la fonction `getReportages()` :

```php
[
    'id' => 7,
    'titre' => 'Votre titre',
    'lieu' => 'Votre lieu',
    'date' => '2025-11-26',
    'image' => 'assets/images/reportages/votre-image.jpg',
    'extrait' => 'Court extrait...',
    'description' => 'Description complète...',
    'galerie' => [
        'assets/images/reportages/photo1.jpg',
        'assets/images/reportages/photo2.jpg',
    ]
]
```

### Remplacer les images placeholder

Remplacez les fichiers SVG dans `assets/images/reportages/` par vos propres photos JPG/PNG.

### Modifier le style

Éditez `assets/css/style.css` pour personnaliser les couleurs, polices et mise en page.

## 📝 Notes

- Les données des reportages sont actuellement stockées dans un tableau PHP (`functions.php`)
- Pour une version production, connectez le site à une base de données MySQL
- Les images sont actuellement des SVG placeholder colorés

## 🔧 Technologies utilisées

- **PHP** 7.4+
- **HTML5** & **CSS3**
- **Design responsive** (Grid & Flexbox)
- Compatible avec **MAMP**

---

Créé avec ❤️ pour présenter vos meilleurs reportages
