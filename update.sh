#!/bin/sh

git restore *
git pull
sed -i '1 i\
#!/packages/run/php/bin/php' index.php content/*.php
chmod u+x index.php content/*.php