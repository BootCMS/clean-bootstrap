### Behind the scenes active scaffolding

**BootCMS scaffolding provides 4 + 1 positions to place modules (Joomla) or widgets (Wordpress).**

![Scaffolding Layout][scaffolding]

##### **'navbar'** to facilitate the main Navigation Bar
It is located below the page header, above the main content or the user1 position and is 
wide as the page container. It should be used only for a navigation bar.

##### **'user1'** in the Home page to facilitate the Hero Unit (Jumbotron)
It is located below the navbar position, above the main content and is wide as the page 
container. Works only on the Home page.

##### **'right'** in pages to accept any kind of module or widget
It is located on the right of the content, it does not expand on the side of the header 
or footer. Works on any page except the Home page.

##### **'footer'** to facilitate any module or widget at the end of the page
It is located below the content, it is wide as the page container and works on all of the pages.

**'top'** position currently is not available for placing modules, instead the configuration 
page is used to add or delete site title, subtitle and images such as logos or banners 
in the page header.

All of the positions have fallback capacity; if there is no module to use, it will not 
create HTML with empty space. The page will be shown exactly how it should, as without the module.

[scaffolding]: img/scaffolding.png "Scaffolding Layout"
