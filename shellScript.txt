# Shell script voor Craft na installatie op de server

# Stap 1: www map leegmaken
rm -rf www/

# Stap 2: craft folder hernoemen
mv craft craft-folder

# Stap 3: naar de craft-folder map gaan
cd craft-folder

# Stap 4: 'web' folder hernoemen naar 'www'
mv web www

# Stap 5: alles verplaatsen:
mv * .[^.]* ..

# Stap 6: de lege craft-folder map verwijderen:
rm -rf craft-folder/