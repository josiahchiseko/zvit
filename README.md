# Zvitambo Theme for GLPI

A small GLPI plugin that applies a purple/lime Zvitambo-style interface inspired by the provided mockup.

## Upload to GitHub

Recommended options:

1. Create a GitHub release and upload `zvitambotheme-glpi-plugin.zip` as a release asset.
2. Or create a GitHub repo and upload this plugin folder as source files.

## Download on Ubuntu GLPI server

Replace the URL below with your GitHub release asset URL:

```bash
cd /tmp
wget -O zvitambotheme-glpi-plugin.zip "https://github.com/YOUR_USER/YOUR_REPO/releases/download/v1.0.0/zvitambotheme-glpi-plugin.zip"
unzip -q zvitambotheme-glpi-plugin.zip
sudo cp -R zvitambotheme /var/www/glpi/plugins/
sudo chown -R www-data:www-data /var/www/glpi/plugins/zvitambotheme
sudo -u www-data php /var/www/glpi/bin/console glpi:plugin:install zvitambotheme
sudo -u www-data php /var/www/glpi/bin/console glpi:plugin:activate zvitambotheme
sudo -u www-data php /var/www/glpi/bin/console cache:clear
```

Then refresh GLPI in your browser. If old colors remain, clear browser cache or open a private browser window.

## What this changes

- Purple/lime Zvitambo color palette
- Soft left sidebar styling
- White card panels with purple/lime accents
- Primary buttons, links, badges, dashboard cards, tables, header, and footer styling

## What this does not change

This is a style/theme plugin. It does not rebuild GLPI's dashboard layout exactly like the mockup. For the exact custom cards and chart layout, configure GLPI dashboards or build a second custom dashboard plugin/page.
