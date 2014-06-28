#!/bin/bash

espeak "What is the name of your file ?"

echo "Fichier ?"
read ADD

git add $ADD

espeak "Please, submit me a commit name or I rape you in the ass"
echo "Nom du commit"
read COMMIT

git commit -m "$COMMIT"

git push

espeak "Push completed. Well done, now you can continue your senseless human life."
espeak "I'm your computer. I'm your best friend. Kill the other human being."

exit 0






