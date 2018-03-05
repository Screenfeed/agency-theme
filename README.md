# Agency Theme

> WordPress Theme

## Installation
- `git clone`
- `git clone git@github.com:louisgab/agency-theme.git`
- `cd agency-theme`
- `composer install`
- `cp .env.example .env` and configure it according to you local installation.
- Go to your localhost, follow the 5min install.
- In `Plugins > Installed plugins`, activate all four plugins.
- In `Apparence > Themes`, activate the `Agency` theme.
- Click `Apparence > Customize` and open `Menu > Navigation` tab which should be prehydrated with pages. You can rename each menu name. Check `Header` and `Footer`. Click `Publish`.
- Then open `Widgets` tab from customize, navigate to blog page where you should be able to add the `Categories` and `Text` widget to the sidebar.
- Go to `Contact > Add new` and create a form with the template `resources/contact-form.tpl`. Copy the shortcode then go to `Pages` and paste it on the contact page.
