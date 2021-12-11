#!/bin/sh

git restore *
git pull

for FILE in index.php rules.php game.php faq.php; do
	sed -i '1 i\
#!/packages/run/php/bin/php' $FILE
	chmod u+x $FILE
done
