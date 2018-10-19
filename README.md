# Login O Auth2 Discord Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **Login O Auth2 Discord** Plugin is for [Grav CMS](http://github.com/getgrav/grav). OAuth2 Provider for Discord

## Installation

Installing the Login O Auth2 Discord plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install login-o-auth2-discord

This will install the Login O Auth2 Discord plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/login-o-auth2-discord`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `login-o-auth2-discord`. You can find these files on [GitHub](https://github.com/trilbymedia/grav-plugin-login-o-auth2-discord) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/login-o-auth2-discord

> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/login-o-auth2-discord/login-o-auth2-discord.yaml` to `user/config/plugins/login-o-auth2-discord.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the admin plugin, a file with your configuration, and named login-o-auth2-discord.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

