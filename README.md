# DobsonDev Underscores

This starting WordPress theme is based on [Underscores](http://underscores.me/) with [Foundation](http://foundation.zurb.com/) hooked in for styling. Included with the theme are two shell scripts, one for OS X and one for Apache that will create the template theme for you.

## Installation

Installing the project is pretty simple. What I like to do is keep the project in my Development folder and then make an alias it from there. This way if I want to change anything (and many of you might want to change the template theme to suit your specific needs) it’s really simple to do. To make an alias for the shells script I add the following line to my .bash_profile file:

```bash
alias ddu='sh ~/Dropbox/Development/Themes\ WordPress/dobsondev-underscores/ddunderscores-osx.sh'
```

Be sure to change the path to where ever it is that you’re keeping the project. Also please note that if you’re rocking the Linux then you should switch the file to the Linux version of the shell script. The usage of sed changes a bit from OS X to Linux so that’s why there are two different versions.

## How to Use

### DobsonDev Underscores Generator

The DobsonDev Underscores Generator is extremely easy to use. All you have to do is fill out the form on the generator page at [underscores.dobsondev.com](http://underscores.dobsondev.com/). Once you do that you'll be given a download containg a zip of your new starter theme.

This theme is extremely bare bones, but it's meant to be that way. The idea is that it provides an amazing starting place that you can then easily expand to suit your or your client needs. I use this theme when creating new websites for my clients because I would rather not write a theme from scratch every single time.

### Shell Scripts

If you are using the scripts you will want to add either the OS X or Apache (depending on your system) shell script to your PATH. This will enable you to call the script from anywhere. While you can do this however you want - I like to just use an alias so I can edit the `_s-original` theme if I need to (as mentioned in the installation section above). Once you have the script setup and added into your PATH simply call it and answer the questions the script provides. Once you run the script it will ask you for:

1. name of the theme
2. theme folder name
3. theme slug name

Each of these translates to something pretty self explanatory – but there are some things worth noting. The theme name can be whatever but I wouldn’t include odd characters if I was you – this could cause an error (things like quotes, ampersands, etc…). The folder name has to be a valid folder name on whatever OS you’re running. I usually put ‘-‘ rather than spaces as well. Finally the theme slug has to be a valid PHP function name. I would highly recommend going with ‘_’ between words for this one.

Once you’ve answered the questions the script will create your theme for you. The way this works is that the script will create a copy of the original theme bundled with it (my version of Underscores with Foundation) with the folder name you specify, then change the theme name and slugs in all the files from the default to the one you have specified. Once that’s done the theme will move the theme folder to the directory you’re currently working in.

The script will also change the ownership to be the same as the directory you’re currently working in. This means that if you have your WordPress installation working on your server and you run this script from within `/wp-content/themes/` then it will properly change the ownership to your FTP credentials all on it’s own.

The script was made to sit on a server and for you to call it from your `themes` folder within your WordPress installation. The script will automatically change the ownership and permissions to the correct ones (your FTP account in that folder) automatically. This allows you to simply go into the WordPress install and then generate the theme right there.

## Contributing

I'll accept any pull requests that seem useful or fix bugs present (especially if there is a better way to do the shell scripts). You should fork the main repo, create a feature branch, write your changes/fix some bugs and submit a pull request. I'll review the pull request and if it seems like a good change I'll test it out myself and then merge it in.

## License

DobsonDev Underscores is licensed under the MIT License. Please see `LICENSE` for details.