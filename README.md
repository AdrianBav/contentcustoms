# Content Customs

Content Customs is a company that specialises in content writing services, website design, development and SEO & marketing. The company website was not responsive and was therefor not very readable on hand held devices.

## Project

The goal of this project was to retrofit the website and make it responsive so that it could be accessed on a range of mobile devices.

## Structure

The Bootstrap CSS has been added to the theme to make use of its responsive grid system and helpers. The layout and partials have been modified to hook into the Bootstrap CSS.

```
contentcustoms/
+-- assets/
¦	+-- css/
¦		+-- bootstrap/
¦		+-- colorbox/
¦		+-- flexslider/
¦		+-- cc-theme.css
¦		+-- styles.css
¦	+-- images/
¦	+-- js/
+-- views/
¦	+-- layouts/
¦   	+-- default.php
¦	+-- partials/
¦   	+-- footer.php
¦   	+-- head.php
¦   	+-- header.php
¦   	+-- scripts.php
¦   	+-- scroller.php
```

The point of interest here is the **styles.css** file which builds on the bootstrap CSS to customize it's components to achieve the Content Customs look. The **cc-theme.css** file works similar to the Bootstrap theme in that it provides color gradients and styles unique to Content Customs.
