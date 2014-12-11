# Saga Child Theme - Development Version

This is an example child theme for developers and designers to use alongside the Saga parent theme.  It was created to facilitate child theme development by making it as easy and painless as possible.  In fact, some great designers can make a child theme in a couple of hours, possibly even less than one hour.  It really just depends on skill level, imagination, and following the system.

The readme is available to give you a solid overview of how to create child themes to submit to both ThemeHybrid.com and WordPress.org.  While I can give you some information, I cannot teach you how to design and/or develop WordPress themes.  This sample child theme should be documented sufficiently enough for anyone with an intermediate level of knowledge to complete a custom child theme.  Some beginners with a thirst for becoming a theme author can probably do some cool stuff too.

All themes submitted to Theme Hybrid will be reviewed both for code and design quality.  While I'd love to showcase all child themes, it's not always possible.  However, I will help you along in the process as much as I can via email or my forums.  Even if I don't think the theme is a good fit for Theme Hybrid, you can still submit your theme to the WordPress theme repository and/or release it on your own site.

## Understanding Saga

The Saga parent theme was created as a theme specifically for writers.  As a currently-published tech author and someone who hopes to become a novelist, I wanted to design a theme that'd make me feel comfortable sharing my stories.

Child themes should ultimately be designed with that goal in mind.  Content is definitely king, but it doesn't mean that it can't be put together into a nice package.

## Download Saga

If you haven't already done so, you can clone a copy of the Saga parent theme via its [GitHub repository](https://github.com/justintadlock/saga).  Be sure to do a **RECURSIVE** clone.  Otherwise, you will not get all the theme files and will run into a nasty fatal error if trying to use the theme.

## Recommended plugins

The [Subtitles plugin](http://wordpress.org/plugins/subtitles) is an integral part of this theme's design. I highly recommend using it during the design process.

## Designing a child theme

If you're not already familiar with my child theme development philosophy, you should read "[Designing the box](http://themehybrid.com/weblog/designing-the-box)," which is an article that explains it in more detail and will greatly benefit you when trying to create a child theme for Saga.

Saga allows you to design a unique child with just a little bit of code in your child theme's `functions.php` file.  It works by allowing you to alter specific customizable items to set your child theme apart.  These items are:

* Custom Header (WP feature)
* Custom Background (WP feature)
* Header Icon
* Menu Color
* Primary Color

By altering all or just a few of these items, you can create a vast array of unique designs from the same parent theme.  If you open the `functions.php` file, each item is documented.  Use what you need.  Discard the rest.

You may also utilize the `style.css` file if you need to alter specific things within the theme.  Be sure to read the notes within that file for more specifics.

Mostly, have fun and create something cool!

## Packaging your theme

All child themes submitted to ThemeHybrid.com will also be submitted to WordPress.org.  Therefore, your child theme must be able to pass the [theme review guidelines](http://codex.wordpress.org/Theme_Review).  This is non-optional.  Please send the theme to me for review prior to submitting to WordPress.org.

### Licensing

The last time I ran this type of thing with the Stargazer parent theme, a little over 50% of all themes submissions failed to meet the proper license and copyright guidelines.  Ultimately, it took up a lot of time that could've been better spent on other things.  So, please make sure you follow the [licensing guidelines](http://make.wordpress.org/themes/guidelines/guidelines-license-theme-name-credit-links-up-sell-themes).

### Translations

Internationalization is a major part of Theme Hybrid's theme development process.  All child themes should have a `/languages/theme-slug.pot` file.  Even if your theme doesn't add new strings, the `style.css` headers should be translatable.

If you're unfamiliar with this process, here are two tutorials for creating a POT file:

* https://foxnet-themes.fi/2013/07/07/creating-pot-file-for-your-theme-or-plugin
* http://ottopress.com/2013/language-packs-101-prepwork

### Remove unused stuff

Be sure to remove any unused items from the sample child theme folder.  There are quite a few developer comments that shouldn't be packaged in the final product.  Basically, if it's not used, don't leave it in your final theme.

You should even overwrite all the text in this file and replace it with text relevant to your theme.

### Theme name, slug, URL

Your theme name must be available at WordPress.org.  Otherwise, you can't use it.  You can use [this list](http://themes.svn.wordpress.org) to see the available names.

Your theme slug should match your theme name.  So, if your theme name is "Super Mario", any and all functions should be prefixed with `super_mario_`.  Your theme folder name should be `super-mario`.

Also, because you're submitting this theme to Theme Hybrid, your `Theme URI` in `style.css` should be `http://themehybrid.com/themes/super-mario`.  This will be your theme's permanent home.  You can use the `Author URI` to link to your own site.

### Submissions

I prefer themes to be submitted via GitHub.  That way, I can clone your repository and keep up with any changes.  However, you don't necessarily have to use GitHub.  Any other Git services, SVN, or even a plain ol' ZIP file is fine.

When you're ready to submit your theme, just send me an email to `justin@justintadlock.com` with a link to download the theme or attachment.  After that, I'll review your theme and get back to your via email.