cd ..
mv craft craft-folder
cd craft-folder
mv * .[^.]* ..
cd ..
rm -rf craft-folder/
rm -rf www/
mv web www