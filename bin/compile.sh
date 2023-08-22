#!/usr/bin/env bash

set -e

DIRECTORY=$(cd $1 && pwd)
DIST=$DIRECTORY
RESOURCES=$DIRECTORY/../../../../resources/svg

echo "Compiling icons..."

for file in $DIST/*/* ;
do
    file="${file%/}";
    prefixBulk="/Users/dvs/Code/personal/blade-mage-icons/vendor/mage-icons/mage-icons/svg/bulk/"
    prefixStroke="/Users/dvs/Code/personal/blade-mage-icons/vendor/mage-icons/mage-icons/svg/stroke/"

    [[ "$file" =~ ^($prefixBulk)(.+)(.svg)$ ]] && sed -e 's/ width="24" height="24"//g;s/black/currentColor/g' "$file" > "$RESOURCES/b-$(echo ${BASH_REMATCH[2]// /-}.svg | awk '{print tolower($0)}')"

    [[ "$file" =~ ^($prefixStroke)(.+)(.svg)$ ]] && sed -e 's/ width="24" height="24"//g;s/black/currentColor/g' "$file" > "$RESOURCES/s-$(echo ${BASH_REMATCH[2]// /-}.svg | awk '{print tolower($0)}')"
done

echo "All done!"
