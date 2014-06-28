#!/bin/bash

echo "Fichier ?"
read ADD

git add $ADD

echo "Nom du commit"
read COMMIT

git commit -m "$COMMIT"

git push

espeak "Push completed. Well done, now you can kiss Mister Klein in the ass."

exit 0






