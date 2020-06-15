# Custom Templates Plugin

The **Custom Templates** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). The only thing this plugin does is that it adds the `/your/site/grav/user/data/custom-templates` directory to Twig lookup paths.

Any Twig template file stored in the `custom-templates` directory can then be used by Twig.

This may be useful for modifications to theme templates without having to create a child theme. Another use case is when a plugin allows for custom templates. These are often stored in the plugin folder where they may cause problems when the plugin is updated.

By storing templates in the `user/data` directory the templates are safe from theme and plugin updates.

## Installation

Installing the Custom Templates plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install custom-templates

This will install the Custom Templates plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/custom-templates`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `custom-templates`. You can find these files on [GitHub](https://github.com/bleutzinn/grav-plugin-custom-templates) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/custom-templates
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/bleutzinn/grav-plugin-custom-templates/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/custom-templates/custom-templates.yaml` to `user/config/plugins/custom-templates.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named custom-templates.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.
