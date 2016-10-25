# croogo-theme-bootswatch

Bootswatch theme is an adaptation of [Bootswatch](http://bootswatch.com/)
for Croogo

## Installation using git

```
cd $APP
git clone git://github.com/miketallroth/croogo-theme-bootswatch View/Themed/Bootswatch
```

## Manual installation

Download and extract file inside app/View/Themed/

## Support for Bootswatch themes

Go to http://example.com/admin/settings page and create new settings:
* Bootswatch.theme - the Bootswatch theme name
* Bootswatch.logo - your logo, uploaded as an attachment, specify name only (no path)
* Bootswatch.logoHeight - your logo height
* Bootswatch.logoWidth - your logo width
* Bootswatch.logoClass - the grid column classes for the logo
* Bootswatch.titleClass - the grid column classes for the title

Bootswatch.theme must be one of the following:
* cerulean.min
* cosmo.min
* cyborg.min
* darkly.min
* flatly.min
* journal.min
* lumen.min
* paper.min
* readable.min
* sandstone.min
* simplex.min
* slate.min
* spacelab.min
* superhero.min
* united.min
* yeti.min

Bootswatch.logoClass and titleClass must be of the form:
* col-lg-4 col-md-4 col-sm-6 col-xs-12
