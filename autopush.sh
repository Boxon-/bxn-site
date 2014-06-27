#!/bin/bash

echo "Fichier ?"
read ADD

git add $ADD

echo "Nom du commit"
read COMMIT

git commit -m "$COMMIT"

git push

exit 0






