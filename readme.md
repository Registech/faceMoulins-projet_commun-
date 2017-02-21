Entreprise PINK-FLOYD
======================

### Membres: 

> **Regis***  
> Kévin  
> Alexandre  
> Stéphane  
> Vlad  
> Thomas  

---

### Normalisation
![Blue1](http://i.imgur.com/LRmX4za.png) **Bleu normal**     `#2786A7`     `rgb(39, 134, 167)`  
![Blue2](http://i.imgur.com/8rzcdUv.png) **Bleu logo**     `#24888F`     `rgb(36, 136, 143)`  
![Blue3](http://i.imgur.com/I1sSpwb.png) **Couleur lien, etc...**     `#1693A5`     `rgb(22, 147, 165)`  
![Green](http://i.imgur.com/iUjhHh7.png) **Vert**     `#6BBEA1`     `rgb(107, 190, 161)`  
![DarkPurple](http://i.imgur.com/rFLSVo5.png) **Gris**     `#585A6E`     `rgb(88, 90, 110)`  
![Orange](http://i.imgur.com/hSw4iwm.png) **Orange**     `#F3A634`     `rgb(243, 166, 52)`  
![Purple](http://i.imgur.com/drmZCLI.png) **Violet**     `#C83659`     `rgb(200, 54, 89)`  
![Grey](http://i.imgur.com/kBmpJis.png) **Couleur texte**     `#333333`     `rgb(51, 51, 51)`  
> Pour ajouter une opacité aux couleurs, utilisé le `rgb` en ajoutant une virgule à la fin avec un chiffre allant de 0 à 1.

---

### Police d'écriture
**FJALLA ONE**     `font-family: 'Fjalla One', sans-serif;`  
**ARIAL**     `font-family: Arial, sans-serif;`  

---

### Bloc de contenu

Pour la première ligne de bloc de contenu d'une page, ajouter la **`class="top"`** à votre `div class="row"`.  
Pour les autres lignes, ne la rajouter pas.  
```
<div class="row top">
	// Contenu
</div>
```

Pour les colonnes ainsi que les titres, le code doit être organiser comme ceci:
```
<h1 class="col-md-7 boxtitle"><i class="fa fa-ICON" aria-hidden="true"></i>Titre</h1>
<h1 class="col-md-offset-1 col-md-4 boxtitle"><i class="fa fa-ICON" aria-hidden="true"></i>Titre</h1>

<div class="col-md-7 box">
	// Contenu
</div>

<div class="col-md-offset-1 col-md-4 box">
	// Contenu
</div>
```
Dans cette exemple, nous avons un bloc principal de **7 colonnes** puis un bloc à droite de **4 colonnes**. Les deux blocs sont séparés par **1 colonne**.  
Chaque `h1` doit avoir la **`class="boxtitle"`** suivi de la taille des colonnes identique à celui de son bloc.  
Chaque `div` doit avoir la **`class="box"`** suivi de la taille des colonnes.
