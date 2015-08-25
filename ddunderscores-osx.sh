#!/bin/sh
# --------------------------------------------------------
# Purpose: Create a DobsonDev Underscores WordPress Theme
# Author: Alex Dobson (https://github.com/SufferMyJoy)
# --------------------------------------------------------

## Current Directory
BASEDIR=`dirname $0`
## Get the Owner and the group of the current directory
OWNER="$(ls -ld . | awk 'NR==1 {print $3}')"
GROUP="$(ls -ld . | awk 'NR==1 {print $4}')"
## Get the theme name
echo "Type the name of the theme, followed by [ENTER]:"
read THEMENAME
## Get the for the theme folder which some users may want to be different from the theme slug
echo "Type the name of the folder for the theme, followed by [ENTER]:"
read THEMEFOLDER
## Get the slug for the theme which may be different than the theme folder
echo "Type the slug for the theme, followed by [ENTER]:"
read THEMESLUG
## Make a copy of the original modified underscores
cp -R $BASEDIR/_s-original $BASEDIR/$THEMEFOLDER
## Do necessary replacements for the theme name, slug and folder
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/inc/custom-header.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/inc/customizer.php 2>/dev/null
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/inc/customizer.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/inc/extras.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/inc/jetpack.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/inc/template-tags.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/inc/wpcom.php 2>/dev/null
## layouts folder files
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/layouts/content-sidebar.css 2>/dev/null
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/layouts/sidebar-content.css 2>/dev/null
## templates-parts folder files
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/templates-parts/content-none.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/templates-parts/content-page.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/templates-parts/content-search.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/templates-parts/content-single.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/templates-parts/content.php 2>/dev/null
## templates folder file
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/templates/template-home-page.php 2>/dev/null
## base directory files
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/404.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/archive.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/comments.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/footer.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/functions.php 2>/dev/null
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/functions.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/header.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/index.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/page.php 2>/dev/null
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/rtl.css 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/search.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/sidebar.php 2>/dev/null
sed -i '' s/_sSs/"$THEMESLUG"/g $BASEDIR/$THEMEFOLDER/single.php 2>/dev/null
sed -i '' s/_sSs/"$THEMSLUG"/g $BASEDIR/$THEMEFOLDER/style.css 2>/dev/null
sed -i '' s/_SsS/"${THEMENAME}"/g $BASEDIR/$THEMEFOLDER/style.css 2>/dev/null
## Move the language file to rename it
mv $BASEDIR/$THEMEFOLDER/languages/_s.pot $BASEDIR/$THEMEFOLDER/languages/$THEMESLUG.pot
## Remove the extra files that get created somehow
rm -f $BASEDIR/$THEMEFOLDER/.!*
## Change owner and group to the same as the current directory
chown -R $OWNER:$GROUP $BASEDIR/$THEMEFOLDER
## Move the theme to the users current directory
mv $BASEDIR/$THEMEFOLDER ./