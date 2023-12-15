# moodle-theme_child

The Child theme is based on the [dev tutorial on Moodle.org](https://docs.moodle.org/dev/Creating_a_theme_based_on_boost). It is a very minimal implementation of a theme for Moodle LMS which is meant to be used as a starting point for creating your own.

IMPORTANT: This repository is not supported. It is only provided for your convenience as a starting point for your own project. If you would like to get premium support, please [contact me through my website](https://tngconsulting.ca/contact).

Please **Fork** and **Star** this repository if you find it useful.

## Renaming the theme

Although it is not necessary, you can easily rename the theme by completing the following steps. In this example, we will be renaming the theme to `yourthemesname`, also known as `Your Theme's Name`:

1. Clone or download this repository.
2. Choose a short name for the theme. To keep things simple, it must be all lowercase letters, with no spaces or separators  between words, and no special characters. Also, make sure that there does not already exist a theme by the same name in the [Moodle plugins repository](https://moodle.org/plugins). Good example: `yourthemesname`. Bad examples: 'moodle-theme_newname' (contains non-alphanumeric characters) or 'moove' (theme by this name already exists). The danger in choosing a name that already exists is that Moodle may detect that there is an upgrade available if another developer updates an existing theme on moodle.org.
3. Rename the directly in which the theme is located to the name you chose in the previous step. Example: `yourthemesname`
4. Perform a **case-sensitive** search across all of the theme's files. Replace every instance of the word **child** with a single word that must match the name of the theme's directory. Example: `yourthemesname`.
5. Perform a **case-sensitive** search across all of the theme's files. Replace every instance of the word **Child** with one or more words. They can be mixed case and words may be separated by a space. Example: `Your Theme's Name`.
6. Rename the `theme_child.php` file, located in **lang/en**, to have the same component name as the theme. Example: `theme_yourthemesname.php`.
7. Install the theme in your Moodle LMS by copying the whole `yourthemesname` theme directory and everything it contains into Moodle LMS' **theme** directory. If you prefer to upload it into Moodle, you will need to ZIP the `yourthemesname` directory and then install it into Moodle LMS. Note that, when you open the ZIP file, you should initially only see a directory called `yourthemesname`. If you see all of the files that are a part of the theme, you zipped the theme's files instead of the `yourthemesname` folder/directory. If this sounds confusing, just download this moodle-theme_child repository and take a look at the contents of the ZIP file. Your ZIP file should be organized and structured similarly.

Tip: If you are creating a repository on GitHub, it is a best practice to name your repository `moodle-theme_yourthemesname`.

## Minimal required structure of a Moodle theme

To create a theme for Moodle LMS requires the following 8 files, two of which are for the license and the documentation. This includes:

[classes/privacy/provider.php](https://moodledev.io/docs/apis/subsystems/privacy): Provides support that tells Moodle about what personal information may be stored in your plugin. For this theme, no personal information is being stored.

[lang/en/theme_child.php](https://moodledev.io/docs/apis/commonfiles#langenplugintype_pluginnamephp): The file containing all language strings. If you want to translate it into additional languages, you can either create a lang/xx/theme_child.php. However, if you are planning on making the theme available in the Moodle plugin repository, consider submitting your translations in AMOS instead.

[config.php](https://moodledev.io/docs/apis/commonfiles#versionphp): The configuration file for the plugin. This is internal for the theme. For theme settings, see settings.php.

[lib.php](https://moodledev.io/docs/apis/commonfiles#libphp): This includes functions that tell Moodle to default to Boost's preset SCSS settings if none are included in this theme. Note that these functions are loaded all the time. For functions just for your plugin, consider using a filename like locallib.php.

LICENSE.md: This is a copy of the GNU GPL 3.0 license. This file must be included for all Moodle plugins, even if you are just developing it for personal use. You cannot change or remove this license without violating its terms and conditions.

README.md: A file that includes a description of the plugin, it's features and more. It is often the main source of documentation for a plugin's usage though more elaborate plugins might have a separate website or page.

[settings.php](https://moodledev.io/docs/apis/subsystems/admin): These are the theme's settings that will appear under Site Administration > Appearance > Themes (section) > Child.

[version.php](https://moodledev.io/docs/apis/commonfiles/version.php): This file contains the version of the theme. Updating the $plugin->version = yyyymmddxx number will cause Moodle to perform an update and display a page allowing you to customize any added settings, or modified or added strings in the new version of the theme.

### Optional

* db/*.php: Useful if your theme needs better control during installation, uninstallation, upgrades and permissions.
* pix/favicon.ico: This is the icon that is displayed in web browser's tab. Icon size should be 16x16. If youdo not include an icon, the Moodle logo will be used instead. For more information, see https://docs.moodle.org/en/Favicon
* pix/screenshot.jpg: Image for the theme selector in **Site Administration > Appearance > Theme selector**. The image size should be 500x343. If you don't include your own screenshot.jpg, it will default to the screenshot of the Boost theme.
* scss/*.scss: This is where you would put any additional presets. The default.scss and plain.scss come from Boost.
* classes/*: Autoloaded classes. Tip: This is where you place files and folders to override Moodle LMS core renderers.
* amd/*: For your **JavaScripts** needs.

For more information, see https://moodledev.io/docs/apis/commonfiles

## Learn more

Moodle HQ has a good tutorial to help you get started in [Moodle development](https://moodle.academy/course/index.php?categoryid=4).

## Credit

Thank you to Damyon Weise for creating the moodle-theme_photo repository, upon which this theme is based, and for all of those who contributed to and continue to maintain Damyon Weise's tutorial on Moodle.org.
