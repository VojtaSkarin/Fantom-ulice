#!/bin/sh

git restore *
git pull

for FILE in content/*.php index.php; do
	if [ "$FILE" != "content/pre.php" ] && [ "$FILE" != "content/post.php" ] && [ "$FILE" != "content/intro-header.php" ]; then
		sed -i '1 i\
#!/packages/run/php/bin/php' $FILE
		chmod u+x $FILE
	fi
done
